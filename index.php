<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 2020 05:00:00 GMT"); // 2020
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/linkstyles.css">
<link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
<script async type="text/javascript" src="js/jquery.js"></script>
<script async type="text/javascript" src="js/js.js"></script>
<title>Zina Labs</title>
</head>
<body>
	<?php include("header.php"); ?>
	<div class="header">

    	<div class="central-motto">
        	<div class="motto-words" style="position: relative; left: -50%; color:#FFF;">
            Making something from
            </div>
            <div class="motto-words" style="position: relative; left: -50%; color:#FFF;">
            nothing is our main priority
            </div>
            <div class="motto-words" style="position: relative; left: -50%; color:#FFF;">
            and professional capability.
            </div>
            <div class="motto-buttons" style="">
            <div class="floats-2" align="left">
							<a href="#">
								<div class="motto-button-blue">
								Learn more about us
								</div>
							</a>
            </div>
            <div class="floats-2" align="right">
            <a href="#">
							<div class="motto-button-blue" style="margin-right: 0px;">
							Contact us
							</div>
						</a>
            </div>
            <div class="clear"></div>
            </div>
        </div>
    </div>


    <div class="content index">

    <div class="content-body">
    	<div class="mid-title fade-in" style="margin-bottom:20px !important;">Goals</div>

        <div class="margined-wrapper">
        	<div class="floats-3">
            	<div class="circled">

                    <span class="ion-code" style="color:#FFF;line-height: 30px;font-size: 60px;position: relative;top: 70px;"></span>

                </div>
                <div class="motto-head">We Develop</div>
                <i class="liner"></i>
                <p class="motto-exp">Starting from a simple contact form up to a greatly appriciated content managment system and database</p>
            </div>
            <div class="floats-3">
            	<div class="circled">

                    <span class="ion-laptop" style="color:#FFF;line-height: 30px;font-size: 60px;position: relative;top: 70px;"></span>

                </div>

                <div class="motto-head">We Design</div>
                <i class="liner"></i>
                <p class="motto-exp">We start simple on a simple piece of paper and end up with a colorful and mindblowing website or app</p>
            </div>
            <div class="floats-3">
            	<div class="circled">

                    <span class="ion-ios-heart" style="color:#FFF;line-height: 30px;font-size: 60px;position: relative;top: 70px;"></i>

                </div>

                <div class="motto-head">We Love</div>
                <i class="liner"></i>
                <p class="motto-exp">We respect old young tall short rich and poor. And we love them equally and proportionally.</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="full-content-smoke" style="background:#333;">

			<div class="projects-wrapper">

				<div class="mid-title fade-in" style="margin-bottom:20px !important; color:whitesmoke;">Projects</div>

				<div class="gallery-grid">
					<div class="gallery-grid-ins index">
							<img src="images/voyage.png" width="100%" class="grid-img"/>
								<div class="gallery-marker">
									<div class="gallery-marker-title">Voyage</div>
										<div class="gallery-marker-desc">Website for Voyage East Africa Limited</div>
								</div>
						</div>
				</div>


				<div class="gallery-grid">
					<div class="gallery-grid-ins index">
							<img src="images/genzeb.png" width="100%" class="grid-img"/>
								<div class="gallery-marker">
									<div class="gallery-marker-title">Genzeb</div>
										<div class="gallery-marker-desc">Personal Android Application for Accounting</div>
								</div>
						</div>
				</div>


				<div class="gallery-grid">
					<div class="gallery-grid-ins index">
							<img src="images/workspace.png" width="100%" class="grid-img"/>
								<div class="gallery-marker">
									<div class="gallery-marker-title">Upcoming</div>
										<div class="gallery-marker-desc">Secret Project due to be launched in December 2017</div>
								</div>
						</div>
				</div>

            <!-- <div class="margined-wrapper" style="margin-top:15px !important; margin-bottom:15px !important;">
                <div class="floats-2" >
                    <div class="team-holder">
                    	<img src="images/5.jpg" class="team-pic" />
                        <p class="team-naming">Beraki</p>
                	</div>
                </div>
                <div class="floats-2">
                     <div class="team-holder">
                    	<img src="images/6.jpg" class="team-pic" />
                        <p class="team-naming">Helen</p>
                	</div>
                </div>
                <div class="clear"></div>
            </div> -->
        <div class="clear"></div>
			</div>
        </div>

    </div>
		<div class="main-quote" style="">
			<blockquote><span style="font-size:30px;">"</span><i>Successful</i> people are not ones who don't <i>fail</i>, <i>but</i> those who <i>don't give up</i>.<span style="font-size:30px;">"</span></blockquote>
		</div>
		<?php include("contact-section.php"); ?>
  <?php include("footer.php"); ?>
  </div>
</body>
</html>
