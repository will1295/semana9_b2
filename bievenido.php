<?php
    session_start();
    if (isset($_POST["logout"])){
        session_destroy();

        header("Location:login.html");
        exit();
    }

    if(!isset($_SESSION['user'])){
        header("Location:login.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Bievenido ".$_SESSION['user'];
        echo "<br>";
        echo "TOKEN: ".$_SESSION["token"];
    ?>
    <form action="<?php echo ($_SERVER['PHP_SELF'])?>" method="POST">
        <input type="submit" name="logout" value="Cerrar Sesión">
    </form>
</body>
</html>