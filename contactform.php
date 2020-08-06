<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $emailfrom=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $mailto="gahlottushar19@mail.com";
    $header="From: ".$emailfrom;
    $txt="You recieved mail from ".$name.".\n\n".$message;

    mail($mailto,$subject,$txt,$header);
    header("Location: index.php?mailsend");
  }
 ?>
