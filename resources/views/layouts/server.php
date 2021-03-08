<?php

session_start();
$check=1;
if(isset($_SESSION['username']) || isset($_COOKIE['username']))
{
  header('location:index.php');
}
    $msg='';
    $msgclass='';
    $database=mysqli_connect('localhost', 'root', '', 'registration') or die('Cannot connect to the database');

if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($database,$_POST['username']);
    $email=mysqli_real_escape_string($database,$_POST['email']);
    $password_1=mysqli_real_escape_string($database,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($database,$_POST['password_2']);

    $user_check_query="select * from users where username='$username' or email='$email' Limit 1 ";
    $result=mysqli_query($database, $user_check_query);
    $user_check= mysqli_fetch_assoc($result);
    
    if(isset($user_check['username']) && $user_check['email'])
    {
        if($username === $user_check['username'])
        {
            $msg='This username already exixts';
            $msgclass='alert-danger';
            $check=0;
        }

        if($check==1 && $email === $user_check['email'])
        {
            $msg='This email already exixts';
            $msgclass='alert-danger';
            $check=0;
        }
    }

    if($password_1 != $password_2)
        {
            $msg='Password not matched';
            $msgclass='alert-danger';
            $check=0;
        }
    

    if($check==1)
    {
        $hased_password=md5($password_1);
        $query_put="insert into users (username, email, password) values ('$username', '$email', '$hased_password')";
        mysqli_query($database,$query_put);
        $_SESSION['username']=$username;
        header('location:index.php');
    }
    
}

if(isset($_POST['login-user']))
    {
        $username=mysqli_real_escape_string($database,$_POST['username']);
        $password=mysqli_real_escape_string($database,$_POST['password']);
        $password=md5($password);

        $query="select * from users where username='$username' and password='$password'";
        $result=mysqli_query($database, $query);
        
        if(mysqli_num_rows($result))
        {
            if(isset($_POST['remember']) && $_POST['remember']=='yes')
            {
            setcookie('username', $username, time() + 86300);
            header('location:index.php');
            //setcookie('user', $name, time() -86300);
            }
            else
            {
                $_SESSION['username']=$username;
                header('location:index.php');
            }
            
        }
        else
        {
            $msg='Invalid Username or Password';
            $msgclass='alert-danger';
        }


    }






?>