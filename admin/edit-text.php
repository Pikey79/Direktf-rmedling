<?php
	include('db.php');

	// School
	$query_school = "SELECT * FROM card_text WHERE id = 1";
	$result_school = mysqli_query($conn, $query_school);
	$card_school = mysqli_fetch_assoc($result_school);

	// Restaurant
	$query_restaurant = "SELECT * FROM card_text WHERE id = 2";
	$result_restaurant = mysqli_query($conn, $query_restaurant);
	$card_restaurant = mysqli_fetch_assoc($result_restaurant);

	// Economy
	$query_economy = "SELECT * FROM card_text WHERE id = 3";
	$result_economy = mysqli_query($conn, $query_economy);
	$card_economy = mysqli_fetch_assoc($result_economy);

	// Cleaning
	$query_cleaning = "SELECT * FROM card_text WHERE id = 4";
	$result_cleaning = mysqli_query($conn, $query_cleaning);
	$card_cleaning = mysqli_fetch_assoc($result_cleaning);

	// Update text
	if(isset($_POST["id-school"])) {
		$new_school_heading = mysqli_real_escape_string($conn, $_POST['school-heading']);
		$new_school_text = mysqli_real_escape_string($conn, $_POST['school-text']);
		$query_school_update = "UPDATE card_text SET heading_text = '$new_school_heading', content_text = '$new_school_text' WHERE id = 1";
		mysqli_query($conn, $query_school_update);

		// Refresh site
		if ($conn->query($query_school_update) === TRUE) {
			header("Refresh:0");
		}
	}

	if(isset($_POST["id-restaurant"])) {
		$new_restaurant_heading = mysqli_real_escape_string($conn, $_POST['restaurant-heading']);
		$new_restaurant_text = mysqli_real_escape_string($conn, $_POST['restaurant-text']);
		$query_restaurant_update = "UPDATE card_text SET heading_text = '$new_restaurant_heading', content_text = '$new_restaurant_text' WHERE id = 2";
		mysqli_query($conn, $query_restaurant_update);

		// Refresh site
		if ($conn->query($query_restaurant_update) === TRUE) {
			header("Refresh:0");
		}
	}

	if(isset($_POST["id-economy"])) {
		$new_economy_heading = mysqli_real_escape_string($conn, $_POST['economy-heading']);
		$new_economy_text = mysqli_real_escape_string($conn, $_POST['economy-text']);
		$query_economy_update = "UPDATE card_text SET heading_text = '$new_economy_heading', content_text = '$new_economy_text' WHERE id = 3";
		mysqli_query($conn, $query_economy_update);

		// Refresh site
		if ($conn->query($query_economy_update) === TRUE) {
			header("Refresh:0");
		}
	}

	if(isset($_POST["id-cleaning"])) {
		$new_cleaning_heading = mysqli_real_escape_string($conn, $_POST['cleaning-heading']);
		$new_cleaning_text = mysqli_real_escape_string($conn, $_POST['cleaning-text']);
		$query_cleaning_update = "UPDATE card_text SET heading_text = '$new_cleaning_heading', content_text = '$new_cleaning_text' WHERE id = 4";
		mysqli_query($conn, $query_cleaning_update);

		// Refresh site
		if ($conn->query($query_cleaning_update) === TRUE) {
			header("Refresh:0");
		}
	}

?>


<div class="container-fluid padding bg-color-cards">
		<h2>Redigera texter</h2>
		<div class="row">
			<div class="col-md-3 card-container">
				<div class="card">
					<img class="card-img-top" src="../img/df/teacher.jpg">
					<div class="card-body">
						<?php
							echo '
							<form method="POST" action="">
							    <div class="form-group">
							      <textarea class="form-control" id="school-heading" type="text" placeholder="Rubrik för skola..." name="school-heading">'.$card_school['heading_text'].'</textarea>
							    </div>
							    <div class="form-group">
							      <textarea class="form-control" id="school-text" placeholder="Text..." rows="3" name="school-text">'.$card_school['content_text'].'</textarea>
							    </div>
									<input type="hidden" name="id-school">
							    <button type="submit" name="school-submit" class="btn btn-primary form-submit-btn">Ändra</button>
							</form>
							';
						?>
					</div>
				</div>
			</div>

			<div class="col-md-3 card-container">
				<div class="card">
					<img class="card-img-top" src="../img/df/waitress.jpg">
					<div class="card-body">
						<?php
							echo '
								<form method="POST" action="">
								    <div class="form-group">
								      <textarea class="form-control" id="restaurant-heading" type="text" placeholder="Rubrik för restaurang..." name="restaurant-heading">'.$card_restaurant['heading_text'].'</textarea>
								    </div>
								    <div class="form-group">
								      <textarea class="form-control" id="restaurant-text" placeholder="Text..." rows="3" name="restaurant-text">'.$card_restaurant['content_text'].'</textarea>
								    </div>
										<input type="hidden" name="id-restaurant">
								    <button type="submit" name="restaurant-submit" class="btn btn-primary form-submit-btn">Ändra</button>
								</form>
							';
						?>
					</div>
				</div>
			</div>

			<div class="col-md-3 card-container">
				<div class="card">
					<img class="card-img-top" src="../img/df/business.jpg">
					<div class="card-body">
						<?php
							echo '
								<form method="POST" action="">
								    <div class="form-group">
								      <textarea class="form-control" id="economy-heading" type="text" placeholder="Rubrik för ekonomi..." name="economy-heading">'.$card_economy['heading_text'].'</textarea>
								    </div>
								    <div class="form-group">
								      <textarea class="form-control" id="economy-text" placeholder="Text..." rows="3" name="economy-text">'.$card_economy['content_text'].'</textarea>
								    </div>
										<input type="hidden" name="id-economy">
								    <button type="submit" name="economy-submit" class="btn btn-primary form-submit-btn">Ändra</button>
								</form>
							';
						?>
					</div>
				</div>
			</div>

			<div class="col-md-3 card-container">
				<div class="card">
					<img class="card-img-top" src="../img/df/cleanless.jpg">
					<div class="card-body">
						<?php
							echo '
								<form method="POST" action="">
								    <div class="form-group">
								      <textarea class="form-control" id="cleaning-headin" type="text" placeholder="Rubrik för lokalvård..." name="cleaning-heading">'.$card_cleaning['heading_text'].'</textarea>
								    </div>
								    <div class="form-group">
								      <textarea class="form-control" id="cleaning-text" placeholder="Text..." rows="3" name="cleaning-text">'.$card_cleaning['content_text'].'</textarea>
								    </div>
										<input type="hidden" name="id-cleaning">
								    <button type="submit" name="cleaning-submit" class="btn btn-primary form-submit-btn">Ändra</button>
								</form>
						';
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
