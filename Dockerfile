FROM nginx:1.11.8-alpine
MAINTAINER contact@constanceetvictor.fr

ADD web/ /usr/share/nginx/html/
