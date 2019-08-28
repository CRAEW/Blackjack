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
        echo "no card for me, I skip this one";

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

  // Check if dealer has 21
  check_winner($dealer);
}

function check_winner($person) {
    global $player;
    global $dealer;

    $player->name = "Player";
    $dealer->name = "Dealer";

    $y = $dealer->totalscore;

    // if dealer had 21, dealer wins
    if($y === 21){
        echo "dealer wins";
    } elseif ($person->totalscore > 21){
        echo "you're score is $person->totalscore. $person->name loses.";
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
