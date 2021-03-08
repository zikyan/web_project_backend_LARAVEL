<?php

  include('server.php');

?>



<html>
<head>

    <style>
        #lgn{
          margin-left:15px;
        }
        .signup:link{
          text-decoration: none;
        }
        .signup{
          color: black;
        }
        .signup:hover{
          color: black;
        }
        .logoz img{
          width: 10%;
        }
    </style>

    <title>Zikhar Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="logoz">
    <a href="index.php"><img src="images/zikhar_logo_black.png" alt="logo"></a>
  </div>
  <h1><strong>Signup Page</strong></h1>
  <div class=" alert <?php echo $msgclass; ?>">
<?php echo $msg; ?>
</div>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="username" required>
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
    </div>

    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password_1" required>
    </div>

    <div class="form-group">
      <label>Confirm Password:</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="password_2" required>
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Sign Up</button>
  </form>
  <h4>Already A User<a href="login.php"><button id="lgn" class="btn btn-primary">Login</button></a></h4> 
</div>
    
</body>
</html>