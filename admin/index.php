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

    case 'school-time':
        include ('school-time.php');
        break;

    case 'care-time':
        include ('care-time.php');
        break;

    case 'cleaning-time':
        include ('cleaning-time.php');
        break;

    case 'economy-time':
        include ('economy-time.php');
        break;

    case 'restaurant-time':
        include ('restaurant-time.php');
        break;

    case 'construction-time':
        include ('construction-time.php');
        break;

    case 'retail-time':
        include ('retail-time.php');
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
