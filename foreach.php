<!-- key value pair 
foreach($array as $value){
    code to be executed
} -->

<?php

// $students = array("kisi","se","naraz","hoo","par","itna","bhi","nhi","ki","vyakti","tere","bina","jeena","seekh","jaye");
// echo "<ol>";
// foreach($students as $names){
//     // echo $names." ";
//     echo "<li>".$names."</li>";
// }
// echo "</ol>";

$students = array("kisi","se","naraz","hoo","par","itna","bhi","nhi","ki","vyakti","tere","bina","jeena","seekh","jaye");
rsort($students);
echo "<ol>";
foreach($students as $names){
    // echo $names." ";
    echo "<li>".$names."</li>";
}
echo "</ol>";
array_pop($students);
array_push($students,"bhi");
array_shift($students);
array_unshift($students,"you");
echo "<pre>";
print_r($students);
// array_pop($arr)
// array_push($arr)
// array_shift($arr)-> removes element from the beginning of an array
// array_unshift($arr)-> adds an element to beginning of an array

// implode() function :- it is used to join elements of an array with a string 
// implode function in php is easily remembered as array to string which simply mmeans it takes an array and returns a string. 




?>
