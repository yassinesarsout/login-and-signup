<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resetsheet.css">
        <link rel="stylesheet" href="style.css">
        <title>account</title>
    </head>
    <body>
        <div class="box">
        <?php
            if (isset($_SESSION["userid"])) 
            {
        ?>  
            <h3>welcome</h3>
            <h5><?php echo $_SESSION["useruid"]; ?></h5>
            <a href="index.php">logout</a>
        <?php
            }
            else {
        ?>
        <a href="login.php">login</a>
        <?php
            }
        ?>
        </div>
    </body>
</html>