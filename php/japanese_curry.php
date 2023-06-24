<!DOCTYPE html>
<html>
<head>
	<title>Japanese Curry</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/recipe.css">
</head>
<body>
<header>
	<ol class="breadcrumb fixed-top">
		<li class="display-3 fixed-top">Japanese Curry</li>
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
			Japanese Curry Rice or Karē Raisu (カレーライス) is an extremely popular dish for all ages in Japan and it is considered one of the country’s national dishes along with ramen and gyoza!
			</p>
	
			<img class="food" src="../images/japcurry.jpeg" width="350" alt="Japcurry" onerror="errmessage()">
			<img src="../images/japcurry_review.jpeg" width="350" alt="Japcurry2" onerror="errmessage()">
	
	
			<h2 id="recipe">BEEF BULGOGI RECIPE</h2>
			<h3 id="ingredients">INGREDIENTS</h3>
			<div class="list-group">
				<ul>
					<li class="list-group-item list-group-item-action">1.2 lb boneless skinless chicken thighs (or beef, pork, seafood, tofu, or vegetables)</li>
					<li class="list-group-item list-group-item-action">2 tsp kosher/sea salt (use half for table salt)</li>
					<li class="list-group-item list-group-item-action">Freshly ground black pepper</li>
					<li class="list-group-item list-group-item-action">2 carrots</li>
					<li class="list-group-item list-group-item-action">2 onions</li>
					<li class="list-group-item list-group-item-action">1-2 potatoes</li>
					<li class="list-group-item list-group-item-action">½ Tbsp ginger</li>
					<li class="list-group-item list-group-item-action">2 cloves garlic</li>
					<li class="list-group-item list-group-item-action">1½ Tbsp neutral-flavored oil (vegetable, canola, etc)</li>
					<li class="list-group-item list-group-item-action">1 QT water (1 QT = 4 cups or 1000 ml) (or chicken stock)</li>
					<li class="list-group-item list-group-item-action">1 apple (I used Fuji apple)</li>
					<li class="list-group-item list-group-item-action">1 Tbsp honey</li>
					<li class="list-group-item list-group-item-action">1 box Japanese curry roux (1 box = 7 oz or 200 g)</li>
					<li class="list-group-item list-group-item-action">1½ Tbsp soy sauce</li>
					<li class="list-group-item list-group-item-action">1 Tbsp ketchup</li>
				</ul>
			</div>
	
			<br>
			<h3 id="directions">DIRECTIONS</h3>
			<div class="jumbotron">
				<ol>
					<li>Gather all the ingredients.</li>
					<li>Discard the extra fat from the chicken and <strong><em>cut it into bite size pieces</em></strong>. Season with a little bit of salt and pepper.</li>
					<li><strong><em>Peel and cut the carrot</em></strong> in rolling wedges (Rangiri) and <strong><em>cut the onions</em></strong> in wedges.</li>
					<li><strong><em>Cut the potatoes</em></strong> into 1.5 inch pieces and <strong><em>soak in water for 15 minutes</em></strong> to remove excess starch.</li>
					<li><strong><em>Grate the ginger</em></strong> and <strong><em>crush the garlic.</em></strong></li>
					<li>Heat 1 1/2 Tbsp vegetable oil in a large pot over <strong><em>medium heat</em></strong> and sauté the onions until they become translucent.</li>
					<li>Add the ginger and garlic.</li>
					<li>Add the chicken and cook until the chicken changes color.</li>
					<li>Add the carrot and mix.</li>
					<li>Add the chicken broth (or water).</li>
					<li>Bring the stock to boil and skim the scrum and fat from the surface of the stock.</li>
					<li>Peel the apple and coarsely grate it.</li>
					<li>Add the honey and salt and <strong><em>simmer uncovered for 20 minutes</em></strong>, stirring occasionally.</li>
					<li>Add the potatoes and <strong><em>cook for 15 minutes</em></strong>, or until the potatoes are tender, and turn off the heat. Meanwhile you can make homemade curry roux.</li>
					<li>When the potatoes are ready, <strong><em>add the curry</em></strong>. If you use the store-bought curry roux, put 1-2 blocks of roux in a ladle and slowly let it dissolve with spoon or chopsticks. Continue with the rest of blocks. Then go to Step #17.</li>
					<li>If you are using homemade curry roux, add a ladleful or two of cooking liquid from the stock and mix into the curry paste. Add more cooking liquid if necessary and mix well until it’s smooth.</li>
					<li>Add the roux paste back into the stock in the large pot and stir to combine.</li>
					<li>Add soy sauce and ketchup. Simmer uncovered on <strong><em>low heat</em></strong>, stirring occasionally, <strong><em>until the curry becomes thick.</em></strong></li>
					<li>Serve the curry with Japanese rice on the side and garnish with soft boiled egg and Fukujinzuke. You can store the curry in the refrigerator up to 2-3 days and in the freezer for 1 month. Potatoes will change the texture so you can take them out before freezing.</li>
				</ol>
			</div>
			<h4 onmouseover="" style="cursor: pointer;"><a onclick='window.print()'><img src="../images/printer.jpg" width="35">Print this page</a></h4>

			<p>Taken with reference from <a href="https://www.justonecookbook.com//" target="_blank">justonecookbook.com</a>  </p>
		</div>
	
		<div class="col-md-2">
			<h3>Check Out Other Sedap Recipes!</h3>
			<div class="jumbotron">
			<figure>
				<a href="braised_pork.php"><img src="../images/braised_pork.jpeg" title="Braised Pork" alt="Braised Pork" onerror="errmessage()">
					<em>Braised Pork</em>
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