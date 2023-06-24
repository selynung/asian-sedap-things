<?php
require_once('config.php'); 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Customer Reviews</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/forms.css">

		<script type="text/javascript" language="javascript" src="../js/forms.js"></script>
	</head>

	<body>
		<header>
			<ol class="breadcrumb fixed-top">
			<li class="display-3 fixed-top">Customer Reviews</li>
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="catalog.php">Catalog</a> </li>
			<li class="breadcrumb-item"><a href="about.php">About Us</a></li>
			<li><a href="#to-top" class="btn btn-info">^ Back to top ^</a></li>
			</ol>
		</header>

		<main>
		<div class="container">
		<div class="row" id="to-top">
			<div class="col-md-10">
				<h5>We are constantly trying to improve our website and cookbook!</h5>
				<h2>FEATURED REVIEWS</h2>
				<img src="../images/reviews_picture.jpg" alt="Reviews">

				<?php
				function outputReviews($row) {
						echo '<blockquote class="blockquote text-right">';
						echo '<p class="mb-0">' . $row['Comment'] . '</p>';
						$orange = $row['Ratings'];
						while ($orange > 0) {
							echo '<img src="../images/star-orange.png" alt="star orange">';
							$orange --;
						}
						$white = (5 - $row['Ratings']);
						while ($white > 0) {
							echo '<img src="../images/star-white.png" alt="star white">';
							$white --;
						}
						echo '<footer class="blockquote-footer">' . $row['Username'] . '<cite title="Source Title"></cite></footer>';
						echo '</blockquote>';
				}

				try {
					$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
					$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "select * from reviews";
					$result = $pdo ->query($sql);
					while ($row = $result ->fetch()) {
						outputReviews($row);
					}
					$pdo = null;
				}
				catch (PDOException $e) {
					die($e ->getMessage());
				}

				?>
			</div>

			<div class="col-md-2">
				<h3>Customer's pictures</h3>
				<div class="jumbotron">

					<?php
					function outputPictures($row) {
						echo '<figure>';
						echo '<img src="' . $row['File'] . '" alt="' . $row['Tried'] . ' Review">';
						echo '<figcaption>';
						echo '<em>' . $row['Tried'] . ' by ' . $row['Username'] . '</em>';
						echo '</figcaption>';
						echo '</figure>';
					}
					try {
						$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
						$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$sql = "select * from reviews";
						$result = $pdo ->query($sql);
						for ($i=0; $i <3 ; $i++) { 
							$row = $result ->fetch();
							outputPictures($row);						}
						
						$pdo = null;
					}
					catch (PDOException $e) {
						die($e ->getMessage());
					}
					?>
				</div>

				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 jumbotron">

				<h2>LEAVE US A REVIEW</h2>

				<form method="post" action="insert.php" id="reviewForm">
				<fieldset>
					<legend>Review Form</legend>

					<div class="form-group">
					<label class="control-label" >Username</label>
					<div class="form-group">
						<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">@</span>
						</div>
						<input type="text" class="form-control" name="username" id="Username">
						</div>
					</div>
					</div>

					<div class="form-group">
					<label for="exampleSelect1"><strong> Review about: </strong></label>
					<select name="review_type" class="form-control" id="exampleSelect1">
						<option id='selectdefault'>Choose review type</option>
						<optgroup label="Recipe">
							<option>Japanese Curry</option>
							<option>Herbal Eggs</option>
							<option>Braised Pork</option>
							<option>Char Siu Bao</option>
							<option>Beef Bulgogi</option>
						</optgroup>
						<optgroup label="General">
							<option>Pictures</option>
							<option>Website</option>
							<option>Others</option>
						</optgroup>
					</select>
					</div>

					<div class="form-group">
					<label for="Comment"><strong>Comment: </strong></label>
					<textarea name="comment" placeholder="Leave a comment"  class="form-control" id="Comment" rows="3"></textarea>
					</div>

					<div class="form-group">
					<label for="exampleInputFile"><strong>Select image:</strong></label>
					<input type="file" class="form-control-file" id="exampleInputFile" name="file" accept="image/*" aria-describedby="fileHelp">
					<small id="fileHelp" class="form-text text-muted">Tried a recipe? Take a picture and share it with us!</small>
					</div>

					<div class="form-group" id='radio' value='0'>
						<div class="form-check">
						<label><strong>Gender: </strong> </label>
						<br>
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="F">
						Female
						</label>
					</div>
					<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="M">
						Male
						</label>
					</div>
					</div>

					<div class="form-group">
						<div class="form-check">
						<label><strong> Recipes tried: </strong></label><br>
						<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="tried" value="Japanese Curry">Japanese Curry
						</label>
						<br>
						<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="tried" value="Herbal Eggs">Herbal Eggs
						</label>
						<br>
						<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="tried" value="Braised Pork">Braised Pork
						</label>
						<br>
						<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="tried" value="Char Siu Bao">Char Siu Bao
						</label>
						<br>
						<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="tried" value="Beef Bulgogi">Beef Bulgogi
						</label>
						<br>
					</div>
					</div>

					<div class="form-group">
						<label><strong>Ratings:</strong></label>
						<label for="customRange1">Rate us from 1-5</label>
						<input type="range" class="custom-range" id="Ratings" name="ratings" value="0" min="0" max="5">
					</div>

					<button id='submitButton' type="submit" class="btn btn-primary">Submit</button>

					<button id='resetButton' type="reset" class="btn btn-primary" onclick="return confirm('Are you sure you want to reset your details?')">Reset</button>
				</fieldset>
				</form>
				<br>
				<div id="errors" class="visible">
				</div>
			</div>


		</div>
		</div>
		</main>

		<footer>
			<div class="container">
			<h3>Thank you for the reviews!</h3>

			<?php
				include '../includes/footer.inc.php';
			?>
			</div>
		</footer>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>