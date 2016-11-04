FROM tbfisher/drupal-nginx:php-7.0.x

MAINTAINER Code Creation ApS <info@codecreation.dk>

# Copy all files.
COPY site /var/www/web

