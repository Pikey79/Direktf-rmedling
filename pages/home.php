<?php
	include('db_connect.php');
?>

<!--- Banner Homepage -->
<div class="container-fluid" style="padding: 0px;">
	 <figure>
			<div class="banner-container banner-homepage">
				<div class="banner-heading-container">
					<h1 class="display-2">Direktförmedling</h1>
					<h3>Vi kan bemanning</h3>
					<a href="index.php?page=search-staff"><button type="button" class="btn btn-primary btn-lg stuff-button">Sök personal</button></a>
					<a href="index.php?page=application"><button type="button" class="btn btn-primary btn-lg">Sök jobb</button></a>
				</div>
			</div>
	 </figure>
</div>

<div class="ap-main-container">
	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Era behov – Vår prioritet</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">På Direktförmedling jobbar vi för att få er verksamhet att flyta på i stillsamma vågor när havet ibland stormar.
					Vare sig ni behöver snabba och korta lösningar på vakanser eller planerade och långvariga så erbjuder vi alltid er en lösning.</p>
			</div>
		</div>
	</div>


	<!--- Three Column Section -->
	<div class="container-fluid padding">
		<div class="usp-outer-container">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4 usp-container">
					<i class="far fa-check-square"></i><p class="usp-text">Direkta lösningar för er!</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 usp-container">
					<i class="far fa-check-square"></i><p class="usp-text">Era behov – Vår prioritet!</p>
				</div>
				<div class="col-sm-12 col-md-4 usp-container">
					<i class="far fa-check-square"></i><p class="usp-text">Vi kan bemanning!</p>
				</div>
			</div>
		</div>
	</div>

	<!--- operations Section -->
	<div class="container-fluid padding bg-color ap-more-padding">
		<div class="row">
			<div class="col-lg-6">
				<h2>Vi har en mångårig branschvana inom ett flertal branscher</h2>
				<p>Vi som startat Direktförmedling AB har en bred och mångårig erfarenhet inom de branscher vi erbjuder personallösningar på.
					Denna erfarenhet gör att vi alltid strävar efter att matcha rätt person på rätt plats och rätt uppdrag. Här kan du se de verksamheter vi erbjuder personallösningar och tjänster på.</p>
				<br>
			</div>
			<div class="col-lg-6">
				<h2>Sju olika verksamheter</h2>
				<div class="row list-button-operation">
				  <div class="col"><a href="index.php?page=school" class="btn btn-primary btn-lg operations">Skola</a></div>
					<div class="col"><a href="index.php?page=care" class="btn btn-primary btn-lg operations">Vård &amp; Omsorg</a></div>
				  <div class="col"><a href="index.php?page=economy" class="btn btn-primary btn-lg operations">Ekonomi</a></div>
				  <div class="col"><a href="index.php?page=cleaning" class="btn btn-primary btn-lg operations">Lokalvård</a></div>
				  <div class="col"><a href="index.php?page=restaurant" class="btn btn-primary btn-lg operations">Restaurang &amp; Hotell</a></div>
				  <div class="col"><a href="index.php?page=retail" class="btn btn-primary btn-lg operations">Detaljhandel</a></div>
					<div class="col"><a href="index.php?page=construction" class="btn btn-primary btn-lg operations">Bygg</a></div>
				</div>
			</div>
		</div>
	</div>


	<!--- Cards -->
	<?php
		// School
		$query_school = "SELECT * FROM card_text WHERE id = 1";
		$result_school = mysqli_query($db, $query_school);
		$card_school = mysqli_fetch_assoc($result_school);

		// Restaurant
		$query_restaurant = "SELECT * FROM card_text WHERE id = 2";
		$result_restaurant = mysqli_query($db, $query_restaurant);
		$card_restaurant = mysqli_fetch_assoc($result_restaurant);

		// Economy
		$query_economy = "SELECT * FROM card_text WHERE id = 3";
		$result_economy = mysqli_query($db, $query_economy);
		$card_economy = mysqli_fetch_assoc($result_economy);

		// Cleaning
		$query_cleaning = "SELECT * FROM card_text WHERE id = 4";
		$result_cleaning = mysqli_query($db, $query_cleaning);
		$card_cleaning = mysqli_fetch_assoc($result_cleaning);



		echo '
			<div class="container-fluid padding bg-color-cards">
				<h2>Lediga tjänster hos oss</h2>
				<div class="row">
					<div class="col-md-3 card-container">
						<div class="card">
							<img class="card-img-top" src="img/df/teacher.jpg">
							<div class="card-body">
								<h4 class="card-title">'.$card_school['heading_text'].'</h4>
								<p class="card-text">'.$card_school['content_text'].'</p>
								<div class="card-button-container"><a href="index.php?page=school" class="btn btn-outline-secondary">Kontakta oss</a></div>
							</div>
						</div>
					</div>

					<div class="col-md-3 card-container">
						<div class="card">
							<img class="card-img-top" src="img/df/waitress.jpg">
							<div class="card-body">
								<h4 class="card-title">'.$card_restaurant['heading_text'].'</h4>
								<p class="card-text">'.$card_restaurant['content_text'].'</p>
								<div class="card-button-container"><a href="index.php?page=restaurant" class="btn btn-outline-secondary">Kontakta oss</a></div>
							</div>
						</div>
					</div>

					<div class="col-md-3 card-container">
						<div class="card">
							<img class="card-img-top" src="img/df/business.jpg">
							<div class="card-body">
								<h4 class="card-title">'.$card_economy['heading_text'].'</h4>
								<p class="card-text">'.$card_economy['content_text'].'</p>
								<div class="card-button-container"><a href="index.php?page=economy" class="btn btn-outline-secondary">Kontakta oss</a></div>
							</div>
						</div>
					</div>

					<div class="col-md-3 card-container">
						<div class="card">
							<img class="card-img-top" src="img/df/cleanless.jpg">
							<div class="card-body">
								<h4 class="card-title">'.$card_cleaning['heading_text'].'</h4>
								<p class="card-text">'.$card_cleaning['content_text'].'</p>
								<div class="card-button-container"><a href="index.php?page=cleaning" class="btn btn-outline-secondary">Kontakta oss</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		';

	?>


	<!--- Hire staff -->
	<div class="container-fluid padding ap-more-padding bg-color">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>Varför Bemanning?</h2>
				<p>- Vid plötsliga vakanser så som föräldraledighet eller sjukdom</p>
				<p>- Vid förändring av arbetsbelastning</p>
				<p>- Vid organisationsförändringar</p>
				<p>Utöver att det spar dig som arbetsgivare tid på att plötsligt hitta rätt medarbetare så kan bemanning via Direktförmedling göra din verksamhet flexibel och fortsätta svara på dina kunders behov. Vi finns till för att underlätta för dig!</p>
				<br>
				<a href="index.php?page=search-staff"><button type="button" class="btn btn-primary btn-lg hire-staff-btn">Sök personal</button></a>
			</div>
			<div class="col-lg-6 hire-staff">
				<img src="img/df/staff.png" class="img-fluid">
			</div>
		</div>
	</div>
