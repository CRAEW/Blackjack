<?php include 'gamelogic/gamelogic.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blackjack</title>
  <link rel="stylesheet" href="./css/style.css"">
  </head>
  <body>

  <h1>Black Jack</h1>


<section class="game">
    <div>
    <h2>Dealer</h2>

    <?php 

      foreach($_SESSION['dealerhand'] as $card) {
        $card = "images/$card.png";
        echo "<img src='$card' alt='$card'>";
      }

        

        print_r($_SESSION['dealerhand']);
        echo "<br>";
        print_r($_SESSION['dealerscore']);
        echo "<br>";

        echo "Dealer totalscore: $dealer->totalscore";
        echo "<br>";
        echo "<br>";
        echo "$dealer->aces Aces found in hand!";
        echo "<br>";
  
    ?>

  </div>

  <div>
    <h2>Player</h2>
    <?php

      foreach($_SESSION['playerhand'] as $card) {
        $card = "images/$card.png";
        echo "<img src='$card' alt='$card'>";
      }

        print_r($_SESSION['playerhand']);
        echo "<br>";
        print_r($_SESSION['playerscore']);
        echo "<br>";

        echo "Player totalscore: $player->totalscore";
        echo "<br>";
        echo "<br>";
        
        echo "$player->aces Aces found in hand!";
        echo "<br>";
      ?>

  </div>



  <form action="" method=" GET">
    <input type="submit" value="Hit" name="hit">
    <input type="submit" value="stand" name="stand">
    <input type="submit" value="surrender" name="surrender">
  </form>




</section>


  </body>

</html>


