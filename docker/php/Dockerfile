FROM php:7.3-apache

# Habilitar extensiones necesarias
RUN docker-php-ext-install mysqli

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Establecer DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Copiar configuración personalizada de Apache
# ...otras líneas...
COPY docker/apache/apache.conf /etc/apache2/sites-available/000-default.conf



# Copiar archivos del proyecto
COPY . /var/www/html

# Dar permisos a la carpeta uploads (opcional)
RUN chmod -R 777 /var/www/html/uploads
