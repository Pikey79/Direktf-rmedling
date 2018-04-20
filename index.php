<?php include('header.php'); ?>


<?php
if (isset($_GET['page'])) {
   $p = $_GET['page'];


   switch ($p) {

    case 'home':
        include ('pages/home.php');
        break;

    case 'school':
        include ('pages/school.php');
        break;

    case 'care':
        include ('pages/care.php');
        break;

    case 'cleaning':
        include ('pages/cleaning.php');
        break;

    case 'construction':
        include ('pages/construction.php');
        break;

    case 'economy':
        include ('pages/economy.php');
        break;

    case 'retail':
        include ('pages/retail.php');
        break;

    case 'restaurant':
        include ('pages/restaurant.php');
        break;

    case 'application':
        include ('pages/application.php');
        break; 

    case 'search-staff':
        include ('pages/search-staff.php');
        break; 

    case 'about-us':
        include ('pages/about-us.php');
        break;

    case 'contact':
        include ('pages/contact.php');
        break;

    case 'employee':
        include ('pages/employee.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }

   } else {
   include ('pages/home.php');
}
?>
