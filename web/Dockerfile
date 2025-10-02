# Imagen base con Apache + PHP
FROM php:8.2-apache

# Extensión PDO MySQL para conectar PHP a MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Directorio raíz del sitio
WORKDIR /var/www/html

# Copio la app dentro de la imagen
COPY . .