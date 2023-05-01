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

    h2{
        font-size: 1.5rem;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    nav li {
        margin: 0 30px;
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
        margin-top: 30px;
        margin-bottom: 30px;
    }

    nav a:hover {
        background-color: #a27b5c;
        color: white;
    }

</style>

</head>
<body>
<div class="container">
    <header>
        <h1>Web Silaturahmi</h1>
        <nav>
        <ul>
            <li><a href="administrator.php">Admin</a></li>
            <li><a href="contact-book.php">Umum</a></li>
        </ul>
    </nav>
    </header>
</div>

</body>
</html>