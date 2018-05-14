
<?php
    include('db.php');

    $query= "SELECT id, time, name, phone, email, message, operation, filename, marked FROM apply_job ORDER BY ID desc";
    $result = mysqli_query($conn, $query);

    // Mark a line
    if (isset($_POST['mark'])) {
    # Svarat was clicked
      if(isset($_POST["id"])) {
      	$id = mysqli_real_escape_string($conn, $_POST['id']);
      	$query = "UPDATE apply_job SET marked = 'marked' WHERE id = $id";
      	mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    } elseif (isset($_POST['unmark'])) {
    # Avmarkera was clicked
      if(isset($_POST["id"])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE apply_job SET marked = 'xxx' WHERE id = $id";
        mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    }


    echo "<div class='ap-main-container'>";
    echo "<h2>Jobbansökan</h2>";

    print "<table border=0 class='CV-table'>\n";
    print "<tr>
      <th>ID</th>
      <th>Datum</th>
      <th>Namn</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Meddelande</th>
      <th>Verksamhet</th>
      <th>CV/Personligtbrev</th>
      <th>Redigera rad</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)){
      $form_id = $row['id'];
      $form_time = $row['time'];
      $form_name = $row['name'];
      $form_phone = $row['phone'];
      $form_email = $row['email'];
      $form_message = $row['message'];
      $form_operation = $row['operation'];
      $files_field= $row['filename'];
      $files_show= "../Uploads/files/$files_field";
      $form_marked = $row['marked'];
      print "<tr>\n";
      print "\t<td>\n";
      echo "<div>$form_id</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_time</div>";
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
      echo "<div align=center><a class='link-CV' href='$files_show'>Personligtbrev / CV</a></div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<form method='POST'>";
      echo "<div class='marked-row'>$form_marked</div>";
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo "<button type='submit' name='mark' class='btn respond-btn'>Svarat</button><button type='submit' name='unmark' class='btn unmark-btn'>Avmarkera</button><button type='button' class='btn delete-btn'>Radera</button>";
      echo "</form>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";

?>