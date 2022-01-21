<?php
  $name = "Ben";
  echo "<h1>Hi $name!</h1>";

  #array
  $myArray = array("item1", "item2", "item3");
  echo "
  <ul>
    <li>$myArray[0]</li>
    <li>$myArray[1]</li>
    <li>$myArray[2]</li>
  </ul>";

  #array 2
  $fruits = array("fruit1"=>"banana", "fruit2"=>"apple", "fruit3"=>"melon");
  echo "
  <ul>
    <li>$fruits[fruit1]</li>
    <li>$fruits[fruit2]</li>
    <li>$fruits[fruit3]</li>
  </ul>";

  #object
  $myObject = (object)["name"=>"Ben", "age"=>28,];
  echo "<p>Hi, I'm $myObject->name and I'm $myObject->age years old.</p>";
?>
