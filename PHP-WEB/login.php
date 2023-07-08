<?php
session_start();

$error = "";
if(isset($_SESSION["login"]) == true){
    header("Location: /member.php");
}


if(isset($_POST["username"]) == true){
    if($_POST["username"] == "yp" && $_POST["password"] == "yp"){

        $_SESSION["login"] = true;
        header("Location: /member.php");
    }else{
        $error = "can't Login";
    }
}
?>

<html>
    <head></head>
    <body>
        <?php if($error != null || $error != ""){?>
            <h2><?= $error ?></h2>
        <?php } ?>

        <form action="/login.php" method="POST">
            <label>Username:
                <input type="text" name="username"/>
            </label>
            <label>Password:
                <input type="text" name="password"/>
            </label>
            <button type="submit">Login</button>
        </form>
    </body>
</html>