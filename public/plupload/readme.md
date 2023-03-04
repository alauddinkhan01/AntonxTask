# ![Laravel Example App](logo.png)

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/alauddinkhan01/AntonxTask.git

Switch to the repo folder

    cd AntonxTask

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the node package manager command

    npm install

Then run the following command

    npm run dev

Run the database migrations with seeder(**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/alauddinkhan01/AntonxTask.git
    cd AntonxTask
    composer install
    cp .env.example .env
    php artisan key:generate
    npm install
    npm run dev
    php artisan migrate --seed
    
**Login credential**

    admin@gmail.com
    admin123