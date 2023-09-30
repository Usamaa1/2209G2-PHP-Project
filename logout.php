<?php require "header/navbar.php" ?>
<?php require "connection/connection.php" ?>

<?php

    unset($_SESSION['userId']);
    unset($_SESSION['userName']);
    unset($_SESSION['userEmail']);
    session_destroy();
    header("location:login.php");



?>