<?php
function checkNumberType($number) {
    if (!is_numeric($number)) {
        return "Not a valid number";
    }

    $number = floatval($number);

    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
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
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="number" required placeholder="Enter a number">
        <button type="submit">Check Number Type</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result = checkNumberType($number);
        echo "<p>Number is: " . htmlspecialchars($result) . "</p>";
    }
    ?>
</body>
</html>