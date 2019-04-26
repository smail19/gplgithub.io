<?php
if(isset($_POST['ssubmit'])){
   
   $name=$_POST['name'];
   $subject=$_POST['subject'];
   $mailFrom=$_POST['email'];
   $message=$_POST['message'];

   $mailTo="alyaminsmail@gmail.com";
   $headers="From:".$mailFrom;
   $txt="You have recived an email from".$name.".\n\n".$message;




   mail($mailTo,$subject,$txt,$headers);
   header("Location: index.php?mailsend");
  echo "The email message was sent.";

}