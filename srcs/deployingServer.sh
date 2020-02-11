#configurando nginx:
rm -rf /etc/nginx/sites-available/default 
rm -rf /etc/nginx/sites-enabled/default 
ln -sf /etc/nginx/sites-available/config_server /etc/nginx/sites-enabled/
#--------------------------------------
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*
service nginx start
service mysql start
#configurando mysql/mariaDB:
mysql -u root --password=< /tmp/init.sql
mysql wordpress -u root --password=< /tmp/wordpress.sql
#tar -xvf /var/www/localhost/wordpress-5.3.2.tar.gz
#rm -rf /var/www/localhost/wordpress-5.3.2.tar.gz
#mv /var/www/localhost/wordpress/* /var/www/localhost/
#rm -rf /var/www/localhost/wordpress/
service nginx reload
#mysql wordpress -u root --password=< /tmp/wordpress.sql
#mysql_secure_installation
#service mysql start
#service mariadb start
#mariadb
#CREATE DATABASE wordpress;
#GRANT ALL ON example_database.* TO 'jcervill'@'localhost' IDENTIFIED BY 'pass1234' WITH GRANT OPTION;
#FLUSH PRIVILEGES;
#exit
