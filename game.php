<?php 
session_start(); // Start the session
include 'gamelogic/blackjack.php';

// The elves would appreciate a coffee! ;)
$player = new Blackjack();
$dealer = new Blackjack();

$player->hand = $_SESSION['playerhand'];
$player->score = $_SESSION['playerscore'];

$dealer->hand = $_SESSION['dealerhand'];
$dealer->score = $_SESSION['dealerscore'];

if(isset($_GET["hit"])){      
  $player->hit();
  print_r($player->hand);
  echo "Player totalscore 1: $player->totalscore";
  echo "<br>";
};

if (isset($_GET["surrender"])){
  session_destroy();
  header("location: game.php");
}

$_SESSION['playerhand'] = $player->hand;
$_SESSION['dealerhand'] = $dealer->hand;

$_SESSION['playerscore'] = $player->score;
$_SESSION['dealerscore'] = $dealer->score;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blackjack</title>
  </head>
  <body>



    <form action="" method="GET">
        <input type="submit" value="Hit" name="hit">
        <input type="submit" value="stand" name="stand">
        <input type="submit" value="surrender" name="surrender">
    </form>

    <p>

    <?php 

        print_r($_SESSION['playerhand']);
        echo "<br>";
        print_r($_SESSION['playerscore']);
        echo "<br>";

        echo "Player totalscore 2: $player->totalscore";
        echo "<br>";

        echo "Dealer totalscore: $dealer->totalscore";
        echo "<br>";
  
    ?>
    
    </p>

        
</body>

</html>
