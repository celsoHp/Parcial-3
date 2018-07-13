<?php
$n1=20;
$n2=16;

if($n2>$n2){
    
    echo $n1." es mayor<br>";

} else {
    echo $n2." es mayor<br>";
}

if($n1<=$n2){
    echo $n2."es mayor<br>";
    
    
} else {
    echo $n2." es mayor<br>";
}

if($n1!=$n2){
    echo $n2."son diferente<br>";
}  

for($x=0;$x<10;$x++){
    echo $x."<br>";
}

switch($n1){
    case 1:{
        echo "caso uno";
        break:
    }
    case 2:{
        echo "caso dos";
        break:
    }
    case 3:{
        echo "caso tres";
        break:
    }
        default{
            echo "predeterminado";
        }
}

$arreglo = array("nombre"=>"juan","apellido"=>"lopez","edad"=>21);
echo $arreglo[3];
echo "<ul id='lista3'>";
//solo obtiene el valor swl arreglo
foreach($arreglo as $index=$valor){
    echo "<li>array[$index]".$valor."</li>";
}

echo "</ul>";

?>


