<?php
session_start();
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = ["ikram", "moulkheir", "dania", "lila", "tfo"];
}
$students = $_SESSION['students'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_student = trim($_POST["stdnt"]);
        $students[] = $new_student;   
        $_SESSION['students'] = $students;  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>List of Students</h1>

    <form method="post">
        <input type="text" name="stdnt" required>
        <button type="submit">Add</button>
    </form>

    <h2>total of the student: <?php echo count($students); ?></h2>

    <ul>
        <?php
        foreach ($students as $student) {
            echo "<li>$student</li>";
        }
        ?>
    </ul>

</body>
</html>
