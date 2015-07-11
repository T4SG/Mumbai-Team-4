<?php 
 
  include_once("db.php"); 
  session_start();
 
?>
 
<?php
 
     $email = $_POST['mail'];
     $pass = $_POST['passed'];
 
     $sql = "SELECT count(*) FROM registration WHERE(
     email='".$email."' and  paswd='".$pass."')";
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      $qury = mysql_query($sql);
 
      $result = mysql_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
        $_SESSION['userName'] = $email;
        echo "<br />Welcome ".$_SESSION['userName']."!";
        echo "<br /><a href='index.html'> Go back home</a>";
        
        echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }
?>