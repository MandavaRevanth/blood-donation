<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
</head>
<body>
    <h2>Login Form</h2>
    <hr>
    <div id="left">
        <ul>
            <li><a href="home.php">Home</a></li>
       <li> <a href="register.php">Register</a></li>
        <li><a href="about.php">Aboutus</a></li>
          <li>  <a href="why.php">Why Blood Donation</a></li>
           
        </ul> 
    </div>

<form action="log.php" method="post">
  <div class="imgcontainer">
    <img src="reasons/img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit"  name="sub">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button"  onclick="window.location.href='home.php'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="window.location.href='register.php'" class="cancelbtn">Signup</button>
    
  </div>
</form>

</body>
</html>