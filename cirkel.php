<?php 

echo"hallo voer de diamter van een cirkel in om omtrek/oppervlakte te berekenen (in cm):\n";
$diameter= readline();
//checkd 
if(is_numeric($diameter)) {
    if($diameter > 0) {

        $omtrek= $diameter * M_PI;
        $straal= $diameter / 2;
        $oppervlakte= ($straal * $straal) * M_PI;

        $omtrek= round($omtrek,2);
        $oppervlakte= round($oppervlakte,2);
        echo "de berekende omtrek: $omtrek cm\n";
        echo "de berekende oppervlakte: $oppervlakte cm²\n";
        exit; 
    }
}
echo "INVALID INPUT\n";

?>