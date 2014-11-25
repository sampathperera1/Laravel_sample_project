Laravel Sample Project
======================

This is an example project done using Laravel 4.2 PHP framework. This will cover basics of the framwork. 
Laravel 4.2 is full-stack modern PHP framework, that used all new features introduced in recent PHP versions.
Project is a user registration system with login, activate account by email, password recovery and a admin pannel. 
I hope this will be a great project to learn Laravle Framwork quickly. 

Project Scope
=============

1) Register
The visitor can register himself here, by leaving the following information:
- UserName
- Password (at least 6 characters)
- First name & surname
- Address
- City
- Country (select from a dropdown)
- Email 
- Phone number 
- Possibility to upload an image, preferably asynchronous upload

After clicking on submit
- The system has to check if the username doesn't exist. If it does the visitor needs to get a warning and had to choose another username.
- All data must be stored in a database.
- A verification e-mail is sent to the email address provided, prompting the user to activate his account.
- Shows a confirmation page and after 10 seconds redirect to the landing page.

2) Login
On the website is a login page. Users can login with their Username and Password, submitted during registration.

3) Detail page
The personal details have to be presented in a account detail page, that can be reached after login with the created Username and Password.

4) Detail page - Edit mode
Allow the logged-in user to update his details. The validations enforced during Registration must be present. Edit mode can be provided as a 'switched' view from the normal display-only detail page.

5) Forgot Password
A mechanism which will allow a user to reset his password to a random generated one in the event that he has forgotten his.

6) Administrator View
A page which will allow pre-registered admin accounts to login and view a list of registered users and their relevant details. This area can use a minimalist layout that is different to the design. Admins must be able to activate/deactivate user accounts from here.

About the system design and code
================================

System is fully OOP and few design patterns are used with MVC architecture. 
I used Mysql database with 3 tables. (users, tokens & country) tokens table is used to store token needed to verify the account and password reset. It is related with users table with FK user_id.

I have used jquery & bootstrap to render decent frontend. Jquery fileuploader used for asynchronous file upload. Only images are allowed, no max filesize or image resizing.

All validation rules are implemented as project doc. The form used to create the user was reused in the edit profile. Admin section uses the same login, users with is_admin set to 1 can access the admin panel. Admin link will display on top NAV bar for admin users. I have included one user with admin rights in the database.sql
UserName: SAM password: abc123

I have used SMTP to send out emails. It should work with the given configuration. But you can easily change it on app/config/mail.php. I have send out emails without queuing as this is a test project.

You can find my code mainly on app/controllers, app/models and app/views.
I have stick to Laravel coding standards. Also I have used best practises to prevent security issues CSRF, SQL injection, XSS. Password are stored with Bcrypt, so they cannot decrypt and protect against rainbow table attacks. 

Setup Instructions
==================

Requirements
 Web server (Apache) configured with the following
 Make sure allow .htaccess configurations. (AllowOverride All)
 Enable mod_rewrite 
 PHP 5.4.0 or newer
 MySql 5.5 or higher
 MCrypt PHP Extension

Setup
Download the zip file form below link:
https://drive.google.com/file/d/0B8w5D0ZboWdzUzN0akN4OUlOYlE/view?usp=sharing
Extract zip file.
  Option 1: Just copy sampath_larave/ folder into a webshared folder.
  Option 2: Create a slim-link from weh shared folder to the sampath_larave/public 
  option 3: Define a vertula host on apache and make the document roor sampath_larave/public folder.

Database
Please create a database and import /database.sql (DB schema with some dummy data)
Edit the app/config/databases.php file and update the database settings.

Folder Access
Folders within app/storage require write access by the web server. (caching, session & logs)
assets/img folder require write access by the web server. (profile image upload)
Email
Need to open port 587 to send out emails.
You will receive emails from sampathperera@mailgun.org
You can change mail setting easily on app/config/mail.php

I have enabled the debug mode to find errors easily. 
Project should work with the above settings. 
If you still get errors please try:
composer install
composer update
composer dumpautoload

Feel free to contact me anytime if you need any assistance
radsperera@gmail.com
  
