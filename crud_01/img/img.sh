#!/bin/sh

cd flags;
for f in *.png ;
do    g=$(jq -er ".${f%.*}" arquivo.json) &&
        mv "$f" "${g// /_}".png;
done
