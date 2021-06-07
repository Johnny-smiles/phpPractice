<?php

$counter = 10;
$increments = 0;

while($increments<$counter){
    $increments++;
    echo $increments*2;
}


for ($i=0;$i<15; $i++);{
    echo $i;
};



function myFuction($param){
    echo $param;
}
myFuction(' Hello World');

myFuction(' there can only be one ');

//
$myVar = 10;
echo $myVar;

function addTen(&$param){
    return $param += 10;
}

addTen($myVar);
echo $myVar;