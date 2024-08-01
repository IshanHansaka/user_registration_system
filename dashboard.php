<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Dashboard.css" />
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
    <div class="hero">
      <div class="frame">
        <div class="content">
          <h1>Welcome to <?php echo $displayText1;?></h1>
          <h2>Your id : <?php echo $displayText2;?></h2>
        </div>
        <div class="buttons">
          <div class="leftBtn">
            <button>Make Appointment</button>
          </div>
          <div class="rightBtn">
            <a href="#"><button >LOGIN</button></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>