#!/bin/sh
apt-get update -y
apt-get install apache2 -y
apt-get install php5 php5-mcrypt -y
apt-get install mysql-server php5-mysql -y
rm -r /var/www
ln -sf /vagrant/public /var/www
service apache2 restart
