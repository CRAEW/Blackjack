<?php
session_start(); // Start the session
include 'gamelogic/carddeck.php';
include 'gamelogic/blackjack.php';

// The elves would appreciate a coffee! ;)

// Create new players
$player = new Blackjack();
$dealer = new Blackjack();


// Put hand and score arrays into session
$player->hand = $_SESSION['playerhand'];
$player->score = $_SESSION['playerscore'];

$dealer->hand = $_SESSION['dealerhand'];
$dealer->score = $_SESSION['dealerscore'];

// If array hand is empty then start game
if((!isset($_SESSION['playerhand'])) AND (!isset($_SESSION['dealerhand']))){
  start_game();

  // Check if dealer has 21
  $y = $dealer->totalscore;
  if($y === 21){
    echo "dealer wins";
  }
};

// Makes the sum of the score-values
$dealer->add_score();
$player->add_score();

// Execute function hit() when hit-button is clicked
if(isset($_GET["hit"])){
  // Set active player
  $active_player = $_SESSION['activeplayer'];
  $_SESSION['activeplayer'] = $active_player;

  // Checks active player
  if($active_player === 0){
     // Check if player has > 21
    $x = $player->totalscore;
    if($x > 21){
      echo "Player looses";
      echo "<br>";
    } else {
      $player->hit();
    }
  }
}


// Turn goes to Dealer when STAND btn is clicked
if (isset($_GET["stand"])) {
    $active_player = 1; // start dealer turn
    $_SESSION['activeplayer'] = $active_player;

    // Dealers gets hit after stand is clicked
    $dealer->stand();

    // Check winner
    echo 'checking';
    echo '<br>';
    check_winner($player);
}

// Reset session and scores when SURRENDER btn is clicked
if (isset($_GET["surrender"])){
  session_destroy();
  header("location: game.php");
}

// Store the current session values in the hand and score
$_SESSION['playerhand'] = $player->hand;
$_SESSION['dealerhand'] = $dealer->hand;

$_SESSION['playerscore'] = $player->score;
$_SESSION['dealerscore'] = $dealer->score;

$_SESSION['activeplayer'] = $active_player;



?>