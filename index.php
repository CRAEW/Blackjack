<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blackjack</title>
  </head>
  <body>
  <?php include 'gamelogic/blackjack.php'; ?>


    <form action="" method="GET">
        <input type="submit" value="Hit" name="hit">
        <input type="submit" value="stand" name="stand">
        <input type="submit" value="surrender" name="surrender">
    </form>

    <p>

    <?php 

        echo "Player totalscore: $player->totalscore";
        echo "<br>";

        echo "Dealer totalscore: $dealer->totalscore";
        echo "<br>";
    
        action_btn(); 
        
    ?>
    
    </p>

    

    <?php
    // Actieknoppen

function action_btn() {
    
    global $player;
    global $dealer;
    global $active_player;

    if (isset($_GET["hit"]))
    {
        
        $player->hit();
        echo "Player totalscore: $player->totalscore";
        echo "<br>";
        // echo "Dealer totalscore: $dealer->totalscore";
    
      
    };
  
    if (isset ($_GET["stand"]))
    {
      echo "Player chose stand!";

    // active_playere = 1


    };
  
    if (isset ($_GET["surrender"]))
    {
      echo "Player chose to surrender!";
    }
  }


?>

        
</body>

</html>
