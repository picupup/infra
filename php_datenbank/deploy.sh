#!/bin/bash
#<<deploy.sh>>
#erfkarimi
#2022-06-16_16:14:13
#Thema:Deploy auf www
#Es ist nötwendig folgendes code durchzuführen => (umask 007; mkdir /var/www/html/$USER/private/)


con=/var/www/html/$USER/private/dbconnection.inc.php
dir=/var/www/html/$USER/private/

#wenn die Passwört verzeichnes nicht existiert solte erstellt werden.
if test ! -e $con;then
  echo "Im in the if statment";
  (umask 007; mkdir -p $dir ; echo "created => private");
  touch $con;
  cat ~/.my.cnf | grep = | sed -E -e 's/^/$/g' -e 's/=/="/g' -e 's/$/";/g'  | (echo "<?php" ; cat) > $con;
fi


projekt=phpget;
mkdir -p /var/www/html/$USER/$projekt
cp -r www/* /var/www/html/$USER/$projekt
curl -s https://informatik.hs-bremerhaven.de/$USER/$projekt/getDemoData.php

