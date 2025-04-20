composer install
npm install

cp .env.example .env

# Modify .env
sed -i 's/^DB_CONNECTION=.*/DB_CONNECTION=sqlite/' .env

touch database/database.sqlite
php artisan key:generate
php artisan migrate
php artisan db:seed

# Run servers in new Git Bash terminals
start "" bash -c "php artisan serve; exec bash"
start "" bash -c "npm run dev; exec bash"
