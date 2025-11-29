<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['day'];
        switch ($num) {
            case 1:
                $day = "sunday";
                break;
            case 2:
                $day = "monday";
                break;
            case 3:
                $day = "tuesday";
                break;
            case 4:
                $day = "wednesday";
                break;
            case 5:
                $day = "thursday";
                break;
            case 6:
                $day = "friday";
                break;
            case 7:
                $day = "saturday";
                break;
            default:
                $day = "please enter number from 1-7";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            justify-items: center;
        }
        form {
            display: flex;
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 250px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 250px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="number" name="day" required placeholder="Enter a day number (1-7)">
        <button type="submit">Get Day Name</button>
    </form>
    <?php
    if (isset($day)) {
        echo "<p>$day</p>";
    }
    ?>
</body>
</html>