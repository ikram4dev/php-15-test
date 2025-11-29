<?php
$sum=0;
$mins=0;
$multp=0;
$divi=0;
$mod=0;

if($_SERVER['REQUEST_METHOD']=="POST"){
    $n1= $_POST['num1'];
    $n2= $_POST['num2'];

    $sum=$n1+$n2;
    $mins=$n1-$n2;
    $multp=$n1*$n2;
    //the errors test is here
    try {
        if($n2 == 0) throw new Exception("Can't divide by 0");
        $divi = $n1 / $n2;
    } catch (Exception $e) {
        $divi = $e->getMessage();
    }
    $mod=($n2==0)?"Can't modulo 0":$n1%$n2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #e7ecf2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background: #ffffff;
            width: 380px;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0px 6px 20px rgba(0,0,0,0.15);
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn{
            from {opacity: 0; transform: translateY(10px);}
            to   {opacity: 1; transform: translateY(0);}
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 26px;
        }

        form{
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 25px;
        }

        input{
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: .2s;
        }

        input:focus{
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.4);
        }

        button{
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background: #0056b3;
            transform: scale(1.03);
        }

        .result-box{
            margin-top: 12px;
            padding: 12px;
            background: #f7f7f7;
            border-radius: 6px;
            border-left: 4px solid #007bff;
        }

        .result-box h4{
            font-size: 17px;
            color: #333;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Calculator</h1>

        <form method="POST">
            <input type="number" name="num1" required placeholder="Enter first number">
            <input type="number" name="num2" required placeholder="Enter second number">
            <button type="submit">Calculate</button>
        </form>

        <div class="result-box">
            <h4>Sum = <?= htmlspecialchars($sum) ?></h4>
        </div>

        <div class="result-box">
            <h4>Subtraction = <?= htmlspecialchars($mins) ?></h4>
        </div>

        <div class="result-box">
            <h4>Multiplication = <?= htmlspecialchars($multp) ?></h4>
        </div>

        <div class="result-box">
            <h4>Division = <?= htmlspecialchars($divi) ?></h4>
        </div>

        <div class="result-box">
            <h4>Modulo = <?= htmlspecialchars($mod) ?></h4>
        </div>
    </div>
</body>
</html>
