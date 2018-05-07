<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      .input-text {
        height: 26px;
        width: 250px;
      }
      .input-password {
        height: 26px;
        width: 250px;
      }
      .input-submit {
        height: 39px;
        width: 100%;
        background: indianred;
        color: white;
        text-decoration: none;
        border: none;
        font-size: 23px;
        cursor: pointer;
      }

    </style>
  </head>
  <body>
    <h3 align="center" style="color:red;"><?php echo @$_GET["success"] ?></h3>
    <h3 align="center" style="color:red;"><?php echo @$_GET["invalid"] ?></h3>
    <h3 align="center" style="color:red;"><?php echo @$_GET["logout"] ?></h3>
    <h3 align="center" style="color:red;"><?php echo @$_GET["notlogedin"] ?></h3>
    <form action="login.php" method="POST">
      <table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
        <tr>
          <th colspan="6" align="center" style="background:indigo;color: white"><h1>Admin Login</h1></th>
        </tr>
        <tr>
          <th align="right">UserName:</th>
          <td><input type="text" name="txtuser" class="input-text"></td>
        </tr>
        <tr>
          <th align="right">Password:</th>
          <td><input type="password" name="txtpass" class="input-password"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="sub" value="Log In" id="sub" class="input-submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
