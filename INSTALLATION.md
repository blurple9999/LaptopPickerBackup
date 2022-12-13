# Installation

## Before we start
Installation is not required, as this project is hosted online for free, fully featured, at http://laptoppicker4110.000webhostapp.com/.
If you would like to continue with installation, whether it be you would like to test something locally, or our site ever vanishes, you are free to do so.

## Prerequisites
You must have some sort of way to store information in a SQL Database, as that is how we have stored information such as the laptops, login information, and contact information. For our website, we used a webhost by the name 000webhost, with a database running MariaDB version 10.5.16, running PHP version 7.3.32, on phpMyAdmin 4.9.5. Using the specific versions we used is not necessary, but might help mitigate any future issues/bug fixing. The rest of the install guide will also continue under the assumption you are running on these versions, as we cannot give a tutorial for every type of admin panel or server. Keep track of the username, password, and name of the database you are creating for an upcoming file you will need to create. (more on that later.)

## Importing the database
Download all 3 files under the `/SQL` folder in the repository. On phpMyAdmin, click on the database on the left side of the page. Click import, select `Browse your computer` and upload the file by pressing the `Choose File` button. Add each .SQL file one at a time. Note, log in information and contact information are not something we update on our repository, however, our database of laptops is included in `laptop_list.sql`, so there is no need to recreate that at least.

## Hosting the website
The root folder for our website is the `/HTML` folder. When cloning this repository, copy this folder and its contents exactly as it is shown in the repository, into wherever you plan to host the website. Make sure `index.php` is the default link.

## Creating credentials.php
The one file that is not included with our repository, for security purposes, is `credentials.php`. You will have to make it yourself, supplying its contents with the username, password, name of the database, and servername. (i.e. `localhost`) The format of the file is as follows:
```
<?php  
$servername ="";
    $username ="";
    $password = "";
    $database= "";
?>
```
