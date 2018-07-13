<?php
 
function incremento(){
    $X=3;
    return $x++;
}

echo  incremento();
$x=3;
function suma($valor){
    return $valor+1;
}
echo suma($x)."<br>";

function saludo($titulo="sr."$nombre="Desconocido"){
    return "hola".$titulo." ".$nombre;
}
echo saludo()."<br>";
echo saludo('prof.')."<br>";
echo saludo('',"celso")."<br>";

?>