To Run Code from Cli:
---------------------   
    php index.php

Internal php server:
---------------------
    Navigate to folder from your cli and start php internal server
    php -S localhost:8000
    Go to http://localhost:8000/ to check output

Xampp/Wampp 
--------------
    place the folder in xampp htdocs or Wampp www folder:
    http://localhost/tripSorter

For Tests
------------
php codeception.phar run unit

Assumptions:
For testing I am using Codeception framework as it was not mention explicitly which framework to use,
I am using composer to autoload classes in App as well as inside tests