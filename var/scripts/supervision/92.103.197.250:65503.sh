#! /bin/bash
a=$(grep "92.103.197.250:65503" /etc/openvpn/openvpn-status.log)
if [[ -z $a ]]
then
echo "92.103.197.250:65503">>/var/scripts/supervision/A_tuer
fi
