#! /bin/bash

# Script placé dans la crontab pour être exécuté toutes les cinq minutes et vider le répertoire /var/scripts/supervision en fonction de l'existence des fichiers #

while read ligne
do
        if [[ -n "$ligne" && -f "/var/scripts/supervision/$ligne.sh" && -f "/var/scripts/supervision/$ligne" ]]
        then
		# suppression des fichiers dans le répertoire /var/scripts/supervision
                rm /var/scripts/supervision/$ligne.sh
                rm /var/scripts/supervision/$ligne
		# suppression de la crontab
                crontab -u root -l | grep -v "$ligne"  | crontab -u root -
                # entrer la date de fin en bdd
                dat=$(date)
                # entrer la date d fin dans la bdd
                mysql -u root -p"K8moA" -e "UPDATE link.log SET log.date_fin='$dat' WHERE log.source='$ligne'"
                cp /var/scripts/supervision/Vide /var/scripts/supervision/A_tuer
        fi
done < /var/scripts/supervision/A_tuer
