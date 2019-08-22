<?php 

# dubbele variable van Carolien!
$player_wins = 3; // global
$dealer_wins = 0; // global

$player_score = 21; // global
$dealer_score = 0; // global

$player_subscore = 0; // global
$dealer_subscore = 0; // global

$player_hand = []; // global
$dealer_hand = []; // global

$game_log = []; // global


############################
# TEST
echo $player_wins . "<br>";
echo $player_score . "<br>";
print_r($game_log);
echo "<br>";

new_round();

echo $player_wins . "<br>";
echo $player_score . "<br>";
print_r($game_log);
echo "<br>";

new_game();
echo $player_wins . "<br>";
echo $player_score . "<br>";
print_r($game_log);
echo "<br>";

###########################



// Set all back to default
function new_game() {
    reset_scores();

    // Reset winning scores to 0
    $player -> $player_wins;
    global $dealer_wins;
    $player_wins = 0;
    $dealer_wins = 0;

    //Gamelog
    global $game_log;
    $game_log[] = "New game started." ;
}

// Reset $player_score and $dealer_score to 0
function new_round() {

    reset_scores();

    global $game_log;
    $game_log[] = "New round started.";
    global $player -> $game_log[] = "New round started.";
}

function reset_scores() {
    global $player_score;
    global $dealer_score;
    global $player_subscore;
    global $dealer_subscore;
    global $player_hand;
    global $dealer_hand;

    $player_score = 0;
    $dealer_score = 0;
    $player_subscore = 0;
    $dealer_subscore = 0;
    $player_hand = [];
    $dealer_hand = [];
}


$player -> $hand[] = $randcard;

?>