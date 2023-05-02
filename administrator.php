<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Web Silaturahmi</title>
    <style>
    body {
        background: url(home.jpg) no-repeat center center fixed;
        background-size: cover;
        background-color: grey;
        background-blend-mode: multiply;
        text-align: center;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        margin-top: 15%;
        margin-bottom: 11%;
    }

    header {
        text-align: center;
        color: white;
        background-color: rgba(162,123,92, 0.6);
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
        background-blend-mode: multiply;
    }

    h1 {
        margin: 0;
        font-size: 5rem;
        line-height: 1.5;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    nav li {
        margin: 0 50px;
    }

    nav a {
        display: block;
        text-decoration: none;
        color: #a27b5c;
        font-size: 2.5rem;
        font-weight: bold;
        padding: 10px;
        border-radius: 10px;
        background-color: #dcd7c9;
        margin-top: 40px;
        margin-bottom: 30px;
    }

    nav a:hover {
        background-color: #a27b5c;
        color: white;
    }

/* menambahkan efek bayangan pada header */
header {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* memberikan padding pada list item di navigasi */
nav li {
    padding: 10px;
}

/* membuat garis bawah pada setiap link navigasi ketika di-hover */
nav a:hover {
    border-bottom: 2px solid white;
}

/* mengatur tampilan judul dan deskripsi pada link navigasi */
nav h3 {
    font-size: 1.5rem;
    margin: 0;
    margin-bottom: 5px;
    color: white;
}

/* mengatur tampilan judul halaman */
h1 {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

/* mengatur tampilan button Register */
nav a:first-child {
    background-color: #a27b5c;
    color: white;
}

/* mengatur tampilan button Log In */
nav a:last-child {
    background-color: #dcd7c9;
    color: #a27b5c;
    border: 2px solid #a27b5c;
}

/* menambahkan efek transisi ketika link navigasi di-hover */
nav a {
    transition: all 0.3s ease-in-out;
}

</style>

</head>
<body>
<div class="container">
    <header>
        <h1>Akses Admin
        </h1>
</br>

        <nav>
            <ul>
            <li>
                <h3>Belum punya akun?</h3>
                <a href="register-admin.php">Register</a>
            </li>
            <li>
                <h3>Sudah punya akun?</h3>
                <a href="signin-admin.php">Log In</a>
            </li>
            </ul>
        </nav>
    </header>
</div>

</body>
</html>