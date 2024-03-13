# A Simple Events And Listener Microservice
An application with 2 microservices that communicate via message bus (Events and Listeners).

## Built With CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app.

## Installation Guide

Install Git on your machine (Skip if already installed)
You can go to [git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) to see guide.

Install PHP on your machine (Skip if already installed)
You can go to this [Article](https://medium.com/@rodolfovmartins/how-to-install-php-on-mac-6795ce469802) to see guide.

Install Composer on your machine
You can go to [Composer](https://getcomposer.org/download/) to see guide.

Clone the Repository to your local Machine
`git clone https://github.com/Soliudeen999/next_basket_assessment_ci.git` 

Navigate into the folder on your machine
`cd next_basket_assessment_ci`

Install Vendor Packages
`composer install`


## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings.
`cp env .env`

Run migration
`php spark migrate`

Start the App Server
`php spark serve'


## Server Requirements

**PHP version 7.4 or higher is required, with the following extensions installed:**
- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

**Composer ^2.6 or latest**
