<!DOCTYPE html>
<html>
<head>
	<title>Herbal Eggs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/recipe.css">
</head>
<body>
<header>
	<ol class="breadcrumb fixed-top">
		<li class="display-3 fixed-top">Herbal Eggs</li>
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="catalog.php">Catalog</a> </li>
		<li class="breadcrumb-item"><a href="about.php">About</a></li>
		<li><a href="#to-top" class="btn btn-warning">^ Back to top ^</a></li>
	</ol>
</header>

<main>
	<div class="container" id="to-top">
	<div class="row">
		<div class="col-md-2">
			<div>
			<h4>Navigation</h4>
			<div class="btn-group-vertical">
			  <a href="#ingredients" class="btn btn-warning">Ingredients</a>
			  <a href="#directions" class="btn btn-danger">Cooking Directions</a>
			  <br>
		  	<h6>Conversion tool:</h6>
		  	<p><input id="g" onkeyup="convert('G')" size="1"> grams <br><input id='oz' onkeyup="convert('OZ')" size="1"> oz</p>

		  <script>
		  	function convert(mass) {
		  		var x;
		  		if (mass == 'G') {
		  			x = document.getElementById('g').value / 28.35;
		  			document.getElementById('oz').value = Math.round(x);
		  		} else {
		  			x = document.getElementById('oz').value * 28.35;
		  			document.getElementById('g').value = Math.round(x);
		  		}
		  	}

		  	function errmessage() {
		  		alert('Image could not be loaded.');
		  	}
		  </script>
			</div>
			</div>
		</div>
	
		<div class="col-md-8">
			<h5><a href="#recipe">SKIP TO RECIPE</a></h5>
			<p>
			Chinese tea leaf eggs are eggs steeped in a tea-infused liquid. Tea leaf eggs are marbled in appearance and flavorful.
			</p>
	
			<img class="food" src="../images/herbal_eggs.jpeg" width="350" alt="Herbal Eggs" onerror="errmessage()">
			<img src="../images/egg_review.jpeg" width="350" alt="Herbal Eggs2" onerror="errmessage()">
	
	
			<h2 id="recipe">HERBAL EGGS RECIPE</h2>
			<h3 id="ingredients">INGREDIENTS</h3>
			<div class="list-group">
				<ul>
					<li class="list-group-item list-group-item-action">12 eggs</li>
					<li class="list-group-item list-group-item-action">4 cups water</li>
					<li class="list-group-item list-group-item-action">6 tablespoons low-sodium soy sauce</li>
					<li class="list-group-item list-group-item-action">3 tablespoons Chinese pu-erh tea leaf</li>
					<li class="list-group-item list-group-item-action">1 stick cinnamon</li>
					<li class="list-group-item list-group-item-action">1 star anise</li>
					<li class="list-group-item list-group-item-action">3 cloves</li>
					<li class="list-group-item list-group-item-action">1/2 teaspoon Chinese five-spice powder</li>
					<li class="list-group-item list-group-item-action">1 teaspoon sugar</li>
				</ul>
			</div>
	
			<br>
			<h3 id="directions">DIRECTIONS</h3>
			<div class="jumbotron">
				<ol>
					<li>Heat up a pot with 4 cups of water. <strong><em>Bring it to a boil.</em></strong></li>
					<li>Add <strong><em>4 cups of water</em></strong> to a medium pot and gently drop in the eggs. Make sure the water covers the eggs.</li>
					<li>Bring the water to boil on <strong><em>high heat</em></strong>. Boil for about <strong><em>10 minutes</em></strong> or so to make sure the eggs are cooked.</li>
					<li>Transfer the hard-boiled eggs out of the hot boiling water and <strong><em>rinse them with cold water</em></strong>. </li>
					<li>Using the back of a teaspoon, gently tap the eggshell to crack the shell.</li>
					<li>Return the eggs to the water and add in the remaining ingredients.</li>
					<li>Bring the tea mixture to a boil and immediately turn the heat to low. </li>
					<li>Simmer for <strong><em>2 hours</em></strong> (the longer the simmering, the better the taste). Add more water if needed.</li>
            		<li><strong><em>Serve immediately</em></strong> or leave the tea eggs in the mixture overnight to further develop the color and flavor.</li>
				</ol>
			</div>
			<h4 onmouseover="" style="cursor: pointer;"><a onclick='window.print()'><img src="../images/printer.jpg" width="35">Print this page</a></h4>

			<p>Taken with reference from <a href="https://rasamalaysia.com//" target="_blank">rasamalaysia.com</a>  </p>
		</div>
	
		<div class="col-md-2">
			<h3>Check Out Other Sedap Recipes!</h3>
			<div class="jumbotron">
			<figure>
				<a href="japanese_curry.php"><img src="../images/japcurry.jpeg" title="Japanese Curry" alt="Japanese Curry" onerror="errmessage()">
					<em>Japanese Curry</em>
				</a>
			</figure>
	
			<figure>
					<a href="beef_bulgogi.php"><img src="../images/bulgogi.jpeg" title="Beef Bulgogi" alt="Beef Bulgogi" onerror="errmessage()">
						<em>Beef Bulgogi</em>
					</a>
			</figure>
	
			<figure>
					<a href="../php/bao.php"><img src="../images/bao.jpeg" title="Char Siu Bao" alt="Char Siu Bao" onerror="errmessage()">
						<em>Char Siu Bao</em>
					</a>
			</figure>
	
			<figure>
					<a href="braised_pork.php"><img src="../images/braised_pork.jpeg" title="Braised Pork" alt="Braised Pork" onerror="errmessage()">
						<em>Braised Pork</em>
					</a>
			</figure>
			</div>
	</div>
		
	</div>
	</div>
	</main>
	
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h4 class="breadcrumb">Love our recipe? Leave a comment <a href="forms.php">here!</a></h4>
			</div>
		</div>
	
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