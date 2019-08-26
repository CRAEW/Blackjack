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

echo $active_player;
echo "<br>";

if((!isset($_SESSION['playerhand'])) AND (!isset($_SESSION['dealerhand']))){
  start_game();
};


if(isset($_GET["hit"])){
  $active_player = $_SESSION['activeplayer'];
  $_SESSION['activeplayer'] = $active_player;
  if($active_player === 0){
    $player->hit();
    $dealer->add_score();
  };
  if ($active_player === 1) {
    $dealer->hit();
    $player->add_score();
  }
};

if (isset ($_GET["stand"])){
      echo "Player chose stand!";
    $active_player = 1; // start dealer turn
    $_SESSION['activeplayer'] = $active_player;
    echo $active_player;  
};

if (isset($_GET["surrender"])){
  session_destroy();
  header("location: game.php");
}

$_SESSION['playerhand'] = $player->hand;
$_SESSION['dealerhand'] = $dealer->hand;

$_SESSION['playerscore'] = $player->score;
$_SESSION['dealerscore'] = $dealer->score;

$_SESSION['activeplayer'] = $active_player;

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

        echo "Player totalscore: $player->totalscore";
        echo "<br>";
        echo "<br>";

        print_r($_SESSION['dealerhand']);
        echo "<br>";
        print_r($_SESSION['dealerscore']);
        echo "<br>";

        echo "Dealer totalscore: $dealer->totalscore";
        echo "<br>";
  
    ?>
    
    </p>

        
</body>

</html>
