<?php 

include 'carddeck.php';
include 'reset_scores.php';
include 'start_game.php';

$rand_card; // global
$game_log = []; // global
$active_player = 0;

// Actieknoppen
function action_btn() {
    
    global $player;
    global $dealer;
    global $active_player;

    if (isset($_GET["hit"]))
    {
        
        $player->hit();
        print_r($player->hand);
        echo "Player totalscore 1: $player->totalscore";
        echo "<br>";
        echo "Dealer totalscore: $dealer->totalscore";
    
      
    };
  
    if (isset ($_GET["stand"]))
    {
      echo "Player chose stand!";

    // active_playere = 1


    };
  
    if (isset ($_GET["surrender"]))
    {
      session_destroy();
    }
  }

// Constructor to create the players
class Blackjack {
    public $wins;
    public $score = array();
    public $totalscore;
    public $hand = array();
    
    function hit() {
        // echo "new cards please";
        global $deck;
        
        // pick a random value out of the array $deck
        global $rand_card;
        $rand_card = array_rand($deck); // Pulls a random card
        $rand_value =  $deck[$rand_card]; // Gives the value

        // push card into hand array player
        $this->hand[] = $rand_card;

        // push value card into score array player
        $this->score[] = $rand_value;

        // adds the score to player totalscore
        add_score($this);

    }

    public function stand() {
        echo "no card for me, I skip this one";

        //function endturn()
    }

    public function surrender() {
        echo "whoops I lost";
        new_game();
    }

}

// function to add the score to the players totalscore
function add_score($person) {
    $person->score;
    $person->totalscore = 0;

    foreach($person->score as $score_value) {
        $person->totalscore += $score_value;
    }

    switch ($x = $person->totalscore) {
        case $x > 21:

        break;


    }
    // function endturn()
}

?>
