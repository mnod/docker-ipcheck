<?php
$headeraddr = $_SERVER["HTTP_X_FORWARDED_FOR"];
$remoteaddr = $_SERVER["REMOTE_ADDR"];
if ( $headeraddr == "" ) {
  $ipaddr = $remoteaddr;
}
else {
  $ipaddr = $headeraddr;
}
$hostbyaddr = gethostbyaddr($ipaddr);
$json_array = [ 'ipaddress' => "$ipaddr", 'hostname' => "$hostbyaddr" ];
echo json_encode($json_array);
?>
