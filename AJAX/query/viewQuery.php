<?php include '../connection.php' ?>

<?php


$view_query = "SELECT * FROM `ajax`";
$view_prepare = $connection->prepare($view_query);
$view_prepare->execute();

$prod_data = $view_prepare->fetchAll(PDO::FETCH_ASSOC);


foreach ($prod_data as $prod) {

    ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?= $prod['prod_name'] ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
                <?= $prod['prod_price'] ?>
            </h6>
            <p class="card-text">
                <?= $prod['prod_description'] ?>
            </p>
            <button class="btn btn-primary deleteBtn" del='<?= $prod['prod_id'] ?>'>Delete</button>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    

<?php } ?>


<script>

    // let deleteBtn = document.getElementsByClassName('deleteBtn');

    // deleteBtn.addEventListener('click',()=>{
    //  console.log('button clicked')
    // })




  


</script>