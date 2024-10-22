FROM php:8.1-apache
RUN a2enmod rewrite
COPY src/ /var/www/html/
RUN mkdir -p /home && \
    echo "KCSC{S3l4mattt_H4ck3r}" > /home/flag.txt && \
    chown -R www-data:www-data /home && \
    chmod 644 /home/flag.txt
EXPOSE 80
