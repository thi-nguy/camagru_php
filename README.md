## Intro & Stacks

Instagram likewise web application done by LAMP stack (PHP, HTML, CSS, MySql, Apache) and is containerized (Docker).
Sending mail by using PHPMailer.

## How to start it

- `docker-compose up`
- Go to `localhost` for the site.
- Go to `localhost:8001` for phpMyadmin. Using password and user as in `MYSQL_USER` and `MYSQL_PASSWORD` found in the docker-compose.yml.
- Inside phpMyadmin, add initial tables, columns, data as we wish. Then export sql file. Copy that file into database_local so that we can link it to container each time we build it up. Otherwise when we turn down containers, we'll loose our database. The reason I used phpMyadmin and export sql file is because I'm not an expert in SQL. You can always code it from scratch.

## Next steps

- Write a dockerfile to set up php server because we need to use some dependencies / packages of php (for example: `PhpMailer` to send email to user, `mysqli` to connect to mysql database, etc...). Some packages (like mysqli) won't be installed at the time the container php is up. We can do it manually inside the terminal of php container once it is up. But I want to install everything at once, hence the dockerfile. We can't do it from docker-compose.yml so we need a dockerfile for php server. Other services: phpmyadmin and mysql don't need further configuration hence no dockefile for them.
- Put info of Mysql into .env file.
