#!/bin/bash
#<<deploy.sh>>
#erfkarimi
#2022-06-09_15:15:49
#Thema:



projekt=ajax_test


dir=/var/www/html/$USER/$projekt

mkdir -p $dir

cp -r www/* $dir
