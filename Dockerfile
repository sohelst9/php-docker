#use the latest php image with apache
FROM php:8.3-apache

#set working directory
WORKDIR /var/www/html

# copy project 
COPY . .

#expose port 80 for apache
EXPOSE 80