FROM php:8.1-apache
RUN a2enmod rewrite
COPY src/ /var/www/html/
RUN mkdir -p /home && \
    echo "KCSC{c0nc4t_c0ll1sion_666_1337}" > /home/flag.txt && \
    chown -R www-data:www-data /home && \
    chmod 644 /home/flag.txt
EXPOSE 80
