<?php
// Variabelen worden NIET gereset na druk op knop
// session_start();
// $_SESSION['variable] die in deze sessie moeten behouden blijven

//Start the game and deal 2 cards
function start_game(){

  global $player;
  global $dealer;


  // reset all scores and create new deck
  
  // reset();
  // createDeck();

  // Create the 2 player objects
  
 

  //each player gets 2 cards
  $player->hit();
  $player->hit();

  $dealer->hit();
  $dealer->hit();

  // Set active player

  // Activates buttons
  //action_btn();


  //TODO: extra cards dealer are invisible

}

?>