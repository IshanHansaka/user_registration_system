# User Registration System

This project is a user registration system that includes a login page, signup page, and dashboard. It uses HTML, CSS, JavaScript, PHP, and MySQL for the front-end and back-end functionalities.

## Process of Signup Page
1. Check if the button is clicked.
2. If the button was clicked, get data from the text field.
3. Execute the SQL command to store user data in the database.
4. Redirect the user to the login page upon successful registration.

## Process of Login Page
1. Check if the login button is clicked.
2. If the login button was clicked, get the username and password from the text fields.
3. Search for the entered username in the database.
4. Check whether the input username and password are correct.
5. If the credentials are correct, redirect the user to the dashboard and pass user data.

## SQL Query

```sql
CREATE DATABASE sample;

USE sample;

CREATE TABLE users(
    uID INTEGER PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(50),
    lname VARCHAR(50),
    age INTEGER,
    gender VARCHAR(10),
    email VARCHAR(30),
    contactno VARCHAR(10),
    username VARCHAR(30),
    password VARCHAR(30)
);

INSERT INTO users (fname, lname, age, gender, email, contactno, username, password)
VALUES
('Ishan', 'Hansaka', 22, 'Male', 'ishan@gmail.com', '0775437008', 'ishan123', '1234');

SELECT * FROM users WHERE username = "ishan123";

INSERT INTO users (fname, lname, age, gender, email, contactno, username, password)
VALUES
('Ishan', 'Hansaka', 22, 'Male', 'ishan@gmail.com', '0775437008', 'ishan123', '1234');

SELECT * FROM users WHERE username = "ishan123";
```
## Project Structure
* Login Page: Allows users to enter their username and password. Validates credentials against the database.
* Signup Page: New users can register by providing their details. Stores user information in the database upon successful registration.
* Dashboard: Displays user information such as name and ID, which is automatically filled based on the data passed from the login page. The user data can be passed using URL GET method or session method.

## Technologies Used
* PHP: For server-side scripting and handling database operations.
* MySQL: For storing user data and handling database queries.

## How to Run the Project
* Set up a local server environment (e.g., XAMPP, WAMP).
* Create the sample database and the users table using the provided SQL query.
* Configure the database connection in the PHP files.
* Open the signup page in a web browser, register a new user, and then log in using the registered credentials.
* After successful login, the user will be redirected to the dashboard with their information displayed.

## Notes
Ensure that the MySQL database is running and the connection details are correctly configured in your PHP files.
For security reasons, consider hashing passwords before storing them in the database.
Implement proper validation and error handling for a better user experience.
