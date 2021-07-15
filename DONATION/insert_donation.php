    <!DOCTYPE html>
<?php
include("db.php");
?>
<html lang="en">
    

<head>
        <meta charset="UTF-8"/>
        <meta name="description" content="description"/>
        <meta name="keywords" content="keywords"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <title>Karma Foundation</title>
        <!-- styles-->
        <link rel="stylesheet" href="css/styles.min.css"/>
        <link rel="stylesheet" href="assets/css/custom_style.css"/>
        <!-- web-font loader-->
        <script>
            WebFontConfig = {

                google: {

                    families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

                }

            }

            function font() {

                var wf = document.createElement('script')

                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
                wf.type = 'text/javascript'
                wf.async = 'true'

                var s = document.getElementsByTagName('script')[0]

                s.parentNode.insertBefore(wf, s)

            }

            font()
        </script>

        <script type="text/javascript">
                    function GEEKFORGEEKS() {
                var name =
                    document.forms["RegForm"]["d_name"];
                var email =
                    document.forms["RegForm"]["d_email"];
                var phone =
                    document.forms["RegForm"]["d_cno"];

                var amount =
                    document.forms["RegForm"]["d_amount"];

                

                

                if (name.value == "") {
                    window.alert("Please enter your name.");
                    name.focus();
                    return false;
                }


                if (email.value == "") {
                    window.alert(
                    "Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }

                if (phone.value == "") {
                    window.alert(
                    "Please enter your telephone number.");
                    phone.focus();
                    return false;
                }


                if (amount.value == "") {
                    window.alert(
                    "Please enter your amount");
                    phone.focus();
                    return false;
                }

                

                

                return true;
            }
        </script>
    </head>
    <body>
        <div class="page-wrapper">
            <!-- aside dropdown start-->
            <div class="aside-dropdown">
                <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
                    <svg class="icon">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </svg></span>
                <div class="aside-dropdown__item d-lg-none d-block">
                    <ul class="aside-menu">
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#"><span>Home</span></a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#about_us"><span>About Us</span></a></li>
                        
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Pages</span></a>
                            <!-- sub menu start-->
                            <ul class="aside-menu__sub-list">
                                <li><a href="#"><span>About</span></a></li>
                                <li><a href="#"> <span>Typography</span></a></li>
                                <li><a href="#"><span>Donors & Partners</span></a></li>
                                <li><a href="#"><span>Become a Volunteer</span></a></li>
                                <li><a href="#"><span>Events</span></a></li>
                                <li><a href="#"><span>Event Details</span></a></li>
                                <li><a href="#"><span>Stories</span></a></li>
                                <li><a href="#"><span>Story Details</span></a></li>
                                <li><a href="#"><span>Blog</span></a></li>
                                <li><a href="#"><span>Blog Post</span></a></li>
                                <li><a href="#"><span>Gallery</span></a></li>
                                <li><a href="#"><span>Pricing Plans</span></a></li>
                                <li><a href="#"><span>FAQ</span></a></li>
                                <li><a href="#"><span>404 Page</span></a></li>
                            </ul>
                            <!-- sub menu end-->
                        </li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a>
                            <!-- sub menu start-->
                            <ul class="aside-menu__sub-list">
                                <li><a href="#"><span>Causes 1</span></a></li>
                                <li><a href="#"> <span>Causes 2</span></a></li>
                                <li><a href="#"><span>Causes 3</span></a></li>
                                <li><a href="#"><span>Cause Details</span></a></li>
                            </ul>
                            <!-- sub menu end-->
                        </li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Shop</span></a>
                            <!-- sub menu start-->
                            <ul class="aside-menu__sub-list">
                                <li><a href="#"><span>Catalog Page</span></a></li>
                                <li><a href="#"><span>Shop Product</span></a></li>
                                <li><a href="#"><span>Shop Cart</span></a></li>
                                <li><a href="#"><span>Shop Checkout</span></a></li>
                                <li><a href="#"><span>Shop Account</span></a></li>
                            </ul>
                            <!-- sub menu end-->
                        </li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#"><span>Contacts</span></a></li>
                        <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Elements</span></a>
                            <!-- sub menu start-->
                            <ul class="aside-menu__sub-list">
                                <li><a href="#"><span>Alerts</span></a></li>
                                <li><a href="#"><span>Team</span></a></li>
                                <li><a href="#"><span>Testimonials</span></a></li>
                                <li><a href="#"><span>Accordion</span></a></li>
                                <li><a href="#"><span>Tabs</span></a></li>
                                <li><a href="#"><span>Pricing Plan</span></a></li>
                                <li><a href="#"><span>Counters</span></a></li>
                                <li><a href="#"><span>Icons</span></a></li>
                            </ul>
                            <!-- sub menu end-->
                        </li>
                    </ul>
                </div>
                <div class="aside-dropdown__item">
                    <!-- aside menu start-->
                    <ul class="aside-menu">
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#">Our Team</a></li>
                        <li class="aside-menu__item"><a class="aside-menu__link" href="#">Be a Volunteer</a></li>
                    </ul>
                    <!-- aside menu end-->
                    <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="#">info@karmafoundation.co</a></div>
                    <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+91 98984 00312
</a></div>
                    <ul class="aside-socials">
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Donate</span></a></div>
                </div>
            </div>
            <!-- aside dropdown end-->
            <!-- header start-->
            <header class="header header--front">
                <div class="container-fluid">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-auto d-flex align-items-center">
                            <div class="dropdown-trigger d-none d-sm-block">
                                <div class="dropdown-trigger__item"></div>
                            </div>
                            <div class="header-logo"><a class="header-logo__link" href="index.html"><img class="header-logo__img logo--light" src="assets/images/logo_white.png" alt="logo"/><img class="header-logo__img logo--dark" src="assets/images/logo.png" alt="logo"/></a></div>
                        </div>
                        <div class="col-auto">
                            <!-- main menu start-->
                            <nav>
                                <ul class="main-menu">
                                    <li class="main-menu__item"></li>
                                    <li class="main-menu__item"></li>
                                    
                                    
                                    <li class="main-menu__item main-menu__item--has-child">
                                        <!-- sub menu start-->
                                        <!-- sub menu end-->
                                    </li>
                                    
                                    
                                    <li class="main-menu__item"></li>
                                    <li class="main-menu__item"></li>
                                </ul>
                            </nav>
                            <!-- main menu end-->
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            
                            <div class="dropdown-trigger d-block d-sm-none">
                                <div class="dropdown-trigger__item"></div>
                            </div><a class="button button--squared" href="#"><span>Donate</span></a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end-->
            <main class="main">

                <section class="promo">
   <div>
                               <div >
                            <div >
                                
                                <div>
                                    <h1><b><center>Donation Form</center></b></h1>
                                </div>
                                <div>
                                <center>
                                <form name="RegForm" 
            onsubmit="return GEEKFORGEEKS()" method="post">
                                
                                                  <?php

$d_name="";
$d_cno="";
$d_amount="";
$d_comm="";
$d_email="";
$d_longurl="";



if (isset($_POST["btn_sub"])) {
    $d_name=$_POST["d_name"];
    $d_cno=$_POST["d_cno"];
    $d_amount=$_POST["d_amount"];
    $d_comm=$_POST["d_comm"];
    $d_email=$_POST["d_email"];
    $d_longurl=$_POST["d_longurl"];
    




    $qry = "Insert into donation (d_name,d_cno,d_amount,d_comm,d_email,d_longurl) values ('$d_name','$d_cno','$d_amount','$d_comm','$d_email','$d_longurl') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='donate.php';</script>";



}


?>

                            <center>
                                <h4><p style="padding-left: 230px;padding-bottom:10px ;padding-top: 20px;color:black ;margin-bottom: 10px;text-align: left;">Full Name:</p></h4>
                                <input style="width: 70% ;padding-left: 30px;height: 50px;margin-left: 35px;border-radius: 5px;" name="d_name" placeholder="Full Name" value="<?php echo $d_name;?>">

                                <h4><p style="padding-left: 230px;padding-bottom:10px ;padding-top: 20px;color:black ;margin-bottom: 10px;text-align: left;">Contact Number:</p></h4>
                                <input style="width: 70% ;padding-left: 30px;height: 50px;margin-left: 35px;border-radius: 5px;" name="d_cno" placeholder="Contact Number" value="<?php echo $d_cno;?>">

                                <h4><p style="padding-left: 230px;padding-bottom:10px ;padding-top: 20px;color:black ;margin-bottom: 10px;text-align: left;">Email ID:</p></h4>
                                <input type="Email" style="width: 70% ;padding-left: 30px;height: 50px;margin-left: 35px;border-radius: 5px;" name="d_email" placeholder="Email ID" value="<?php echo $d_email;?>">


                                <h4><p style="padding-left: 230px;padding-bottom:10px ;padding-top: 20px;color:black ;margin-bottom: 10px;text-align: left;">Donation Amount: (INR)</p></h4>
                                <input style="width: 70% ;padding-left: 30px;height: 50px;margin-left: 35px;border-radius: 5px;" name="d_amount" placeholder="Donation Amount" value="<?php echo $d_amount;?>">

                                <h4><p style="padding-left: 230px;padding-bottom:10px ;padding-top: 20px;color:black ;margin-bottom: 10px;text-align: left;">Comment:</p></h4>
                                
                                <textarea name="comment" rows="5" cols="10" style="width: 70% ;padding-left: 30px;height: 50px;margin-left: 35px;border-radius: 5px;"><?php echo $d_comm;?></textarea>

                                <input type="url" name="d_longurl">

                                <!--<input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">-->



                                <?php

                                        $qes_id="Select * from donation;";
                                        $qry_id=$conn->query($qes_id);


                                ?>
                                </div>

                                     <center style="padding: 10px;">  <input  type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="Submit">

                                        

                                     </center>

</form>
</center>




                                </div>
                            </div>
                        </div>

                                

                                

                </section>


<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
/*curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_9e66ad25c7e01616bfc4623f822",
                  "X-Auth-Token:test_8ba0ec043e7b2e92463ca8af67e"));*/
                  
           $api = new Instamojo\Instamojo('e42261aabb3a2e0db0f6070d69f1d6cb', '45dbd89212bbd3007e45a46ed5765cd2','https://www.instamojo.com/api/1.1/');
/**$payload = Array(
    'purpose' => 'donation',
    'amount' => 'd_amount',
    'phone' => '9879060259',
    'buyer_name' => 'Karma Foundation',
    'redirect_url' => 'http://localhost/gateway/final.php',
    'send_email' => true,
    
    'send_sms' => true,
    'email' => 'parvshah19@gnu.ac.in',
    'allow_repeated_payments' => true,
);
$redirect_url=$payload["d_longurl"];
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);
echo '<pre>';
print_r($response);**/

 try {
 $response = $api->paymentRequestCreate(array(
    "purpose" => "FIFA 16",
    "amount" => "3499",
    "send_email" => true,
    "email" => "foo@example.com",
    "redirect_url" => "http://www.example.com/handle_redirect.php"
    ));
    header('location:'.response['longurl']);
}
catch (Exception $e) {
print('Error: ' . $e->getMessage());
}
?>
                

            <!-- footer start-->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-logo"><a class="footer-logo__link" href="#"><img class="footer-logo__img" src="assets/images/logo_white.png" alt="logo"/></a></div>
                            <!-- footer socials start-->
                            <ul class="footer-socials">
                                <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.facebook.com/thekarmafoundation/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="footer-socials__item"><a class="footer-socials__link" href="https://twitter.com/thekarmafoun?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.instagram.com/thekarmafoundation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- footer socials end-->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <h4 class="footer__title">Contacts</h4>
                            <div class="footer-contacts">
                                <?php
                                    $abo="Select * from address;";
                                    $qry=$conn->query($abo);
                                    $res=$qry->fetch_assoc()
                                ?>
                                
                                <p class="footer-contacts__address">

                                    <?php echo $res["main_address"];?>
                                    <?php echo $res["near"];?>
                                    <?php echo $res["city"];?>

                                </p>
                                <p class="footer-contacts__phone"><a href="#"><?php echo $res["a_cno"];?>
</a></p>
                                <p class="footer-contacts__mail"><a href="#"><?php echo $res["a_email"];?></a></p>

                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <h4 class="footer__title">Menu & Links</h4>
                            <!-- footer nav start-->
                            <nav>
                                <ul class="footer-menu">
                                    <!--<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="#">Home</a></li><br>-->
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#">Home</a></li><br>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="team.php">Our Team</a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="project.php">Projects</a></li>
                                    <!--<li class="footer-menu__item"><a class="footer-menu__link" href="#">About Us</a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="event.php">Events</a></li>
                                    <li class="footer-menu__item"><a class="footer-menu__link" href="#">Community</a></li>-->
                                    
                                    <!--<li class="footer-menu__item"><a class="footer-menu__link" href="#">Causes</a></li>-->
                                </ul>
                            </nav>
                            <!-- footer nav end-->
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <h4 class="footer__title">Donate</h4>
                            <p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="#">Donate</a>
                        </div>
                    </div>
                    <div class="row align-items-baseline">
                        <div class="col-md-6">
                            <p class="footer-copyright">© 2020 Karma Foundation</p>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condision</a></div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
        <!-- libs-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/libs.min.js"></script>
        <!-- scripts-->
        <script src="js/common.min.js"></script>
    </body>


</html>