<script type="text/javascript">
    function init(){
    var tablero= Array['2-Dati-Gifam.jpg','grand-palais_2.jpg','grand-palais_2.jpg'];
    tablero.sort(function() { return 0.5 - Math.random() });
    
     console.log(tablero[0]);
     console.log(tablero[1]);
     console.log(tablero[2]);
    var tabla= document.getElementById("tablero");

var celdas=tabla.getElementsByTagName("td");
        for(x=0; x<3;x++){
            
    var img1= document.createElement("img");
        img1.setAttribute("src",tablero[0]);
        celdas[0].appendChild(img1);
            
    }
</script>