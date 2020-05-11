<?php 

require_once 'paynow/autoloader.php';
$host = 'localhost';
$db = 'paynow';
$username = 'supercode';
$password = '9g00isho';
 
$dsn= "mysql:host=" . $host . ";dbname=" . $db;
 
// // try{
// //  // create a PDO connection with the configuration data
//  $conn = new PDO($dsn, $username, $password);
// //  // display a message if connected to database successfully
// //  if($conn){
//  echo "Connected to the <strong>$db</strong> database successfully!";
//         }
// }catch (PDOException $e){
//  // report error message
//  echo $e->getMessage();
//  echo 'fail';
// // }
$email = $_GET['email'];
// $f = $email . '.txt';
// $file = fopen($f, 'w');
// fwrite($file, $email);
// fclose($file);
// // $data = fread($file,filesize($F));

$amount = $_GET['amount'];
// // var_dump($email);


$paynow = new Paynow\Payments\Paynow(
    '6054',
    '960ad10a-fc0c-403b-af14-e9520a50fbf4',
    'http://localhost/success.php?email=' . $email,
    'http://localhost/payment.php',    
);

$payment = $paynow->createPayment('Invoice', $email);
$payment->add('Bananas', floatval($amount));
// $payment->add('Apples', 3.40);
$response = $paynow->send($payment);
$poll = $response->pollUrl();
$status = 'unknown';
// fwrite($file, $poll);
//$conn->query("INSERT INTO transactions (email, poll, status) VALUES ('" . $email . "', '" . $poll . "', '" . $status . "')");
$url = 'Location: ' . $response->redirectUrl(); // http://www.example.com/another-page.php'
// add poll url to databse with email key
// fclose($file);
header($url);
// // var_dump($response);

?>