
<?php
  include('header.php');

session_start();
  if(!$_SESSION["login_user"]) {
    header("location:index.php");
  } else {


    /*$user = "root";
    $password = "";
    $host = "localhost";
    $dbase = "direkformedling";
    $table = "apply_job";
    $c_table = "search_staff";

    // Connection to DBase
    mysql_connect($host,$user,$password);
    @mysql_select_db($dbase) or die("Unable to select database");*/
    include('db.php');

    $query= "SELECT id, name, phone, email, message, operation, filename FROM apply_job ORDER BY ID desc";
    $result = mysqli_query($conn, $query);

    $c_query= "SELECT id, company_name, name, phone, email, message FROM search_staff ORDER BY ID desc";
    $c_result = mysqli_query($conn, $c_query);

    echo "<h1>Adminpanel</h1><a href='logout.php' class='logout'>Logga ut</a><hr><h2>Jobbansökan</h2>";

    print "<table border=0 class='CV-table'>\n";
    print "<tr>
      <th>ID</th>
      <th>Namn</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Meddelande</th>
      <th>Verksamhet</th>
      <th>CV/Personligtbrev</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)){
      $form_id = $row['id'];
      $form_name = $row['name'];
      $form_phone = $row['phone'];
      $form_email = $row['email'];
      $form_message = $row['message'];
      $form_operation = $row['operation'];
      $files_field= $row['filename'];
      $files_show= "../Uploads/files/$files_field";
      print "<tr>\n";
      print "\t<td>\n";
      echo "<div>$form_id</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_name</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_phone</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_email</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_message</div>";
      /*echo "<script type= 'text/javascript'>

        $('body').on('click', '.btn.btn-primary', function(){
          var read_more_button = $(this);
          read_more_button.attr('data-toggle', 'modal');
          read_more_button.attr('data-target', '#exampleModalLong');
          read_more_button.next('.modal.fade').addClass('abbas');
        });
      </script>";
      echo "<!-- Button trigger modal -->
        <button type='button' class='btn btn-primary' data-toggle='' data-target=''>
          Meddelande
        </button>

        <!-- Modal -->
        <div class='modal fade' id='exampleModalLong' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLongTitle'>Meddelande</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>
                $form_message
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Stäng</button>
              </div>
            </div>
          </div>
        </div>";*/
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_operation</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div align=center><a class='link-CV' href='$files_show'>Personligtbrev / CV</a></div>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";



    echo "<h2>Företagsansökan</h2>";


    print "<table border=0 class='CV-table'>\n";
    print "<tr>
      <th>ID</th>
      <th>Företagsnamn</th>
      <th>Namn</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Meddelande</th>
    </tr>";
    while ($c_row = mysqli_fetch_array($c_result)){
      $c_form_id = $c_row['id'];
      $c_form_company_name = $c_row['company_name'];
      $c_form_name = $c_row['name'];
      $c_form_phone = $c_row['phone'];
      $c_form_email = $c_row['email'];
      $c_form_message = $c_row['message'];
      print "<tr>\n";
      print "\t<td>\n";
      echo "<div>$c_form_id</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$c_form_company_name</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$c_form_name</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$c_form_phone</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$c_form_email</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$c_form_message</div>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";

  }



  include('footer.php');
?>
