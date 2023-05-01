<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    </style>
</head>
<body style="padding: 80px 90px 20px 90px; background-color: #2c3639;">

    <header>
        <h3 class="text-center" style="color: #a27b5c; padding-bottom: 25px;">Message Displayer</h3>
    </header>
    <br>

    <table class="table table-bordered table-hover-dark" style="background-color: #2c3639; margin: auto; border-color: #dcd7c9;" border="1">
    <thead class="thead-dark">
        <tr style="color: #a27b5c;">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Opsi</th>
            <th>Balasan</th>
        </tr>
    </thead>
    <tbody>

        <?php

        include("config.php");

        $sql = "SELECT * FROM profile_pengirim";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr style='color: #dcd7c9;'>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['Nama']."</td>";
            echo "<td>".$siswa['Alamat']."</td>";
            echo "<td>".$siswa['Jenis_Kelamin']."</td>";
            echo "<td>".$siswa['Email']."</td>";
            echo "<td>".$siswa['Pesan']."</td>";
            echo "<td>";
            echo "<a href='reply-message.php?id=".$siswa['id']."' style='color: #dcd7c9'>Balas</a>";
            echo "</td>";
            echo "<td>".$siswa['balasan']."</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p class="text-center" style='color: #a27b5c; padding-top: 20px;'>Total: <?php echo mysqli_num_rows($query) ?></p>
    <div class="d-flex justify-content-end">
        <a href="index.php" class="btn btn-outline-*" style="color: #dcd7c9; border-color: #dcd7c9;">Back</a>
    </div>

    </body>
</body>
</html>