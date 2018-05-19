<?php
    include('db.php');

    // Add new work place
    if  (isset($_POST['work_place'])
    && isset($_POST['work_date'])
    && isset($_POST['work_time'])) {

      // escape variables for security
      $name = mysqli_real_escape_string($conn, $_POST['work_place']);
      $email= mysqli_real_escape_string($conn, $_POST['work_date']);
      $tel = mysqli_real_escape_string($conn, $_POST['work_time']);

      // attempt insert query execution
      $query = "INSERT into cleaning_time (place, date, time)
      VALUES ('$name', '$email', '$tel')";

      // Refresh site
      if ($conn->query($query) === TRUE) {
        header("Refresh:0");

      }
    }

    //-------------------------------------------------------------------------//

    $query= "SELECT * FROM cleaning_time ORDER BY ID desc";
    $result = mysqli_query($conn, $query);

    // Mark a line
    if (isset($_POST['mark'])) {
    # Svarat was clicked
      if(isset($_POST["id"])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE cleaning_time SET marked = 'marked' WHERE id = $id";
        mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    } elseif (isset($_POST['unmark'])) {
    # Avmarkera was clicked
      if(isset($_POST["id"])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $query = "UPDATE cleaning_time SET marked = 'xxx' WHERE id = $id";
        mysqli_query($conn, $query);

        if ($conn->query($query) === TRUE) {
          header("Refresh:0");
        }
      }
    }

    //-------------------------------------------------------------------------//

    // Delete a line, Delete row from DB
    if(isset($_POST["id"]) && isset($_POST["id_delete"])) {
      $id_delete = mysqli_real_escape_string($conn, $_POST['id']);
      $query = "DELETE FROM cleaning_time WHERE id = $id_delete";
      mysqli_query($conn, $query);

      // Refresh site
      if ($conn->query($query) === TRUE) {
        header("Refresh:0");
      }

    }

    //-------------------------------------------------------------------------//


    echo "<div class='ap-main-container'>";
    echo "<div class='container-fluid padding'>";
    echo "<h2>Arbetstider Lokalvård</h2>";

    echo "<div style='overflow-x:auto;'>";
    print "<table border=0 class='CV-table TIME-table'>\n";
    print "<tr>
      <th>ID</th>
      <th>Plats</th>
      <th>Datum</th>
      <th>Tid</th>
      <th>Redigera rad</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)){
      $form_id = $row['id'];
      $form_place = $row['place'];
      $form_date = $row['date'];
      $form_time = $row['time'];
      $form_marked = $row['marked'];
      print "<tr>\n";
      print "\t<td>\n";
      echo "<div>$form_id</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_place</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_date</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<div>$form_time</div>";
      print "</td>\n";
      print "\t<td>\n";
      echo "<form method='POST'>";
      echo "<div class='marked-row'>$form_marked</div>";
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo "<button type='submit' name='mark' class='btn respond-btn'>Boka</button><button type='submit' name='unmark' class='btn unmark-btn'>Avboka</button><button name='id_delete' type='submit' onclick='return deleletconfig()' class='btn delete-btn'>Radera</button>";
      echo "</form>";
      print "</td>\n";
      print "</tr>\n";
    }
    print "</table>\n";
    echo "</div>";

?>


  <div style="overflow-x:auto;">
    <table class="table table-striped CV-table table-change-time">
      <thead class="employee-th">
        <tr>
          <th>Plats</th>
          <th>Datum</th>
          <th>Tid</th>
          <th>Lägg till</th>
        </tr>
      </thead>
      <tbody>
        <form method="POST" action="">
          <tr>
            <td>
              <textarea class="form-control" type="text" placeholder="Text för plats..." name="work_place"></textarea>
            </td>
            <td>
              <textarea class="form-control" type="text" placeholder="Text för datum..." name="work_date"></textarea>
            </td>
            <td>
              <textarea class="form-control" type="text" placeholder="Text för tid..." name="work_time"></textarea>
            </td>
            <td>
              <input type="hidden" name="id-new-work">
              <button type="submit" name="school-submit" class="btn change-time-btn">Lägg till</button>
            </td>
          </tr>
        </form>
      </tbody>
    </table>
  </div>
</div>
