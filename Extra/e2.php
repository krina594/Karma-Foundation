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
								<?php

								?>
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
							

						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img"><?php
										    $ev_img="";
    										$qes_event = "SELECT * FROM karma_ini";
    										$qry_event=$conn->query($qes_event);


											$res_event=$qry_event->fetch_assoc()
    
    												
        												
    												?>

<?php if($status='1')
{
					?>
						
        <a target="_blank"  ?>
            <img class="img--bg" src="<?php echo 'img/'.$res_event["e_img"]; ?>" alt="$alter_img" />
        </a>

    <?php 

    
    ?>
										<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;"><?php
									$e_name="";
                                                $stu1="Select * from karma_ini ;";
                                                $qry1=$conn->query($stu1);
                                                //$res=$qry->fetch_assoc()
                                                $res1=$qry1->fetch_assoc()




                                                ?>
                                                <?php echo $res1["e_name"];?>
                                                
<?php


?></span>

										<?php
                                                $stu="Select * from karma_ini ;";
                                                $qry=$conn->query($stu);
                                                //$res=$qry->fetch_assoc()

                                                while($res=$qry->fetch_assoc())
                                                {

    
                                                        $e_heading="";
                                                        $e_description="";


                                                     




                                                ?>
                                       <h3 class="projects-masonry__title"><a href="#"><?php echo $res["e_heading"];?></a></h3>
                                                
                                            
                                                <?php echo '<br>';?>
                                               
                                                <?php echo $res["e_description"];?>

                                                
                                                
<?php

}
?>

									</div>
								</div>
							</div>
						</div>


					<?php }
					?>
				</section>