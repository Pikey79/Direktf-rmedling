<?php
	include('db_connect.php');
	include('form_db_connect.php');
?>
<!-- Section -->
<div class="container-fluid" style="padding: 0px;">
	 <figure>
			<div class="banner-container banner-care">
				<div class="banner-heading-container">
					<h1 class="display-2">Vård och Omsorg</h1>
				</div>
			</div>
	 </figure>
</div>

<div class="ap-main-container">

	<div class="container-fluid padding ap-more-padding">
		<div class="row">
			<div class="col-lg-6">
				<h2>Vård och Omsorg</h2>
				<p>Direktförmedling hyr ut legitimerade sjuksköterskor för vårduppdrag.
					Behöver du personal eller söker du jobb? Kontakta verksamhetsansvarig Adil Nassef på adil@direktformedling.se eller ring <a href="tel:0721821770">(+46)72 - 182 17 70</a>.</p>
			</div>
			<div class="col-lg-6 form-margin">
				<div class="flap-one flap-active">För arbetssökande</div>
				<div class="flap-two">För arbetsgivare</div>
				<?php include('form-apply-job.php'); ?>
				<?php include('form-search-staff.php'); ?>
			</div>
		</div>
	</div>
