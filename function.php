<?php

// function saymyname(){
//         echo "my name is vinod";
// }
// saymyname();
$names = array("kisi","se","naraz","hoo","par","itna","bhi","nhi","ki","vyakti","tere","bina","jeena","seekh","jaye");
echo "<pre>";
print_r($names);

$names[5]="Itna";
echo "<pre>";
print_r($names);
echo $names[2];

$arraylength = count($names);
echo $arraylength;
echo "<ol>";
// for($i=0;$i<15;$i++){
//     echo "<br>".$names[$i]."<br>";
    
// }
for($i=0;$i<15;$i++){
    echo "<li>".$names[$i]."</li>";
    
}
echo "</ol>";
?>