# Class-Assignment-Web-App-Sec
# Class Assignment 1
assignment1.html is the form file while action1.php is the action page after submitting the form. The style1.css is for the style of the form and asgnmt1validation.js is client side validation. All these files linked in html.
# Class Assignment 2 Authentication
Files involved are register.html,login.html,connect.php and authenticate.php. Register.html is the registration page students have to register before logging in  and this where the username and password are being saved in the database while in login.html is where the students have to login and the credentials insert will be validated with the database and the password is being hashed in the database. Connect.php and authenticate.php is for the login page connect with the database. 
# Class Assignment 3 Authorization
PHP Session is included in the register.php, login.php and action1.php as the session starts at the register page and the session is being destroyed in the action1 page where it displays all student details after student fill in the student details form. 
# Class Assignment 4 XSS & CSRF
The CSP has been implemented in the meta tag on the line line 15 and 16 in the assignment1.html file. Then, 'htmlspecialchars()' has been used to prevent XSS in the action1.php at the line 27. The CSRF token is added in the assignment1.html at the line 26-27. 
