<? php

  $email = $_POST["email"];
  $password = $_POST["Password"];
  $plates = $_POST["plates"];
  $pillow = $_POST["pillow"];
  $tote = $_POST["tote"];
  $shipping = $_POST["shipping"];
  echo "<h2> Welcome " .$email. ".<br>Your password is: " . $password . "</h2>";

  function cost($A, $B, $C, $D) {
    $cost = ($A*25.00)+($B*15)+($C*10)+$D;
    return $cost;
  }

  function shipping($E){
    if($E === 0.00)
    {
      $shipOpt = "Free";
    }
    else if($E ===5.00)
    {
      $shipOpt = "Three day";
    }
    else if($E = 50.00)
    {
      $shipOpt = "Overnight";
    }
    return $shipOpt;
  }

  echo "<div id = receipt>";
  echo "You ordered:"<br>
  echo "Plates with handpainted bird designs (set of four) x" . $plates . "-------> $". $plates*25 . "<br>";
  echo "Throw pillow with embossed bird design x" . $pillow . "-------------------> $". $pillow*15 . "<br>";
  echo "Tote bag with bird design x" . $tote . "----------------------------------> $". $tote*10 . "<br>";
  echo "Shipping type" .shipping($shipping) . "-----------------------------------> $". $shipping . "<br>";
  echo "total --------------------------------------------------------------------> $". cost($plates, $pillow, $tote, $shipping) . "<br>";
  echo "</div>";

?>
