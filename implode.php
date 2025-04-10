<?php

// implode() function :- it is used to join elements of an array with a string 
// implode function in php is easily remembered as array to string which simply mmeans it takes an array and returns a string. 
$colors = array('red','blue','yellow','green');

print_r($colors);
$res = implode(" |",$colors);
echo "my fav colors are".$res.".";

// explode()=> it is used to split a string by a specified string into pieces ie. it breaks a string into an array. 

$biodata = "my name is vinod thapa";
// $res = explode(delimiter,string);
$res = explode(" ",$biodata);
echo "<pre>";
print_r($res);
foreach($res as $val){
    echo $val;
}

function arrayUnion($arr1,$arr2){
    $merge = array_merge($arr1,$arr2);
    // foreach($merge as $value){
    //     echo $value;
    // }
    echo "<pre>";
    print_r($merge);
    $res = array_unique($merge);
    echo "<pre>";
    print_r($res);
}

$arr1 = array('green','black','red');
$arr2 = array('pink','white','black');
arrayUnion($arr1,$arr2);

?>