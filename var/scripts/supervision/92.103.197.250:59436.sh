#! /bin/bash
a=$(grep "92.103.197.250:59436" /etc/openvpn/openvpn-status.log)
if [[ -z $a ]]
then
echo "92.103.197.250:59436">>/var/scripts/supervision/A_tuer
fi
