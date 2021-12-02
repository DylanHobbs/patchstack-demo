# Patchstack Demo Application

#### Dylan Hobbs

## Usage
The demo is built with Laravel 8.x and PHP8.1.

It uses docker through Laravel Sail.  
The front end is Vue served by Inertia.

**NB - If you do not have a PHP developer environment with Laravel, Laravel Sail and PHP7.3+**  
You will need to run the following command first  
*You will need docker installed locally though*  
You may ignore the first `composer install` in the subsequent instructions
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

**After this or otherwise the following commands should get you** up and running: 

```bash
composer install                          # Install deps 
./vendor/bin/sail up -d                   # Bring up docker
./vendor/bin/sail artisan migrate --seed  # Create and seed DB
./vendor/bin/sail npm install             # Install frontend assets
./vendor/bin/sail npm run dev             # Run webpack/mix to compile assets
```
The application will be available at [http://localhost](http://localhost)

Melisearch should update the index when the database is seeded, but if for whatever reason it does not you can run 
`sail php artisan scout:import "App\Models\Vulnerability"` to manually load the index

## Notes
I've included the "production" .env in the repo for demo purposes only. 
