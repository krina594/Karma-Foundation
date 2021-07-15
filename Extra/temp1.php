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
									<li class="main-menu__item"><a class="main-menu__link" href="#"><span>Home</span></a></li>
									<li class="main-menu__item"><a class="main-menu__link" href="#"><span>About Us</span></a></li>
									
									
									<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Karma Initiatives</span></a>
										<!-- sub menu start-->
										<ul class="main-menu__sub-list">
											
											<!--<li><a href="#"><span>Pi Club</span></a></li>
											<li><a href="#"><span>The Science Club</span></a></li>
											<li><a href="#"><span>Shuruaat</span></a></li>
											<li><a href="#"><span>Jeevan Shrishti </span></a></li>
											<li><a href="#"><span>Satya Sai School visit</span></a></li>
											<li><a href="#"><span>Shishu Gruh</span></a></li>
											<li><a href="#"><span>Correction Home</span></a></li>
											<li><a href="#"><span>Sahara</span></a></li>
											<li><a href="#"><span>Neev</span></a></li>-->

<?php

$qes_event="Select * from karma_ini ;";
$qry_event=$conn->query($qes_event);


while ($res_event=$qry_event->fetch_assoc()) 
{
?>

<a href="nextpage.php?id=<?php echo $res_event['e_id'];?>"><?php echo "<tr><td>".($res_event['e_name'])."<br></td></tr>"; ?></a>
<br>
<?php
}



?>


										</ul>
										<!-- sub menu end-->
									</li>
									
									
									<li class="main-menu__item"><a class="main-menu__link" href="#"><span>Events</span></a></li>
									<li class="main-menu__item"><a class="main-menu__link" href="#"><span>Contacts</span></a></li>
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
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="img/promo_1.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_1.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>We help all people in need</span> <span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
												
												
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="img/promo_2.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_2.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-lg-8 col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
												</div>
												
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-3">
							<picture>
								<source srcset="img/promo_3.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/promo_3.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Karma Volounteers</span><br/><span>Around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<!-- slider nav start-->
					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<!-- slider nav end-->
				</section>
				<!-- promo start-->
				<!--<section class="promo">
					<div class="promo-slider">
						<div class="promo-slider__item promo-slider__item--style-1">
							<picture>
								<source srcset="img/promo_1.jpg" media="(min-width: 835px)"/>
								<source srcset="img/promo_1.jpg" media="(min-width: 376px)"/>
								<img class="img--bg" src="img/promo_1.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>We help all people in need</span> <span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-2">
							<picture>
								<source srcset="img/promo_2.jpg" media="(min-width: 835px)"/>
								<source srcset="img/834promo_2.jpg" media="(min-width: 376px)"/><img class="img--bg" src="img/375promo_2.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-7">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Our Helping</span><br/><span>around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="promo-slider__item promo-slider__item--style-3">
							<picture>
								<source srcset="img/promo_3.jpg" media="(min-width: 835px)"/>
								<source srcset="img/834promo_3.jpg" media="(min-width: 376px)"/><img class="img--bg" src="img/375promo_3.jpg" alt="img"/>
							</picture>
							<div class="container">
								<div class="row">
									<div class="col-xl-8 offset-xl-2">
										<div class="align-container">
											<div class="align-container__item">
												<div class="promo-slider__wrapper-1">
													<h2 class="promo-slider__title"><span>Karma Volounteers</span><br/><span>Around the world.</span></h2>
												</div>
												<div class="promo-slider__wrapper-2">
													<p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish</p>
												</div>
												<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="#">Discover</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="slider__nav slider__nav--promo">
						<div class="promo-slider__count"></div>
						<div class="slider__arrows">
							<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					
				</section>-->
				<!-- promo end-->
				
				
				<!-- causes start-->
				<section class="section about--front-2 background--brown">
					<div class="container">
						<div class="row">
							<div class="col-xl-4">
								<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
									<h2 class="heading__title no-margin-bottom"><span>Help is Our</span> <span>Main Goal Ever</span></h2>
								</div><a class="button button--primary d-none d-xl-inline-block" href="#">More about</a>
							</div>
							<div class="col-xl-8">
								


