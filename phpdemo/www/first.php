<?php
#<<first.php>>
#erfkarimi
#2022-06-09_16:10:44
#Thema: Hier lernt man wie funktionen, Array und Hashmaps funktionieren
#
echo "Moin\n";
$var=7; #variablen immer mit dollerzeichen


function dosomething($upto){
  for ($i=0;$i<$upto;++$i){
    echo "ich bin bei".$i."\n";
    if ($i===($upto-1)){
      echo "das war das letze Mal\n";
    }
   }
}

$arr=["eins", "zwei", "drei"];
for ($i=0;$i<count($arr);++$i){
  echo "bin im Array bei $i mit wert:".$arr[$i]."\n";
}

#Map
$map=["Mo"=>"Montag","Di"=>"Dienstag"]; #Assosiatives Array wie Dictionery oder Hashmap in python oder Java
echo $map["Mo"]."\n";
foreach ($map as $key => $value){
  echo $key." = ".$value."\n";
}

