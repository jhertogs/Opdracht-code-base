<?php 
//readline
echo"hallo voer de diamter van een cirkel in om omtrek/oppervlakte te berekenen (in cm):\n";
$diameter= readline();
//checked of input numerisch is en of het lager is dan 0.
if(is_numeric($diameter)) {
    if($diameter > 0) {
        //de calculaties cirkel
        $omtrek= $diameter * M_PI;
        $straal= $diameter / 2;
        $oppervlakte= ($straal * $straal) * M_PI;
        //omtrek & oppervlakte worden afgrerond op 2 decimalen.
        $omtrek= round($omtrek,2);
        $oppervlakte= round($oppervlakte,2);
        //de omtrek & oppervlakte worden geprint.
        echo "de berekende omtrek: $omtrek cm\n";
        echo "de berekende oppervlakte: $oppervlakte cm²\n";
        exit; 
    }
}
//als input niet een numerische heeft of lager is dan 0: 
echo "INVALID INPUT\n";
?>