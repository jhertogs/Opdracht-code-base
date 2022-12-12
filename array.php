<?php 
//hier word de array met items aangemaakt
$programmeertalen= array("PHP",
    "C#", 
    "HTML",
    "JavaScript",
    "Java", 
    "C++", 
    "C",
 );
//hier worden de items python en swift toegevoegd
array_push($programmeertalen,
    "python",
    "swift",
 );
//hier worden de items gesorteerd dan uigeprint en de hoeveelheid items word uitgeprint.
sort($programmeertalen);
print_r($programmeertalen);
echo "de array heeft zoveel items:";
echo count($programmeertalen);



?>