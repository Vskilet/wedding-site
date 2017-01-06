FROM nginx:1.11.8-alpine
MAINTAINER contact@constanceetvictor.fr

COPY site/ /usr/share/nginx/html/
