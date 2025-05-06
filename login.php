<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <H1>
        Welcome to
    </H1> -->
    <img id="logo" src="files\images\ducknet.png" alt="ducknet">
    <div id="login-form">
    <form action="login_action.php" method="post">
    
    <label class="label" for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>
    
    <label class="label" for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter your password" name="password" required>
    
    <label class="label checkbox">
      <input type="checkbox" name="rem"> Remember me
    </label>

    <button type="submit">Login</button>
    <p>Haven't registered yet?<a href="register.php" class="btn-link">Register</a></p>


  </form>
</div>

    </form>
    </div>
</body>
</html>

<?php

