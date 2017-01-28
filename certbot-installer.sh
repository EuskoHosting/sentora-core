#!/usr/bin/env bash
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi
wget https://dl.eff.org/certbot-auto -O /usr/bin/certbot-auto
chmod +x /usr/bin/certbot-auto
/usr/bin/certbot-auto
