<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur. Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
      <?php
      $isEasy = true;
      if ($isEasy = false) {
        echo "C'est difficile!!!";
      } else {
        echo "C'est facile!!";
      }
       ?>
      <p>Bonus : L'écrire de deux manières différentes.</p>
      <?php
      $isEasy = false;
      if (!$isEasy) {
        echo "C'est difficile!!!";
      } else {
        echo "C'est facile!!";
      }
       ?>
    </body>
</html>
