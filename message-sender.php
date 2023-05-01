<?php
    include("config.php");

    session_start();

    $nama = $_SESSION['name'];
    $alamat = $_SESSION['address'];
    $jk = $_SESSION['jk'];
    $email = $_SESSION['contact'];

    if(isset($_POST['submit'])){
        $pesan = $_POST['Pesan'];

        $sql = "INSERT INTO profile_pengirim (Nama, Alamat, Jenis_Kelamin, Email, Pesan) VALUES ('$nama', '$alamat', '$jk', '$email', '$pesan')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: index.php?status=sukses');
        }
        else{
            header('Location: index.php?status=gagal');
        }
    }

?>