FROM php:7.2-fpm

RUN apt-get update

RUN apt-get install -y zlib1g-dev libpq-dev git libicu-dev libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-install zip xml \
    && pecl install apcu \
    && docker-php-ext-enable apcu

# Install opcache
RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache
## set recommended opcache PHP.ini settings
## see https://secure.php.net/manual/en/opcache.installation.php
## COPY conf.d/00-opcache-recommended.ini /usr/local/etc/php/conf.d/00-opcache-recommended.ini
RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/London /etc/localtime
RUN "date"

# install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#Set the following lines depending on if you're on Mac or Windows
#RUN echo "xdebug.remote_host=docker.for.mac.localhost" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_host=docker.for.mac.host.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

#Installing gnupg for Node/Yarn steps
RUN apt-get update \
    && apt-get install -my wget gnupg

# npm & node
RUN curl -sL https://deb.nodesource.com/setup_9.x | bash
RUN apt-get install -y nodejs npm \
  && update-alternatives --install /usr/bin/node node /usr/bin/nodejs 10
# build tools
RUN apt-get install -y build-essential

# Just in case, removing cmdtest to install yarn correctly due to: Check https://github.com/yarnpkg/yarn/issues/2821
RUN apt-get remove -y cmdtest
# Yarn PPA, so it doesn't get confused with the wrong yarn.
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get -qq update
# Intall Yarn
RUN apt-get install -y -qq yarn

# install mongodb ext
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

WORKDIR /var/www/symfony