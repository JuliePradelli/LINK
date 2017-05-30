#! /bin/bash
# Parcours de l'ensemble du fichier link_2.log

while read infos
do
        ip_source=$(echo $infos | cut -d"," -f3)
	verif_existence=$(mysql -u root -p"K8moA" -e "SELECT log.idlog FROM link.log where log.source='$ip_source'")
	if [ -n "$verif_existence" ]
	then
		id=$(echo $verif_existence | cut -d" " -f2)
        	verif_date_fin=$(mysql -u root -p"K8moA" -e "SELECT log.date_fin FROM link.log where log.idlog=$id")
		verif=$(echo $verif_date_fin | grep "NULL")
		if [ -n "$verif" ]
		then
			tail -n 200 /var/log/iptables.log > /var/log/iptables.log.analyse
			ana=$(grep "$ip_virtuelle" /var/log/iptables.log.analyse | head -1)
			adresse_dst=$(echo $ana | cut -d" " -f10 | cut -d"=" -f2)
			mysql -u root -p"K8moA" -e "UPDATE link.log SET log.destinataire='$adresse_dst' WHERE log.idlog='$id'"
			proto=$(echo $ana | cut -d" " -f17 | cut -d"=" -f2)
			mysql -u root -p"K8moA" -e "UPDATE link.log SET log.proto='$proto' WHERE log.idlog='$id'"
		fi
	fi	
done < /var/log/link_2.log
