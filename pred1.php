<?php
function poisson_pmf($k, $lambda) {
    return (pow($lambda, $k) * exp(-$lambda)) / gmp_strval(gmp_fact($k));
}

function predict_match($home_avg_goals, $away_avg_goals, $max_goals = 10) {
    $prob_matrix = array_fill(0, $max_goals + 1, array_fill(0, $max_goals + 1, 0));

    for ($home_goals = 0; $home_goals <= $max_goals; $home_goals++) {
        for ($away_goals = 0; $away_goals <= $max_goals; $away_goals++) {
            $prob_matrix[$home_goals][$away_goals] =
                poisson_pmf($home_goals, $home_avg_goals) * poisson_pmf($away_goals, $away_avg_goals);
        }
    }

    $home_win_prob = 0;
    $draw_prob = 0;
    $away_win_prob = 0;
    $btts_yes_prob = 0;
    $over_2_5_prob = 0;
    $over_1_5_prob = 0;
    $under_3_5_prob = 0;
    
    for ($i = 0; $i <= $max_goals; $i++) {
        for ($j = 0; $j <= $max_goals; $j++) {
            if ($i > $j) $home_win_prob += $prob_matrix[$i][$j];
            elseif ($i == $j) $draw_prob += $prob_matrix[$i][$j];
            else $away_win_prob += $prob_matrix[$i][$j];

            if ($i >= 1 && $j >= 1) $btts_yes_prob += $prob_matrix[$i][$j];
            if (($i + $j) > 2.5) $over_2_5_prob += $prob_matrix[$i][$j];
            if (($i + $j) > 1.5) $over_1_5_prob += $prob_matrix[$i][$j];
            if (($i + $j) < 3.5) $under_3_5_prob += $prob_matrix[$i][$j];
        }
    }

    $result = [
        "Home Win Probability" => $home_win_prob,
        "Draw Probability" => $draw_prob,
        "Away Win Probability" => $away_win_prob,
        "Double Chance 1X" => $home_win_prob + $draw_prob,
        "Double Chance X2" => $draw_prob + $away_win_prob,
        "Double Chance 12" => $home_win_prob + $away_win_prob,
        "BTTS Yes" => $btts_yes_prob,
        "BTTS No" => 1 - $btts_yes_prob,
        "Over 1.5 Goals" => $over_1_5_prob,
        "Over 2.5 Goals" => $over_2_5_prob,
        "Under 2.5 Goals" => 1 - $over_2_5_prob,
        "Under 3.5 Goals" => $under_3_5_prob
    ];

    return $result;
}

function simulate_predictions($home_avg, $away_avg, $simulations = 1000, $noise = 0.05) {
    $all_results = [];

    for ($s = 0; $s < $simulations; $s++) {
        $noisy_home = max(0.01, $home_avg * (1 + mt_rand(-$noise*10000, $noise*10000)/10000));
        $noisy_away = max(0.01, $away_avg * (1 + mt_rand(-$noise*10000, $noise*10000)/10000));

        $all_results[] = predict_match($noisy_home, $noisy_away);
    }

    $summary = [];
    foreach (array_keys($all_results[0]) as $key) {
        $values = array_column($all_results, $key);
        sort($values);
        $count = count($values);
        $mean = array_sum($values) / $count;
        $lower = $values[(int)($count * 0.025)];
        $upper = $values[(int)($count * 0.975)];
        $summary[$key] = [
            "mean" => $mean,
            "lower" => $lower,
            "upper" => $upper
        ];
    }
    return $summary;
}

function get_color($key, $mean_percent) {
    if ((strpos($key, 'Home Win') !== false && $mean_percent >= 55) ||
        (strpos($key, 'Draw') !== false && $mean_percent >= 30) ||
        (strpos($key, 'Away Win') !== false && $mean_percent >= 45) ||
        (strpos($key, 'Double Chance') !== false && $mean_percent >= 75) ||
        (strpos($key, 'BTTS Yes') !== false && $mean_percent >= 60) ||
        (strpos($key, 'BTTS No') !== false && $mean_percent >= 60) ||
        (strpos($key, 'Over 2.5') !== false && $mean_percent >= 55) ||
        (strpos($key, 'Under 2.5') !== false && $mean_percent >= 55) ||
        (strpos($key, 'Over 1.5') !== false && $mean_percent >= 75) ||
        (strpos($key, 'Under 3.5') !== false && $mean_percent >= 70)) {
        return "background-color: #c6efce"; // Light Green
    } elseif ($mean_percent >= 50) {
        return "background-color: #ffeb9c"; // Light Yellow
    } else {
        return "background-color: #f8cbad"; // Light Red
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Football Match Prediction</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input[type='number'] { width: 100px; margin-right: 10px; }
        table { border-collapse: collapse; margin-top: 20px; width: 90%; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Football Match Prediction (Poisson Model)</h2>

<form method="POST">
    Home Team Avg Goals: <input type="number" step="0.01" name="home_avg" required>
    Away Team Avg Goals: <input type="number" step="0.01" name="away_avg" required>
    <input type="submit" value="Predict">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $home_avg = floatval($_POST['home_avg']);
    $away_avg = floatval($_POST['away_avg']);

    $results = simulate_predictions($home_avg, $away_avg);

    echo "<h3>Prediction Results (with Confidence Intervals)</h3>";
    echo "<table>";
    echo "<tr><th>Outcome</th><th>Mean Probability (%)</th><th>Lower Bound (%)</th><th>Upper Bound (%)</th></tr>";
    foreach ($results as $key => $values) {
        $mean_percent = $values['mean'] * 100;
        $color = get_color($key, $mean_percent);
        printf(
            "<tr><td>%s</td><td style='%s'>%.2f%%</td><td>%.2f%%</td><td>%.2f%%</td></tr>",
            htmlspecialchars($key),
            $color,
            $mean_percent,
            $values['lower'] * 100,
            $values['upper'] * 100
        );
    }
    echo "</table>";
}
?>

</body>
</html>
