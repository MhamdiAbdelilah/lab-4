# Use the official PHP-Apache image as a parent image
FROM php:7.4-apache

# Enable rewrite module
RUN a2enmod rewrite

