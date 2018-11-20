<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur. Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
    <?php
    $isEasy = rand(true, false);
    if ($isEasy = false) {
      echo "C'est difficile!!!";
    } else {
      echo "C'est facile!!";
    }
    ?>
    <p>Bonus : L'écrire de deux manières différentes.</p>
    <p><?php echo($isEasy == true)? "Cest facile" : "C'est difficile" ;?></p>
  </body>
</html>
