<?php

// $name;
// $_name;
// $Name;
// $first_name
// $myfirst_name1

// $1name  $1Name  $name&hi $myfirst_name1$
//  -> glt 
// in comparison to strict type language you cannot define a different kind of value in a different kind of variable eg. int will only have int value, you cannot put a string in that 
// but in php you can change the type of variable anytime
// $php = 1;
// $php = "nishu";

// $num = 1;
// echo "</br";
// echo $num;

// $name = "nishu";
// echo "</br>";
// echo $name;

// $float_number = 1.1;
// echo "</br>";
// echo $float_number;

// $name = "vinod";
// $degree = "MCS";
// $age = 26;
// echo "MY NAME IS $name $degree $age<br><br>";

// echo 'My name is' .$name.'. I have ' .$degree. 'I am ' .$age. 'years.';

// $youtube = "technical";
// $youtube .= "thapa";
// echo "</br>".$youtube;
// $a=5;
//xor => true if either $a or $b is true, but not both
// echo ($a == 5)?"yes,it's equalto {$a}":"oo not equal";
//
// echo ++$a;
// $favColor = "red";
// switch($favColor){
//     case "blue":
//        echo " code to be executed if n=label1";
//         break;
//     case "red":
//         echo " code to be executed if n=label2";
//         break;
//     default:
//        echo "  code execute anyways";
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br>
    <form method="POST">
        Enter your fav color:<input type="text" name="favColor">
        <input type="submit" name="submit" value="check now">
    </form>
    <p> MY FAVOURITE COLOR IS 
        <?php
            if(isset($_POST['submit'])){
                $favColor = $_POST['favColor'];
                echo $favColor;
            }

            ?>
            </p>
</body>
</html>