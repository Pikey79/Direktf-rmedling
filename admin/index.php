<?php
  include('header.php');

  session_start();
    if(!$_SESSION["login_user"]) {
      header("location:login-form.php");
    }

?>


<?php
if (isset($_GET['page'])) {
   $p = $_GET['page'];


   switch ($p) {

    case 'job-application':
        include ('job-application.php');
        break;

    case 'company-application':
        include ('company-application.php');
        break;

    case 'edit-text':
        include ('edit-text.php');
        break;    

    default:
        include ('job-application.php');
        break;
   }

   } else {
   include ('job-application.php');
}
?>

<?php include('footer.php'); ?>
