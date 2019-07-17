FROM debian:buster-slim

RUN apt-get update \
&& apt-get install -y --no-install-recommends \
nginx php-cgi php-fpm \
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/*

RUN sed -i.bak -e '/erver_tokens/ s/#//' /etc/nginx/nginx.conf
COPY nginx.default /etc/nginx/sites-available/default
COPY index.php /var/www/html
COPY ipcheck.php /var/www/html
EXPOSE 80
CMD service php7.3-fpm start && service nginx start \
&& tail -f /var/log/nginx/access.log
