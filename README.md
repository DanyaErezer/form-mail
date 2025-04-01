Описание проекта

Это веб-приложение на Laravel с контактной формой, где пользователи могут оставить свои данные (имя, телефон и email).
Данные проходят валидацию, сохраняются в базу данных и отправляются администратору на email.
Форма работает через AJAX, проект включает миграции, сидеры и интеграцию с Mailtrap для тестирования email в разработке.

Требования
PHP 8.0+

Composer

SQLite (для локальной разработки)

Установка
Клонируйте репозиторий:
git clone https://github.com/DanyaErezer/form-mail.git
cd contact-form

Установите зависимости:
composer install

Настройте окружение:
Скопируйте .env.example в .env и отредактируйте:

Настройки базы данных (DB_DATABASE, DB_USERNAME, DB_PASSWORD)

Настройки почты (для разработки используйте Mailtrap):

MAIL_MAILER=smtp  
MAIL_HOST=sandbox.smtp.mailtrap.io  
MAIL_PORT=2525  
MAIL_USERNAME=ваш_username_из_mailtrap  
MAIL_PASSWORD=ваш_password_из_mailtrap  
MAIL_ENCRYPTION=tls  
MAIL_FROM_ADDRESS=from@example.com  
MAIL_FROM_NAME="Контактная форма"  

Сгенерируйте ключ приложения:
php artisan key:generate

Запустите миграции и сидеры:
php artisan migrate --seed

Запустите сервер:
php artisan serve

