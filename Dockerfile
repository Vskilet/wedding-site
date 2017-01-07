FROM nginx:1.11.8-alpine
MAINTAINER contact@constanceetvictor.fr

COPY index.html /usr/share/nginx/html/
COPY image.jpg /usr/share/nginx/html/
COPY styles.css /usr/share/nginx/html/
