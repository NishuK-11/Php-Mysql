<?php

// echo $num;
// $firstName = "vinod";
// echo "</br>";
// echo "my name  is $firstName.";

// $dot_num = 3.467;
// echo "</br> $dot_num";

// $one = true;
// $zero = false;
// echo $one;//kuchh nhi aaya

// $array_name = array('hi','everyone','hope','u','r','fine',true);
// echo"</br>";
// echo $array_name[6];//1

// $num1 = 5;
// $num2 = 34;
// $mod = $num2 % $num1;
// echo "the remainder is $mod";

// $base = 6;
// $power = -5;
// $powerofnumber = pow($base,$power);
// echo $powerofnumber;

// //the simplest way to specify a string is to enclose it in single quotes. it is faster and everything quoted inside treated as plain string.
// double quotes allows us to use \n,\r and \t and variables. an important point here is that you can use curly braces to isolate the name of the variable you want evaluated.
// $name = "barkha";
// echo "my name is $name";
// echo "</br>";
// echo 'my name is $name';
// echo "my name is \"anshu\"";

// $day = "monday";
// if($day =="sunday"){
// 	echo"holiday";
// }
// else {
// 	echo"working day";
// }


$i = 1;
// while($i<=100){
// 	echo $i. "<br>";
// 	$i++;
// }

// do{
// 	echo $i. "<br>";
// 	$i++;
// }while($i<=10);


// == equal -> returns true if x is equal to y
// === identical -> x=y and dataype of x=datatype of y 

// $randNumber = rand(0,100);
// echo $randNumber;

for($i=1;$i<100;$i++){
	if($i%3==0 && $i%5==0){
		echo "fizz buzz  ";
	}
	else if($i%3==0){
		echo "fizz  ";
	}
	else if($i%5==0){
		echo "buzz  ";
	}
	else{
		echo "$i  ";
	}
}

$randNumber = rand(1,2);
echo $randNumber;
if($randNumber==1){
	echo "Head, I win";
}
else{
	echo "tail,you win!";
}


$data = "hello, take care of yourself";
$length = strlen($data);
echo "the length of string is ".$length;

$wordCount = str_word_count($data);
echo "word count is".$wordCount;

// echo str_replace(search,replace,subject);
echo str_replace("thapa","you","awesome thapa");
echo str_ireplace("hello","hello guys","Hello thapa");

$names = "<br><br> vinod | bahadur | thapa | technical";
echo str_replace("|",", ",$names);
?>