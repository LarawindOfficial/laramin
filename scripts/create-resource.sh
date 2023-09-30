#!/bin/bash

# Prompt the user for the directory name
read -p "Enter directory name: " dir_name

# Create the directory
mkdir "$dir_name"

# Change into the newly created directory
cd "$dir_name"

# Create the specified files
touch index.blade.php create.blade.php edit.blade.php show.blade.php

# Display a message indicating success
echo "Directory '$dir_name' created with the following files: index.blade.php, create.blade.php, edit.blade.php, show.blade.php"

