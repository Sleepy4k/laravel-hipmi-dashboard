#!/bin/bash
# Setup script for the genealogy-laravel project.
#
# This script prepares the project environment by installing dependencies and
# build resources into static resource
clear
echo ""
echo "=================================="
echo "===== PREPARING YOUR PROJECT..."
echo "=================================="
echo ""
# Install laravel dependencies with composer
echo "🎬 DEV ---> COMPOSER INSTALL"
composer install
echo ""
echo "=================================="
echo ""
echo ""
# Install node dependencies with npm
echo "🎬 DEV ---> NPM INSTALL"
if ! npm install; then
    echo "Failed to install node dependencies"
    exit 1
fi
echo ""
echo "=================================="
echo ""
echo ""
# Build node project with npm
echo "🎬 DEV ---> NPM RUN BUILD"
if ! npm run build; then
    echo "Failed to build node project"
    exit 1
fi
echo ""
echo "=================================="
echo ""
echo ""
# Run pre-setup command
echo "🎬 DEV ---> PHP ARTISAN NAKA:PRE-SETUP"
if ! php artisan naka:pre-setup; then
    echo "Pre-setup failed to run"
    exit 1
fi
echo ""
echo ""
echo "=================================="
echo "============== DONE =============="
echo "=================================="
echo ""
echo ""
while $cond; do
    read -p "🎬 DEV ---> DID YOU WANT TO START THE SERVER? (y/n) " cond
    case $cond in
        [Yy]* ) echo -e "\e[92mStarting server\e[39m"; php artisan serve; break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no."; ;;
    esac
done
