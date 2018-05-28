<?php include('header-login-form.php'); ?>

    <div class="ap-main-container">
    	<!-- Section -->
    	<div class="container-fluid padding ap-more-padding">
    		<div class="row">
    			<div class="col-lg-12">
            <h3 class="wrong-message" align="center" style="color:red;"><?php echo @$_GET["invalid"] ?></h3>
    				<div class="form-container employee-container">
    					<h2 class="form-heading">Logga in</h2>
    					<form method="POST" action="login.php">
    				    <div class="form-group">
    				      <input class="form-control" id="name" type="text" placeholder="Användarnamn" name="txtuser">
    				    </div>
    				    <div class="form-group">
    				      <input class="form-control" id="employee-lock" type="password" placeholder="Lösenord" name="txtpass">
    				    </div>
    				    <button type="submit" name="sub" class="btn btn-primary form-submit-btn">Logga in</button>
    				  </form>

    				</div>
    			</div>
    		</div>
    	</div>

<?php include('footer-login-form.php'); ?>
