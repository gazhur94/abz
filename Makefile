b:
	docker-compose up -d --build

d:
	docker-compose down

up:
	docker-compose up -d

s:
	docker-compose ps

migrate:
	docker-compose exec php-cli php artisan migrate

i:
	docker-compose exec php-cli composer install

update:
	docker-compose exec php-cli composer update

autoload:
	docker-compose exec php-cli composer dump-autoload

p:
	sudo chown ${USER}:${USER} -R app