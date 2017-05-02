#! /bin/bash

#### Script de révocation des certificats d'un projet, effacement dans le répertoire keys et suppression des zips dans le répertoire home [script_revocation.sh] ####

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

		# On se place dans le répertoire easy-rsa pour lancer le script vars
		cd $RSA_DIR
		source ./vars > /dev/null

		# On lance le script revoke-full
		source ./revoke-full $1

		# On se place dans le répertoire keys pour upprimer tous les fichiers liés au projet
		cd $KEYS_DIR
		rm $1.*

		rm -rf /home/$1/*.zip
	else
		echo "Ces certificats n'existent pas."
		exit
	fi
else
	echo "Veuillez entrer le nom de votre projet."
	exit
fi
