README
======

This directory should be used to place project specfic documentation including
but not limited to project notes, generated API/phpdoc documentation, or 
manual files generated or hand written.  Ideally, this directory would remain
in your development environment only and should not be deployed with your
application to it's final production location.


Setting Up Your VHOST
=====================

The following is a sample VHOST you might want to consider for your project.

<VirtualHost *:80>
   DocumentRoot "C:/Documents and Settings/francis/Desktop/workspace/ZendTest/Zend-Project/public"
   ServerName .local

   # This should be omitted in the production environment
   SetEnv APPLICATION_ENV development
    
   <Directory "C:/Documents and Settings/francis/Desktop/workspace/ZendTest/Zend-Project/public">
       Options Indexes MultiViews FollowSymLinks
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>
    
</VirtualHost>



SETUP DATABASE
==============
username: 	root
password:	
host:		localhost

First, setup the mysql database, create user 'root' and no password. This is dont so we dont
have to worry about this during developement. Then create a database called 'guestbook'.
The files to setup the database schema and insert data is in /application/data/db/scripts/

Here is how we dump commands into the database
"mysql -u root -h localhost < relative_file_path"
