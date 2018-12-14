<?php
$magnitude = 10;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
    <?php
    switch($magnitude){
      case 1: ?>
      <p id="case1">Micro-séisme impossible à ressentir.</p>
      <?php
      break;
      case 2: ?>
      <p id="case2">Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>
      <?php
      break;
      case 3: ?>
      <p id="case3">Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>
      <?php
      break;
      case 4: ?>
      <p id="case4">Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>
      <?php
      break;
      case 5: ?>
      <p id="case5">Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>
      <?php
      break;
      case 6: ?>
      <p id="case6">Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>
      <?php
      break;
      case 7: ?>
      <p id="case7">Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>
      <?php
      break;
      case 8: ?>
      <p id="case8">Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>
      <?php
      break;
      case 9: ?>
      <p id="case9">Séisme capable de tout détruire sur une très vaste zone.</p>
      <?php
      break;
      default:
      ?>
      <p>Cette valeur est incorrecte</p>
      <?php } ?>
</body>
</html>
