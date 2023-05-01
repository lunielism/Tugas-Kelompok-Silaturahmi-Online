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

    <header>
        <h2 class="text-center" style="color: #a27b5c;">Contact Book Masyarakat</h2>
    </header>

    <div class="form-box d-flex justify-content-center mt-5" style="border: 1px solid #a27b5c; width: 400px;">

        <form action="message-adder.php" method="post" onsubmit="setTimeout(function(){window.location.href='message-adder.html';}, 1000);">
            <fieldset style="padding: 20px;">
            <p>
                    <label style="color: #dcd7c9;" for="nama">Nama: </label>
                    <input style="background-color: #fff" type="text" name="nama" placeholder="Nama lengkap">
                </p>
                <p>
                    <label style="color: #dcd7c9;" for="alamat">Alamat: </label>
                    <textarea style="background-color: #fff" name="alamat" cols="25" rows="1"></textarea>
                </p>
                <p>
                    <label style="color: #dcd7c9;" for="jenis-kelamin">Jenis Kelamin: </label>
                    <label style="color: #fff;"><input type="radio" name="jenis-kelamin" value="laki-laki">Laki - laki</label>
                    <label style="color: #fff;"><input type="radio" name="jenis-kelamin" value="perempuan">Perempuan</label>
                </p>
                <p>
                    <label style="color: #dcd7c9;" for="email">Email: </label>
                    <input style="background-color: #fff" type="text" name="email" placeholder="E-mail">
                </p>
                <p class="d-flex justify-content-center" style="padding-top: 20px;">
                    <a href="message-adder.html"><input class="btn btn-*" style="background-color: #dcd7c9; color: #2c3639; border-color: #a27b5c;"  type="submit" value="submit" name="submit"></a>
                </p>
            </fieldset>
        </form>

    </div>

</body>
</html>