<?php 

include 'carddeck.php';
include 'reset_scores.php';
include 'start_game.php';

$rand_card; // global
$game_log = []; // global

// 0 = player
// 1 = dealer
$active_player = 0;


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
        $this->add_score();

    }

    

    // function to add the score to the players totalscore
    public function add_score() {
    $this->score;
    $this->totalscore = 0;

    foreach($this->score as $score_value) {
        $this->totalscore += $score_value;
    }

    switch ($x = $this->totalscore) {
        // 
        case $x > 21:
            echo "het werkt";
        break;
    }
    // function endturn()
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



?>
