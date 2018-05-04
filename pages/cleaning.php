<?php
	include('db_connect.php');
	include('form_db_connect.php');
?>
<!-- Section -->
<div class="container-fluid" style="padding: 0px;">
	 <figure>
			<div class="banner-container banner-cleaning">
				<div class="banner-heading-container">
					<h1 class="display-2">Lokalvård</h1>
				</div>
			</div>
	 </figure>
</div>

<div class="ap-main-container">
	<div class="container-fluid padding ap-more-padding">
		<div class="row">
			<div class="col-lg-6">
				<h2>Lokalvård</h2>
				<p>Direktförmedling utför flyttstäd, byggstäd samt andra städuppdrag. Vi hyr även ut utbildade lokalvårdare för både stora och små uppdrag.
					Behöver du personal eller söker du jobb? Kontakta verksamhetsansvarig Reza Djam på reza@direktformedling.se eller ring <a href="tel:0707825306">(+46)70 - 782 53 06</a>.</p>
			</div>
			<div class="col-lg-6 form-margin">
				<div class="flap-one flap-active">För arbetssökande</div>
				<div class="flap-two">För arbetsgivare</div>
				<?php include('form-apply-job.php'); ?>
				<?php include('form-search-staff.php'); ?>
			</div>
		</div>
	</div>
