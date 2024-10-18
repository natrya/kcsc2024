FROM php:8.1-apache
RUN a2enmod rewrite
COPY src/ /var/www/html/
RUN mkdir -p /home && \
    echo "KCSC{S3l4mattt_m3nuju_f1nal}" > /home/flag.txt && \
    chown -R www-data:www-data /home && \
    chmod 644 /home/flag.txt
EXPOSE 80
