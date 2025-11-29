<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>text</title>
    <style>
    body {
        font-family: "Cairo", Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2, h3 {
        color: #2c3e50;
        text-align: center;
    }

    form {
        background: #ffffff;
        width: 380px;
        padding: 20px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin: 20px 0;
    }

    label {
        font-size: 15px;
        color: #34495e;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 6px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background: #3498db;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s ease;
    }

    input[type="submit"]:hover {
        background: #2980b9;
    }


    .result-box {
        background: #ffffff;
        width: 380px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        line-height: 1.7;
    }
</style>

</head>
<body>
    <h2>text</h2>

<form method="post">
    <label>Enter the text:</label><br>
    <input type="text" name="sentence" required style="width:300px;"><br><br>

    <label>Word to be replaced:</label><br>
    <input type="text" name="oldWord" required><br><br>

    <label>New word:</label><br>
    <input type="text" name="newWord" required><br><br>

    <input type="submit" value="Process Text">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST['sentence'];
    $oldWord = $_POST['oldWord'];
    $newWord = $_POST['newWord'];

    $length = mb_strlen($sentence, 'UTF-8');

    $uppercase = mb_strtoupper($sentence, 'UTF-8');

    $replaced = str_replace($oldWord, $newWord, $sentence);

    echo "<h3>result:</h3>";
    echo "origenal text:" . htmlspecialchars($sentence) . "<br>";
    echo " text length: " . $length . "<br>";
    echo "  capital alphabet: " . htmlspecialchars($uppercase) . "<br>";
    echo "  text after replacement: " . htmlspecialchars($replaced) . "<br>";
}
?>
</body>
</html>