#! /bin/bash
a=$(grep 100.100.100.100:88 /etc/openvpn/openvpn-status.log)
if [[ -z "$a" ]]
then
	echo "100.100.100.100:88" >> /var/scripts/supersion/A_tuer
fi
