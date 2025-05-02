<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Speed of Light">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Speed of Light</title>
  </head>
  <body>
    <h1>Speed of Light</h1>
    <h3>This program will calculate the Speed of Light in different Mediums.</h3>

    <form action="results.php" method="post" target="results">
      <label for="indexRefDiamond">Index of Refraction (Diamond):</label>
      <input type="float" id="indexRefDiamond" name="indexRefDiamond"><br><br>

      <label for="indexRefWater">Index of Refraction (Water):</label>
      <input type="float" id="indexRefWater" name="indexRefWater"><br><br>

      <input type="submit" value="Calculate Speed">
    </form>

    <iframe id="results" name="results" style="width:100%; height:150px;"></iframe>
  </body>
</html>
