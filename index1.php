<?php 

require_once 'paynow/autoloader.php';
// $host = '173.255.201.135';
// $db = 'fkdmqrpy_paynow';
// $username = 'fkdmqrpy_super';
// $password = '9g00isho9Gisho075';
 
// $dsn= "mysql:host=" . $host . ";dbname=" . $db;
 
// try{
//  // create a PDO connection with the configuration data
//  $conn = new PDO($dsn, $username, $password);
//  // display a message if connected to database successfully
//  if($conn){
//  echo "Connected to the <strong>$db</strong> database successfully!";
//         }
// }catch (PDOException $e){
//  // report error message
//  echo $e->getMessage();
//  echo 'fail';
// }

ini_set('display_errors', 1);
$email = $_GET['email'];
var_dump($email)
// // $f = $email . '.txt';
// // $file = fopen($f, 'w');
// // fwrite($file, $email);
// // fclose($file);s


// $amount = $_GET['amount'];
// // // var_dump($email);


// $paynow = new Paynow\Payments\Paynow(
//     '6054',
//     '960ad10a-fc0c-403b-af14-e9520a50fbf4',
//     'https://paynow.supercode.co.zw/success.php?email=' . $email,
//     'http://paynow.supercode.co.zw/payment.php',    
// );

// $payment = $paynow->createPayment('Invoice', $email);
// $payment->add('Bananas', floatval($amount));
// // $payment->add('Apples', 3.40);
// $response = $paynow->send($payment);
// $poll = $response->pollUrl();
// $status = 'unknown';
// fwrite($file, $poll);
// $conn->query("INSERT INTO transactions (email, poll, status) VALUES ('" . $email . "', '" . $poll . "', '" . $status . "')");
// $url = 'Location: ' . $response->redirectUrl(); // http://www.example.com/another-page.php'
// add poll url to databse with email key
// fclose($file);
// header($url);
echo "Click To Begin Payment";
// // var_dump($response);

?>