FROM serversideup/php:8.5-fpm-nginx AS base

# Set working directory
WORKDIR /var/www/html

# Switch user to root
USER root

# Install required php extensions
RUN install-php-extensions zip intl exif bcmath gd pgsql redis sockets

# Install XHProf for profiling
RUN apt-get update && apt-get install -y \
    graphviz \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN install-php-extensions xhprof

# Copy and enable XHProf configuration
COPY .docker/local/xhprof.ini /usr/local/etc/php/conf.d/xhprof.ini
RUN mkdir -p /tmp/xhprof && chmod 777 /tmp/xhprof

# ---- Dependencies ----
FROM base AS dependencies

# Copy application files with correct ownership
COPY --chown=www-data:www-data . .

# Install composer packages
RUN composer install

# ---- Release ----
FROM base AS production

# Switch to www-data user
USER www-data

# Expose port
EXPOSE 8080
