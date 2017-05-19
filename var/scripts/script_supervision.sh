#! /bin/bash

#### Script d'analyse des passages dans le fichier /etc/openvpn/openvpn-status.log à propos du serveur VPN [script_supervision_v2.sh] ####

# Boucle permettant de parcourir toutes les lignes du fichiers et de détecter quand elles contiennent des points, c'est à dire une IP
# On procède comme ceci por avoir des fichiers homogènes à analyser

# Mise en ^place d'un compteur pour effacer le fichier uniquement au premier passage
i=0
while read ligne
do
	if [[ "$ligne" =~ "." ]]
	then
		# si la ligne commence par une lettre, on écrit cette ligne dans un premier fichier
		if [[ "$ligne" =~ ^[a-zA-Z] && "$i" -eq 0 ]]
		then
			echo $ligne | cut -d',' -f1,2,5 > /var/log/link_1.log
			i=$(($i+1))
		elif [[ "$ligne" =~ ^[a-zA-Z] ]]
		then
			echo $ligne | cut -d',' -f1,2,5 >> /var/log/link_1.log
		# si la ligne commence par un chiffre, on écrit cette ligne dans un deuxième fichier
		elif [[ "$ligne" =~ ^[1-9] && "$i" -eq 1 ]]
		then
			echo $ligne | cut -d',' -f1,2,3,4 > /var/log/link_2.log
			i=$(($i+1))
		elif [[ "$ligne" =~ ^[1-9] ]]
		then
			echo $ligne | cut -d',' -f1,2,3,4 >> /var/log/link_2.log
		fi
	fi
done < /etc/openvpn/openvpn-status.log
