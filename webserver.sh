#!/bin/bash
Sudo -i
apt-get update
apt-get install -y apache2
cd /var/www
sudo chmod 777 -R html
sudo apt-get install php5 -y
sudo apt install php libapache2-mod-php php-mysql -y