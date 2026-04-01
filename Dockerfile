FROM php:5.6-apache

# Fix old Debian repo
RUN echo "deb http://archive.debian.org/debian stretch main contrib non-free" > /etc/apt/sources.list \
 && echo "deb http://archive.debian.org/debian-security stretch/updates main contrib non-free" >> /etc/apt/sources.list

# Install dependencies
RUN apt-get -o Acquire::Check-Valid-Until=false update \
 && apt-get -o Acquire::Check-Valid-Until=false \
    -o Acquire::AllowInsecureRepositories=true \
    --allow-unauthenticated \
    install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr \
 && docker-php-ext-install gd mysqli pdo pdo_mysql

# ⚠️ IMPORTANT: install mysql via older method
RUN docker-php-ext-install mysql || true

# Force enable (if exists)
RUN if [ -f /usr/local/lib/php/extensions/*/mysql.so ]; then \
    echo "extension=mysql.so" > /usr/local/etc/php/conf.d/mysql.ini ; \
fi

# Enable Apache rewrite
RUN a2enmod rewrite

# Apache config
RUN printf "<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n" > /etc/apache2/conf-available/docker-php-app.conf \
 && a2enconf docker-php-app

# Copy project
COPY . /var/www/html

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]