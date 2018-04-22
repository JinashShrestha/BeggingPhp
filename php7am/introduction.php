<?php

//wifi password= 9801169146

//phpinfo();

//echo PHP_VERSION;

//echo "test";
//print ('test'); echo used rather than this cuz echo does faster processing


//$name='admin';
//echo 'Your name is $name';
//echo "Your name is $name";

$x = 10;
$y = '10';

// == checks
// === checks datatype and value

$x = 50;
$y = 30;
$z = 300;

if ($x>$y)
{
    $a=$x;
}

else
{
    $a=$y;
}
if ($a>$z){
    $a=$a;
}
else{
    $a=$z;
}

echo "Largest= $a";
echo "<br>";
$age=70;

if ($age<16)
{
    echo "You cannot attain this party";
}

elseif ($age>=16 && $age<60)
{
    echo "Welcome to party";
}

else
{
    echo "You are too old";
}