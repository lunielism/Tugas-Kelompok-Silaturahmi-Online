<?php

    include("config.php");
    session_start();

    $_SESSION['name'] = $_POST['nama'];
    $_SESSION['address'] = $_POST['alamat'];
    $_SESSION['jk'] = $_POST['jenis-kelamin'];
    $_SESSION['contact'] = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="display: grid; place-items: center; padding: 80px 90px 20px 90px; background-color: #2c3639;">
    <div class="form-box d-flex mt-5 justify-content-center" style="margin: auto; border: 1px solid #a27b5c; width: 500px;">
        <form action="message-sender.php" method="post" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <header>
                <h4 class="text-center" style="color: #a27b5c; padding: 20px 0;">Tulis Pesan:</h4>
            </header>
            <p>
                <textarea style="background-color: #dcd7c9;" name="Pesan" cols="50" rows="10"></textarea>
            </p>
            <p class="d-flex justify-content-center" style="padding-top: 20px;">
                <input class="btn btn-*" style="padding: 6px; background-color: #a27b5c; color: #2c3639; border-color: #a27b5c;" type="submit" value="submit" name="submit">
            </p>

        </form>
    </div>
</body>
</html>