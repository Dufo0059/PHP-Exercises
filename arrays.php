<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/
$food = [];

$food = [
    "apple", 
    "pizza", 
    "banana",
    "pie"
];

print_r($food);

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
 <li>  {$food[0]}  </li>
 <li>  {$food[1]}  </li>
 <li>  {$food[2]}  </li>
 <li>  {$food[3]}  </li>
 </ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$apple = [
    " dessert "
]; 

$pizza = [
   " main "
]; 

$banana = [
   " breakfast "
];

$pie = [
   " dessert "
];

$food = [
    $apple,
    $pizza,
    $banana,
    $pie
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo " apple |" . $food[0][0];

echo "<br>";

echo " pizza |" . $food[1][0];

echo "<br>";

echo " banana |" . $food[2][0];

echo "<br>";

echo " pie |" . $food[3][0];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesecake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/


echo "pizza | {$food_assoc["pizza"]["type"]} | {$food_assoc["pizza"]["origin"]}";

echo "<br>";

echo "cheesecake | {$food_assoc["cheesecake"]["type"]} | {$food_assoc["cheesecake"]["origin"]}";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>{$food_assoc["pizza"]["type"]}</td>
    <td>{$food_assoc["pizza"]["origin"]}</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>{$food_assoc["cheesecake"]["type"]}</td>
    <td>{$food_assoc["cheesecake"]["origin"]}</td>
  </tr>
</table>";
?>