<?php

require_once 'paynow/autoloader.php';

// $host = 'supercode.co.zw';
// $db = 'fkdmqrpy_paynow';
// $username = 'fkdmqrpy_super';
// $password = '9g00isho9Gisho075';

$email = $_GET['email'];
$f = $email . '.txt';
$file = fopen($f, 'r');
$poll = fread($file,filesize($f));
// var_dump($data);

$paynow = new Paynow\Payments\Paynow(
    '6054',
    '960ad10a-fc0c-403b-af14-e9520a50fbf4',
    'https://paynow.supercode.co.zw/success.php?email=' . $email,
    'https://paynow.supercode.co.zw/payment.php',
    
);
// require_once 'dbconfig.php';
 
// $dsn= "mysql:host=" . $host . ";dbname=" . $db;
 
// try{
//  // create a PDO connection with the configuration data
//  $conn = new PDO($dsn, $username, $password);
//  // display a message if connected to database successfully
//  if($conn){
//  // echo "Connected to the <strong>$db</strong> database successfully!";
//         }
// }catch (PDOException $e){
//  // report error message
//  echo $e->getMessage();
// }

$email = $_GET['email'];
// select from db and check 
//$query = $conn->query("SELECT poll FROM transactions WHERE email='" . $email . "'");
// $data = $query->fetch();
// header('Location: ' . $data['poll']);
// check status

$stat = $paynow->pollTransaction($poll);
$status=$stat->status();
if ($status=="cancelled"){
	echo "<h1>I'm guessing you're temporarily broke :(<h1>";
	// sleep(5);
	// header('Location: http://localhost');
	
}else{
	echo "<h1> Thank You For Paying</h1>";
	// sleep(5);
	// header('Location: http://localhost');
}

?>