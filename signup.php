<?php
  //add database.php file
  require("database.php");

  //check button is clicked
  if (isset($_POST["signupbtn"])) {
    echo "btn clicked";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $contactno = $_POST["contactno"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    //defind sql for insert a query
    $sql = "INSERT INTO users (fname,lname,age,gender,email,contactno,username,password)VALUES('$fname','$lname',$age,'$gender','$email','$contactno','$username','$password');";
  
    $result = $connection->query($sql);
    
    if ($result === true) {
      echo "<script>alert('Data Added Successfully');location.replace('login.php');</script>";
    } else {
      echo "<script>alert('Data Added Faiiled');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signup.css" />
    <title>Document</title>
  </head>
  <body>
    <nav>
      <ul class="navbar">
        <div class="left">
          <li><a href="#">LOGO</a></li>
        </div>
        <div class="right">
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign up</a></li>
        </div>
      </ul>
    </nav>
    <div class="containerSignup">
      <div class="title">
        <h1>Join with us!!</h1>
      </div>

      <form action="" method="post">
        <div class="fullname">
          <div class="firstnameDiv">
            <label for="firstname"
              >First Name: <br />
              <input
                type="text"
                name="fname"
                id="firstname"
                placeholder="firstname"
              />
            </label>
          </div>
          <div class="lastnameDiv">
            <label for="lastname"
              >Last Name:<br />
              <input type="text" name="lname" id="lastname" placeholder="lastname" />
            </label>
          </div>
        </div>
        <div class="collection">
          <div class="ageDiv">
            <label for="age"
              >Age:<br />
              <input type="number" name="age" id="age" placeholder="age" />
            </label>
          </div>
          <div class="genderDiv">
            <label for="gender">
              Gender:<br />
              <select name="gender" id="selectGender">
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </label>
          </div>
        </div>
        <div class="emailDiv">
          <label for="email"
            >Email:<br />
            <input type="email" name="email" id="email" />
          </label>
        </div>
        <div class="contactNoDiv">
          <label for="contactno"
            >Contact Number:<br />
            <input type="text" name="contactno" id="contactno" />
          </label>
        </div>
        <div class="usernameDiv">
          Username:
          <label for="username"
            ><br />
            <input type="text" name="username" id="username" placeholder="username" />
          </label>
        </div>
        <div class="passwordDiv">
          <label for="password">
            Password:<br />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="password"
            />
          </label>
          <div class="submitSignupDiv">
            <input type="submit" value="Sign up" id="submitSignup" name="signupbtn"/>
          </div>
        </div>
      </form>

    </div>
  </body>
</html>
