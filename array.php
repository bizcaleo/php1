<?php
//this is an array
$vegez=array("kales", "cabbage", "tomatoes");
$age=array(18,20, 15,);
$maboys=array("eric"=>"40", "caleb"=>"39","nick"=>"20" );
//see position of cabbage etc start with zero, 1,2,..
//e.g. cabbage is position 1 in the list

//[1]
echo "I DONT like " .$vegez [0] . " " . "that are" . " ".$age[2]. "days refrigerated";

echo "<br>";

//function called Count

echo count($age);// it will show 3

echo "<br>";
echo "Nick is" ." ". $age [1]." " . "years";