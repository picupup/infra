<?php
#<<index.php>>
#erfkarimi
#2022-06-09_16:29:05
#Thema:Hier ist eine request von internet simuliert wird durch die curl im deploy überprüft
#
#require_once gleich wie include

#GET für zugriff
include("utils.php");
writeHead();
if ( ! isset( $_GET["name"] ) ){
  echo "Ich will deinen Namen!\n";
  exit;
}

#_GET kann auch durch _POST ersetzt werden.

$name=$_GET["name"];
echo "<h1>Du bist also $name \n</n>";

