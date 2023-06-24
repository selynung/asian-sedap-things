<!DOCTYPE html>
<html>
<head>
	<title>Asian Sedap Things</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 </head>

<body>
	<?php
		function errvid() {
		  	alert('Video could not be loaded.');
		}

	?>

<header class="jumbotron">

<h1 class="display-3">Asian Sedap Things</h1>
<h3>
	Welcome to our 
	<small class="text-muted">Sedap Cookbook</small>
</h3>

</header>
<main>
<div class="container">
	<div class="row">
	<div class="col-md-2">
		<div class="btn-group-vertical">
		  <a href="index.php" class="btn btn-warning">Home</a>
		  <a href="catalog.php" class="btn btn-danger">Catalog</a>
		  <a href="about.php" class="btn btn-warning">About</a>
    	</div>
  	</div>

	<div class="col-md-8">
	<section id="sedap">
	<h3>Sedap?</h3>
		<p>You may be wondering, what is "Sedap"? If you've ever been to Malaysia, you may have heard people at restaurants or coffee shops say "Mmm, sedap!" Have you guessed it yet? The word <em>sedap</em> simply means delicious.</p>
	</section>
	<section id="about">
		<h3>A little bit about us</h3>
		<p>Hello there! We just want to share some of our favourite Asian sedap dishes with you that you might like. If you would like to know more about us, <a href="about.php">click here!</a> Enjoy!</p>
	</section>
	<section id="dishes">
		<h3>Sedap Dishes</h3>
		<video controls poster="../images/japcurry.jpeg">
			<source src="asian_sedap_things.mp4" type="video/mp4" onerror="errvid()">
		</video>
		<p>Do these dishes look appealing to you? What are you waiting for? Click <a href="catalog.php">here</a> to start your very own Asian cookfest!</p>
	</section>
	</div>

	<div class="col-md-2">
		<div class="btn-group-vertical">
		  <h3>Reviews</h3>
		  <a href="forms.php" class="btn btn-warning">Write a review for us here!</a>
		  <br>
    	</div>
    	<table class="clock">
              <tr><td style="text-align: center;"><canvas id="canvas_tt5e9571e633f30" width="175" height="175"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><a href="//24timezones.com/Detroit/time" style="text-decoration: none" class="clock24" id="tz24-1586852326-c177-eyJzaXplIjoiMTc1IiwiYmdjb2xvciI6IkZGOTkwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWU5NTcxZTYzM2YzMCJ9" title="World Time :: Detroit" target="_blank" rel="nofollow"></a></td></tr>
        </table>

	</div>
	</div>
</div>
</main>

<footer>
<div class="container">

	<?php
		include '../includes/footer.inc.php';
	?>

</div>
</footer>

<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<script type="text/javascript" src="js/index.js"></script>