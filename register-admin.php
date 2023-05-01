<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: #2c3639;
        }
        .form-box {
            border: 1px solid #a27b5c;
        }
        .form-label {
            color: #dcd7c9;
        }
        h2 {
            color: #a27b5c;
        }
    </style>
</head>
<body>

    <div class="form-box d-flex justify-content-center align-items-center vh-100">
        <form action="action_register.php" method="post" style="padding: 20px;">
            <div class="container">
                <h2 class="text-center mb-4">Register</h2>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Enter Username" required>
                </div>

                <div class="mb-3">
                    <label for="psw" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-lg" id="psw" name="psw" placeholder="Enter Password" required>
                </div>

                <div class="mb-3">
                    <label for="psw-repeat" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control form-control-lg" id="psw-repeat" name="psw-repeat" placeholder="Repeat Password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
