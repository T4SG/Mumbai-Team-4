<?php include_once("db.php"); ?>
 
<?php
           $userf = $_POST['fname'];
           $userl= $_POST['lname'];
           $mail = $_POST['email'];
           $pass = $_POST['passwd'];
          
        #$sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')";
          $sql = "INSERT into registration values('$userf','$userl', '$mail','$pass')";
           $qury = mysql_query($sql);
 
        #  INSERT into phplogin values(
        #   1,
        #   'satish',
        #   'satish');
 
        if(!$qury)
        
                  echo "Failed ".mysql_error();
                 
        
        else
                  header("Location: index1.html");
                 
?>