<?php include('PHPMailer/sendemail.php'); ?>

<div class="form-container form-container-apply-job">
  <h2 class="form-heading">Sök jobb hos oss</h2>
  <form method="post" action="sendemail.php" enctype="multipart/form-data">
    <div class="form-group">
      <input class="form-control" id="name" type="text" placeholder="Namn" name="name">
    </div>
    <div class="form-group">
      <input class="form-control" id="phone" type="text" placeholder="Telefon" name="phone">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <textarea class="form-control" id="exampleTextarea" placeholder="Meddelande" rows="3" name="message"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Ladda upp ditt CV</label>
      <input type="file" class="form-control-file" id="InputCV" aria-describedby="fileHelp" name="InputCV">
    </div>
    <!--<div class="form-group">
      <label for="exampleInputFile">Ladda upp ditt personliga brev</label>
      <input type="file" class="form-control-file" id="InputPL" aria-describedby="fileHelp" name="InputPL">
    </div>-->
    <button type="submit" name="submit" class="btn btn-primary form-submit-btn">Skicka</button>
  </form>
  <?php if ($msg != "") echo "$msg<br><br>"; ?>

</div>
