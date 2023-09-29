<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resetsheet.css">
        <link rel="stylesheet" href="style.css">
        <title>login</title>
    </head>
    <body>
        <div class="box">
            <h3>Login</h3>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="write your username">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Login</button>
            </form>
            <a href="index.php">Don't have an account?<br>sign up</a>
        </div>
    </body>
</html>