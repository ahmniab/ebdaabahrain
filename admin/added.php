<?php
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: index.php');
    exit;
}
$type = $_GET['type'] ?? '';
$link = $_GET['link'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added Successfully</title>
</head>
<body>
    <h1>Added Successfully</h1>
    <p>The item has been added successfully.</p>
    <a href="<?php echo $link; ?>">Back to <?php echo $type; ?> Management</a>
</body>
</html>