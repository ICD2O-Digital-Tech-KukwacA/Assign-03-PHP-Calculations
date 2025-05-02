<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <title>Speed of Light</title>
  </head>
  <body>
    <h1>Speed of Light</h1>
    <h3>This program will calculate the Speed of Light in different Mediums.</h3>

    <form action="results.php" method="post" target="results">
      <label for="indexRefDiamond">Index of Refraction (Diamond):</label>
      <input type="text" id="indexRefDiamond" name="indexRefDiamond" required><br><br>

      <label for="indexRefWater">Index of Refraction (Water):</label>
      <input type="text" id="indexRefWater" name="indexRefWater" required><br><br>

      <input type="submit" value="Calculate Speed">
    </form>

    <iframe id="results" name="results" style="width:100%; height:150px;"></iframe>
  </body>
</html>
