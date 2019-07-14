<?php
$headeraddr = $_SERVER["HTTP_X_FORWARDED_FOR"];
$remoteaddr = $_SERVER["REMOTE_ADDR"];
if ( $headeraddr == "" ) {
  echo $remoteaddr;
}
else {
  echo $headeraddr;
}
?>
