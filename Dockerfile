FROM million12/nginx-php

MAINTAINER DocIT ApS <info@docit.dk>

# Copy all files.
COPY site /data/www/default
COPY config/default.conf /etc/nginx/nginx.d/default.conf

