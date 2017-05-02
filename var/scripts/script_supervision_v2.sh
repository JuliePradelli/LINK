#! /bin/bash

#### Script d'analyse des passages dans le fichier /etc/openvpn/openvpn-status.log à propos du serveur VPN [script_supervision.sh] ####

# Boucle permettant de parcourir toutes les lignes du fichiers et de détecter quand elles contiennent des points, c'est à dire une IP
# On procède comme ceci por avoir des fichiers homogènes à analyser

while read ligne
do
	if [[ "$ligne" =~ "." ]]
	then
		# si la ligne commence par une lettre, on écrit cette ligne dans un premier fichier
		if [[ "$ligne" =~ ^[a-zA-Z] ]]
		then
			echo $ligne | cut -d',' -f1,2,5 > /var/log/link_1.log
		# si la ligne commence par un chiffre, on écrit cette ligne dan un deuxième fichier
		elif [[ "$ligne" =~ ^[1-9] ]]
		then
			echo $ligne | cut -d',' -f1,2,3,4 > /var/log/link_2.log
		fi
	fi
done < /etc/openvpn/openvpn-status.log

# test : ne pas effacer
#cut -d" " -f18 /var/log/iptables.log | cut -d"=" -f2 #proto
