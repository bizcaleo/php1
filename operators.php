<?php

$a=54;
$b= 25;
//arithmetic operator
echo $a+$b; //addition
echo "<br>";
echo $a-$b; //subtract
echo "<br>";
echo $a*$b; //multiply
echo "<br>";
echo $a/$b; //divide
echo "<br>";
echo $a%$b; //modular
echo "<br>";


//comparison
var_dump($a==$b); //equals
echo "<br>";
var_dump($a<$b); //less than
echo "<br>";
var_dump($a!=$b); //not equals
echo "<br>";
var_dump($a>$b); // greater than
echo "<br>";
var_dump($a>=$b); //greater than or equal to
echo "<br>";



if ($a==54 && $b==25){
    echo "Yes the variables are the same";
}
//if the condition is true- it will print, if false, it wont print

echo "<br>";
//== means is equal to
//= means assignment of a value

if ($a==54 xor $b==15){
    echo "Yes the variables are not the same";
}
//string operators: adding two strings
$n = "caleb";
$n2 = "muas";

echo  "<br>";
echo $n . $n2; //concatenation only works with strings

echo  "<br>";
//assignment concantenation
$n .=$n2;
echo $n;
echo  "<br>";

//assignment operators means assigning numbers
$x=192;
$x+=20; //adds two variables can be *=, /=, -=
echo $x;

echo  "<br>";


