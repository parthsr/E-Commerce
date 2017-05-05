<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login/SignUp</title>
  <script src="/jquery.min.js"></script>
  <script src="/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/bootstrap.min.css">
  <link rel="icon" href="basket.png" type="image/png" sizes="16x16">
  <style type="text/css">
    .nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}
.nav-tabs, .nav-pills {
    text-align:center;
}


body{
  text-align: center;
}
.error {color: #FF0000;}
</style>
</head>
<body>
<h1 align="center">Small Basket</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

$pass_error1 = $email_error1 = "";
$pass_error = $name_error= $email_error = "";

    if(isset($_POST['login']))
    {
      $email = $_POST['email'];
      $password123 = $_POST['pass'];
      if($email=="")
      {
        $name_error1="Enter the Email";
      }
      elseif($password123=="")
      {
        $pass_error1="Enter the password";
      }
      else
      {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql="select name from users where email='".$email."' and password='".($password123)."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            $message = $Results['name']." Login Sucessfully!!";
            echo "<p>$message<p>";
        }
        else
        {
            $message = "Invalid email or password!!";
            echo "<p>$message<p>";
        }        
    }
  }
        
if(isset($_POST['signup']))
{
// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $name= $_POST['name'];
        $email = $_POST['email'];
        $password123 = $_POST['pass'];
        if($email=="")
        {
          $name_error="Enter the Email";
        }
        elseif($password123=="")
        {
          $pass_error="Enter the password";
        }
        elseif($name=="")
        {
          $name_error="Enter the name";
        }
        else
        {
        $query = "SELECT email FROM users where email='".$email."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
            $conn->query("insert into users(name,email,password) values('".$name."','".$email."','".($password123)."')");
            $message = "Signup Sucessfully!!";
        }
    }
      }

?>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#login">LogIn</a></li>
    <li><a data-toggle="tab" href="#signup">Sign Up</a></li>
  </ul>

  <div class="tab-content">
    <div id="login" class="tab-pane fade in active">
    <form name="myForm" method="post">
      <h2> Email id:</h2> <input type="email" name="email">
      <span class="error">* <?php echo $email_error1;?></span><br>
      <h2> Password </h2> <input type="Password" name="pass" pattern=".{6,}">
      <span class="error">* <?php echo $pass_error1;?></span><br>
      <p><input type="submit" value="login" name="login"><p>
    </form>
    </div>
    <div id="signup" class="tab-pane fade">
      <form method="post">
      <h2>First Name:</h2> <input type="text" name="name" id="name" pattern = "[A-Za-z]{3,}">
      <span class="error">* <?php echo $name_error;?></span><br>
      <h2>Last Name:</h2><input type="text" name="lname" pattern = "[A-Za-z]{3,}">
      <span class="error">* <?php echo $lname_error;?></span><br>
      <h2>Email id:</h2> <input type="email" name="email">
      <span class="error">* <?php echo $email_error;?></span><br>
      <h2>Password:</h2> <input type="Password" name="pass" pattern=".{6,}">
      <span class="error">* <?php echo $pass_error;?></span><br>
    <p><input type="submit" value="signup" name="signup" /></p>
  </form>
    </div>
  </div>
</div>
</body>
</html>