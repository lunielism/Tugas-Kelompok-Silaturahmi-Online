<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Web Silaturahmi</title>
    <style>
        body {
            background-color: #2c3639;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    header {
        text-align: center;
        color: white;
        background-color: #a27b5c;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    h1 {
        margin: 0;
        font-size: 3rem;
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
        margin: 0 10px;
    }

    nav a {
        display: block;
        text-decoration: none;
        color: #a27b5c;
        font-size: 1.2rem;
        padding: 10px;
        border-radius: 10px;
        background-color: #dcd7c9;
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
    </header>
    <nav>
        <ul>
        <li><a href="register-admin.php">Register</a></li>
                <li><a href="signin-admin.php">Log In</a></li>
        </ul>
    </nav>
</div>

</body>
</html>