<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Web Silaturahmi</title>
    <style>
    /* Main styles */
body {
  display: flex;
  align-items: center;
  justify-content: center;
  background: url(home.jpg) no-repeat center center fixed;
  background-size: cover;
  background-color: #f3f3f3;
  font-family: 'Helvetica Neue', sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: auto;
  padding: 50px 20px;
  text-align: center;
}

header {
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 50px;
}

h1 {
  font-size: 3.5rem;
  margin-bottom: 10px;
}

nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
}

nav li {
  margin: 0 20px;
}

nav a {
  display: block;
  text-decoration: none;
  font-size: 1.8rem;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 10px;
  background-color: #a27b5c;
  color: #fff;
  transition: background-color 0.3s ease, color 0.3s ease;
}

nav a:hover {
  background-color: #874a33;
}

/* Remove blur in background */
header:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(home.jpg) no-repeat center center fixed;
  background-size: cover;
  z-index: -1;
  filter: blur(8px);
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