<?php
#variables
  $name = "Ben";
  echo "<h1>Hi $name!</h1>";

  $myArray = array("item1", "item2", "item3");
  echo "
  <ul>
    <li>$myArray[0]</li>
    <li>$myArray[1]</li>
    <li>$myArray[2]</li>
  </ul>";

  $fruits = array("fruit1"=>"banana", "fruit2"=>"apple", "fruit3"=>"melon");
  echo "
  <ul>
    <li>$fruits[fruit1]</li>
    <li>$fruits[fruit2]</li>
    <li>$fruits[fruit3]</li>
  </ul>";

  $myObject = (object)["name"=>"Ben", "age"=>28,];
  echo "<p>Hi, I'm $myObject->name and I'm $myObject->age years old.</p>";

#var_dump()
  var_dump($name);
  echo "<br>";
  var_dump($myArray);
  echo "<br>";
  var_dump($fruits);
  echo "<br>";
  var_dump($myObject);

#functions
  function sayHi() {
    echo "<p>Hi!</p>";
  };
  sayHi();

  function sayHiWithParameters($param1, $param2) {
    echo "<p>Hi $param1, you have $param2 years old!</p>";
  };
  sayHiWithParameters("Ben", 28);

  function returner($param1, $param2) {
    return $param1 + $param2;
  };
  echo returner(1, 2);

#conditionals
  $numb1 = 1;
  $numb2 = 2;
  if ($numb1 < $numb2) {
    echo "<p>$numb1 is lower than $numb2.</p>";
  } else if ($numb1 == $numb2) {
    echo "<p>$numb1 is equal to $numb2.</p>";
  } else {
    echo "<p>$numb1 is greater than $numb2.</p>";
  };

  $day = "monday";
  switch($day) {
    case("saturday"):
      echo "It's saturday!<br>";
    break;
    case("sunday"):
      echo "It's sunday!<br>";
    break;
    default:
      echo "It's not weekend.<br>";
  };

#loops
  $loopNumb = 1;
  while($loopNumb <= 5) {
    echo $loopNumb;
    $loopNumb++;
  };

  $loopNumb2 = 10;
  do {
    echo $loopNumb2;
    $loopNumb2++;
  } while($loopNumb2 <= 5);

  for ($i = 1; $i <= 5; $i++) {
    echo $i;
  };
?>
