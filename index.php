<!DOCTYPE html>
<html>
<head>
  <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to celsius, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
  <title>Movie ratings</title>
  <h1>Are you old enough to watch?</h1>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="age">Enter age:</label>
		<input type="number" name="age" id="age" required step="1">
    
    <!--button to enter temperature-->
		<button type="submit" name="submit">Check</button>
	</form>

	<?php
		// Check if form was submitted
		if(isset($_POST['submit'])) {
			// Get the age from the form input
			$age = $_POST['age'];

  if($age >= 17) {
    echo "<p>You can watch movies that are rated R alone.</p>";
  }
  else if($age >= 13) {
    echo "<p>You can watch movies that are rated PG-13 alone.</p>";
  }
  else if($age >= 9) {
    echo "<p>You can watch movies that are rated G or PG alone.</p>";
  }
  else if($age > 0) {
    echo "<p>You are not old enough to go to the theatre alone.</p>";
  }
  else {
    echo "<p>Please enter a valid age.</p>";
  }
}
	
	?>
  <!--image for temperature-->
 <br>
	<img src="./images/movies.jpg" alt="sphere" width="600" height="300"/>
</body>
</html>