<?php

$score = [3, 6, 11];
$totalscore = 0;

function add_score() {
    global $score;
    global $totalscore;
    
    foreach($score as $score_value) {
        $totalscore += $score_value;
    }
}

add_score();

echo $totalscore;

?>