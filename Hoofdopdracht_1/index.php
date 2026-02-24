
<!-- Mijn mini-app wordt een: water inname tracker -->



<?php 

$appNaam = "AquaTrack";
$trackerType = "water inname tracker";
$tagline = "B ol of w o a";
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<h1>Hoi, welkom bij <?= $appNaam ?></h1>
<p>Dit is een <?= $trackerType ?>, waarmee je jouw dagelijkse water inname kan bijhouden.</p>
<p><?= $tagline ?></p>



<footer>

<p><?php echo date("Y"); ?></p>

<p>copyright <?= $appNaam ?></p>




</footer>




    
</body>
</html>