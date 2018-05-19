<?php include('header-login-form.php'); ?>

    <!--<h3 class="wrong-message" align="center" style="color:red;"><?php echo @$_GET["invalid"] ?></h3>
    <form action="login.php" method="POST" class="login-form">
      <table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
        <tr>
          <th colspan="6" align="center" style="background:indigo;color: white"><h1>Admin Login</h1></th>
        </tr>
        <tr>
          <th align="right">Användarnamn:</th>
          <td><input type="text" name="txtuser" class="input-text"></td>
        </tr>
        <tr>
          <th align="right">Lösenord:</th>
          <td><input type="password" name="txtpass" class="input-password"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="sub" value="Log In" id="sub" class="input-submit">
          </td>
        </tr>
      </table>
    </form>-->

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
