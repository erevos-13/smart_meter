<?php
include 'PhpSerial.php';
$serial = new PhpSerial;
$serial->deviceSet("/dev/ttyUSB0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none"); 
$serial->deviceOpen();
//sleep(1);
$serial->sendMessage($_GET["command"]);
//sleep(1);
$read = $serial->readPort();
while(strcmp("", $read) == 0)
{
	$read = $serial->readPort();
}
//$serial->sendMessage("ok");

?>
