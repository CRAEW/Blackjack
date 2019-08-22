<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="" method="GET">
        <input type="submit" value="Hit" name="hitTest">
        <input type="submit" value="Stand" name="standTest">
        <input type="submit" value="Surrender" name="surrenderTest">
    </form>

<?php

      $cardvalues = array(
        "A" => 11,
        "2" => 2,
        "3" => 3,
        "4" => 4,
        "5" => 5,
        "6" => 6,
        "7" => 7,
        "8" => 8,
        "9" => 9,
        "10" => 10,
        "J" => 10,
        "Q" => 10,
        "K" => 10
    );


       if (isset($_GET["hitTest"]))
       {
         echo "Player chose hit!";
       }



       if (isset ($_GET["standTest"]))
       {
         echo "Player chose stand!";
       }



       if (isset ($_GET["surrenderTest"]))
       {
         echo "Player chose to surrender!";
       }
    ?>


  </body>
</html>
