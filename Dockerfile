
FROM php:8.3-apache

WORKDIR /

# Set timezone
ENV TZ=Europe/Berlin

# Set geographic area using above variable
# This is necessary, otherwise building the image doesn't work
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Remove annoying messages during package installation
ARG DEBIAN_FRONTEND=noninteractive

# Install packages: web server & PHP plus extensions
RUN apt-get update && apt-get install -y \
    ca-certificates \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    msmtp \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd intl mbstring xml \
  && rm -rf /var/lib/apt/lists/*

COPY . .

# Copy virtual host configuration from current path onto existing 000-default.conf
COPY default.conf /etc/apache2/sites-available/000-default.conf

# Activate Apache modules headers & rewrite
RUN a2enmod headers rewrite


COPY entrypoint.sh /usr/local/bin/
ENTRYPOINT ["entrypoint.sh"]

# Tell container to listen to port 80 at runtime
EXPOSE 80

# Start Apache web server
CMD [ "/usr/sbin/apache2ctl", "-DFOREGROUND" ]
