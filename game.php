<?php include 'gamelogic/gamelogic.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blackjack</title>
  <link rel="stylesheet" href="./css/style.css"">
  </head>
  <body>



  <form action="" method=" GET">
    <input type="submit" value="Hit" name="hit">
    <input type="submit" value="stand" name="stand">
    <input type="submit" value="surrender" name="surrender">
  </form>




  <div>
    <h2>Dealer</h2>

    <?php 

        

        print_r($_SESSION['dealerhand']);
        echo "<br>";
        print_r($_SESSION['dealerscore']);
        echo "<br>";

        echo "Dealer totalscore: $dealer->totalscore";
        echo "<br>";
        echo "<br>";
        $dealer->check_hand();
        echo "<br>";
  
    ?>

  </div>

  <div>
    <h2>Player</h2>
    <?php

        print_r($_SESSION['playerhand']);
        echo "<br>";
        print_r($_SESSION['playerscore']);
        echo "<br>";

        echo "Player totalscore: $player->totalscore";
        echo "<br>";
        echo "<br>";
        
        $player->check_hand();
        echo "<br>";
      ?>

  </div>

  </body>

</html>


