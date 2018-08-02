<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 3</title>
  </head>
  <body>
      <p>
      <?php
      //grâce a la condition et a isset on va pouvoir recuperer le building et le room pour l'afficher
        if (isset($_GET['building']) && isset($_GET['room'])) {
        echo $_GET['building'] . ' ' . $_GET['room'];
      }
      ?>
      </p>
  </body
</html>