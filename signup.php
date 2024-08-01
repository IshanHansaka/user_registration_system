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
          <li><a href="/index.php">Login</a></li>
          <li><a href="/signup.php">Sign up</a></li>
        </div>
      </ul>
    </nav>
    <div class="containerSignup">
      <div class="title">
        <h1>Join with us!!</h1>
      </div>
      <form action="" method="">
        <div class="fullname">
          <div class="firstnameDiv">
            <label for="firstname"
              >First Name: <br />
              <input
                type="text"
                name=""
                id="firstname"
                placeholder="firstname"
              />
            </label>
          </div>
          <div class="lastnameDiv">
            <label for="lastname"
              >Last Name:<br />
              <input type="text" name="" id="lastname" placeholder="lastname" />
            </label>
          </div>
        </div>
        <div class="collection">
          <div class="ageDiv">
            <label for="age"
              >Age:<br />
              <input type="number" name="" id="age" placeholder="age" />
            </label>
          </div>
          <div class="genderDiv">
            <label for="gender">
              Gender:<br />
              <select name="gender" id="selectGender">
                <option value="" selected>Male</option>
                <option value="">Female</option>
                <option value="">Other</option>
              </select>
            </label>
          </div>
        </div>
        <div class="emailDiv">
          <label for="email"
            >Email:<br />
            <input type="email" name="" id="email" />
          </label>
        </div>
        <div class="contactNoDiv">
          <label for="contactno"
            >Contact Number:<br />
            <input type="text" name="" id="contactno" />
          </label>
        </div>
        <div class="usernameDiv">
          Username:
          <label for="username"
            ><br />
            <input type="text" name="" id="username" placeholder="username" />
          </label>
        </div>
        <div class="passwordDiv">
          <label for="password">
            Password:<br />
            <input
              type="password"
              name=""
              id="password"
              placeholder="password"
            />
          </label>
          <div class="submitSignupDiv">
            <input type="submit" value="Sign up" id="submitSignup" />
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
