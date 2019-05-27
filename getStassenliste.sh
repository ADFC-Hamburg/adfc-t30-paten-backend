#!/bin/bash

#Siehe http://suche.transparenz.hamburg.de/api/3/action/package_show?id=strassen-und-wegenetz-hamburg-hh-sib12

wget 'https://geodienste.hamburg.de/HH_WFS_Strassen_und_Wegenetz?SERVICE=WFS&VERSION=1.1.0&REQUEST=GetFeature&typename=app:strassennetz_gesamt' -O /tmp/suwn.gml
grep app:strassenname /tmp/suwn.gml   |sed -e 's/\s*.app:strassenname.\(.*\)..app:strassenname./\1/' |sort -u >strassenliste.txt
