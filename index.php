<?php


echo("clase 4 bucles, arreglos y funciones ");
//  arreglo en php 
//array indexado
$arreglo=array("Juan","Matilde","Simon","Alenjandro","María");
echo("<br>");
print_r($arreglo);
echo("<br>....................................");
echo("<br>");
//arreglo asociativo
$arreglo=array('user1'=>"Juan",'user2'=>"Matilde",'user3'=>"Simon",'user4'=>"Alenjandro",'user5'=>"María");
print_r($arreglo);
echo("<br>....................................");
echo("<br>");
//tamaño de array 

$tamano=count($arreglo);
print("El tamaño de nuestro arreglo es : ".$tamano);
echo("<br>....................................");
echo("<br>");

//bucles for

for($centinela=0;$centinela<=10;$centinela++){
    echo("<br> El valor de centinela es:".$centinela."<br>");
}

//bucles for para  recorrer arreglos
echo("<br>....................................");
echo("<br>");
$arreglo=array("Juan","Matilde","Simon","Alenjandro","María");
for($centinela=0;$centinela<count($arreglo);$centinela++){
    echo($arreglo[$centinela]."<br>");
    echo("<br>");
}

//bucles foreach para  recorrer arreglos asociativo
echo("<br>....................................");
echo("<br>");
$arreglo=array('user1'=>"Juan",'user2'=>"Matilde",'user3'=>"Simon",'user4'=>"Alenjandro",'user5'=>"María");
foreach($arreglo as $clave=>$valor){
    echo"la clave es: ".$clave."<br>";
    echo($valor)."<br>";
    echo("<br>");
}
//bucles foreach para  recorrer arreglos indexados
echo("<br>....................................");
echo("<br>");
$arreglo=array("Juan","Matilde","Simon","Alenjandro","María");
foreach($arreglo as $clave=>$valor){
    echo "<br> La clave del cajon es: ".$clave;
    echo "<br> El valor del cajon es: ".$valor;
    echo("<br>");

}

?>