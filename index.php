<!DOCTYPE html>
<html>
  <head>
    
    <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--for favicon on this page-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    
    <!--Style on this page-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie Rating Check</title>
  </head>
  <body>
    <h1>Are you old enough to watch?</h1>
    <form method="post">
      <label for="age">Enter your age:</label>
      <input type="number" id="age" name="age" placeholder="Enter your age...">
      <input type="submit" name="submit" value="Check">
    </form>
    <p>
      <?php
        // Check if the form has been submitted
        if (isset($_POST["submit"])) {
          // Get the user's age from the form data
          $age = $_POST["age"];

          // Check if the age is invalid (i.e. negative, a decimal, or not entered)
          if ($age === "") {
            echo "Please enter your age.";
          } else if ($age <= 0 || $age % 1 !== 0) {
            echo "Please enter a valid age.";
          }
          // Check if the user is 17 or older
          else if ($age >= 17) {
            echo "You can watch movies that are rated R alone.";
          }
          // Check if the user is 13 or older
          else if ($age >= 13) {
            echo "You can watch movies that are rated PG-13 alone.";
          }
          // Check if the user is 9 or older
          else if ($age >= 9) {
            echo "You can watch movies rated G alone.";
          }
          // Check if the user is younger than 9 (i.e. too young to go to the movie theatre alone)
          else if ($age > 0) {
            echo "You are not old enough to go to the movie theatre alone.";
          }
          // Handle any other invalid input
          else {
            echo "Please enter a valid age.";
          }
        }
      ?>
    </p>
        
     <!--image on this page-->
		<img src="./images/movies.jpg" alt="movies" height = 70% width="50%">
  </body>
</html>