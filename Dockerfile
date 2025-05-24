# STAGE 1: File Verification Stage
FROM busybox:latest AS verifier

WORKDIR /app
COPY . /app/

# --- CRITICAL VERIFICATION STEP ---
RUN echo "STAGE 1 VERIFIER: Listing /app contents..." && \
    ls -la /app/ && \
    echo "STAGE 1 VERIFIER: Searching for yourls-loader.php in /app..." && \
    if [ ! -f "/app/yourls-loader.php" ]; then \
        echo "❌ STAGE 1 ERROR: yourls-loader.php NOT FOUND!" >&2; exit 1; \
    else echo "✅ Found yourls-loader.php"; fi && \
    if [ ! -f "/app/config.php" ]; then \
        echo "❌ STAGE 1 ERROR: config.php NOT FOUND in root!" >&2; exit 1; \
    else echo "✅ Found config.php in root"; fi && \
    touch /app/VERIFIED_FILES_EXIST.txt && \
    echo "✅ STAGE 1 VERIFICATION COMPLETE"

# STAGE 2: Main Application Stage (YOURLS)
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli pdo pdo_mysql zip

# Apache setup
RUN a2enmod rewrite

RUN echo '<Directory /var/www/html>\n\
    Options +FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n\
DirectoryIndex yourls-loader.php index.php index.html\n' \
> /etc/apache2/conf-available/yourls.conf && a2enconf yourls

WORKDIR /var/www/html

# ✅ Copy all verified app files
COPY --from=verifier /app/ /var/www/html/

# ✅ Copy updated config.php into the YOURLS /user/ folder
COPY config.php /var/www/html/user/config.php

