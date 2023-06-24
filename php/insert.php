<!DOCTYPE html>
<html>
<head>
	<title>Submission Confirmation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<h5>Your review has been submitted!</h5>
	<h6>Click <a href="forms.php">here</a> to go back to the previous page.</h6>
	


<?php
try {
	$pdo = new PDO("mysql:host=localhost;dbname=id13291201_final", "testuser", "mypassword");
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	die("ERROR: Could not connect. " . $e->getMessage());
}

try {
	$sql = "INSERT INTO reviews (Username, ReviewType, Comment, File, Gender, Tried, Ratings) VALUES (:username, :review_type, :comment, :file, :gender, :tried, :ratings)";
	$stmt = $pdo ->prepare($sql);

	$stmt ->bindParam(':username' , $_REQUEST['username']);
	$stmt ->bindParam(':review_type', $_REQUEST['review_type']);
	$stmt ->bindParam('comment', $_REQUEST['comment']);
	$stmt ->bindParam('file', $_REQUEST['file']);
	$stmt ->bindParam('gender', $_REQUEST['gender']);
	$stmt ->bindParam('tried', $_REQUEST['tried']);
	$stmt ->bindParam('ratings', $_REQUEST['ratings']);
	$stmt ->execute();
}
catch (PDOException $e) {
	die("ERROR: Not able to execute $sql. " . $e->getMessage());
}

unset($pdo);

?>

</body>
</html>