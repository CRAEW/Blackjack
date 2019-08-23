<?php 

include 'Mago-PlayGame.php';
include 'variables.php';
include 'carddeck.php';
include 'reset_scores.php';


// Constructor to create the players
class Blackjack {

    public function hit() {
        // echo "new cards please";
        global $deck;
        
        // pick a random value out of the array $deck
        global $rand_card;
        $rand_card = array_rand($deck); // Pulls a random card
        echo $rand_card . "<br>"; // Gives the name of the card
        $rand_value =  $deck[$rand_card]; // Gives the value
        echo $rand_value. "<br>";

        // push card into hand array player
        $hand = [];
        $this->hand;
        $this -> $hand[] = $rand_card;
        print_r($this -> $hand);

        // push value card into score array player
        global $score;
        $this -> score;
        $this -> $score[] = $rand_value;
        print_r($this -> $score);

        global $totalscore;
        $this -> totalscore;

        $this -> add_score();


    }

    

    public function stand() {
        echo "no card for me, I skip this one";
    }

    public function surrender() {
        echo "whoops I lost";
    }

}

function add_score() {
    global $score;
    global $totalscore;
    
    foreach($score as $score_value) {
        $totalscore += $score_value;
    }
}



// TESTING
$player = new Blackjack;
$dealer = new Blackjack;

$dealer ->hit();
$dealer ->hit();
$dealer ->hit();

echo "<br>";

// add_score();
echo $dealer -> $totalscore;



?>
