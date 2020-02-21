<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $message = 'Accesso negato!';
  if (strlen($name) >= 3) {
    if (strpos($mail,'.') != false && (strpos($mail,'@')) != false ) {
      if (!is_nan($age)) {
        $message = 'Accesso riuscito!';
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php?name=marco&mail=info@info.it&age=10">LINK DI PROVA!</a>
    <h1><?php echo $message ?></h1>
  </body>
</html>
