<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php
  $password = $_GET['password'];

  if ($password == 'boolean') {
    $message = 'BENVENUTO! PASSWORD CORRETTA!';
    $class = 'green';
  }
  else {
    $message = 'ACCESSO NON CONSENTITO! PASSWORD ERRATA!';
    $class = 'red';
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .red{
        color: red;
      }
      .green {
        color: green;
      }
    </style>
  </head>
  <body>
    <h1 class="<?php echo $class ?>"><?php echo $message ?></h1>
  </body>
</html>
