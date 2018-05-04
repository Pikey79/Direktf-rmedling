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
or die("SELECT Error: ".mysql_error());

print "<table border=1>\n";
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
  echo "<div>$form_message</div>";
  print "</td>\n";
  print "\t<td>\n";
  echo "<div>$form_operation</div>";
  print "</td>\n";
  print "\t<td>\n";
  echo "<div align=center><a href='$files_show'>$files_field</a></div>";
  print "</td>\n";
  print "</tr>\n";
}
print "</table>\n";



print "<table border=1>\n";
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
