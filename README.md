# jenfeng-back

# 在專案根目錄執行（因 docker-compose.yml 已在這裡）

$ cp .env.example .env
$ docker compose up -d

# 進入 Laravel workspace 容器

$ docker compose exec workspace sh

# 內部操作

$ cp .env.example .env
$ composer install
$ php artisan key:generate
