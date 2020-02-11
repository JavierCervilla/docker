FROM debian:buster

MAINTAINER Jcervill<jcervill@student.42madrid.com>


COPY /srcs/config_server /etc/nginx/sites-available/config_server
COPY /srcs/todo_list.php /var/www/localhost/todo_list.php
COPY /srcs/deployingServer.sh /tmp/
COPY /srcs/init.sql /tmp/
COPY /srcs/wordpress.sql /tmp/
COPY /srcs/wordpress/ /var/www/localhost/
COPY /srcs/phpmyadmin/ /var/www/localhost/phpmyadmin/


RUN apt update -y && \
    apt install -y vim nginx git php-fpm php-mysql mariadb-server openssl ufw && \
    chmod u+x /tmp/deployingServer.sh && \
    chmod 700 /etc/ssl/private && \
	openssl req -x509 -nodes -days 365 \
	-newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" \
	-keyout /etc/ssl/private/jcervill.key \
	-out /etc/ssl/certs/jcervill.crt && \
	openssl dhparam -out /etc/nginx/dhparam.pem 1000 && \
    ./tmp/deployingServer.sh

CMD service nginx start &&  \
    service mysql start && \
    service php7.3-fpm start && \
    bash

##RUN service mysql start 

   ## mysql && \
  ##  bash
