<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
    <h1>Login</h1>
    <form action="process-login.php" method="POST">
        <div>
            <input name="email_account" type="email" placeholder="email" required>
        </div>
        <div>
            <input name="password_account" type="password" placeholder="password" required>
        </div>
        <br>
        <button type="submit">Login</button>
        <br>
        <a href="form-register.php">CreateAccount</a>
    </form>
    <br>
    <img src="sleepmonky.png">
    </center>
</body>
</html>