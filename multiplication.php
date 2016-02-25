<?php
  function multiply($x, $y) {
    $z = $x*$y;
    return $z;
  }

  echo "<table style=width:100%>";
  echo "<tr>";
  echo "<td> </td>";

  for($k=1; $k <=100; $k++)
  {
    echo "<td>" . $k . "</td>";
  }

  echo "</tr>";

  for($i=1; $i <= 100; $i++)
  {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    for($j=1; $j <=100; $j++)
    {
      echo "<td>" . multiply($i,$j) . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>"
?>
