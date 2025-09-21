<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Selection</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?></h1>
    <p>Select your completed courses:</p>

    <form method="post" action="form.php">
        <input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming <br>
        <input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design <br>
        <input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming <br>
        <input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking <br>
        <input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security <br><br>

        <input type="submit" value="Next">
    </form>
</body>
</html>
