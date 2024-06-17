# Use an official PHP image as the base image
FROM php:8.1-apache

# Install nano and other dependencies
RUN apt-get update \
    && apt-get install -y nano \
    && rm -rf /var/lib/apt/lists/*

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy the application files to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

