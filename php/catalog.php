<?php require_once('config.php'); 

function outputCatalog()
{
    $x = 0;
    try
    {
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select * from catalogData order by DataID";
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
            if($x % 2 == 0)
            {
                echo '<tr class="table-secondary">';
                echo '<th scope="row"><figure><a href="'.$row['Path'].'"><img src="'.$row['Path'].'" alt="'.$row['Title'].'" width="150"></a></figure><br>'.$row['Title'].'</th>';
                echo '<td>'.$row['Desc'].'</td>';
                echo '<td>'.$row['Time'].'</td>';
                echo '<td><a href="'.$row['Link'].'" class="btn btn-warning">Try it!</a></td>';
                echo '</tr>';
            }
            else
            {
                echo '<tr class="table-warning">';
                echo '<th scope="row"><figure><a href="'.$row['Path'].'"><img src="'.$row['Path'].'" alt="'.$row['Title'].'" width="150"></a></figure><br>'.$row['Title'].'</th>';
                echo '<td>'.$row['Desc'].'</td>';
                echo '<td>'.$row['Time'].'</td>';
                echo '<td><a href="'.$row['Link'].'" class="btn btn-secondary">Try it!</a></td>';
                echo '</tr>';
            }
            $x++;
            $pdo = null;
        }
    }
    catch (PDOException $e) 
    {
        die( $e->getMessage() );
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sedap Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/catalog.css">
 </head>
<body>

<header>
  <ol class="breadcrumb fixed-top">
    <li class="display-3 fixed-top">Asian Sedap Menu</li>
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="forms.php">Reviews</a> </li>
    <li class="breadcrumb-item"><a href="about.php">About Us</a></li>
  </ol>
</header>

<main>
<div class="container">
	<table class="table table-hover">
  <caption>Asian Sedap Menu</caption>
  <thead>
    <tr class="table-danger">
      <th scope="col">Delicacy</th>
      <th scope="col">Sedap Description</th>
      <th scope="col">Estimated Cooking Time</th>
      <th scope="col">Try it out!</th>
    </tr>
  </thead>
  <tbody>
    <?php outputCatalog()?>
  </tbody>
</table> 
	
</div>
</main>

<footer>
<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item"><a href="forms.php">Reviews</a></li>
  <li class="breadcrumb-item"><a href="about.php">About Us</a> </li>
</ol>
<p>
	<em>Copyright &copy; 2020 Asian Sedap Things</em>
</p>
</div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>