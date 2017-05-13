#! /bin/bash
a=$(grep "176.187.111.108:53962" /etc/openvpn/openvpn-status.log)
if [[ -z $a ]]
then
echo "176.187.111.108:53962">>/var/scripts/supervision/A_tuer
fi
