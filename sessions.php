<?php
session_start();

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if(isset($_POST['username'])){
    $_SESSION['username'] = $_POST['username'];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in</title>
</head>
<body>
<?php if(isset($_SESSION['username'])): ?>
    <h2>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>successfully logged in</p>
    <a href="?logout=1">Logout</a>
<?php else: ?>
    <h2>Enter your name</h2>
    <form method="post">
        <input type="text" name="username" placeholder="name" required>
        <button type="submit">login</button>
    </form>
<?php endif; ?>
</body>
</html>