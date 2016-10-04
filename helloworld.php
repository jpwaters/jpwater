<?php
  //echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
  
  $bottleType = htmlspecialchars($_GET["bottleType"]);
  $bottleQty = htmlspecialchars($_GET["bottleQty"]);
  $dAddress = htmlspecialchars($_GET["dAddress"]);
  $phoneInfo = htmlspecialchars($_GET["phoneInfo"]);
  
  $msg = "bottleType : " . $bottleType . "[]bottleQty : " .  $bottleQty . "[]Delivvery Address : " .  $dAddress . "[]Phone Info : " .  $phoneInfo;
  
  //file_put_contents("jpWaterBookingDetails.txt",$msg);
  //file_put_contents("jpWaterBookingDetails.txt","testing from server");

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
//mail("jptrads@gmail.com","Book Water");
//return "success";

$myFile = "jpWaterBookingDetails.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);

