#
# PHP Dependencies
#
FROM composer:2.0 as vendor

WORKDIR /app

COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

COPY . .
RUN composer dump-autoload

#
# Frontend
#
FROM node:14.9 as frontend

WORKDIR /app

COPY artisan package.json webpack.mix.js package-lock.json ./

RUN npm audit fix
RUN npm cache clean --force
RUN npm cache verify

RUN npm install -f

COPY resources/js ./resources/js
COPY resources/sass ./resources/sass

RUN npm run development



#
# Application
#
FROM php:7.4-fpm

WORKDIR /app

# Install PHP dependencies
RUN apt-get update -y && apt-get install -y build-essential libxml2-dev libonig-dev
RUN docker-php-ext-install pdo pdo_mysql opcache tokenizer xml ctype json bcmath pcntl

# Install Linux and Python dependencies
RUN apt-get install -y curl wget git file ruby-full locales vim

# Run definitions to make Brew work
RUN localedef -i en_US -f UTF-8 en_US.UTF-8
RUN useradd -m -s /bin/zsh linuxbrew && \
    usermod -aG sudo linuxbrew &&  \
    mkdir -p /home/linuxbrew/.linuxbrew && \
    chown -R linuxbrew: /home/linuxbrew/.linuxbrew
USER linuxbrew
RUN /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"

USER root
#RUN chown -R $CONTAINER_USER: /home/linuxbrew/.linuxbrew
ENV PATH "$PATH:/home/linuxbrew/.linuxbrew/bin"

#Install Chrome
RUN wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
RUN apt install -y ./google-chrome-stable_current_amd64.deb

# Install Python modules (dependencies) of scraper
RUN brew install python3
RUN pip3 install selenium
RUN pip3 install bs4
RUN pip3 install pandas

# Copy Frontend build
COPY --from=frontend app/node_modules/ ./node_modules/
COPY --from=frontend app/public/js/ ./public/js/
COPY --from=frontend app/public/css/ ./public/css/
COPY --from=frontend app/public/mix-manifest.json ./public/mix-manifest.json

# Copy Composer dependencies
COPY --from=vendor app/vendor/ ./vendor/
COPY . .
RUN cp /app/drivers/chromedriver /usr/local/bin
#COPY .env.prod ./.env
COPY .env.local-docker ./.env

# Copy the scripts to docker-entrypoint-initdb.d which will be executed on container startup
COPY ./docker/ /docker-entrypoint-initdb.d/
COPY ./docker/init_db.sql .

RUN php artisan config:cache
RUN php artisan route:cache

CMD php artisan serve --host=0.0.0.0 --port=8080

EXPOSE 8080