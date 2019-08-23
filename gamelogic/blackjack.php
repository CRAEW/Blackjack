<?php 

include 'variables.php';
include 'carddeck.php';
include 'reset_scores.php';


// Constructor to create the players
class Blackjack {
    public $wins;
    public $score = [];
    public $totalscore;
    public $hand = [];


    public function hit() {
        // echo "new cards please";
        global $deck;
        
        // pick a random value out of the array $deck
        global $rand_card;
        $rand_card = array_rand($deck); // Pulls a random card
        $rand_value =  $deck[$rand_card]; // Gives the value

        // push card into hand array player
        $this -> hand[] = $rand_card;

        // push value card into score array player
        $this -> score[] = $rand_value;

        // adds the score to player totalscore
        add_score($this);

    }

    public function stand() {
        echo "no card for me, I skip this one";
        $person -> totalscore = $person -> totalscore;
        //function endturn()
    }

    public function surrender() {
        echo "whoops I lost";
        new_game();
    }

}

// function to add the score to the players totalscore
function add_score($person) {
    $person -> score;
    $person -> totalscore = 0;

    foreach($person -> score as $score_value) {
        $person -> totalscore += $score_value;
    }

    switch ($x = $person -> totalscore) {
        case $x > 21:

        break;


    }
    // function endturn()
}

$player = new Blackjack;

// $player -> hit();
// print_r($player -> hand);
// echo "<br>";
// print_r($player -> score);
// echo "<br>";
// echo $player -> totalscore;
// echo "<br>";
// echo "<br>";

// $player -> hit();
// print_r($player -> hand);
// echo "<br>";
// print_r($player -> score);
// echo "<br>";
// echo $player -> totalscore;
// echo "<br>";
// echo "<br>";

// $dealer -> hit();
// print_r($dealer -> hand);
// echo "<br>";
// print_r($dealer -> score);


// $dealer ->hit();
// $dealer ->hit();
// $dealer ->hit();

// echo "<br>";

// add_score();
// echo $dealer -> $totalscore;



?>
