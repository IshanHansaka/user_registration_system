<?php
  session_start();

  //add database.php file
  require("database.php");

  if (isset($_POST["loginbtn"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //design query format
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $db_username = $row["username"];
        $db_password = $row["password"];

        if ($db_username == $username && $db_password == $password) {
          //Send data via URL
          //echo "<script>alert('Login Syccessful');location.replace('dashboard.php?id=".$row["uID"]."&fname=".$row["fname"]."');</script>";
        
          $_SESSION["user_id"] = $row["uID"];
          $_SESSION["user_fname"] = $row["fname"];

          echo "<script>alert('Login Syccessful');location.replace('dashboard.php');</script>";
        } else {
          echo "<script>alert('Login Failed');</script>";
        }
      }
    } else {
      echo "<script>alert('User not exist');</script>";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/login.css" />
    <title>Login Page</title>
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
    <div class="containerLogin">
      <div class="leftLogin"></div>
      <div class="rightLogin">
        <div class="contentLogin">
          <h1>Welcome Back!!</h1>
          <img src="" alt="" id="img" />
          <!----------From------------->
          <form action="" method="post">
            <div class="name">
              <label for="name">
                Username:
                <br />
                <input type="text" name="username" id="name" placeholder="Username" required/>
              </label>
            </div>
            <div class="passwordDiv">
              <label for="password">Password:<br />
                <input type="password" name="password" id="password" placeholder="Password" required/>
              </label>
            </div>

            <div class="buttonsLogin">
              <input type="submit" value="Login" id="loginButton" name="loginbtn"/>
              <input type="reset" value="Cancel" id="cancelButton" />
            </div>
          </form>
          Don't have an account? then
          <span id="SignupSpan">
            <a href="signup.php" id="signupButton">Sign up</a>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
