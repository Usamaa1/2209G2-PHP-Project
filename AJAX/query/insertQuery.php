<?php include '../connection.php' ?>
<?php

    $prodName = $_POST['prodName'];
    $prodPrice = $_POST['prodPrice'];
    $prodDesc = $_POST['prodDesc'];



    $insert_query = "INSERT INTO `ajax`(`prod_name`, `prod_price`, `prod_description`) VALUES (:prodName, :prodPrice, :prodDescription)";
    $insert_prepare = $connection->prepare($insert_query);
    $insert_prepare->bindParam(":prodName", $prodName);
    $insert_prepare->bindParam(":prodPrice", $prodPrice);
    $insert_prepare->bindParam(":prodDescription", $prodDesc);
    $insert_prepare->execute();




?>