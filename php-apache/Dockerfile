# Puedo elegir la version de php que voy a instalar
FROM php:8.2.7-apache
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
WORKDIR /var/www/html

RUN apt-get update && \
	apt-get install -y \
	git \
	unzip \
	libzip-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Puedo elegir la las librerias
RUN docker-php-ext-install pdo pdo_mysql zip

RUN echo "date.timezone = America/Argentina/Buenos_Aires" > /usr/local/etc/php/php.ini
RUN echo "session.cookie_lifetime=120" >> /usr/local/etc/php/php.ini
RUN echo "session.gc_maxlifetime=120" >> /usr/local/etc/php/php.ini

RUN a2enmod rewrite
RUN a2enmod headers
RUN a2enmod expires

RUN service apache2 restart

RUN apt-get clean && rm -rf /var/lib/apt/lists/*