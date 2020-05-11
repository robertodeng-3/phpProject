
# PHP Test Project

### Description
This is a very simple one-page application consisting of just one table (representing users of some company),
and a form for creating new rows. To make it a little more complicated, we have written a 'framework' you will have to use.
Bellow is set of simple tasks to perform.

### Preparation steps
1. Create new MySQL database
2. Rename `config/database` to `config/database.php` and configure you database connection settings in this file
3. Import `database/schema.sql` into your database

### Tasks to perform
1. Style the page using [Bootstrap](http://getbootstrap.com/):
  * Every other table row should be highlighted.
  * Use Bootstrap’s form-horizontal to style the form.
  * Any other styling changes should be made based on your consideration.
2. Add a validation of the new records.
3. Create a JS functionality to filter rows by city.
4. Implement submission of the form using AJAX.
5. Add column phone number to the table.
6. Make your work available online (share the URL) as well as return back in a zip package.





###Feedback for Preparation steps
1. Create new MySQL database
2. Rename `config/database` to `config/database.php` and configure you database connection settings in this file
3. Import `database/schema.sql` into your database

This was ok, I began the project on visual studio code and used Xampp for my database and server funtionality.
Initially when i ran the program there appeared to be a bug in views/index.php which i debugged through xdebug on visual studio. 

###Feedback for  Tasks to perfform
1. Styled the input text on /views/index.php using bootstrap and added some more styles to css/appliction.css
2. Added validation on the first input name field using JS
3. Added a JS function to filter rows by city, i found the logic for this a little complex so i took help from https://www.w3schools.com/
4.I understand AJAX as a concept but was not able t figure out how to impliment this in the specified time frame.
5.I done this step early on in the project when i was setting up my database.
6.I am using an AWS instance to host my application, it is running ubuntu lite, this also took me a bit of time to set up and push out and refactor my code.
  It can be viewed on: http://ec2-3-89-147-201.compute-1.amazonaws.com:8080

