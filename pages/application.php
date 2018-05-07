<?php
	include('db_connect.php');
	include('form_db_connect.php');
?>

<div class="ap-main-container">
	<!-- Section -->
	<div class="container-fluid padding ap-more-padding">
		<div class="row">
			<div class="col-lg-6">
				<h2>Sök jobb</h2>
				<p>På Direktförmedling lägger vi stor vikt vid personliga egenskaper. Vi söker därför dig som gillar att arbeta tillsammans med människor och skapa goda relationer.
					Du arbetar strukturerat, ansvarsfullt och med en god service.</p>
				<hr>
				<p>Registrera ditt CV, vid frågor <a href="index.php?page=contact">kontakta oss</a>.</p>
			</div>
			<div class="col-lg-6">
				<div class="form-container">
					<h2 class="form-heading">Sök jobb hos oss</h2>
					<form method="post" action="" enctype="multipart/form-data">
				    <div class="form-group">
				      <input class="form-control" id="name" type="text" placeholder="Namn" name="name" required>
				    </div>
				    <div class="form-group">
				      <input class="form-control" id="phone" type="number" placeholder="Telefon" name="phone" required>
				    </div>
				    <div class="form-group">
				      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required>
				    </div>
				    <div class="form-group">
				      <textarea class="form-control" id="exampleTextarea" placeholder="Meddelande" rows="3" name="message"></textarea>
				    </div>
				    <p>
				       <select class="selectpicker" id="operations" name="operation">
				         <option value = "Ej_vald" id ="operations-select">Välj verksamhet</option>
				         <option value = "Skola" id ="school-select">Skola</option>
				         <option value = "Vård & Omsorg" id ="care-select">Vård & Omsorg</option>
				         <option value = "Restaurang & Hotell" id ="restaurant-select">Restaurang & Hotell</option>
				         <option value = "Ekonomi" id ="economy-select">Ekonomi</option>
				         <option value = "Lokalvård" id ="cleaning-select">Lokalvård</option>
				         <option value = "Detaljhandel" id ="retail-select">Detaljhandel</option>
				         <option value = "Bygg" id ="construction-select">Bygg</option>
				       </select>
				     </p>
				    <div class="form-group">
				      <label for="exampleInputFile">Ladda upp CV / Personligtbrev</label>
				      <input type="file" class="form-control-file" id="InputCV" aria-describedby="fileHelp" name="file">
				    </div>
				    <!--<div class="form-group">
				      <label for="exampleInputFile">Ladda upp ditt personliga brev</label>
				      <input type="file" class="form-control-file" id="InputPL" aria-describedby="fileHelp" name="InputPL">
				    </div>-->
				    <button type="submit" name="submit" value="upload" class="btn btn-primary form-submit-btn">Skicka</button>
				  </form>

				</div>
			</div>
		</div>
	</div>
