## Intro & Stacks

Instagram likewise web application done by LAMP stack (PHP, HTML, CSS, MySql, Apache) and is containerized (Docker).
Sending mail by using PHPMailer.

## How to start it

- `docker-compose up`
- Create .env file following the instruction in .env_sample.
- Go to `localhost` for the site.
- Go to `localhost:8001` for phpMyadmin. Using password and user as in `MYSQL_USER` and `MYSQL_PASSWORD` found in the file `docker-compose.yml`.

## Todo List - Train of thoughts (what I think I need to know in order to do the project) - Preparation Phase

### Marquette

- [x] Do the marquette for the website.

### Docker

- [x] Write a dockerfile to set up php server because we need to use some dependencies / packages of php (for example: `PhpMailer` to send email to user, `mysqli` to connect to mysql database, etc...). Some packages (like mysqli) won't be installed at the time the container php is up. We can do it manually inside the terminal of php container once it is up. But I want to install everything at once, hence the dockerfile. We can't do it from docker-compose.yml so we need a dockerfile for php server. Other services: phpmyadmin and mysql don't need further configuration hence no dockefile for them.
- Put info of Mysql into .env file.
- Add PhpMailer into docker.
- Docker executes sql scripts in `database_local` folder by alphabet order. That's why I am naming them with number in front of the real name. Because I want to make sure that `users` should be created before `photos` and `comments_likes` is created in the end. I should add a Dockerfile for `mysql` to avoid that kind of naming.

### Database

- [x] Inside phpMyadmin, I added some initial data. Then I exported each table in the form of sql files. I copy those files into database_local so that we can link it to our database container each time we build it up. Otherwise when we turn down containers, we'll loose our database. The reason I used phpMyadmin and export sql file is because I'm not an expert in SQL. You can always code / write it from scratch.
- [x] Learn SQL basics.
- [x] Design the database. How to design a database? Which tables do we need? Which columns should we add inside a table? How to decide the relation between tables?
- [x] Learn how to connect to database by using PDO (mysqli is used for procedural programming, PDO is for OOP).
- Prepared statement? Why do we need it? -> To avoid SQL Injection?
- [x] How to write the query to get info from relational tables? (use JOIN statement).

### CSS - Bootstrap

- Download Bootstrap into the project instead of using CDN (Content Delivery Network).
- How to do Bootstrap without JavaScripts?

### OOP PHP - MVC

- Learn about OOP php (We need this to use MVC patterns, we don't use procedural / structural programming).
- Arrange files following MVC design pattern.

### AJAX

- Learn AJAX: is used to load data from databases or to get data from a server without having to refresh the browser. It can work with server language like php or javascript.

### Webcam handling

- Learn mdn Webcam: search for how to take photo with webcam.

### Others

- [x] Using template for reducing repeated codes. Create main_template for navbar and header.
- [x] Do template to separate php and html because the two are in a same page is just disgusting. Turn out php is template language itself. No need to use template engine if we use MVC!?
- Write a direction for each folders of the project.

## ToDo List - Development Phase

### Sign Up Feature

- [x] Download PHPMailer.
- [x] Put email credentials into .env file.
- Note: since May 2022 we can no longer use PHPMailer with gmail: https://support.google.com/accounts/answer/6010255?hl=en
- Find a way to install PHPMailer at Docker build step.
- Finish the Verify Email step (after user clicks the link).
- Using session? `session_start()`?

### Sign In Feature

## Knowledge gathered along the way

### What's the hell is SQL injection and how to deal with it?

Very good explanation in this video: https://www.youtube.com/watch?v=ZCdbjkjxuEE&ab_channel=Laracasts

- In summary, user can send a sql command through uri and may harm our database (Something like this: `my_web/posts/#1;drop table users`). Never inline user's data into a query string!

### Good tutorials on OOP PHP

- Already followed this till video 9: https://www.youtube.com/playlist?list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh (still have 7 videos on OOP).

### mysqli vs PDO when and how to use them?

https://websitebeaver.com/php-pdo-vs-mysqli
