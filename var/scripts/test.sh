#!/bin/bash
if [ -s nomdossier ]; then
        choix=$1
        if [ $choix == "1" ]; then
                sed -n /'windows'/p nomdossier
        fi
        if [ $choix == "2" ]; then
                sed -n /'mac'/p nomdossier
        fi
else
        for fichier in /home/$2/*
        do
                echo $(basename $fichier .${fichier##*.}) >> nomdossier
        done
fi

