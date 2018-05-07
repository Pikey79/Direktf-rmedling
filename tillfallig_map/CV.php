<?php include('header.php'); ?>

<style type="text/css">

h1, h2 {
  text-align: center;
  font-family: 'Poppins', sans-serif;
  padding: 20px 0;
  font-weight: 400;
}

table {
  width: 90%;
  margin: 0 auto;
  border-collapse: collapse;
  font-family: 'Poppins', sans-serif;
  /*table-layout: fixed;*/
}

table tr th {
  background: #f39231;
  color: #fdfdfd;
  font-weight: 400;
  border: 1px solid #f39231;
  padding: 10px;
  font-size: 18px;
}

table, td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 16px;
  color: #222;
}

tr:nth-child(odd) {
  background: #f5f5f5;
}

tr:hover {
  background: #ddd;
}

td a {
  color: green;
}

</style>


<?php
$user = "root";
$password = "";
$host = "localhost";
$dbase = "direkformedling";
$table = "apply_job";
$c_table = "search_staff";

// Connection to DBase
mysql_connect($host,$user,$password);
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT id, name, phone, email, message, operation, filename FROM $table ORDER BY ID desc" )
or die("SELECT Error: ".mysql_error());

$c_result= mysql_query( "SELECT id, company_name, name, phone, email, message FROM $c_table ORDER BY ID desc" )
or die("SELECT Error: ".mysql_error()); ?>
<h1>Adminpanel</h1>
<hr>
<h2>Jobbansökan</h2> 

<?php
print "<table border=0>\n";
print "<tr>
  <th>ID</th>
  <th>Namn</th>
  <th>Telefon</th>
  <th>Email</th>
  <th>Meddelande</th>
  <th>Verksamhet</th>
  <th>CV/Personligtbrev</th>
</tr>";
while ($row = mysql_fetch_array($result)){
  $form_id = $row['id'];
  $form_name = $row['name'];
  $form_phone = $row['phone'];
  $form_email = $row['email'];
  $form_message = $row['message'];
  $form_operation = $row['operation'];
  $files_field= $row['filename'];
  $files_show= "Uploads/files/$files_field";
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
  /*echo "<div>$form_message</div>";*/
  echo "<!-- Button trigger modal -->
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalLong'>
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
            echo '<div>$form_message</div>';
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Stäng</button>
          </div>
        </div>
      </div>
    </div>";
  print "</td>\n";
  print "\t<td>\n";
  echo "<div>$form_operation</div>";
  print "</td>\n";
  print "\t<td>\n";
  echo "<div align=center><a href='$files_show'>$files_field</a></div>";
  print "</td>\n";
  print "</tr>\n";
}
print "</table>\n"; ?>

<h2>Företagsansökan</h2> 

<?php
print "<table border=0>\n";
print "<tr>
  <th>ID</th>
  <th>Företagsnamn</th>
  <th>Namn</th>
  <th>Telefon</th>
  <th>Email</th>
  <th>Meddelande</th>
</tr>";
while ($c_row = mysql_fetch_array($c_result)){
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

?>
