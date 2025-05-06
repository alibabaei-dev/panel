<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <H1>
        Welcome to the DuckNET
    </H1>
    <img id="logo" src="files\images\ducknet.png" alt="ducknet">
    <div id="login-form">
    <form action="register_action.php" method="post">
    
    <label class="label" for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>
    
    <label class="label" for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter your password" name="password" required>
    
    <label class="label" for="password_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat your password" name="password_repeat" required>
    
    <label class="label checkbox">
      <input type="checkbox" name="rem"> Remember me
    </label>

    <button type="submit">Register</button>
    <p>Have you already registered?<a href="login.php" class="btn-link">Log in</a></p>

  </form>
</div>

    </form>
    </div>
</body>
</html>

<?php

