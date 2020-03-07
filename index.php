<?php
include('funciones.php');

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
//Arreglos multidimencionales en php(arreglo de arreglos)
echo("<br>....................................");
echo("<br>");
$usuarios=array(
    'usuario1'=>array('nombre'=>"Juan",'edad'=>30,'genero'=>"Masculino"),
    'usuario2'=>array('nombre'=>"Matilde",'edad'=>25,'genero'=>"Femenino"),
    'usuario3'=>array('nombre'=>"Simon",'edad'=>45,'genero'=>"Masculino"),
    'usuario4'=>array('nombre'=>"Alenjandro",'edad'=>34,'genero'=>"Masculino"),
    'usuario5'=>array('nombre'=>"María",'edad'=>23,'genero'=>"Femenino")
);
echo("<br>");
print_r($usuarios);

//ciclo foreach para acceder alos elementos del arreglo multidimencionales
echo("<br>....................................<br>");
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
    echo($clavesArreglosUnidimensionales);
    echo("<br>");
    print_r($arreglosUnidimensionales);
    echo("<br>");
    foreach($arreglosUnidimensionales as $claves=>$valorers){
        echo("<br>");
       echo($claves) ;
       echo("<br>");
       echo($valorers);
       echo("<br>");

    }
}

//calcular la edad de dos personas 
echo("<br>....................................<br>");
echo("<br>");
calcularEdad(1991);

echo("<br>....................................<br>");
echo("<br>");
calcularEdad2(1991,2020);

echo("<br>....................................<br>");
echo("<br>");
$edad3=calcularEdad3(1991,2020);
echo("La edad de la personas es: $edad3");


//arreglo que se llena con una funcion 
echo("<br>....................................<br>");
echo("<br>");
$edades=array('edad1'=>calcularEdad3(1991,2020),'edad'=>calcularEdad3(1995,2020));
    print_r($edades);


?>