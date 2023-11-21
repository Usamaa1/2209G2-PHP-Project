<?php 


try
{
    $connection = new PDO('mysql:host=localhost;dbname=2209G2','root','');
    // echo "Database connected successfully";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}





?>