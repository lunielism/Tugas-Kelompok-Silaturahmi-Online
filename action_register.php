<?php
    include("config.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['submit'])){

        // ambil data dari formulir
        $user = $_POST['username'];
        $pass = $_POST['psw'];

        // buat query
        $sql = "INSERT INTO profile_admin (username, password) VALUE ('$user', '$pass')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: administrator.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: administrator.php?status=gagal');
        }


    } else {
        die("Akses dilarang...");
    }


?>