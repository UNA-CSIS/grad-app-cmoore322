<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['courses'] = isset($_POST['courses']) ? $_POST['courses'] : [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accomplishments</title>
</head>
<body>
    <h1>Personal Accomplishments</h1>
    <form method="post" action="confirmation.php">
        <textarea name="accomplishments" rows="10" cols="60" placeholder="Describe your accomplishments..." required></textarea><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

