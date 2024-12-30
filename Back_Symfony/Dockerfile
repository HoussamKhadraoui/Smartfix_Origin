# Start with the official PHP image with Apache
FROM php:8.3-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Install Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Enable Apache mod_rewrite for Symfony
RUN a2enmod rewrite

# Set up the document root and working directory
WORKDIR /var/www/html

# Create and use a non-root user to avoid running Composer as root
RUN useradd -m myuser

# Switch to root user to install Composer
USER root

# Install Composer (using the global installer)
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Switch back to non-root user
USER myuser

# Copy the application files into the container as the non-root user
COPY --chown=myuser:myuser . /var/www/html/

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist

# Expose the port Apache is running on
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
