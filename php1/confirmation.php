<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['accomplishments'] = $_POST['accomplishments'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <h1>Confirm Your Information</h1>

    <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?></p>
    <p><strong>Courses:</strong></p>
    <ul>
        <?php foreach ($_SESSION['courses'] as $course): ?>
            <li><?php echo htmlspecialchars($course); ?></li>
        <?php endforeach; ?>
    </ul>
    <p><strong>Accomplishments:</strong></p>
    <p><?php echo nl2br(htmlspecialchars($_SESSION['accomplishments'])); ?></p>

    <form method="post" action="results.php">
        <input type="submit" value="Confirm and Submit">
    </form>
</body>
</html>
