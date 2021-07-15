<?php 
//$product_name = $_POST["purpose"];
//$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$price = $_POST["amount"];
include 'src/instamojo.php';       //Download from website
$api = new Instamojo\Instamojo('29b34070bf5867b7d36bf2586c4f4855', '40d161c14f252cc781066e0c685f5f4d','https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        //"purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://YOUR_WEBSITE.COM/thankyou.php",
        "webhook" => "http://YOUR_WEBSITE.COM/webhook.php"
        ));
    //print_r($response);
    $pay_url = $response['longurl'];
    
    header("Location: $pay_url");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
?>
