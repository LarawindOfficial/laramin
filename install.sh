#!/bin/bash

echo "Installing the application..."

# Install Composer Dependancies
echo "Installing Composer Dependancies..."
composer install

# Install Node Dependancies
echo "Installing Node Dependancies..."
npm install

# Copy the enviroment file
echo "Copying the enviroment file..."
cp .env.example .env

# Generate the enviroment key
echo "Generating the enviroment key..."
php artisan key:generate

# Migrate the database & seed
echo "Migrating and seeding the database..."
php artisan migrate:fresh --seed
