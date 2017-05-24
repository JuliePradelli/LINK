#! /bin/bash
a=$(grep "" /etc/openvpn/openvpn-status.log)
if [[ -z $a ]]
then
echo "">>/var/scripts/supervision/A_tuer
fi
