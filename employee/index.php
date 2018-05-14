<?php
  include('header.php');

  session_start();
    if(!$_SESSION["login_user"]) {
      header("location:../index.php?page=employee");
    }

?>


<?php
if (isset($_GET['page'])) {
   $p = $_GET['page'];


   switch ($p) {

    case 'home':
        include ('employee-welcome.php');
        break;

    case 'school':
        include ('school.php');
        break;

    default:
        include ('employee-welcome.php');
        break;
   }

   } else {
   include ('employee-welcome.php');
}
?>

<?php include('footer.php'); ?>
