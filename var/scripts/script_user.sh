#!/usr/bin/expect --
# $argv 0 Identifiant
# $argv 1 Mot de passe
set user [lindex $argv 0]
set pass [lindex $argv 1]
spawn chat_add.sh $user
expect "password:"
send $pass\r
expect "password:"
send $pass\r
expect "OK"
send \r
