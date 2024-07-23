# Используйте официальный образ PHP с Apache в качестве базового
FROM php:8.1-apache

# Установите необходимые пакеты и расширения
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd mysqli && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Скопируйте файлы сайта в директорию Apache
COPY html/ /var/www/html/

# Установите права доступа
RUN chown -R www-data:www-data /var/www/html

# Откройте порт 80
EXPOSE 80

# Запустите Apache
CMD ["apache2-foreground"]
