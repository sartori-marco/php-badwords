<?php
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$lunghezza = strlen($testo);

$secondaParola = $_GET['badword'];
$sostituzione = str_replace($secondaParola, '***', $testo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


  <p> <?php echo $testo. ' ' .'La lunghezza è di'. ' '. $lunghezza ?> </p>
  <p> <?php echo $sostituzione; ?> </p>

</body>
</html>
