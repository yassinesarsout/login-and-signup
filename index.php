<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resetsheet.css">
        <link rel="stylesheet" href="style.css">
        <title>signup</title>
    </head>
    <body>
        <div class="box">
            <h3>signup</h3>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="write your name">
                <input type="text" name="email" placeholder="write your email">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwdconf" placeholder="confirm password">
                <button type="submit" name="submit">signup</button>
            </form>
            <a href="login.php">Alredy have an account?<br>login</a>
        </div>
    </body>
</html>