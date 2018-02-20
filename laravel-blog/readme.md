# Laravel Blog
Create project

    composer create-project laravel/laravel laravel-blog
Inside project, clone laradock

    git clone https://github.com/laradock/laradock.git
Inside laradock, copy env-example as .env

Then modify .env to desired settings.

    cp env-example .env
Go inside Laradock directory and start desired services.

    docker-compose up -d nginx mysql
Enter container

    docker-compose exec workspace bash

Have files created by host's user.

    docker-compose exec --user=laradock workspace bash
