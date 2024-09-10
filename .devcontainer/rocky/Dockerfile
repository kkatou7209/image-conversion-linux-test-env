FROM rockylinux:8.9

ENV COMPOSER_VERSION=2.7.8
ENV NODE_VERSION=22.7.0

RUN dnf -y update && \
    dnf -y install \
        curl \
        zip \
        unzip

RUN dnf -y install https://rpms.remirepo.net/enterprise/remi-release-8.rpm;\
    dnf -y module reset php;\
    dnf -y module enable php:remi-8.3;\
    dnf -y install php;\
    dnf -y install php-ctype\
                   php-curl\
                   php-dom\
                   php-fileinfo\
                   php-filter\
                   php-hash\
                   php-openssl\
                   php-pcre\
                   php-pdo\
                   php-session\
                   php-tokenizer\
                   php-xml\
                   php-zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');";\
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;";\
    php composer-setup.php\
        --install-dir=/usr/local/bin\
        --filename=composer\
        --version=${COMPOSER_VERSION};\
    php -r "unlink('composer-setup.php');"

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.1/install.sh | bash

RUN . ~/.nvm/nvm.sh\
    && nvm install ${NODE_VERSION}\
    && nvm alias default ${NODE_VERSION}\
    && nvm use default

