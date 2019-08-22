<?php 

# CREATE THE CARDS DECK

// Array in which the cards and values will be stored
$deck = [];

// Array with the card values
$cardvalues = array(
    "A" => 11,
    "2" => 2,
    "3" => 3,
    "4" => 4,
    "5" => 5,
    "6" => 6,
    "7" => 7,
    "8" => 8,
    "9" => 9,
    "10" => 10,
    "J" => 10,
    "Q" => 10,
    "K" => 10
);

// Array with the suits names
$suits = array("club", "diamond", "heart", "spade");

// loop that creates the card deck and saves it in the $deck
foreach($suits as $suit) {

    // gets the key and value from $cardsvalues
    foreach($cardvalues as $cardname => $cardvalue) {

        // This concatenates $suit-value and $cardname-key
        $card = $suit . " " . $cardname;
        // Add the created card-key and cardvalue to the deck-array
        $deck[$card] = $cardvalue;
    }
}

$player_subscore;
$dealer_subscore;

$player_score;
$dealer_score;

$player_hand = [];
$dealer_hand = [];

$rand_card;

# BLACKJACK PLAYERS

// Constructor to create the players
class Blackjack {
    
    public function hit() {
        // echo "new cards please";
        global $deck;
        
        // pick a random value out of the array $deck
        global $rand_card;
        $rand_card = array_rand($deck); // Pulls a random card
        echo $rand_card . "<br>"; // Gives the name of the card
        echo $deck[$rand_card]. "<br>"; // Gives the value

        $hand = [];

        $this->hand;

        $score = 0;
        $this->$score;
    }

    public function stand() {
        echo "no card for me, I skip this one";
    }

    public function surrender() {
        echo "whoops I lost";
    }

}

$player = new Blackjack;
$dealer = new Blackjack;

// print_r($deck); 
// echo $deck['club A'];

$test = new Blackjack;
$test ->hit();
$test -> $hand[] = $rand_card;
print_r($test -> $hand);
echo "<br>";
$test -> hit();
$test -> $hand[] = $rand_card;
print_r($test -> $hand);
echo "<br>";

$dealer ->hit();
$dealer -> $hand[] = $rand_card;
print_r($dealer -> $hand);
?>

