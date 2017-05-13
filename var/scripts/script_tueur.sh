#! /bin/bash

while read ligne
do
	if [[ -n "$ligne" && -f "/var/scripts/supervision/$ligne.sh" && -f "/var/scripts/supervision/$ligne" ]]
	then
		rm /var/scripts/supervision/$ligne.sh
		rm /var/scripts/supervision/$ligne
		crontab -u root -l | grep -v '$ligne'  | crontab -u root -
	fi
done < /var/scripts/supervision/A_tuer
