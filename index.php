<?php
$testo = 'paragrafo';
$lunghezza = strlen($testo);

$secondaParola = $_GET['badword'];
$sostituzione = str_replace($secondaParola, '***', $secondaParola);

echo $secondaParola . 'sostituita con' . ' '. $sostituzione;
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


  <p> Questo è il <?php echo $testo. ' ' .'La lunghezza è di'. ' '. $lunghezza ?> </p>

</body>
</html>
