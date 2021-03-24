#!/bin/bash

wget https://wordpress.org/latest.zip
unzip latest.zip
rm latest.zip
sudo mv wordpress /opt/lampp/htdocs
sudo cp wp-config.php /opt/lampp/htdocs/wordpress/
sudo cp index.php /opt/lampp/htdocs/
firefox http://localhost/phpmyadmin &
clear
