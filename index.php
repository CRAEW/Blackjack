<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blackjack</title>
  </head>
  <body>
  <?php 
  include '/gamelogic/blackjack.php';
  include '/gamelogic/Mago-PlayGame.php';
  ?>



    <form action="" method="GET">
        <input type="submit" value="Hit" name="hitTest">
        <input type="submit" value="Stand" name="standTest">
        <input type="submit" value="Surrender" name="surrenderTest">
    </form>

    <p>

    <?php

    action_btn();

    // Actieknoppen

function action_btn() {

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
  }


?>
        
    </p>

        
</body>

</html>
