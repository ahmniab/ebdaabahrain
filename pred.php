<?php
// دالة لحساب المضروب بدون recursion
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// دالة حساب توزيع بواسون
function poisson($lambda, $k) {
    return (pow($lambda, $k) * exp(-$lambda)) / factorial($k);
}

// دالة لحساب احتمالية تسجيل عدد أهداف معين (0 إلى 5)
function goalProbabilities($expected_goals) {
    $probs = [];
    for ($i = 0; $i <= 5; $i++) {
        $probs[$i] = poisson($expected_goals, $i);
    }
    return $probs;
}

// مصفوفة النتائج المتوقعة
function generateScoreMatrix($home_probs, $away_probs) {
    $matrix = [];
    foreach ($home_probs as $h => $h_prob) {
        foreach ($away_probs as $a => $a_prob) {
            $matrix["$h-$a"] = $h_prob * $a_prob;
        }
    }
    arsort($matrix);
    return $matrix;
}

// دوال الاحتمالات:
function estimate1X2($matrix) {
    $home = $draw = $away = 0;
    foreach ($matrix as $score => $prob) {
        list($h, $a) = explode('-', $score);
        if ($h > $a) $home += $prob;
        elseif ($h == $a) $draw += $prob;
        else $away += $prob;
    }
    $total = $home + $draw + $away;
    return [
        'فوز المضيف' => round($home / $total * 100, 2),
        'تعادل' => round($draw / $total * 100, 2),
        'فوز الضيف' => round($away / $total * 100, 2)
    ];
}

function estimateBTTS($matrix) {
    $yes = $no = 0;
    foreach ($matrix as $score => $prob) {
        list($h, $a) = explode('-', $score);
        if ($h > 0 && $a > 0) $yes += $prob;
        else $no += $prob;
    }
    return [
        'نعم' => round($yes / ($yes + $no) * 100, 2),
        'لا' => round($no / ($yes + $no) * 100, 2)
    ];
}

function estimateOverUnder($matrix) {
    $over15 = $over25 = $over35 = 0;
    $under15 = $under25 = $under35 = 0;
    foreach ($matrix as $score => $prob) {
        list($h, $a) = explode('-', $score);
        $total = $h + $a;
        if ($total > 1.5) $over15 += $prob;
        else $under15 += $prob;
        if ($total > 2.5) $over25 += $prob;
        else $under25 += $prob;
        if ($total > 3.5) $over35 += $prob;
        else $under35 += $prob;
    }
    return [
        'أكثر من 1.5' => round($over15 * 100, 2),
        'أقل من 1.5' => round($under15 * 100, 2),
        'أكثر من 2.5' => round($over25 * 100, 2),
        'أقل من 2.5' => round($under25 * 100, 2),
        'أكثر من 3.5' => round($over35 * 100, 2),
        'أقل من 3.5' => round($under35 * 100, 2)
    ];
}

function estimateDoubleChance($outcomes) {
    return [
        '1X (مضيف أو تعادل)' => round($outcomes['فوز المضيف'] + $outcomes['تعادل'], 2),
        'X2 (تعادل أو ضيف)' => round($outcomes['تعادل'] + $outcomes['فوز الضيف'], 2),
        '12 (مضيف أو ضيف)' => round($outcomes['فوز المضيف'] + $outcomes['فوز الضيف'], 2)
    ];
}

// دالة رسم شريط الاحتمال
function progressBar($percent) {
    $width = intval($percent);
    if ($percent > 60) {
        $color = 'green';
    } elseif ($percent >= 40) {
        $color = 'yellow';
    } else {
        $color = 'red';
    }
    return "<div style='background:#ddd; width:100%; height:10px;'>
                <div style='width:{$width}%; background:{$color}; height:10px;'></div>
            </div>";
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>توقع نتيجة مباراة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        input[type=number], input[type=submit] { width: 100%; padding: 8px; margin: 5px 0; }
        @media (max-width: 600px) {
            table, th, td { font-size: 14px; }
        }
    </style>
</head>
<body>
<h1>توقع نتائج مباراة بناءً على الإحصائيات</h1>
<form method="post">
    <label>متوسط تسجيل الفريق المضيف:<br><input type="number" step="0.01" name="home_avg_scored" required></label><br>
    <label>متوسط تسجيل الفريق الضيف:<br><input type="number" step="0.01" name="away_avg_scored" required></label><br>
    <label>متوسط استقبال الفريق المضيف:<br><input type="number" step="0.01" name="home_avg_conceded" required></label><br>
    <label>متوسط استقبال الفريق الضيف:<br><input type="number" step="0.01" name="away_avg_conceded" required></label><br><br>
    <input type="submit" value="احسب التوقعات">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['home_avg_scored'], $_POST['away_avg_scored'], $_POST['home_avg_conceded'], $_POST['away_avg_conceded']) &&
    $_POST['home_avg_scored'] !== '' && $_POST['away_avg_scored'] !== '' && $_POST['home_avg_conceded'] !== '' && $_POST['away_avg_conceded'] !== '') {

    $home_avg_scored = (float)$_POST['home_avg_scored'];
    $away_avg_scored = (float)$_POST['away_avg_scored'];
    $home_avg_conceded = (float)$_POST['home_avg_conceded'];
    $away_avg_conceded = (float)$_POST['away_avg_conceded'];

    // حساب الأهداف المتوقعة
    $home_expected = ($home_avg_scored + $away_avg_conceded) / 2;
    $away_expected = ($away_avg_scored + $home_avg_conceded) / 2;

    $home_probs = goalProbabilities($home_expected);
    $away_probs = goalProbabilities($away_expected);

    $score_matrix = generateScoreMatrix($home_probs, $away_probs);

    $outcomes = estimate1X2($score_matrix);
    $btts = estimateBTTS($score_matrix);
    $over_under = estimateOverUnder($score_matrix);
    $double_chance = estimateDoubleChance($outcomes);

    function outputTable($data, $title) {
        echo "<h2>$title</h2><table><tr><th>التوقع</th><th>النسبة</th><th>رسم بياني</th></tr>";
        foreach ($data as $label => $value) {
            echo "<tr><td>$label</td><td>$value%</td><td>" . progressBar($value) . "</td></tr>";
        }
        echo "</table>";
    }

    echo "<h2>أكثر النتائج احتمالاً:</h2><table><tr><th>#</th><th>النتيجة</th><th>النسبة</th><th>رسم بياني</th></tr>";
    $i = 1;
    foreach (array_slice($score_matrix, 0, 5) as $score => $prob) {
        $percent = round($prob * 100, 2);
        echo "<tr><td>$i</td><td>$score</td><td>$percent%</td><td>" . progressBar($percent) . "</td></tr>";
        $i++;
    }
    echo "</table>";

    outputTable($outcomes, "احتمالات 1X2");
    outputTable($btts, "تسجيل الفريقين (BTTS)");
    outputTable($over_under, "توقع مجموع الأهداف (Over/Under)");
    outputTable($double_chance, "فرصتين Double Chance");
}
?>
</body>
</html>
