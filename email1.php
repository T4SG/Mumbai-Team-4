<?php
$link = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("hffusers.users") or die("Unable to connect to database");
$query="select email_id from hhfusers.users";
$result =mysql_query($query);

while($row=$result->fetch_array()){
        if($rows=='')    //this prevents from inserting comma on before the first element
        $rows.=$row['email_id'];
        else
        $rows.=','.$row['email_id'];
    }


$to = explode(',',$rows); // to change to array

$string =implode(',',$cc); //to get back the string separated by comma

mail($string, "Test", "Hi, Happy X-Mas and New Year");
mysql_close($link);
?>





