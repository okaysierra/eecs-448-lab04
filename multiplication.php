<?php
  function multiply($x, $y) {
    $z = $x*$y;
    return $z;
  }

  echo "<table style=width:100%>";
  for($i=1; $i <= 100; $i++)
  {
    echo "<tr>";
    for($j=1; $j <=100; $j++)
    {
      echo "<td>" . multiply($i,$j) . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>"
?>
