# xml_to_json_bakuun




## About Task XML TO JSON

Please write php code with laravel framework,
1. Convert given xml to json structure.
2. Extracts all node and its associated values.
3. Store those values to database tables (in same parent-chlid hierarchy, if possible).


## Setup Project
### Dependencies software and installation


- Mysql Server

- PHP7.4 installation with required all extension

- Composer 

```
git clone https://github.com/mohdkaif/xml_to_json_bakuun.git
```
- go to directory
```
cd task_manage
```
- Run Composer Install
```
composer install && composer dump-autoload
```
- create new .env file and copy data from .env.example and paste in new .env file

```
cp .env.example .env
```

- For Generate Key

```
php artisan key:generate
```
- change .env file database configuration

- Permission to directories
```
chgrp -R www-data /var/www/project_dir_name
chown -R www-data:www-data /var/www/project_dir_name
chmod -R 775 /var/www/project_dir_name/storage
chown -R www-data.www-data /var/www/project_dir_name/storage
```

```
php artisan migrate
```

```
php artisan serve

```
```
http://localhost:8000/
```
- XML TO JSON CONVERT
```
http://localhost:8000/xml_to_json
```
- Check Also Databse Insterted data 
- There are 2 tables company and company inventory
- StatusApplicationCode and InvCount are JSON type

