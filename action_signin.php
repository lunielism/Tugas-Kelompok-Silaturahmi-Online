<?php
    include("config.php");

    if(isset($_POST['submit'])){
        $user = $_POST['uname'];
        $pass = $_POST['psw'];

        $db = mysqli_connect('localhost', 'root', '', 'database_silaturahmi');

        $query = "SELECT * FROM profile_admin WHERE username='$user' AND password='$pass'";
        $found = mysqli_query($db, $query);

        if(mysqli_num_rows($found) == 1){
            header('Location: message-displayer.php');
        }
        else{
            header('Location: administrator.php?status=gagal');
        }

    }


?>