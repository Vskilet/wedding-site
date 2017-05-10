FROM nginx:1.11.8-alpine
MAINTAINER nous@constanceetvictor.fr

ADD web/ /usr/share/nginx/html/
COPY nginx/nginx-site.conf /etc/nginx/conf.d/default.conf
