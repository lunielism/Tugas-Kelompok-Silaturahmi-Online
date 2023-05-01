<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: #2c3639;
        }

        .form-box {
            border: 1px solid #a27b5c;
            width: 400px;
            background-color: #dcd7c9;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .form-box h2 {
            color: #a27b5c;
            padding-top: 50px;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
        }

        .form-box form {
            padding: 20px;
        }

        .form-label {
            color: #2c3639;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .form-control {
            font-size: 1.2rem;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #a27b5c;
            border-color: #a27b5c;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #875c46;
            border-color: #875c46;
        }
    </style>
</head>
<body>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="form-box">
            <h2>Login</h2>
            <form action="action_signin.php" method="post">
                <div class="mb-3">
                    <label for="uname" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg" id="uname" name="uname"
                        placeholder="Enter Username" required>
                </div>
                <div class="mb-3">
                    <label for="psw" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="psw" name="psw"
                        placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>
