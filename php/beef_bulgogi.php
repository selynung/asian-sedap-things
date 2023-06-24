<!DOCTYPE html>
<html>
<head>
	<title>Beef Bulgogi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/recipe.css">
</head>
<body>
<header>
	<ol class="breadcrumb fixed-top">
		<li class="display-3 fixed-top">Beef Bulgogi</li>
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
			A traditional Beef Bulgogi Recipe that’s stir-fried in a sweet and savory marinade, and is delicious served over rice with kimchi.
			</p>
	
			<img class="food" src="../images/bulgogi.jpeg" width="350" alt="Bulgogi" onerror="errmessage()">
			<img src="../images/bulgogi2.jpeg" width="350" alt="Bulgogi2" onerror="errmessage()">
	
	
			<h2 id="recipe">BEEF BULGOGI RECIPE</h2>
			<h3 id="ingredients">INGREDIENTS</h3>
			<div class="list-group">
				<ul>
					<li class="list-group-item list-group-item-action">1 1/2 pounds boneless rib eye steak</li>
					<li class="list-group-item list-group-item-action">1/2 small pear, peeled and coarsely grated</li>
					<li class="list-group-item list-group-item-action">1/4 cup reduced sodium soy sauce</li>
					<li class="list-group-item list-group-item-action">2 tablespoons light brown sugar</li>
					<li class="list-group-item list-group-item-action">2 tablespoons toasted sesame oil</li>
					<li class="list-group-item list-group-item-action">3 cloves garlic, minced</li>
					<li class="list-group-item list-group-item-action">1 tablespoon freshly grated ginger</li>
					<li class="list-group-item list-group-item-action">1 tablespoon gochujang (Korean red pepper paste)</li>
					<li class="list-group-item list-group-item-action">2 tablespoons vegetable oil, divided</li>
				</ul>
			</div>
	
			<br>
			<h3 id="directions">DIRECTIONS</h3>
			<div class="jumbotron">
				<ol>
					<li>Heat up a pot with 4 cups of water. <strong><em>Bring it to a boil.</em></strong></li>
					<li>Wrap steak in plastic wrap, and place in the freezer for 30 minutes. Unwrap and slice across the grain into 1/4-inch thick slices.</li>
					<li>In a medium bowl, combine pear, soy sauce, brown sugar, sesame oil, garlic, ginger and gochujang.</li>
					<li>In a gallon size Ziploc bag, combine soy sauce mixture and steak; marinate for <strong><em>at least 2 hours to overnight</em></strong>, turning the bag occasionally.</li>
					<li>Heat 1 tablespoon vegetable oil in a cast iron grill pan over <strong><em>medium-high heat</em></strong>.</li>
					<li>Working in batches, add steak to the grill pan in a single layer and cook, flipping once, until charred and cooked through, about 2-3 minutes per side.</li>
					<li>Repeat with remaining 1 tablespoon vegetable oil and steak.</li>
					<li><strong><em>Serve immediately</em></strong>, garnished with green onions and sesame seeds, if desired.</li>
				</ol>
			</div>
			<h4 onmouseover="" style="cursor: pointer;"><a onclick='window.print()'><img src="../images/printer.jpg" width="35">Print this page</a></h4>

			<p>Taken with reference from <a href="https://damndelicious.net//" target="_blank">damndelicious.net</a>  </p>
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
					<a href="braised_pork.php"><img src="../images/braised_pork.jpeg" title="Braised Pork" alt="Braised Pork" onerror="errmessage()">
						<em>Braised Pork</em>
					</a>
			</figure>
	
			<figure>
					<a href="bao.php"><img src="../images/bao.jpeg" title="Char Siu Bao" alt="Char Siu Bao" onerror="errmessage()">
						<em>Char Siu Bao</em>
					</a>
			</figure>
	
			<figure>
					<a href="herbal_eggs.php"><img src="../images/herbal_eggs.jpeg" title="Herbal Eggs" alt="Herbal Eggs" onerror="errmessage()">
						<em>Herbal Eggs</em>
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