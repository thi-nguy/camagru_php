## Intro & Stacks

Instagram likewise web application done by LAMP stack (PHP, HTML, CSS, MySql, Apache) and is containerized (Docker).
Sending mail by using PHPMailer.

## How to start it

- `docker-compose up`
- Go to `localhost` for the site.
- Go to `localhost:8001` for phpMyadmin. Using password and user as in `MYSQL_USER` and `MYSQL_PASSWORD` found in the file `docker-compose.yml`.
- Inside phpMyadmin, add initial tables, columns, data as we wish. Then export sql file. Copy that file into database_local so that we can link it to container each time we build it up. Otherwise when we turn down containers, we'll loose our database. The reason I used phpMyadmin and export sql file is because I'm not an expert in SQL. You can always code / write it from scratch.

## Todo List

- [x] Write a dockerfile to set up php server because we need to use some dependencies / packages of php (for example: `PhpMailer` to send email to user, `mysqli` to connect to mysql database, etc...). Some packages (like mysqli) won't be installed at the time the container php is up. We can do it manually inside the terminal of php container once it is up. But I want to install everything at once, hence the dockerfile. We can't do it from docker-compose.yml so we need a dockerfile for php server. Other services: phpmyadmin and mysql don't need further configuration hence no dockefile for them.
- Put info of Mysql into .env file.
- [x] Using template for reducing repeated codes. Create main_template for navbar and header.
- [x] Do template to seperate php and html because the two are in a same page is just disgusting. Turn out php is templating language itself. No need to use template engine if we use MVC!?
- Arrange files following MVC design pattern.
- Add PhpMailer into docker.
- Download Boostrap into the project instead of using CDN (Content Delivery Network).
- Learn about OOP php (We need this to use MVC patterns, we don't use procedural / structural programming).
- Learn how to connect to database by using PDO (mysqli is used for procedural programming, PDO is for OOP).
- Write a direction for each folders of the project.

## Knowledge gathered along the way

### What's the hell is SQL injection and how to deal with it?

Very good explaination in this video: https://www.youtube.com/watch?v=ZCdbjkjxuEE&ab_channel=Laracasts

- In summary, user can send a sql command through uri and may harm our database (Something like this: `my_web/posts/#1;drop table users`). Never inline user's data into a query string!

### Good tutorials on OOP PHP

- Already followed this till video 9: https://www.youtube.com/playlist?list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh (still have 7 videos on OOP).
