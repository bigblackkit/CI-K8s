FROM php:8.2-fpm-alpine

# Установка nginx и supervisor
RUN apk add --no-cache nginx supervisor

# Создание директорий
RUN mkdir -p /run/nginx /var/www/html

# Копируем index.php
COPY index.php /var/www/html/

# Копируем конфиги
COPY default.conf /etc/nginx/http.d/default.conf
COPY supervisord.conf /etc/supervisord.conf

# Открываем порт 80
EXPOSE 80

# Запуск supervisord, который запускает nginx и php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
