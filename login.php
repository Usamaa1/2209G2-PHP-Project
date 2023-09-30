<?php require "header/navbar.php" ?>
<?php require "connection/connection.php" ?>

<?php 



if(isset($_SESSION['userName']))
{
	header("location:index.php");
}
else
{

	$fetch_user_query = "SELECT * FROM `register_user`";
	$fetch_user_prepare = $connection->prepare($fetch_user_query);
	$fetch_user_prepare->execute();
	$fetch_user_data = $fetch_user_prepare->fetchAll(PDO::FETCH_ASSOC);
	
	// print_r($fetch_user_data);
	
	
	
	if(isset($_POST['login']))
	{
	
		$email = $_POST['email'];
		$password = $_POST['password'];
	
	
		$isLoginNotSuccessfull = false;
	
		foreach($fetch_user_data as $data){
			if($email === $data['user_email'] && password_verify($password, $data['user_password']))
			{
				$_SESSION['userId'] = $data['user_id'];
				$_SESSION['userName'] = $data['user_name'];
				$_SESSION['userEmail'] = $data['user_email'];
				header("location:index.php");
			}
			else
			{
				$isLoginNotSuccessfull = true;
			}
		}
	
		if($isLoginNotSuccessfull){
			echo "<script>alert('Login unSuccessfull')</script>";
		}
	
	
		
	}
	
}








?>


    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Login</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Login</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
			<form action="login.php" method="post" class="billing-form ftco-bg-dark p-3 p-md-5">
				<h3 class="mb-4 billing-heading">Login</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="Email">Email</label>
	                  <input type="text" name="email" class="form-control" placeholder="Email">
	                </div>
	              </div>
                 
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="Password">Password</label>
	                    <input type="password" name="password" class="form-control" placeholder="Password">
	                </div>

                </div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
							<div class="radio">
                                <button type="submit" name="login" class="btn btn-primary py-3 px-4">Login</button>
						    </div>
					</div>
                </div>

               
	          </form><!-- END -->
          </div> <!-- .col-md-8 -->
          </div>
        </div>
      </div>
    </section> <!-- .section -->
    <?php require "header/footer.php" ?>


  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

    
  </body>
</html>