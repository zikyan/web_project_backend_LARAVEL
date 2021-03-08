<?php

require('server.php');

?>



<html>
<head>

        <style>
        #lgn{
          margin-left:15px;  
        }
        .login-css:link{
          text-decoration: none;
        }
        .login-css{
          color: black;
        }
        .login-css:hover{
          color: black;
        }
        .logoz img{
          width: 10%;
        }
        </style>

    <title>Zikhar Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="logoz">
    <a href="index.php"><img src="images/zikhar_logo_black.png" alt="logo"></a>
  </div>
  <h1><strong>Login Page</strong></h1>
  <div class=" alert <?php echo $msgclass; ?>">
<?php echo $msg; ?>
</div>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
    </div>

    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-default" name="login-user">Login</button>
  </form>
  <h4>Not A User<a href="register.php"><button id="lgn" class="btn btn-primary">Sign Up</button></a></h4> 
</div>
    
</body>
</html>