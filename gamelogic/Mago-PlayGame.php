<?php
// Actieknoppen

function action_btn() {

  if (isset($_GET["hitTest"]))
  {
    echo "Player chose hit!";
  }

  if (isset ($_GET["standTest"]))
  {
    echo "Player chose stand!";
  }

  if (isset ($_GET["surrenderTest"]))
  {
    echo "Player chose to surrender!";
  }
}

?>