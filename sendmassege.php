<?php
if(isset($_POST['submit'])){
$mailto="nouran.ssp@gmail.com";
$name=$_POST['name'];
$massage=$_POST['message'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$header="From: $email \r\n";
$sent=mail($mailto, $subject,$massage,$header);
if ($sent) {
    echo("Your Message was sent Successfully!") ;
  } else {
    echo("Sorry! Message was not sent, Try again Later.");
  }
}
?>