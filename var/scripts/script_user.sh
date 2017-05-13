#!/bin/bash
source /var/scripts/source.sh

#$1 Nom projet
#$2 Mail de l'utilisateur
#$3 Utilisateur 1: création 2: génération de clé  3: suppression

#vérification si le login existe déja
var=`cat /etc/passwd |grep $1` 
result=`echo $var| awk '{print $1}'|cut -d: -f1`
#echo $result

#si le compte a déja été crée on envoie le mail de validation
if [[ $# -eq 2 && $result == $1 ]]; then
       		mutt -e "set content_type=text/html" $2 -s "Validation" < /root/validation.html
fi
if [[ $# -eq 3 ]]; then
#création d'un nouveau compte	
if [[ -z $result && "$3" == "1" ]]; then
		mkdir /home/$1
	       	useradd -d /home/$1 -s /bin/false -p $(openssl passwd -1 $1) $1
		chmod 755 /home/$1
		chown -R $1:www-data /home/$1		
		mutt -e "set content_type=text/html" $2 -s "Inscription" < /root/inscription.html
		mutt -e "set content_type=text/html" $mailadmin -s "Nouvelle machine" < /root/admin.html
	fi
#génération des clés dans le répertoire de l'utilisateur 
	if [[ -n $result && "$3" == "2" ]]; then
		./script_vpn.sh $1
	fi
#suppression d'un compte avec la révocation des certificats 
	if [[ -n $result && "$3" == "3" ]];then 
  	 	userdel $1
		./script_revocation.sh $1
		rm -r /home/$1
		mutt -e "set content_type=text/html" $2 -s "Desinscription" < /root/desinscription.html
	fi
else exit 1
fi
