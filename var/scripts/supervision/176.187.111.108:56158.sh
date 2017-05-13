#! /bin/bash
a=$(grep "176.187.111.108:56158" /etc/openvpn/openvpn-status.log)
if [[ -z $a ]]
then
echo "176.187.111.108:56158">>/var/scripts/supervision/A_tuer
fi
