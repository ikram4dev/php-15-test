<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $file = $_FILES['image'];

        //if the file size is less than 2MB
        if ($file['size'] > 2 * 1024 * 1024) {
            $message = "File size is greater than 2MB.";
        } 
        // check file type
        elseif (!in_array($file['type'], ['image/jpeg', 'image/png'])) {
            $message = "File type not allowed. Only PNG or JPEG.";
        } 
        else {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $uploadPath = $uploadDir . basename($file['name']);

            if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                $message = "File uploaded successfully: " . htmlspecialchars($file['name']);
            } else {
                $message = "An error occurred while uploading the file.";
            }
        }
    } else {
        $message = "No file was selected or an error occurred during upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload pic</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="file"] {
            margin-top: 10px;
            padding: 6px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.2s ease;
        }

        input[type="submit"]:hover {
            background: #1e4ecf;
        }

        p {
            margin-bottom: 15px;
            color: #d32f2f;
            font-weight: bold;
        }

        /* Success message color */
        .success {
            color: #2e7d32;
        }
    </style>

</head>
<body>

    <div class="container">
        <h2>Upload Picture</h2>

        <?php if ($message !== ""): ?>
            <p class="<?php echo (strpos($message, 'successfully') !== false) ? 'success' : ''; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <label>Choose a picture (PNG or JPEG)</label><br><br>
            <input type="file" name="image" accept="image/png, image/jpeg" required>
            <br><br>
            <input type="submit" value="Upload Picture">
        </form>
    </div>

</body>
</html>
