#! /bin/bash

#### Script de création des certifiacts pour un projet et compression dans le répertoire /home/projet [script_vpn.sh] ####

# $1 = Le nom du projet

# Déclaration des répertoires principaux
RSA_DIR=/usr/share/easy-rsa
KEYS_DIR=$RSA_DIR/keys

# Vérification de l'existence du premier paramètre
if [ ! -z "$1" ]
then
	projet=$1 
	# Vérification que ce certificat n'existe pas déjà
	if [ -f $KEYS_DIR/$projet.crt ]
	then
		echo "Ce projet existe déjà dans le système."
		exit
	else
		# Vérification de l'existence du répertoire /home/$projet
		if [ ! -d /home/"$projet" ]
		then
			# Si il n'existe pas, création
			mkdir /home/"$projet"
		fi
		# Déplacement vers le répertoire /usr/share/easy-rsa/
		cd $RSA_DIR
		source ./vars > /dev/null

		export EASY_RSA="${EASY_RSA:-.}"
		"$EASY_RSA/pkitool" --batch $projet
		
		# Création du fichier .ovpn
		touch $KEYS_DIR/$projet.ovpn
		echo -e "client\ndev tun\nproto udp\nremote 88.177.168.133 1195\nresolv-retry infinite\nnobind\npersist-key\npersist-tun\nca ca.crt\ncert $projet.crt\nkey $projet.key\ncomp-lzo\nverb 1" > $KEYS_DIR/$projet.ovpn
		
		# Formation des zips
		cd $KEYS_DIR
		# Zip pour windows
		zip -q /home/$projet/$projet-`date +%d%m%y`-windows.zip $projet.crt $projet.key $projet.ovpn ca.crt openvpn-client-install-2.4.1-windows.exe
		# Zip pour mac
		zip -q /home/$projet/$projet-`date +%d%m%y`-mac.zip $projet.crt $projet.key $projet.ovpn ca.crt tunnelblick-install-3.7.0-mac.dmg
	fi
else
	echo "Veuillez entrer le nom de votre projet."
	exit
fi
