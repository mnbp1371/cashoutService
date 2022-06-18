<p align="center"><img src="public/image/logo.svg" width="400"></p>

## Requirments

1. PHP >= 8.0
2. MySQL >= 5.7
3. Composer >= 1.9.0

## Deploy project

1. git clone idpay GitHub repository
2. cd cash-out-service
3. composer install
4. cp .env.example .env
5. vi .env
6. php artisan migrate:fresh
7. php artisan db:seed
8. php artisan key:generate
9. echo '127.0.0.1 sandbox.idpay.local' | sudo tee -a /etc/hosts
10. sudo php artisan serve --host=cash-out-service.idpay.local --port=80
11. Open project on http://cash-out-service.idpay.local