<?php
//CHANGE KARYU FOR ABOUT US_1
?>
<?php
                                                $abo="Select * from about_us_1;";
                                                $qry=$conn->query($abo);
                                                $res=$qry->fetch_assoc()
                                                ?>
                                        <tbody>
                                            <tr>
                                                <td><h3><?php echo $res["heading"]; "<br>";?></h3></td>

                                                </tr>

                                                <tr>
                                                        <td><?php echo $res["content"];?></td>
                                                    </tr>
                                        </tbody>




								<div class="row margin-top offset-margin">
									<div class="col-md-4 text-md-left text-center">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">People We Helped on <?php echo $res["hel"];?></h6>

											</div>
											<div class="counter-item__lower"><span class="js-counter">
												
													<tr>
                                                        <td><?php echo $res["hel"];?></td>
                                                    </tr>

											</span><span>k</span></div>
										</div>
									</div>
									<div class="col-md-4 text-md-left text-center">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">Donation Collected</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter">
											<tr>
                                                        <td><?php echo $res["donation"];?></td>
                                            </tr>
										</div>
									</div>


										<div class="col-md-4 text-md-left text-center">
										<div class="counter-item counter-item--style-3">
											<div class="counter-item__top">
												<h6 class="counter-item__title">Events Organized</h6>
											</div>
											<div class="counter-item__lower"><span class="js-counter"><tr>
                                                        <td><?php echo $res["eve"];?></td>
                                            </tr></span><span>+</span></div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-12 text-center"><a class="button button--primary d-inline-block d-xl-none margin-top" href="#">More about</a></div>
						</div>
					</div>
				</section>
				<!-- causes end-->
				<!-- projects start-->
				<section class="section">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-sm-6">
								<div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
									<h2 class="heading__title no-margin-bottom"><span>Karma Assistance</span> <span>Projects</span></h2>
								</div>
							</div>
							<div class="col-sm-6 text-sm-right">
								<!-- slider nav start-->
								<div class="slider__nav projects-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
					</div>
					<div class="projects-slider">
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_1.jpg" alt="img"/>
									
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #19cdf9;">Jeevan Shrishti</span>
										<h3 class="projects-masonry__title"> <a href="#">More than One Life Changed</a></h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
										<div class="projects-masonry__details-holder">
											<div class="projects-masonry__details-item"><span>Goal: </span><span>25,000 <i class="fa fa-rupee"></i></span></div>
											<div class="projects-masonry__details-item"><span>Date: </span><span>23 Jan'19</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_1.jpg" alt="img"/>
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #fbc70d;">Ahmedabad Book Club</span>
										<?php
                                                $stu="Select * from karma_ini where e_id='1';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==1)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="ahmedabad_club.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>

									</div>
								</div>
							</div>
						</div>

						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_1.jpg" alt="img"/>
										<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Gujarati  Book Club </span>

										<?php
                                                $stu="Select * from karma_ini where e_id='2';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==2)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="gujarati_club.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>

									</div>
								</div>
							</div>
						</div>
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_2.jpg" alt="img"/>
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #19cdf9;">Shuruaat</span>

												<?php
                                                $stu="Select * from karma_ini where e_id='3';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==3)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="shuruaat.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>
										
									</div>
								</div>
							</div>
						</div>
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_1.jpg" alt="img"/>
										<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">The Science Club </span>

										<?php
                                                $stu="Select * from karma_ini where e_id='7';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==7)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="science_club.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>

									</div>
								</div>
							</div>
						</div>

						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_3.jpg" alt="img"/>
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #fb340d;">Shishu Gruh
</span>
										<?php
                                                $stu="Select * from karma_ini where e_id='4';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==4)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="shishu_gruh.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>
									</div>
								</div>
							</div>
						</div>
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_2.jpg" alt="img"/>
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #19cdf9;">Prayas</span>

												<?php
                                                $stu="Select * from karma_ini where e_id='6';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==6)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="prayas.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>
										
									</div>
								</div>
							</div>
						</div>
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><img class="img--bg" src="img/projects-slider_2.jpg" alt="img"/>
									<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;">Sahara
