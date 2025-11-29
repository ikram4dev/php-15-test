<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .menu div {
            text-align: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fafafa;
        }
        .menu h3 {
            margin-bottom: 15px;
            color: #333;
        }
        .menu button {
            padding: 10px 15px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .menu button a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="menu">
        <div class="ts1">
            <h3>calculator</h3>
            <button><a href="calculator.php">here</a></button>
        </div>
        <div class="ys2">
            <h3>number type</h3>
            <button><a href="num-type.php">here</a></button>
        </div>
        <div class="ts3">
            <h3>switch-days</h3>
            <button><a href="switch-days.php">here</a></button>
        </div>
        <div class="ts4">
            <h3>while-multi</h3>
            <button><a href="while-multi.php">here</a></button>
        </div>
        <div class="ts5">
            <h3>array</h3>
            <button><a href="array.php">here</a></button>
        </div>
        <div class="ts6">
            <h3>function moyenne</h3>
            <button><a href="function-moyene.php">here</a></button>
        </div>
        <div class="ts7">
            <h3>uploads</h3>
            <button><a href="uploads.php">here</a></button>
        </div>
        <div class="ts8">
            <h3>oop</h3>
            <button><a href="oop.php">here</a></button>
        </div>
        <div class="ts9">
            <h3>sessions</h3>
            <button><a href="sessions.php">here</a></button>
        </div>
        <div class="ts10">
            <h3>text</h3>
            <button><a href="text.php">here</a></button>
        </div>
    </div>
</body>
</html>