## Intro & Stacks

Instagram likewise web application done by LAMP stack (PHP, HTML, CSS, MySql, Apache) and is containerized (Docker).
Sending mail by using PHPMailer.

## How to start it

- `docker-compose up`
- Go to `localhost` for the site.
- Go to `localhost:8001` for phpMyadmin. Using password and user as in `MYSQL_USER` and `MYSQL_PASSWORD` found in the file `docker-compose.yml`.

## Todo List - Train of thoughts (what I think I need to know in order to do the project)

- [x] Do the marquette for the website.
- [x] Inside phpMyadmin, I added some initial data. Then I exported each table in the form of sql files. I copy those files into database_local so that we can link it to our database container each time we build it up. Otherwise when we turn down containers, we'll loose our database. The reason I used phpMyadmin and export sql file is because I'm not an expert in SQL. You can always code / write it from scratch.
- [x] Write a dockerfile to set up php server because we need to use some dependencies / packages of php (for example: `PhpMailer` to send email to user, `mysqli` to connect to mysql database, etc...). Some packages (like mysqli) won't be installed at the time the container php is up. We can do it manually inside the terminal of php container once it is up. But I want to install everything at once, hence the dockerfile. We can't do it from docker-compose.yml so we need a dockerfile for php server. Other services: phpmyadmin and mysql don't need further configuration hence no dockefile for them.
- Put info of Mysql into .env file.
- [x] Using template for reducing repeated codes. Create main_template for navbar and header.
- [x] Do template to separate php and html because the two are in a same page is just disgusting. Turn out php is template language itself. No need to use template engine if we use MVC!?
- Arrange files following MVC design pattern.
- Add PhpMailer into docker.
- Download Boostrap into the project instead of using CDN (Content Delivery Network).
- Learn about OOP php (We need this to use MVC patterns, we don't use procedural / structural programming).
- Learn how to connect to database by using PDO (mysqli is used for procedural programming, PDO is for OOP).
- Write a direction for each folders of the project.
- Learn mdn Webcam: search for how to take photo with webcam.
- Learn AJAX: is used to load data from databases or to get data from a server without having to refresh the browser. It can work with server language like php or javascript.
- Prepared statement? Why?
- How to design a database? Which tables do we need? Which columns should we add inside a table? How to decide the relation between tables?
- Bootstrap without JavaScripts?

## Knowledge gathered along the way

### What's the hell is SQL injection and how to deal with it?

Very good explanation in this video: https://www.youtube.com/watch?v=ZCdbjkjxuEE&ab_channel=Laracasts

- In summary, user can send a sql command through uri and may harm our database (Something like this: `my_web/posts/#1;drop table users`). Never inline user's data into a query string!

### Good tutorials on OOP PHP

- Already followed this till video 9: https://www.youtube.com/playlist?list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh (still have 7 videos on OOP).

### mysqli vs PDO when and how to use them?

https://websitebeaver.com/php-pdo-vs-mysqli
