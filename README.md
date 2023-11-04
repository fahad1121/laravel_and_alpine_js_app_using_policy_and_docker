INSTALLATION GUIDE


- clone repo
- run and setup docker with sail
- run composer install to install required packages
- Update your env with database credentials
- run "./vendor/bin/sail artisan migrate" command to migrate tables to database
- run "./vendor/bin/sail artisan db:seed" to populate database tables
- after setting up docker visiti : http://localhost
- For accessing of phpmyadmin, a service has been added in docker-compose.yml file. i have define a port for php myadmin which is localhost:8001.
- If you have running something on this port then choose another port in yml fiel then access phpmyadmin
