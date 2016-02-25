<?php


  $A1 = $_POST["Q1"];
  $A2 = $_POST["Q2"];
  $A3 = $_POST["Q3"];
  $A4 = $_POST["Q4"];
  $A5 = $_POST["Q5"];
  $score = 0;

  echo "Question 1: What is the capital city of Portugal? <br>";
  echo "You answered: " .$A1 . "<br>";
  echo "Correct answer: a) Lisbon <br><br>";

  echo "Question 2: What is the capital city of Germany? <br>";
  echo "You answered: " . $A2 . "<br>";
  echo "Correct answer: c) Berlin <br><br>";

  echo "Question 3: What is the capital city of the United Kingdom?<br>";
  echo "You answered: " . $A3 . "<br>";
  echo "Correct answer: b) London <br><br>";

  echo "Question 4: What is the capital city of France?<br>";
  echo "You answered: " . $A4 . "<br>";
  echo "Correct answer: a) Paris<br><br>";

  echo "Question 5: What is the capital city of Russia?<br>";
  echo "You answered: " . $A5 . "<br>";
  echo "Correct answer: d) Moscow<br><br>";

  if($A1 === "a) Lisbon")
  {
    $score++;
  }
  else
  {
    $score=$score;
  }

  if($A2 === "c) Berlin")
  {
    $score++;
  }
  else
  {
    $score=$score;
  }

  if($A3 === "b) London")
  {
    $score++;
  }
  else
  {
    $score=$score;
  }

  if($A4 === "a) Paris")
  {
    $score++;
  }
  else
  {
    $score=$score;
  }
  if($A5 === "d) Moscow")
  {
    $score++;
  }
  else
  {
    $score=$score;
  }

  $percent = ($score/5)*100;

  echo "you answered " .$score. " out of 5 (" . $percent . "%) correctly";


?>
