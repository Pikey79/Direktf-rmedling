<?php
    include('db.php');

    $c_query= "SELECT id, time, company_name, name, phone, email, message, marked FROM search_staff ORDER BY ID desc";
    $c_result = mysqli_query($conn, $c_query);

    // Mark a line
    if (isset($_POST['mark'])) {
    # Svarat was clicked
      if(isset($_POST["id"])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE search_staff SET marked = 'marked' WHERE id = $id";
        mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    } elseif (isset($_POST['unmark'])) {
    # Avmarkera was clicked
      if(isset($_POST["id"])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE search_staff SET marked = 'xxx' WHERE id = $id";
        mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    }

    // Delete a line, Delete row from DB
    if(isset($_POST["id"]) && isset($_POST["id_delete"])) {
      $id_delete = mysqli_real_escape_string($conn, $_POST['id']);
      $query = "DELETE FROM search_staff WHERE id = $id_delete";
      mysqli_query($conn, $query);

      // Refresh site
      if ($conn->query($query) === TRUE) {
        header("Refresh:0");
      }

    }


    echo "<div class='ap-main-container'>";
    echo "<div class='container-fluid padding'>";
    echo "<h2>Företagsansökan</h2>";

    echo "<div style='overflow-x:auto;'>";
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
      $form_marked = $c_row['marked'];
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
      echo "<div class='message-popup'><div class='close-btn'><i class='fa fa-times'></i></div>
      $c_form_message</div>";
      echo "<div><button class='btn message-btn'>Meddelande</button></div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<form method='POST'>";
      echo "<div class='marked-row'>$form_marked</div>";
      echo '<input type="hidden" name="id" value="'.$c_row['id'].'">';
      echo "<button type='submit' name='mark' class='btn respond-btn'>Svarat</button><button type='submit' name='unmark' class='btn unmark-btn'>Avmarkera</button><button name='id_delete' type='submit' onclick='return deleletconfig()' class='btn delete-btn'>Radera</button>";
      echo "</form>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";
    echo "</div>";
    echo "</div>";

?>
