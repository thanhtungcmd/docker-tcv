FROM nginx:1.19

COPY default.conf /etc/nginx/conf.d/default.conf

VOLUME /var/log/nginx/edupia

WORKDIR /var/www

CMD ["nginx", "-g", "daemon off;"]

