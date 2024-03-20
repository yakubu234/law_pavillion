## this codebase satisfy the requirement for Law Firm X .

<p>to serve this project , you need either docker if you want to containerize or you run it by default.</p>

### if you are using docker all you need to do is to clone this project. then set you env parameters as listed below

```bash

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your username
MAIL_PASSWORD=your password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

APP_KEY=base64:wxh7xYp75GnI6/8N5sWv5T435rLVFJKpgMrUUTpnLjQ=
```

then do

```bash
docker-compose build
```

and

```bash
docker-compose up
```

or if you want to serve normally

just go into the root directory and run the following command to seed the records in the database

```bash
php artisan key:generate
```

then

```bash
php artisan migrate:seed
```

then

```bash
php artisan serve
```

## if you are using docker you can locate the project at.

###### localhost:9000

#### if you are using the regular laravel serving "php artisan serve" you can visit at localhost:8000

to run the test cases, you need to provide the following env parameters at your .en.testing

```bash
DB_CONNECTION=sqlite
DB_HOST=null
DB_PORT=null
DB_DATABASE=database/test.sqlite
DB_USERNAME=null
DB_PASSWORD=null

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your username
MAIL_PASSWORD=your password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

APP_KEY=base64:wxh7xYp75GnI6/8N5sWv5T435rLVFJKpgMrUUTpnLjQ=
```

then to run the test you type the following

```bash
php artisan test
```

this uses scheduler for sending email every 3 days , toi get it running use

```bash
php artisan schedule:run
```

or use the cron tab in the remote machine

```bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

the routes are as followed

```bash
get  /clients/  to show the index all clients
get /clients/get   to show individual client
get /clients/create   to get the form to create new client
post /clients/create  post that form data is being sent to
```

## with the above all you have to do is {{BASE_URL}}/ each of the paths
