CREATE DATABASE wordpress;
GRANT ALL ON wordpress.* TO 'root'@'localhost';
FLUSH PRIVILEGES;
update mysql.user set plugin = 'mysql_native_password' where user='root';