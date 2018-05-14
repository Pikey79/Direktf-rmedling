<?php
    include('db.php');

    $c_query= "SELECT id, time, company_name, name, phone, email, message FROM search_staff ORDER BY ID desc";
    $c_result = mysqli_query($conn, $c_query);


    echo "<div class='ap-main-container'>";
    echo "<h2>Företagsansökan</h2>";


    print "<table border=0 class='CV-table'>\n";
    print "<tr>
      <th>ID</th>
      <th>Datum</th>
      <th>Företagsnamn</th>
      <th>Namn</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Meddelande</th>
      <th>Redigera rad</th>
    </tr>";
    while ($c_row = mysqli_fetch_array($c_result)){
      $c_form_id = $c_row['id'];
      $c_form_time = $c_row['time'];
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
      echo "<div>$c_form_time</div>";
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
      print "\t<td>\n";
      echo "<button type='button' class='btn respond-btn'>Svarat</button><button type='button' class='btn delete-btn'>Radera</button>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";

?>
