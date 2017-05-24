#!/bin/bash


	nomdossier="$1"
	if [ ! -f $nomdossier ]; then
        	sudo touch /var/scripts/$nomdossier
        	sudo chown www-data:www-data /var/scripts/$nomdossier
        	sudo chmod 777 /var/scripts/$nomdossier
		for fichier in /home/"$1"/*
        	do
                echo $(basename $fichier .${fichier##*.}) >> /var/scripts/$nomdossier
        	done
	fi	
        case $2 in        
	1) 	sudo sed -n /'windows'/p /var/scripts/$nomdossier ;;
        2)      sudo sed -n /'mac'/p /var/scripts/$nomdossier ;;
	esac

