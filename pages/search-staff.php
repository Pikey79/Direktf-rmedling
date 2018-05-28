<?php
	include('db_connect.php');
	include('form_db_connect.php');
?>
<div class="ap-main-container">
	<!-- Section -->
	<div class="container-fluid padding ap-more-padding">
		<div class="row">
			<div class="col-lg-6">
				<h2>Söker ni personal?</h2>
				<p>Söker ni personal kan ni kontakta oss via formuläret eller maila någon av våra verksamhetsansvariga direkt, <a href="index.php?page=contact">kontakta oss</a>.</p>
			</div>
			<div class="col-lg-6">
				<div class="form-container form-container-search-stuff-bg">
					<h2 class="form-heading">Sök personal</h2>
					<form method="post" action="">
						<div class="form-group">
							<input class="form-control" id="company-name" type="text" placeholder="Företagsnamn" name="company_name" required>
						</div>
						<div class="form-group">
							<input class="form-control" id="name" type="text" placeholder="Namn"  name="c_name" required>
						</div>
						<div class="form-group">
							<input class="form-control" id="phone" type="number" placeholder="Telefon" name="c_phone" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="c_email" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="exampleTextarea" placeholder="Meddelande" rows="3" name="c_message" required></textarea>
						</div>
						<button type="submit" name='submit' class="btn btn-primary form-submit-btn">Skicka</button>
					</form>

				</div>
		</div>
	</div>
