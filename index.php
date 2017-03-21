<?php
echo "Hola Mundo<br>";
//1.Constructor
//$arrayCtr = array(rand(0,10),rand(0,10),rand(0,10)rand(0,10)rand(0,10));
$arrayCtr = array(1,3,5,7,9);

//2.[0]
$sumaIndices=0;
$arrayFor =array();
for ($i=0; $i < 5; $i++) { 
    $arrayFor[$i]=rand(0,10);
    $sumaIndices=$sumaIndices + $arrayFor[$i];        
}
$promedio=$sumaIndices/5;
if ($promedio <6) {
    echo "Es menor<br>";
} else {
    if ($promedio>6) {
        echo "Es mayor<br>";        
    }
    else
    echo "Es igual";

}


//3.push()
$arrayPush=array();
array_push($arrayPush,rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100));

echo "<br>";
var_dump($arrayCtr);
echo "<br>";
var_dump($arrayFor);
echo "<br>";
var_dump($arrayPush);
?>