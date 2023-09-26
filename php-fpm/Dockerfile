FROM debian:latest

RUN apt-get update && apt-get install -y php-fpm php-mysql

COPY php.ini /etc/php/8.2/fpm/php.ini
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf

# Session storage with redis:
RUN echo "session.save_handler = redis" >> /etc/php/8.2/fpm/php.ini
RUN echo "session.save_path = tcp://redis:6379" >> /etc/php/8.2/fpm/php.ini

EXPOSE 9000

CMD ["/usr/sbin/php-fpm8.2", "-F"]