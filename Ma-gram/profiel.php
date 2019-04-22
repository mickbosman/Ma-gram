
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mick Bosman">
    <link rel=stylesheet href="Style.css">
    <title>Magram</title>
  </head>
  <body>

    <input type="checkbox" name="toggle" id="toggle" />
    <label for="toggle"></label>
    <div class="container">
    </div>
    <div class="message">
      <h1><?php  if (isset($_SESSION['username'])) : ?>
      <p>Welkom <strong><?php echo $_SESSION['username']; ?></strong> <?php endif ?>bij Ma-gram!</h1>
      <h2>Gemaakt door: Mick Bosman, Boyd Veenstra en Leander Kuiper. Opdracht de wall PROJ.
      <h2><a href="contact.php">Contact</h2></a><br>
      <p>━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
      </div>

<div class="footer">
  <a href="upload.php"> <img src="afbeeldingen/upload.png">
  <a href="index.php"><img src="afbeeldingen/home.png"></a>
  <a href="profiel.php"><img src="afbeeldingen/profiel.png">
  <a href="contact.php"><img src="afbeeldingen/contact.png" style="width: 8%;"></a>
</div>

<div class="logo">
  <h1></h1>
</div>


  </body>
</html>