</span>
										
										<?php
                                                $stu="Select * from karma_ini where e_id='5';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==5)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="sahara.php"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>


										
									</div>
								</div>
							</div>
						</div>
					</div>

						
				</section>
				<!-- projects end-->
				<!-- text section start-->
				<section class="section text-section padding-bottom">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="text-section__heading">Volunteer</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
								<h3 class="text-section__title">Delivering help and hope <br/>to children through sponsorship.</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><a class="button button--primary" href="#">Become a Volunteer</a>
							</div>
						</div>
					</div>
				</section>
				<!-- text section end-->
				
				<!-- events start-->
				<section class="section events padding-top"><img class="events__bg" src="img/events_bg.png" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
									<h2 class="heading__title"><span>Karma Holds</span> <span>for You</span></h2>
									<p class="no-margin-bottom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_1.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">COVID Relief</a></h6>
										<p><b>Ahmedabad</b> Gujarat, India</p>
										<p><b>10 May,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_2.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Food Distribution</a></h6>
										<p><b>Ahmedabad</b> Gujarat, India</p>
										<p><b>10 May,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="event-item">
									<div class="event-item__img"><img class="img--bg" src="img/event_3.jpg" alt="img"/></div>
									<div class="event-item__content">
										<h6 class="event-item__title"><a href="#">Working for Corona Warriors</a></h6>
										<p><b>Ahmedabad</b> Gujarat, India</p>
										<p><b>10 May,</b> 2019</p>
										<p><b>10:00 AM - 18:00 PM,</b> Everyday</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center"><a class="button button--primary" href="#">View all events</a></div>
						</div>
					</div>
				</section>
				<!-- events end-->
				<!-- testimonials style-2 start-->
				<section class="section testimonials testimonials--style-3">
					<div class="container">
						<div class="row">
							<div class="col-xl-4">
								<div class="row align-items-end">
									<div class="col-sm-8 col-md-6 col-xl-12">
										<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
											<h2 class="heading__title"><span>What People</span><br/><span>Says About Us</span></h2>
										</div>
									</div>
									<div class="col-sm-4 col-md-6 col-xl-12">
										<!-- slider nav start-->
										<div class="slider__nav testimonials-style-3__nav">
											<div class="slider__arrows">
												<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
												</div>
												<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
												</div>
											</div>
										</div>
										<!-- slider nav end-->
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="testimonials__slider-holder">
									<div class="testimonials-slider testimonials-slider--style-3">
										<div class="testimonials-slider__item">
											<div class="testimonials-slider__icon">“</div>
											<div class="testimonials-slider__text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												<div class="testimonials-slider__author"><span class="testimonials-slider__name">Ishita Sharma, </span><span class="testimonials-slider__position">Volunteer</span></div>
											</div>
										</div>
										<div class="testimonials-slider__item">
											<div class="testimonials-slider__icon">“</div>
											<div class="testimonials-slider__text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<div class="testimonials-slider__author"><span class="testimonials-slider__name">Nikunj Desai, </span><span class="testimonials-slider__position">Volunteer</span></div>
											</div>
										</div>
										<div class="testimonials-slider__item">
											<div class="testimonials-slider__icon">“</div>
											<div class="testimonials-slider__text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also.</p>
												<div class="testimonials-slider__author"><span class="testimonials-slider__name">Hardik Patel, </span><span class="testimonials-slider__position">Volunteer</span></div>
											</div>
										</div>
										<div class="testimonials-slider__item">
											<div class="testimonials-slider__icon">“</div>
											<div class="testimonials-slider__text">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												<div class="testimonials-slider__author"><span class="testimonials-slider__name">Chintan Oza, </span><span class="testimonials-slider__position">Volunteer</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- testimonials style-2 end-->
				<!-- blog start-->
				<section class="section blog blog--front_3"><img class="blog__bg" src="img/blog_bg-2.png" alt="img"/>
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Events</span>
									<h2 class="heading__title no-margin-bottom"><span>Karma</span> <span>Events</span></h2>
								</div>
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-md-6 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="img/blog_1.jpg" alt="img"/><span class="blog-item__badge" style="background-color: #19cdf9;">Ahmedabad Book Club</span></div>
									
								
									
									
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="img/blog_4.png" alt="img"/><span class="blog-item__badge" style="background-color: #fb340d;">Gujarati Book Club</span></div>
									<div class="blog-item__content">									
									
