FROM debian

RUN mkdir -p /var/www/peleja/web

WORKDIR /var/www/peleja

ENV PHPIZE_DEPS \
    autoconf \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    pkg-config \
    re2c

RUN apt-get update && apt-get install -y \
    $PHPIZE_DEPS \
    aptitude \    
    apt-utils \    
    pkg-config \    
    libpcre3-dev \    
    libzip-dev \    
    git \    
    openssh-client \    
    libssl-dev \    
    curl \    
    vim \
    nano \
    wget
    
RUN apt-get install -y \    
    apache2 \    
    php5-dev \   
    libapache2-mod-php5 \
    php-pear \    
    php5-mysql \    
    php5-curl \    
    php5-gd \    
    php5-intl \    
    php5-imagick \    
    php5-mcrypt \    
    php5-memcache \    
    php5-apcu 
    
# INSTALL XDEBUG
RUN wget http://xdebug.org/files/xdebug-2.5.1.tgz && tar -xvzf xdebug-2.5.1.tgz
RUN cd xdebug-2.5.1 \
    && phpize \
    && ./configure \
    && make \
    && cp modules/xdebug.so /usr/lib/php5/20131226
RUN rm -rf xdebug-2.5.1.tgz
RUN rm -rf -R xdebug-2.5.1
    
# ENABLE MOD_REWRITE 
RUN a2enmod rewrite 

# INSTALL COMPOSER 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer

# INSTALL SYMFONY INSTALLER
RUN mkdir -p /usr/local/bin
RUN curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony

# INSTALL PHPUNIT
RUN wget https://phar.phpunit.de/phpunit-5.7.phar
RUN chmod +x phpunit-5.7.phar
RUN mv phpunit-5.7.phar /usr/local/bin/phpunit

# ALTER CONFIG 
COPY conf/php.ini /etc/apache2/cli/php.ini
COPY conf/xdebug.ini /etc/php5/cli/conf.d/xdebug.ini
COPY conf/apache2.conf /etc/apache2/apache2.conf
COPY conf/000-default.conf /etc/apache2/sites-available/000-default.conf

CMD ["-D", "FOREGROUND"]
ENTRYPOINT ["apachectl"]
