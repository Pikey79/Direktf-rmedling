
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
    <p>
       <select class="selectpicker" id="operations">
         <option value = "0" id ="operations-select">Välj verksamhet</option>
         <option value = "1" id ="school-select">Skola</option>
         <option value = "2" id ="care-select">Vård & Omsorg</option>
         <option value = "3" id ="restaurant-select">Restaurang & Hotell</option>
         <option value = "4" id ="economy-select">Ekonomi</option>
         <option value = "5" id ="cleaning-select">Lokalvård</option>
         <option value = "6" id ="retail-select">Detaljhandel</option>
         <option value = "7" id ="construction-select">Bygg</option>
       </select>
     </p>
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
</div>
