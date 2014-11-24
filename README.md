Laravel Sample Project
======================

This is an example project done using Laravel 4.2 PHP framework. This will cover basics of the Laravel framwork. I hope this will be a great project to learn Laravle Framwork quickly. 

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

Setup Instructions
==================

# Requirements
 Web server (Apache) configured with the following requirements.
 Make sure allow .htaccess configurations. (AllowOverride All)
 Enable mod_rewrite 
 PHP 5.4.0 or newer
 MySql 5.5 or higher
 MCrypt PHP Extension

# Setup
 Download the project files, extract it.
  Option 1: Just copy laravel_sample_project/ folder into a webshared folder.
  Option 2: Create a slim-link from weh shared folder to the laravel_sample_project/public 
  option 3: Define a vertula host on apache and make the document roor slaravel_sample_project/public folder.

Please create a database and import database.sql (DB schema with some dummy data)
Edit the app/config/databases.php file and update the database settings.
Admin username SAM, Password : abc123

Folders within app/storage require write access by the web server. (caching, session & logs)
assets/img folder require write access by the web server. (profile image upload)

Need to open port 587 to send out emails.
You will receive emails from sampathperera@mailgun.org

I have enabled the debug mode to find errors easily. 

If you still get error message, You may run 
	composer install
	composer update
	composer  dumpautoload
to update the dependancies according to your environment.

Feel free to contact me anytime if you need any assistance
radsperera@gmail.com
  
