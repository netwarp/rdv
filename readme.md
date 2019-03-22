# Installation

git clone https://github.com/netwarp/rdv.git

sudo apt-get install redis-server

cd rdv

composer install

cp .env.example .env

mysql -u root -p

CREATE DATABASE mydatabase CHARACTER SET utf8 COLLATE utf8_general_ci;

vim .env # ou nano .env

php artisan key:generate

php artisan migrate

php artisan db:seed

php artisan serve