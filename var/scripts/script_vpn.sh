#! /bin/bash

# génération des certificats pour un projet
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
		# Déplacement vers le répertoire /usr/share/easy-rsa/
		cd $RSA_DIR
		source ./vars > /dev/null

		export EASY_RSA="${EASY_RSA:-.}"
		"$EASY_RSA/pkitool" --batch $projet
		
		# Création du fichier .ovpn
		touch $KEYS_DIR/$projet.ovpn
		echo -e "client\ndev tun\nproto udp\nremote 88.177.168.133 1195\nresolv-retry infinite\nnobind\npersist-key\npersist-tun\nca ca.crt\ncert $projet.crt\nkey $projet.key\ncomp-lzo\nverb 1" > $KEYS_DIR/$projet.ovpn
		
		# Formation du zip
		zip -q /home/$projet-`date +%d%m%y`.zip keys/$projet.crt keys/$projet.key keys/$projet.ovpn keys/ca.crt
	fi
else
	echo "Veuillez entrer le nom de votre projet."
	exit
fi
