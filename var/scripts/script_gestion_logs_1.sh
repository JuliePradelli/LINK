#! /bin/bash
# Parcours de l'ensemble du fichier link_1.log
while read infos
do
        #Lecture de chacune des adresses IP
        ip=$(echo $infos | cut -d"," -f2)
        dat=$(echo $infos | cut -d"," -f3)
        nom=$(echo $infos | cut -d"," -f1)
        # Recherche des records correpondant à cette adresse ip dans la base de données
        verif_existence=$(mysql -u root -p"K8moA" -e "SELECT log.idlog FROM link.log where log.source='$ip'")
        verif_date_fin=$(mysql -u root -p"K8moA" -e "SELECT log.date_fin FROM link.log where log.source='$ip'")
        verif_remplissage=$(echo $i | grep -e 'NULL')
        #Si il n'y a personne dans la variable verif_existence, inscription dans la base de données
        if [[ ( -z "$verif_existence" ) || ( -n "$verif_existence" && -z "verif_remplissage" ) ]]
        then
                # entrer le nouvel enregistrement dans la bdd
                mysql -u root -p"K8moA" -e "INSERT INTO link.log(source, destinataire, date_debut, nom_projet) VALUES('$ip', 'none', '$dat', '$nom')"
                # Création du script
                touch /var/scripts/supervision/$ip.sh
                chmod 744 /var/scripts/supervision/$ip.sh
                echo -e "#! /bin/bash\na=\$(grep \"$ip\" /etc/openvpn/openvpn-status.log)\nif [[ -z \$a ]]\nthen\necho \"$ip\">>/var/scripts/supervision/A_tuer\nfi" > /var/scripts/supervision/$ip.sh
                # ajout d'une crontab
                crontab -l > /var/scripts/supervision/$ip
                echo "*/5 * * * * /var/scripts/supervision/$ip.sh" >> /var/scripts/supervision/$ip
                crontab /var/scripts/supervision/$ip
        fi
done < /var/log/link_1.log
