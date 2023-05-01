<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: message-displayer.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM profile_pengirim WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="display: grid; place-items: center; padding: 80px 90px 20px 90px; background-color: #2c3639;">
    <div class="form-box d-flex mt-5 justify-content-center" style="margin: auto; border: 1px solid #a27b5c; width: 500px;">
        <form action="action_reply.php" method="post">

            <header>
                <h4 class="text-center" style="color: #a27b5c; padding: 20px 0;">Balas Pesan: </h4>
            </header>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
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