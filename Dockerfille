FROM php:8.2-apache

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Instala extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura o diretório de trabalho
COPY . /var/www/html
WORKDIR /var/www/html

# Ajusta permissões para o Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Configura o Apache para a pasta /public do Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Porta que o Render usa
EXPOSE 80

CMD ["apache2-foreground"]
