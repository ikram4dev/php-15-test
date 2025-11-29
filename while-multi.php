<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $result = "";
    for ($i=1;$i <= 10; $i++) {
        $result .= "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, Helvetica, sans-serif;
        background: #eef1f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container{
        background: #fff;
        padding: 30px;
        width: 380px;
        border-radius: 12px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.1);
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    form{
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 20px;
    }

    input{
        padding: 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 16px;
        outline: none;
        transition: 0.2s;
    }

    input:focus{
        border-color: #007bff;
        box-shadow: 0 0 6px rgba(0,123,255,0.4);
    }

    button{
        padding: 12px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 17px;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover{
        background: #0056b3;
        transform: scale(1.03);
    }

    .result{
        margin-left: 30px; 
        padding: 15px;
        background: #f7f7f7;
        border-left: 4px solid #007bff;
        border-radius: 6px;
        font-size: 18px;
        line-height: 1.6;
    }
</style>

    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num" required >
        <button type="submit">multip</button>
    </form>
    <div class="result">
        <?php
    if (isset($num)) {
        echo "$result";
    }?>
    </div>
</body>
</html>