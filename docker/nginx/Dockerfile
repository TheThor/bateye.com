FROM nginx:latest

COPY default.conf /etc/nginx/conf.d
COPY nginx.conf /etc/nginx/nginx.conf

WORKDIR /var/www/symfony

EXPOSE 80
EXPOSE 443

CMD ["nginx"]