The Ainara's blog
========================

This project still in development currently isn't finish but pretend to be a blog where one or more users could write down or import images or files in pdf to Ainara's blog site.


## Stack

- PHP 8.1 
- PHP extensions intl and OPcache
- Symfony 6.2
- Bootstrap 5.3
- MariaDB 10.4.27
- PHPMyAdmin 5.2.0
- Apache 2.4.54

## Howto install this project

- You should download the repository from your Operative System console and then prompt `git clone git@github.com:AinaraAM/blogforf5.git`
- Then, you must search de folder named blog and write down de command `composer install` then composer will read the Symfony composer.json and the dependencies required would be installed up.
- One time is installed you must run the PHP-FPM server prompting `symfony server:start -d` with the argument -d we are requiring never shutdown the serve doing it work as daemon.
- Don't forget to push or write down rhe url https://127.0.0.1:8000 for checking the site.
- If you wish to check out the database by yourself must go to https://localhost/phpmyadmin but remember to start up Apache Server and MariaDB server

## The entities relationsship

- As you can see there are four entities named as:
  - User
  - News
  - Categories
  - Images

![entities_relationship.png](..%2F..%2F..%2F..%2F..%2FDesktop%2Fentities_relationship.png)

## The frontend

- The Ainara's blog would be a simple and responsive site for computers or cellphones where a navbar send us to different sections and a dropping menu with different option already in development
- The site would have three columns for news with it's images.
- And a footer where the Privacy policy, cookies policy and contact form link would be next to some social networks and other ways of contact would be there.

![frontend.png](..%2F..%2F..%2F..%2F..%2FDesktop%2Ffrontend.png)


## Thanks in advance for your time!
