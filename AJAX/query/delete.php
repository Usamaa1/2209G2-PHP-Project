<?php include '../connection.php' ?>

<?php 

    $id = $_POST['delId'];

    $delete_query = "DELETE FROM `ajax` WHERE `prod_id` = :id";
    $delete_prepare = $connection->prepare($delete_query);
    $delete_prepare->bindParam(':id',$id);
    $delete_prepare->execute();
    

?>