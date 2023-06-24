<!DOCTYPE html>
<html>
<head>
	<title>Braised Pork</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/recipe.css">

</head>
<body>
<header>
	<ol class="breadcrumb fixed-top">
	  <li class="display-3 fixed-top">Braised Pork</li>
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
		Pork belly is steeped in an intensely flavorful soy sauce. The taste is complex, sophisticated, addictive, and utterly delectable.
		</p>

		<img class="food" src="../images/braised_pork2.jpeg" width="350" alt="Braised Pork Belly" onerror="errmessage()">
		<img src="../images/braised_pork.jpeg" width="350" alt="Braised Pork Belly" onerror="errmessage()">


		<h2 id="recipe">BRAISED PORK BELLY RECIPE</h2>
		<h3 id="ingredients">INGREDIENTS</h3>
		<div class="list-group">
			<ul>
				<li class="list-group-item list-group-item-action">1 lb. of pork belly, cut into small pieces</li>
				<li class="list-group-item list-group-item-action">4 cups of water</li>
				<li class="list-group-item list-group-item-action">1 pulp garlic, lightly pounded with the back of a cleaver</li>
				<li class="list-group-item list-group-item-action">1 tbsp white pepper corn, smashed and cracked</li>
				<li class="list-group-item list-group-item-action">5 hard-boiled eggs</li>
				<li class="list-group-item list-group-item-action">8 oz. fried tofu/bean curd</li>
				<li class="list-group-item list-group-item-action">4 tbsp soy sauce</li>
				<li class="list-group-item list-group-item-action">3 tbsp sweet soy sauce(kecap manis)</li>
				<li class="list-group-item list-group-item-action">1-2 tbsp dark soy sauce, or until it reaches your desired color</li>
				<li class="list-group-item list-group-item-action">Salt to taste</li>
			</ul>
		</div>

		<br>
		<h3 id="directions">DIRECTIONS</h3>
		<div class="jumbotron">
			<ol>
				<li>Heat up a pot with 4 cups of water. <strong><em>Bring it to a boil.</em></strong></li>
				<li>Add in the garlic, pork belly, and cracked pepper.</li>
				<li>Bring the pork belly to a boil.</li>
				<li>Add the hard-boiled eggs, sweet soy suace, and dark soy sauce.</li>
				<li><strong><em>Lower the heat to medium</em></strong> and braise the pork for 30 minutes,or until the meat is cooked through and becomes tender.</li>
				<li>Add salt to taste.</li>
				<li><strong><em>Continue to simmer</em></strong> on the lowest heat for another 15-20 minutes.</li>
				<li>Dish out and serve hot with steamed white rice.</li>
			</ol>
		</div>
		<h4 onmouseover="" style="cursor: pointer;"><a onclick='window.print()'><img src="../images/printer.jpg" width="35">Print this page</a></h4>

		<p>Taken with reference from <a href="https://rasamalaysia.com/" target="_blank">rasamalaysia.com</a>  </p>
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