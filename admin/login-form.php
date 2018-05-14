<?php include('header-login-form.php'); ?>

    <h3 class="wrong-message" align="center" style="color:red;"><?php echo @$_GET["invalid"] ?></h3>
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
    </form>

<?php include('footer-login-form.php'); ?>
