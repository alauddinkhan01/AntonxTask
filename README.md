
# ![ANTONX TASKS]

Please follow the following steps to setup the projects


## Installation

Clone the repository

```bash
  git clone https://github.com/alauddinkhan01/AntonxTask.git
```
Switch to the repo folder

```bash
  cd AntonxTask
```
Switch to the repo folder

```bash
  cd AntonxTask
```
Install all the dependencies using composer

```bash
  composer install
```
Copy the example env file and make the required configuration changes in the .env file

```bash
  cp .env.example .env
```
Generate a new application key

```bash
  php artisan key:generate
```
Run the node package manager command

```bash
  npm install
```
Then run the following command

```bash
  npm run dev
```
Run the database migrations with seeder(**Set the database connection in .env before migrating**)

```bash
  php artisan migrate --seed
```
Start the local development server

```bash
  php artisan serve
```
You can now access the server at http://localhost:8000

**Command list**

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