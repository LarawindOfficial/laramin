#!/bin/bash

# Install Composer Dependancies
composer install

# Install Node Dependancies
npm install

# Generate the enviroment key
php artisan key:generate

# Migrate the database & seed
php artisan migrate:fresh --seed