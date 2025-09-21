<?php
session_start();

/**
 * Custom function to determine acceptance.
 * @param string $accomplishments
 * @param int $numCoursesListed
 * @param int $numCoursesTaken
 * @return bool
 */
function evaluateApplication($accomplishments, $numCoursesListed, $numCoursesTaken) {
    $requiredKeyword = "PHP";
    $minPercentage = 0.5; 

    $hasKeyword = stripos($accomplishments, $requiredKeyword) !== false;
    $coursePercentage = ($numCoursesTaken / $numCoursesListed);

    return $hasKeyword && ($coursePercentage >= $minPercentage);
}

$totalCourses = 5; 
$chosenCourses = count($_SESSION['courses']);
$essay = $_SESSION['accomplishments'];

$isAccepted = evaluateApplication($essay, $totalCourses, $chosenCourses);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Results</title>
</head>
<body>
    <h1>Application Results</h1>
    <?php if ($isAccepted): ?>
        <p>Congratulations <?php echo htmlspecialchars($_SESSION['first_name']); ?>, you are accepted for a phone interview!</p>
    <?php else: ?>
        <p>Sorry <?php echo htmlspecialchars($_SESSION['first_name']); ?>, your application was rejected.</p>
    <?php endif; ?>
</body>
</html>
