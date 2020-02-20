<?php
require_once 'config.php';
require_once 'database.php';
function send_email($data) {
	$to 	= $data['to'];
	$sub 	= $data['sub'];
	$msg 	= $data['msg'];
	$retval = mail ($to,$sub,$msg);
}
?>

<!-- <?php 
//require_once 'autoload.php';
//require("phpmailer/phpmailer/src/PHPMailer.php");
//$m = new PHPMailer\PHPMailer\PHPMailer();
//$m->isSMTP();
//$m->SMTPAuth =true;
//$m->SMTPDebug =2;
//$m->Host = 'smtp.gmail.com';
//$m->Username = 'mazz272727@gmail.com';
//$m->Password = 'asa4gipod';
//$m->SMTPSecure = 'ssl';
//$m->Port = 465;
//$m->From = 'mazz272727@gmail.com';
//$m->FromName = 'Anurag';
//$m->addAddress('anurag2798@gmail.com','Anurag');
//$m->Body = 'Test';
//var_dump($m->send());
?> -->