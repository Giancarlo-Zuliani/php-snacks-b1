<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phpsnack</title>
    <link rel="stylesheet" href="style.css">
    <?php require "data.php"; ?>
  </head>
  <body>
    <?php
      for($i=0 ; $i < count($hotels);$i++){
        if($hotels[$i]['parking']){
          $park  = "Con parcheggio";
        }else{
          $park = "Nessun parcheggio";
        }
        echo
         "<div>" . $hotels[$i]['name'] ."<br>".
          $hotels[$i]['description'] ."<br>".
          $park . "<br>" .
          "Voto : " . $hotels[$i]['vote'] . " / 5" . "<br>" .
          "distanza dal centro : "  . $hotels[$i]['distance_to_center'] . " KM
         </div>";
      }
     ?>
  </body>
</html>
