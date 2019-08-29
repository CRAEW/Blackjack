<?php 

$rand_card; // the random card from the deck array
$game_log = []; // array with game-log

// 0 = player
// 1 = dealer
$active_player = 0;


// Constructor to create the players
class Blackjack {
    public $wins;
    public $score = array();
    public $totalscore;
    public $hand = array();
    public $aces;
    
    // Draw a card
    function hit() {
        // echo "new cards please";
        global $deck;

        if(count($this->hand) !== 5) {
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

            // check score for looser
            if($this->totalscore > 21) {
                echo "Player looses";
                echo "<br>";
            }
            
        } else {
            echo "$this->name has 5 cards. Choose stand.";
            echo "<br>";
        }


    }

    // function to add the score to the players totalscore
    public function add_score() {
    $this->score;
    $this->totalscore = 0;

        foreach($this->score as $score_value) {
            $this->totalscore += $score_value;
        };

        $this->check_hand();

        //Set aces to value 1 if necessary
        while (($this->totalscore > 21) AND ($this->aces > 0)) {
                $this->totalscore -= 10;
                $this->aces--;
            }

    }


    public function check_hand() {
        // Check hand for ACES
        $this->hand;
        $this->aces = 0;

        foreach($this->hand as $card) {
            if(strpos($card, 'A') !== false) {
                $this->aces++;
            }
        }

    }

    public function stand() {
        echo "Player choose stand.";
        echo "<br>";

        // $dealer->totalscore < 15 hit
        // $dealer->totalscore >= 17 checkwinner
        while($this->totalscore < 17) {
            $this->hit();
        };
    }

    public function surrender() {
        echo "whoops I lost";
        new_game();
    }

}

//Start the game and deal 2 cards
function start_game(){

  global $player;
  global $dealer;

  //each player gets 2 cards
  $player->hit();
  $player->hit();

  $dealer->hit();
  $dealer->hit();
}

function check_winner($person) {
    global $player;
    global $dealer;

    $player->name = "Player";
    $dealer->name = "Dealer";

    $x = $player->totalscore;
    $y = $dealer->totalscore;

    switch ($s = $person->totalscore) {
    case $s > 21:
        echo "$person->name loses, his score was $person->totalscore .";
        echo "<br>";
        break;
    case $s === 21:
        if($y === 21){
            echo "dealer wins";
            echo "<br>";
            echo "player loses";
            echo "<br>";
        } elseif ($x === 21 && $y === 21) {
            echo "Dealer wins";
            echo "<br>";
            echo "player loses";
            echo "<br>";
        } else {
            echo "$person->name wins, because his score was $person->totalscore .";
            echo "<br>";
        }
        break;
    case $s < 21:
        if ($x < $y) {
            echo "Dealer wins";
            echo "<br>";
            echo "player loses";
            echo "<br>";
        };
        if ($x > $y) {
            echo "Player wins";
            echo "<br>";
            echo "dealer loses";
            echo "<br>";
        };
        if ($x === $y) {
            echo "Dealer wins";
            echo "<br>";
            echo "player loses";
            echo "<br>";
        };
        break;
    }
}


    

// Set all back to default
function new_game() {

}

// Reset $player_score and $dealer_score to 0
function new_round() {

}

function reset_scores() {

}



?>
