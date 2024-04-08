<?php
// Get the form data
$phoneNumber = $_POST['phone'];
$email = $_POST['email'];
$amount = $_POST['amount'];


// Prepare the STK Push request data
$data = array(


    "BusinessShortCode" => 174379,
    "Password" => "",//insert your passoword here 
    "Timestamp" => "20160216165627",
    "TransactionType" => "CustomerPayBillOnline",
    "Amount" => $amount,
    "PartyA" => $phoneNumber, // The phone number initiating the payment
    "PartyB" => 174379, // Your paybill number
    "PhoneNumber" => $phoneNumber,
    "CallBackURL" => "https://mydomain.com/pat",
    "AccountReference" => "Test",
    "TransactionDesc" => "Test",



);

// Convert the data to JSON
$json_data = json_encode($data);

// Initialize cURL session
$ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

// Set cURL options
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ', //add you auth token
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the cURL request
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Output the response
echo $response;
?>