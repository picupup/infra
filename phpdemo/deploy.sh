#!/bin/bash
#<<deploy.sh>>
#erfkarimi
#2022-06-09_16:09:08
#Thema:

#u1=http://informatik.hs-bremerhaven.de/$USER/php/
dir=/var/www/html/$USER/php/
mkdir -p $dir
cp -r www/* $dir
chmod -R o+rx $dir
url=https://informatik.hs-bremerhaven.de/$USER/php/
curl -s "$url/index.php?name=Hanspeter"
echo
curl -s -i "$url/index.php?name=Hanspeter"
