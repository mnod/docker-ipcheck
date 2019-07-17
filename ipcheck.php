<?php
$headeraddr = $_SERVER["HTTP_X_FORWARDED_FOR"];
$remoteaddr = $_SERVER["REMOTE_ADDR"];
if ( $headeraddr == "" ) {
  $ipaddr = $remoteaddr;
}
else {
  $ipaddr = $headeraddr;
}
$json_array = [ 'ipaddress' => "$ipaddr" ];
echo json_encode($json_array);
?>
