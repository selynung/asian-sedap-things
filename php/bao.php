<!DOCTYPE html>
<html>
<head>
	<title>Char Siu Bao</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/recipe.css">
</head>
<body>
<header>
	<ol class="breadcrumb fixed-top">
	  <li class="display-3 fixed-top">Char Siu Bao</li>
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
			Char Siu Bao, also spelled as Char Siew Bao is one of the signature dishes in dim sum restaurants around the world.
			<br>
			Originated from Guangzhou in mainland China, Cha Siu Bao is a delicacy.
			<br>
			These soft, fluffy white steamed buns filled with savory <em>char siu</em> (BBQ pork belly) filling in a sweet and savory <em>char siu</em> sauce are found in many Cantonese-Chinese restaurants serving dim sum.		
			</p>

		<img class="food" src="../images/bao2.png" width="350" alt="Char Siu Bao" onerror="errmessage()">
		<img src="../images/bao.jpeg" width="350" alt="Char Siu Bao" onerror="errmessage()">


		<h2 id="recipe">CHAR SIU BAO RECIPE</h2>
		<h3 id="ingredients">INGREDIENTS</h3>
		<h4>Buns:</h4>
		<div class="list-group">
			<ul>
				<li class="list-group-item list-group-item-action">8g instant dry yeast</li>
				<li class="list-group-item list-group-item-action">160ml lukewarm water</li>
				<li class="list-group-item list-group-item-action">1/2 teaspoon white vinegar or lemon juice</li>
				<li class="list-group-item list-group-item-action">100g wheat starch</li>
				<li class="list-group-item list-group-item-action">90g icing sugar</li>
				<li class="list-group-item list-group-item-action">30g shortening or vegetable oil 10g baking powder</li>
				<li class="list-group-item list-group-item-action">10ml cold water</li>
			</ul>
		</div>
		<h4>Fillings:</h4>
		<div class="list-group">
			<ul>
				<li class="list-group-item list-group-item-action"><strong>A</strong></li>
				<li class="list-group-item list-group-item-action">250g char siew (diced)</li>
				<li class="list-group-item list-group-item-action">1/2 tablespoon cooking oil</li>
				<li class="list-group-item list-group-item-action">1 teaspoon sugar</li>
				<li class="list-group-item list-group-item-action">1 small onion (diced)</li>
				<li class="list-group-item list-group-item-action">1 tablespoon osyter sauce</li>
				<li class="list-group-item list-group-item-action">1 tablespoon soy sauce</li>
				<li class="list-group-item list-group-item-action">1 teaspoon sesame oil</li>
				<li class="list-group-item list-group-item-action">1-2 drops red food coloring <em>(optional)</em></li>
				<li class="list-group-item list-group-item-action"><strong>B</strong></li>
				<li class="list-group-item list-group-item-action">150ml water</li>
				<li class="list-group-item list-group-item-action">1 1/2 tablespoons corn flour</li>
				<li class="list-group-item list-group-item-action">salt to taste</li>
			</ul>
		</div>

		<br>
		<h3 id="directions">DIRECTIONS</h3>
		<div class="jumbotron">
			<h4>Fillings:</h4>
			<ol>
				<li>Heat oil in pan, saut&egrave; onion for 1 to 2 minutes. Add in all other ingredients A, <em><strong>stir fry for 1 minute.</strong></em></li>
				<li>Mix together water with corn flour, add mixture into the pan and stir well. <em><strong>Simmer until gravy is thickened.</strong></em></li>
				<li>Transfer to plate and <em><strong>allow to cool.</strong></em></li>
				<li><em><strong>Divide filling</strong></em> into 16 portions if desired, set aside for later use.</li>
			</ol>
			<h4>Buns:</h4>
			<ol>
				<li><em><strong>Sift together</strong></em> flour and icing sugar. Place sifted flour mixture in a large mixing bowl and <em><strong>make a well in the middle.</strong></em></li>
				<li>Fill well with lukewarm water, vinegar and yeast. Use a spatula, <em><strong>gently stir</strong></em> the water to dissolve the yeast then slowly bring together flour mixture.</li>
				<li>Add in shortening or oil and <em><strong>knead for 10-15 minutes</strong></em> until soft dough is formed. It should be smooth on the surface.</li>
				<li><em><strong>Cover dough with damp cloth</strong></em> and let it rise for 30 minutes or until it is doubled in size.</li>
				<li>Dissolve baking powder in cold water, <em><strong>sprinkle over dough</strong></em> and knead until well combined. Divide dough into 16 equal portions and <em><strong>flatten with a rolling pin</strong></em> to make a 3" circle. Then place a heap teaspoon of filling in the middle, <em><strong>wrap and pleat</strong></em> the dough to seal. Place it on a 1.5" square parchment paper, seal side up.</li>
				<li>Arrange buns into a steamer, <em><strong>leave about 1" gap</strong></em> in between buns. Spray water mist over buns, and steam in a preheated steamer on high heat for 12 minutes. Remove buns from steamer and <em><strong>cool on rack</strong></em> to prevent soggy bottom.</li>
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
				<a href="braised_pork.php"><img src="../images/braised_pork.jpeg" title="Braised Pork" alt="Braised Pork" onerror="errmessage()">
					<em>Braised Pork</em>
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