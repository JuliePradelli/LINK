#! /bin/bash

#### Script d'analyse des passages dans le fichier /var/log/iptables.log à propos du serveur VPN [script_supervision.sh] ####

cut -d" " -f1 /var/log/iptables.log #mois
cut -d" " -f4 /var/log/iptables.log #heure
cut -d" " -f10 /var/log/iptables.log | cut -d"=" -f2 #mac
cut -d" " -f11 /var/log/iptables.log | cut -d"=" -f2 #src
cut -d" " -f12 /var/log/iptables.log | cut -d"=" -f2 #dst
cut -d" " -f18 /var/log/iptables.log | cut -d"=" -f2 #proto
