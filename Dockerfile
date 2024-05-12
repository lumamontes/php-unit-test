# Use an official PHP 8.2 runtime as the base image
FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Install Composer
RUN apt-get update && \
    apt-get install -y git zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies using Composer
RUN composer install --no-scripts --no-autoloader

# Install PHPUnit
RUN composer require --dev phpunit/phpunit ^11

# Autoload PHP classes
RUN composer dump-autoload --optimize

# Expose port 80 to the outside world
EXPOSE 80
