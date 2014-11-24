# Requirements
 Web server (Apache) configured with the following requirements.
 Make sure allow .htaccess configurations. (AllowOverride All)
 Enable mod_rewrite 
 PHP 5.4.0 or newer
 MySql 5.5 or higher
 MCrypt PHP Extension

# Setup
 Download the sampath_laravel.zip file, extract it.
  Option 1: Just copy sampath_larave/ folder into a webshared folder.
  Option 2: Create a slim-link from weh shared folder to the sampath_larave/public 
  option 3: Define a vertula host on apache and make the document roor sampath_larave/public folder.

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
