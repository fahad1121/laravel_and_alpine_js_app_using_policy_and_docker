INSTALLATION GUIDE


- clone repo: https://github.com/fahad1121/laravel_and_alpine_js_app_using_policy_and_docker.git
- run and setup docker with sail
- run "composer install" and "npm install" to install required packages for laravel and alpinejs
- Update your env with database credentials
- run "./vendor/bin/sail artisan migrate" command to migrate tables to database
- run "./vendor/bin/sail artisan db:seed" to populate database tables
- after setting up docker visit : http://localhost
- For accessing of phpmyadmin, a service has been added in docker-compose.yml file. i have defined a port for phpmyadmin which is localhost:8001.
- If you have running something on this port then choose another port in yml file then access phpmyadmin.
- At the end run: "npm run dev", "./vendor/bin/sail up" to run docker build and assets watch
