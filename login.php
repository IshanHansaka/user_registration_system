<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
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
      <div class="leftLogin">
        <img src="" alt="" />
      </div>
      <div class="rightLogin">
        <div class="contentLogin">
          <h1>Welcome Back!!</h1>
          <img src="" alt="" id="img" />

          <form action="" method="post">
            <div class="name">
              <label for="name">
                Username:
                <br />
                <input type="text" name="username" id="name" placeholder="Username" />
              </label>
            </div>
            <div class="passwordDiv">
              <label for="password">
                Password:
                <br />
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Password"
                />
              </label>
            </div>

            <div class="buttonsLogin">
              <input type="submit" value="Login" id="loginButton" />
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