<?php
                                                $stu="Select * from karma_ini where e_id='2';";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {



                                                    if($res["e_id"]==1)
                                                    {
                                                        
                                                        
                                                        $e_heading="";
                                                        $e_description="";


                                                    } 




                                                ?>
                                       
                                                <div class="blog-item__content">
                                                	<h6 class="blog-item__title"><?php echo $res["e_heading"];?></h6>
                                                
                                            </div>
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                <?php echo $res["e_img"];?>
                                                
<?php

}
?>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="img/blog_7.jpg" alt="img"/><span class="blog-item__badge" style="background-color: #fbc70d;">Pi Club</span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="#">Story Reading Shruti Nawab
</a></h6>
										<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail canthigaster</p>
										<div class="blog-item__details"><span class="blog-item__date">26 Feb, 2020</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog end-->
				<!-- donors start-->
				
				<!-- donors end-->
				<!-- instagram start-->
				<section class="section instagram">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-md-7 col-lg-8">
								<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
									<h2 class="heading__title no-margin-bottom"><span># Karmacharity</span></h2>
								</div>
							</div>
							<div class="col-md-5 col-lg-4 text-md-right">
								<!-- slider nav start-->
								<div class="slider__nav instagram-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
					</div>
					<div class="instagram-slider">
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_1.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_2.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_3.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_4.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span></a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_5.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_6.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
						<a class="instagram-slider__item" href="https://www.instagram.com/thekarmafoundation/" target="_blank">
							<img class="img--bg" src="img/ig_4.jpg" alt="img"/>
							<span class="instagram-slider__icon">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
							<span class="instagram-slider__icon-hover">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</section>
				<!-- instagram end-->
				<section class="section donors donors--style-2 no-padding-top no-padding-bottom">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
									<h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- donors slider start-->
								<div class="slider-holder">
									<div class="donors-slider donors-slider--style-1">
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_1.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_2.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_3.png" alt="donor"/></div>
										</div>
										<div class="donors-slider__item">
											<div class="donors-slider__img"><img src="img/donor_4.png" alt="donor"/></div>
										</div>
									</div>
								</div>
								<!-- donors slider end-->
							</div>
						</div>
					</div>
				</section>
				<!-- donors end-->
				<!-- bottom bg start-->
				<section class="bottom-background">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
			</main>
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
								<p class="footer-contacts__address">
								7th Floor, Popular House,
Opp. Sales India, Ashram Road,
Ahmedabad - 380009


								</p>
								<p class="footer-contacts__phone">Phone: <a href="tel:+919898400312
">+91 98984 00312
</a></p>
								<p class="footer-contacts__mail">Email: <a href="#">info@karmafoundation.co</a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Menu & Links</h4>
							<!-- footer nav start-->
							<nav>
								<ul class="footer-menu">
									<li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="#">Home</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Our Team</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">About Us</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Events</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Community</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Projects</a></li>
									<li class="footer-menu__item"><a class="footer-menu__link" href="#">Causes</a></li>
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