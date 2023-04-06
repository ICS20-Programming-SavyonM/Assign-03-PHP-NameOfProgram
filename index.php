<!DOCTYPE html>
<html>
  <head>
     <script src="./js/script.js"></script>
     <!--metadata--> 
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cube Calculator</title>
    <!--For favicon on page--> 
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
    <meta charset="UTF-8">
    <title>Calculate Cube Volume and Surface Area</title>
  </head>
  <body>
    <h1>Cube Volume and Surface Area Calculator</h1>
    <!--area to enter value-->
    <form method="post" action="">
  <p>Enter the side length of the cube (cm):</p> <input type="text" name="length" placeholder="Enter here (cm)"> <br></br>
  <input type="submit" value="Calculate">
</form>
<?php
  //calculate values 
if (isset($_POST['length'])) {
  $length = floatval($_POST['length']);
  $surfaceArea = round(6 * pow($length, 2), 2);
  $volume = round(pow($length, 3), 2);
  //display results to user
  echo "<div><h2>Results</h2>";
  echo "The surface area of the cube is:" . $surfaceArea . "cm².<br>";
  echo "The volume of the cube is: " . $volume . "cm³.";
  echo "</div>";
}
?>