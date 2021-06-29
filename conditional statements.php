<?php

//if, if... else. if... elsif... else, switch

$marks= 90;
if ($marks>=90) {
   echo "You passed";
}
echo "<br>";
$alama = 70;

if ($marks==90) {
    echo "You nailed it";
}else {
    echo "You have failed";
}
echo "<br>";

//if elsefif else statement

$t1 = 50;
if ($t1>=51){
    echo"you have crossed the mark";
} elseif ($t1<=50 && $t1>=80){
echo "we are out of the scope";
} else {
    echo "You made it";
}
echo "<br>";

//switch statement
$cars= "Benz";
switch ($cars) {
    case "VW":
        echo "I love VW";
        break;
    case "Toyota":
        echo "I like Toyota";
        break;
    case "Benz":
        echo "I dont mind Benz";
        break;
    default:
        echo "Do you love Japanese rides";

}