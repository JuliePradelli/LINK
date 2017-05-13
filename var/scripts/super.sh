#! /bin/bash
# Parcours de l'ensemble du fichier link_1.log
while read infos
do
	#Lecture de chacune des adresses IP
        ip=$(echo $infos | cut -d"," -f2)
	# Recherche des records correpondant à cette adresse ip dans la base de données
        verif=$(mysql -u root -p"K8moA" -e "SELECT log.idlog FROM link.log where log.source='$ip'")
	#Si il n'y a personne dans la variable verif, inscription dans la base de données
        if [[ -z "$verif" ]]
        then
		# entrer le nouvel enregistrement dans la bdd
        	mysql -u root -p"K8moA" -e "INSERT INTO link.log(source, destinataire, date_debut, nom_projet) VALUES('$ip', 'none', '$date', '$nom')"
		# Création du script
		touch /var/scripts/supervision/$ip.sh
		chmod 744 /var/scripts/supervision/$ip.sh	
		echo -e "#! /bin/bash\na=\$(grep \"$ip\" /etc/openvpn/openvpn-status.log)\nif [[ -z \$a ]]\nthen\necho \"$ip\">>/var/scripts/supervision/A_tuer\nfi" > /var/scripts/supervision/$ip.sh
		# ajout d'une crontab
		crontab -l > /var/scripts/supervision/$ip
		echo "*/5 * * * * /var/scripts/supervision/$ip.sh" >> /var/scripts/supervision/$ip
		crontab /var/scripts/supervision/$ip
	#elseif [[ -n "$verif" && #le champ date fin est déjà rempli ]]
	#then
	#	# entrer un nouvel enregistrement dans la bdd
	#	echo "coucui"
        #	mysql -u root -p"K8moA" -e "INSERT INTO link.log(source, destinataire, date_debut, nom_projet) VALUES('$ip', 'none', '$date', '$nom')"
	#	# Création du script
	#else
	#	# rien !
        fi
done < /var/log/link_1.log
