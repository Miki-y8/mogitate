# mogitate
## Dockerビルド

1.git@github.com:Miki-y8/mogitate.git
2.DockerDesktopアプリを立ち上げる
3.docker-compose up -d --build

## Laravel環境構築

1.docker-compose exec php bash
2.composer install
3.「.env」ファイルを作成
.envに以下の環境変数を追加

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

## アプリケーションキーの作成

php artisan key:generate

## マイグレーションの実行

php artisan migrate

## シーディングの実行

php artisan db:seed

## 使用技術(実行環境)

PHP8.3.0
Laravel8.83.27
MySQL8.0.26

## ER図

<img width="802" alt="スクリーンショット 2025-03-23 20 52 58" src="https://github.com/user-attachments/assets/9f6de6da-0ed9-44e3-a6fb-5f37b6d4b254" />


## URL
開発環境：http://localhost/
phpMyAdmin:：http://localhost:8080/
