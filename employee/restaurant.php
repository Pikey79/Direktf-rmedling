
<div class="ap-main-container">


  <div class="ap-main-container">
    <div class="container-fluid padding ap-more-padding">
      <div class="row">
        <div class="col-lg-6">
          <h2>Hotell & Restaurang</h2>
          <p class="responsible-heading">Verksamhetsansvarig Hotell &amp; Restaurang, Detaljhandel och Lokalvård</p>
          <p>Reza Djam</p>
          <a href="tel:0707825306"><p>(+46)70 - 782 53 06</p></a>
          <p>reza@direktformedling.se</p>
        </div>
        <div class="col-lg-6">
          <div style="overflow-x:auto;" class="form-margin">
            <p class="redline-text">Rödmarkerad rad visar att tiden är bokad</p>
            <table class="table table-striped">
              <thead class="employee-th">
                <tr>
                  <th>Plats</th>
                  <th>Datum</th>
                  <th>Tid</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include('../admin/db.php');

                  $query= "SELECT * FROM restaurant_time ORDER BY ID desc";
                  $result = mysqli_query($conn, $query);

                  while ($row = mysqli_fetch_array($result)){
                    $form_id = $row['id'];
                    $form_place = $row['place'];
                    $form_date = $row['date'];
                    $form_time = $row['time'];
                    $form_marked = $row['marked'];
                    echo '
                      <tr>
                        <td>'.$row['place'].'</td>
                        <td>'.$row['date'].'</td>
                        <td>'.$row['time'].'</td>
                        <td class="marked-row">'.$row['marked'].'</td>
                      </tr>
                    ';
                  }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
