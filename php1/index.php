<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grad School App</title>
</head>
<body>
    <h1>Grad School App</h1>
    <form method="post" action="course.php">
        <label>First Name: </label>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name: </label>
        <input type="text" name="last_name" required><br><br>

        <input type="submit" value="Next">
    </form>
</body>
</html>

