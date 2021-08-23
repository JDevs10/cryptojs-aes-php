<?php
include ('EncDecPHP.class.php');

//print("<pre>".print_r(EncDecPHP, true)."</pre>");


// encrypt
// originalValue => this could be any value
$originalValue = array(
	'subject'=>"hello",
	'who'=>"world",
	'number'=>123,
	'array'=> array('Hey','Hi',15.3)
);
$originalValue = json_encode($originalValue);
$password = "123456";
$encrypted = EncDecPHP::encrypt($originalValue, $password);
// something like: {"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}

// decrypt
//$encrypted = '{"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}';
$password = "123456";
$decrypted = EncDecPHP::decrypt($encrypted, $password);

echo "Encrypted: " . $encrypted . "\n";
echo "Decrypted: " . print_r($decrypted, true) . "\n";
