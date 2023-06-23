<?php 

session_start();

	include("connection.php");
	include("functions.php");
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <h3>
        <img src="pictures/ıztech_logo.png" alt="Iztech Logo" width="120" height="120">
        <a href="#" style="float:right;text-align:right;margin-left: 80px;"><a class="brand">IZTECH Forum</i></a></a>
     </h3>
     
    <div class="form">
    
    <div class="tab-content">
      <div id="signup">   
        <h1>Sign Up</h1>
        
        <form action="/" method="post">
        
        <div class="top-row">
          <div class="field-wrap">
            <label>
            First Name<span class="req">:</span>
            </label>
            <input type="text" required autocomplete="off" />
          </div>
      
          <div class="field-wrap">
            <label>
              Last Name<span class="req">:</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email Address<span class="req">:</span>
          </label>
          <input type="email"required autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Set A Password<span class="req">:</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>
        
        <button type="submit" class="button button-block"/>Get Started</button>
        
        </form>

      </div>
      
      <div id="login">   
        <h1>Login</h1>
        
        <form action="/" method="post">
        
          <div class="field-wrap">
          <label>
            Email Address<span class="req">:</span>
          </label>
          <input type="email"required autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Password<span class="req">:</span>
          </label>
          <input type="password"required autocomplete="off"/>
        </div>
        
        <p class="forgot"><a href="#">Forgot Password?</a></p>
        
        <a href="forums.html"><button class="button button-block">Log In</button></a>
        </form>

      </div>
      
    </div><!-- tab-content -->
    
</div> <!-- /form -->

<footer>
    <span>&copy; &nbsp;Copyright Muammer TARHAN - 2022</span>
</footer>
<script src="main.js"></script>
</body>
</html>