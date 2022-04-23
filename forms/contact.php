<?php
   $Name=$_POST['name'];
   $Email=$_POST['email'];
   $Subject=$_POST['subject'];
   $Message=$_POST['message'];

 $to ="eliaskemboy@gmail.com";
 $body="";

 $body .= "From" .$Name. "\r\n";
 $body .= "Email" .$Email. "\r\n";
 $body .= "From" .$Message. "\r\n";

 mail($to,$Subject,$body);
 

?>