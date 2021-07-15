<?php
include 'instamojo.php';
$api = new Instamojo\Instamojo('YOU_PRIVATE_API_KEY', 'YOUR_PRIVATE_AUTH_TOKEN','https://test.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try {
$response = $api->paymentRequestStatus($payid);
echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
echo "<pre>";
print_r($response);
}
catch (Exception $e) {
print('Error: ' . $e->getMessage());
}
?>