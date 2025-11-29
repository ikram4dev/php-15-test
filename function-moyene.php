<?php
function moyenne($notes){
    $sum=0;
    $count=0;
    foreach($notes as $note){
        $sum += $note;
        $count++;
    }
    return $count > 0 ? $sum / $count : 0;
}

$nb_notes = 0;
$notes = [];
$moyene = 0;

if(isset($_POST['nb_notes'])){
    $nb_notes = $_POST['nb_notes'];
}

if(isset($_POST['notes'])){
    $notes = $_POST['notes'];
    $moyene = moyenne($notes);
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
            margin-top: 50px;
            flex-direction: column;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
    <title>notes</title>
</head>
<body>
    <h1>Function Moyenne</h1>
    <form method="post">
        <input type="number" name="nb_notes" required>
        <button type="submit">Submit</button>
    </form>
    <?php if ($nb_notes>0): ?>
        <h2>enter notes</h2>
        <form method="post">
            <?php for ($i = 0; $i < $nb_notes; $i++): ?>
                <input type="number" name="notes[]" required"><br>
            <?php endfor; ?>
            <button type="submit">calcule</button>
            <?php endif; ?>
        </form>
        <div class="result">
            <?php
                echo "<h2>moyene is: " . htmlspecialchars($moyene) . "</h2>";
            ?>
        </div>
</body>
</html>