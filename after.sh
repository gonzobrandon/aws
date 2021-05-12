#!/bin/bash


# Set config variables
sed -i -e 's/DATABASE/'"$X_DATABASE_NAME"'/g' /var/www/html/index.php
sed -i -e 's/HOSTNAME/'"$X_DATABASE_URI"'/g' /var/www/html/index.php
sed -i -e 's/USERNAME/'"$X_DATABASE_USER"'/g' /var/www/html/index.php
sed -i -e 's/PASSWORD/'"$X_DATABASE_PASS"'/g' /var/www/html/index.php