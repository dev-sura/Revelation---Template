
<?php
$dbcon1=@mysql_connect("localhost","revelation","revelation123",true);
	mysql_select_db('revelation',$dbcon1);
	if(isset($_GET['name']))
	{
$Name = $_GET['name'];
	}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Page Title -->
	<title>E-REVELATION | A National Level Technical Symposium</title>
<!-- /Page title -->

<!-- Seo Tags -->
	<meta name="description" content="A National Level Technical Symposium" />
	<meta name="keywords" content="Symposium, Technical, Hindustan University, Chennai"/>
	<meta name="robots" content="index, follow">
<!-- /Seo Tags -->

<!-- Favicon and Touch Icons
========================================================= -->
	<link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon2.ico" type="image/x-icon">
<!-- /Favicon
========================================================= -->

<!-- >> CSS
============================================================================== -->
	<!-- Bootstrap styles -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- /Bootstrap Styles -->
	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Hind:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- /google web fonts -->
	<!-- owl carousel -->
	<link href="vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- /owl carousel -->
	<!-- fancybox.css -->
	<link href="vendor/fancybox/jquery.fancybox.css" rel="stylesheet">
	<!-- /fancybox.css -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<!-- /Font Awesome -->
	<!-- Main Styles -->
	<link href="css/styles.css" rel="stylesheet">
	<!-- /Main Styles -->
<!-- >> /CSS
============================================================================== -->
</head>

<body>

<!-- Page Loader
========================================================= -->
<div class="loader-container" id="page-loader">
  <div class="loading-wrapper loading-wrapper-hide">
  	<div class="loader-animation" id="loader-animation">
  		<svg class="svg-loader" width=100 height=100>
		  <circle cx=50 cy=50 r=25 />
		</svg>
  	</div>
    <!-- Edit With Your Name -->
    <div class="loader-name" id="loader-name">
      <img src="img/loader-logo.png" alt="">
    </div>
    <!-- /Edit With Your Name -->
    <!-- Edit With Your Job -->
    <p class="loader-job" id="loader-job">September 17 | Place: Hindustan University, Chennai</p>
    <!-- /Edit With Your Job -->
  </div>
</div>
<!-- /End of Page loader
========================================================= -->

<!-- Header
================================================== -->
<header id="header" class="">
	<div class="container">
		<!-- logo -->
		<div class="header-logo" id="header-logo">
			<img src="img/logo.png" alt=""/>
		</div>
		<!-- /logo -->
		<!-- MAIN MENU -->
	    <nav class="">
	      <ul class="hd-list-menu">
	        <li class="active"><a href="#main-carousel">Home</a></li>
	        <li><a href="#section-event-infos">About </a></li>
	        <!--<li><a href="#section-schedule">Schedule</a></li>-->
	        <li><a href="#section-speakers">Members</a></li>
	        <!--<li><a href="#section-sponsors">Sponsors</a></li>-->
	        <li><a href="#section-blog">Events</a></li>
	        <li><a href="#section-faq">FAQ</a></li>
	        <li><a href="#section-prices">Staff</a></li>
	        <li><a href="#section-register">Register</a></li>
	      </ul>
	    </nav>
	    <!-- /MAIN MENU -->
	</div>
</header>
<!-- /Header
================================================== -->


<div class="page-wrapper">

	<div id="body-content">

		<!-- SECTION: Intro
		================================================== -->
		<div class="owl-carousel main-carousel" id="main-carousel">

			<!-- slide -->
			<div class="main-intro" style="background-image: url('img/bg7.jpg');">

				<div class="container">
					<div class="intro-content-wrapper viewport">
						<!-- INTRO CONTENT -->
						<!-- Adjust the margin-top in style atribute according to content to keep always centered vertically-->
						<div class="intro-content intro-content-slide1">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-sm-12">
									<!-- event logo -->
									<div class="ic-logo">
										<img src="img/intro-logo4.png" alt="">
									</div>
									<!-- /event logo -->
									<!-- Event Infos -->
									<div class="ic-infos">
										<p>Sept 17 | Hindustan University, Chennai</p>
									</div>
									<!-- /Event Infos -->
									<!-- Register Form -->
									<div class="intro-register-form-text">
										<p>- Register now -</p>
									</div>
										<div class="ic-buttons">
											<a href="#section-blog" class="btn"><i class="fa fa-paper-plane"></i> &nbsp; register now</a> <a href="https://www.youtube.com/embed/dorZ3vag5PI?autoplay=1" class="fancybox btn"><i class="fa fa-play"></i> &nbsp;Watch Video</a>
										</div>
								</div>
								<!-- /col -->
							</div>
							<!-- /row -->

						</div>
						<!-- /INTRO CONTENT -->
					</div>
				</div>
			</div>
			<!-- /slide -->

			<!-- slide -->
			<div class="main-intro" style="background-image: url('img/bg4.jpg');">
				<div class="container">
					<div class="intro-content-wrapper viewport">
						<!-- Main Title -->
						<!-- Adjust the margin-top in css according to content to keep always centered vertically-->
						<div class="intro-content countdown-wrapper intro-content-slide2">
							<p class="countdown-title">The Event Will Begin In:</p>
							<!-- countDown -->
							<div id="countdown" class="row"></div>
							<!-- /countDown -->
							<p class="countdown-title2"> <a href="https://www.youtube.com/embed/dorZ3vag5PI?autoplay=1" class="fancybox btn"><i class="fa fa-play"></i> &nbsp;Watch Video</a> <a href="#section-register" class="btn"><i class="fa fa-paper-plane"></i> &nbsp; register now</a></p>
						</div>
						<!-- /Main Title -->
					</div>
				</div>
			</div>
			<!-- /slide -->
		</div>
		<!-- /SECTION: Intro
		================================================== -->

		<!-- SECTION: Event Infos
		================================================== -->
		<div class="section-event-infos inverted-section" id="section-event-infos">
			<div class="container-fluid">
				<div class="event-infos row">
					<!-- date -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-calendar"></span></div>
						<h3 class="main-title3">Date:</h3>
						<p>September 16 & 17, 2016</p>
					</div>
					<!-- /date -->
					<!-- Time -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-location-arrow"></span></div>
						<h3 class="main-title3">Location:</h3>
						<p>Hindustan University, Chennai</p>
					</div>
					<!-- /Time -->
					<!-- Time -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-ticket"></span></div>
						<h3 class="main-title3">Events</h3>
						<p><strong>20+</strong> Technical Events</p>
					</div>
					<!-- /Time -->
					<!-- Time -->
					<div class="event-info-col">
						<div class="event-info-ico"><span class="fa fa-microphone"></span></div>
						<h3 class="main-title3">Spot Registration</h3>
						<p>September 17, <strong>8:30AM </strong> Onwards</p>
					</div>
					<!-- /Time -->
				</div>
			</div>
		</div>
		<!-- SECTION: /Event Infos
		================================================== -->


		<!-- SECTION: Event Description
		================================================== -->
		<div class="section-about" id="section-about">
			<div class="container-fluid">
				<div class="row">
					<!-- Left Column -->
					<div class="about-picture-wrapper">
						<div class="about-picture" id="about-picture">
							<img src="img/hits.jpg" style="height:557px; width:700px   "alt="" class="responsive-image">
						</div>
					</div>
					<!-- /Left Column -->
					<!-- Right Column -->
					<div class="about-text-wrapper">
						<div class="about-text" id="about-text">
							<h1 class="title3 title-border"><i class="fa fa-dot-circle-o"></i> About Our University</h1>
							<div class="about-text-content">
								<p><strong>Hindustan College of Engineering</strong>, started in the year 1985, was conferred the "University Status"
									by University Grants Commission (UGC), Government of India, Under Section 3 of UGC Act 1956 from the academic
									year 2008-09 and under the name HITS (Hindustan Institute of Technology and Science).</p><br>
									<p>Hindustan Institute of Technology and Science is one of the most sought after engineering Institutions in
										Tamil Nadu, reputed for its highly qualified and experienced faculty and excellent infrastructural facilities for
										curricular and extra curricular activities, the University has maintained an enviable academic excellence right from
										its inception. The student community comprises of students from all over India and Overseas. We have students hailing
										from Afghanistan, Bangladesh, Bhutan, China, Egypt, Ethiopia, France, Indonesia, Kenya, Korea, Liberia, Libya, Mauritius,
										Nigeria, Oman, Rwanda, Singapore, South Africa, South Korea, Sudan, U.A.E, Thailand, Vietnam, Tanzania, USA, etc.</p>
							</div>
							</div>
					</div>
					<!-- /Right Column -->
				</div>
			</div>
		</div>


		<!-- SECTION: Team
		================================================== -->
		<div class="section-team inverted-section2 section-padding" id="section-speakers">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Our Team</h2>
					<p><h3>List of dedicated people who helped us to be this AWESOME!</h3></p>
				</div>
				<!-- /Section title -->
				<div class="owl-carousel" id="about-team">
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team1.jpg" alt=""/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/Ahmednrda" class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="mailto:seyadian@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 8807839709" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>
							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Fazil Ahmed</h3>
								<p class="team-item-subtitle">President</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team2.jpg" alt=""/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/surakshit.kumar" target="_blank"class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="mail to:inbox.surakshit@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 9840357517" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Surakshit Kumar</h3>
								<p class="team-item-subtitle">Vice-President</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img style="height:263px;" src="img/team3.jpg" alt=""/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/akash.sanjeev.16?ref=br_rs" target="_blank" class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="mail to: akash.sanjeev10@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 98941608999" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Akash</h3>
								<p class="team-item-subtitle">Secretary</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team4.jpg" alt=""/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/profile.php?id=100000609489006" class="block-link" target="_blank"><span class="fa fa-facebook"></span></a>
											<a href="mailto:iamnarey@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 8939425010" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Naresh Kumar</h3>
								<p class="team-item-subtitle">Secretary</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team6.jpg" alt=""/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="#" class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="mail to: Kunaldhariwal05@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 8122766765" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Kunal Dhariwal</h3>
								<p class="team-item-subtitle">Co-Ordinator</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team7.jpg" style="height:264px" alt="MKP"/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/MKP.PRABHU.11/" class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel:090433 99331" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Manikanda Prabhu</h3>
								<p class="team-item-subtitle">Co-Ordinator</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
										<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team5.jpg" alt="UV"/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="" class="block-link"><span class="fa fa-facebook"></span></a>
									     	<a href="mail to: sriramakrishna13@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 9710655282" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">U.V.Sriramakrishna</h3>
								<p class="team-item-subtitle">Treasurer</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
										<!-- item -->
					<div class="team-item">
						<!-- team-member wrapper-->
						<div class="team-item-wrapper">
							<!-- team-member pic -->
							<div class="team-member-picture-wrapper">
								<div class="team-item-picture">
									<img src="img/team8.jpg" alt="MPV"/>
								</div>
								<div class="team-member-find">
									<div class="team-member-find-overlay">
										<!-- overlay content -->
										<div class="team-member-find-content">
											<a href="https://www.facebook.com/poilathvarrier?fref=ts" class="block-link"><span class="fa fa-facebook"></span></a>
											<a href="mailto:manjunathpoilath@gmail.com" class="block-link"><span class="fa fa-envelope"></span></a>
											<a href="tel: 9176156512" class="block-link"><span class="fa fa-phone"></span></a>
										</div>
										<!-- /overlay content -->
									</div>
								</div>
							</div>

							<!-- /team-member pic -->
							<!-- team-member Infos -->
							<div class="team-item-content">
								<h3 class="team-item-title">Manjunath Poilath</h3>
								<p class="team-item-subtitle">Developer</p>
							</div>
							<!-- team-member Infos -->
						</div>
						<!-- /team-member wrapper-->
					</div>
					<!-- /item -->
				</div>
			</div>
		</div>
		<!-- /SECTION: Team
		================================================== -->

				<!-- SECTION: Prices
		================================================== -->
		<div class="section-prices section-padding section-bg-left" id="section-prices">
			<div class="container">

				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Staffs</h2>
					<!--<p><h3>People who helped us in supporting the event</h3></p>-->
				</div>
				<!-- /Section title -->

				<!-- Princing Tickets -->
				<div class="row">

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
												<img style="margin-top:-10px;margin-left:70px;" src="img/1.jpg">
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-male"></i></p>
											<h3 class="ticket-item-buy-text">Dr. D. Venkat Subramaniam</h3>
											<p><i>Dean(SCS)</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-12">
												<!-- ticket price -->
												<p style="margin-top:60px;" class="price-ticket-type">People who helped us in supporting the event</p>
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-users"></i></p>
											<h4 class="ticket-item-buy-text">Approval & Co-Ordination Team</h4>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
											<img style="margin-top:-10px;margin-left:70px;" src="img/hod.jpg">
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-female"></i></p>
											<h3 class="ticket-item-buy-text">Dr. RAJESWARI MUKESH</h3>
											<p><i>Professor and Head - Computing Sciences</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->
				</div>
				<!-- /Princing Tickets -->

				<div style="margin-top:10px;" class="row">

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
												<img style="margin-top:-10px;margin-left:70px;" src="img/3.jpg">
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-male"></i></p>
											<h3 class="ticket-item-buy-text">Mr. B.V.Baiju</h3>
											<p><i>Staff-Co-Ordinator (SCS)</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
												<img style="margin-top:-10px;margin-left:70px;" src="img/4.jpg">
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-male"></i></p>
											<h3 class="ticket-item-buy-text">Mr. Praveen Kumar</h3>
											<p><i>Staff Co-Ordinator(SCS)</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->

					<!-- item -->
					<div class="col-sm-4">
						<!-- price ticket -->
						<a href="#" class="price-ticket-item">
							<div class="price-ticket-item-wrapper">
								<!-- Front card -->
								<div class="price-ticket-item-front">
									<div class="price-ticket-item-border">
										<!-- row -->
										<div class="row">
											<!-- col -->
											<div class="col-sm-6">
												<!-- ticket price -->
												<img style="margin-top:-10px;margin-left:70px;" src="img/5.jpg">
												<!-- /ticket-price -->
											</div>
											<!-- /col -->
											<!-- col -->
											<!-- /col -->
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /front-card -->
								<!-- Back Card -->
								<div class="price-ticket-item-back">
									<div class="price-ticket-item-border">
										<div class="price-ticket-buy">
											<p class="ticket-item-buy-ico"><i class="fa fa-male"></i></p>
											<h3 class="ticket-item-buy-text">Mr. Sanju Rajan</h3>
											<p><i>Staff-Co-Ordinator (SCS)</i></p>
										</div>
									</div>
								</div>
								<!-- /Back Card -->
							</div>
						</a>
						<!-- /price ticket -->
					</div>
					<!-- /item -->
				</div>
				<!-- /Princing Tickets -->


			</div>
		</div>
		<!-- /SECTION: Prices
		================================================== -->

		<!-- SECTION: Sponsors
		==================================================
		<div class="section-sponsors inverted-section2 section-padding " id="section-sponsors">
			<div class="container">
				<div class="section-title-wrapper">
					<h2 class="title-section">Proudly sponsored by</h2>
				</div>

				<div class="sponsors-list-wrapper">
					<div class="sponsors-list" id="sponsors-carousel">
						<div class="sponsor-item">
							<img src="img/partner-1.png" alt="">
						</div>
						<div class="sponsor-item">
							<img src="img/partner-2.png" alt="">
						</div>
						<div class="sponsor-item">
							<img src="img/partner-3.png" alt="">
						</div>
						<div class="sponsor-item">
							<img src="img/partner-4.png" alt="">
						</div>
						<div class="sponsor-item">
							<img src="img/partner-5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		================================================== -->

		<!-- SECTION: Blog
		================================================== -->
		<div class="section-blog section-padding inverted-section2" id="section-blog">
			<div class="container">

				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Our Events</h2>
					<p>Here are the list of events we are conducting, both technical and non-technical events</p>
				</div>
				<!-- /Section title -->

				<div id="blog-itens-container">
					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="pp.php" class=""><img src="img/pp.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="pp.php" class="">Innovative Minds</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="pp.php" class="">Paper Presentation</a></p>
								</div>

								<div class="hidden blog-item-description">
									<?php echo " <p><a id='complete' href="."Success.php?name=$Name"." class=''></a></p> ";?>
								</div>

								<div class="hidden blog-item-description">
										<?php echo " <p><a id='error' href='Error.php?name=$Name' class=''></a></p> ";?>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="pp.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="cu.php" class=""><img src="img/cu.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="cu.php" class="">Chaos Unchained</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a>Gaming</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="cu.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="sp.php" class=""><img src="img/sp.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="sp.php" class="">Spideys</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a>Web Development & Designing</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="sp.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="dz.php" class=""><img src="img/dz.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="sdz.php" class="">Droid Zone</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a>Mobile Gaming</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="dz.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="csp.php" class=""><img src="img/cs.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="Events.php#" class="">Code Sense</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="cs.php" class="">Coding</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="cs.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="sc.php" class=""><img src="img/sc.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="sc.php" class="">Stage Craft</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="sc.php" class="">Dramatics</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="sc.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="db.php" class=""><img src="img/db.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="db.php" class="">Debogage</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="db.php" class="">Debugging</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="db.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="az.php" class=""><img src="img/az.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="az.php" class="">AdZap</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="az.php" class="">Advertising</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="az.php" class=" btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="re.php" class=""><img src="img/re.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="re.php" class="">Reverse Engineering</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="re.php" class="">Output Prediction</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="re.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="dc.php" class=""><img src="img/dc.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="dc.php" class="">Dumb C</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="dc.php" class="">Dumb Charades</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="dc.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

							<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="ms.php" class=""><img src="img/ms.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="ms.php" class="">Mind Sweeper</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="ms.php" class="">Tech Quiz</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="ms.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
			<div class="blog-item">
				<div class="blog-item-wrapper">
					<!-- blog item thumbnail -->
					<div class="blog-item-thumb">
						<a href="cf.php" class=""><img src="img/cf.jpg" alt=""></a>
					</div>
					<!-- /blog item thumbnail -->
					<!-- Blog item - infos -->
					<div class="blog-item-infos">
						<!-- blog-item-title -->
						<div class="blog-item-title-wrapper">
							<h2 class="blog-item-title title-border"><a href="cf.php" class="">Click Flickz</a></h2>
						</div>
						<!-- /blog-item-title -->
						<!-- blog item - description -->
						<div class="blog-item-description">
							<p><a href="cf.php" class="">Photography</a></p>
						</div>
						<!-- /blog-item-description -->
						<!-- blog item - link -->
						<div class="blog-item-link">
							<a href="cf.php" class="btn btn-nobg">Know More >></a>
						</div>
						<!-- /blog item - link -->
					</div>
					<!-- /blog item - infos -->
				</div>
			</div>
			<!-- /blog-item -->

							<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="ap.php" class=""><img src="img/ap.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="ap.php" class="">APK Mania</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="ap.php" class="">App Presentation</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="ap.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
			<div class="blog-item">
				<div class="blog-item-wrapper">
					<!-- blog item thumbnail -->
					<div class="blog-item-thumb">
						<a href="gs.php" class=""><img src="img/gs.jpg" alt=""></a>
					</div>
					<!-- /blog item thumbnail -->
					<!-- Blog item - infos -->
					<div class="blog-item-infos">
						<!-- blog-item-title -->
						<div class="blog-item-title-wrapper">
							<h2 class="blog-item-title title-border"><a href="gs.php" class="">Game Of Selfies</a></h2>
						</div>
						<!-- /blog-item-title -->
						<!-- blog item - description -->
						<div class="blog-item-description">
							<p><a href="gs.php" class="">Photography</a></p>
						</div>
						<!-- /blog-item-description -->
						<!-- blog item - link -->
						<div class="blog-item-link">
							<a href="gs.php" class="btn btn-nobg">Know More >></a>
						</div>
						<!-- /blog item - link -->
					</div>
					<!-- /blog item - infos -->
				</div>
			</div>
			<!-- /blog-item -->

							<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="ws.php" class=""><img src="img/ws.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="ws.php" class="">Web Search</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="ws.php" class="">Google It!</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="ws.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
			<div class="blog-item">
				<div class="blog-item-wrapper">
					<!-- blog item thumbnail -->
					<div class="blog-item-thumb">
						<a href="ib.php" class=""><img src="img/ib.jpg" alt=""></a>
					</div>
					<!-- /blog item thumbnail -->
					<!-- Blog item - infos -->
					<div class="blog-item-infos">
						<!-- blog-item-title -->
						<div class="blog-item-title-wrapper">
							<h2 class="blog-item-title title-border"><a href="ib.php" class="">Captain Cold</a></h2>
						</div>
						<!-- /blog-item-title -->
						<!-- blog item - description -->
						<div class="blog-item-description">
							<p><a href="ib.php" class="">Ice Bucket Challenge</a></p>
						</div>
						<!-- /blog-item-description -->
						<!-- blog item - link -->
						<div class="blog-item-link">
							<a href="ib.php" class="btn btn-nobg">Know More >></a>
						</div>
						<!-- /blog item - link -->
					</div>
					<!-- /blog item - infos -->
				</div>
			</div>
			<!-- /blog-item -->

							<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="th.php" class=""><img src="img/th.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="th.php" class="">Tech Hunt</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="th.php" class="">Treasure Hunt</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="th.php" class="btn btn-nobg">Know More >></a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
			<div class="blog-item">
				<div class="blog-item-wrapper">
					<!-- blog item thumbnail -->
					<div class="blog-item-thumb">
						<a href="mt.php" class=""><img src="img/mt.jpg" alt=""></a>
					</div>
					<!-- /blog item thumbnail -->
					<!-- Blog item - infos -->
					<div class="blog-item-infos">
						<!-- blog-item-title -->
						<div class="blog-item-title-wrapper">
							<h2 class="blog-item-title title-border"><a href="mt.php" class="">Minute To Win It</a></h2>
						</div>
						<!-- /blog-item-title -->
						<!-- blog item - description -->
						<div class="blog-item-description">
							<p><a href="mt.php" class="">Minute To Win It</a></p>
						</div>
						<!-- /blog-item-description -->
						<!-- blog item - link -->
						<div class="blog-item-link">
							<a href="mt.php" class="btn btn-nobg">Know More >></a>
						</div>
						<!-- /blog item - link -->
					</div>
					<!-- /blog item - infos -->
				</div>
			</div>
			<!-- /blog-item -->

					<!-- blog-item -->
			<div class="blog-item">
				<div class="blog-item-wrapper">
					<!-- blog item thumbnail -->
					<div class="blog-item-thumb">
						<a href="pl.php" class=""><img style="height:330px;"src="img/pl.jpg" alt=""></a>
					</div>
					<!-- /blog item thumbnail -->
					<!-- Blog item - infos -->
					<div class="blog-item-infos">
						<!-- blog-item-title -->
						<div class="blog-item-title-wrapper">
							<h2 class="blog-item-title title-border"><a href="pl.php" class="">Pixelate</a></h2>
						</div>
						<!-- /blog-item-title -->
						<!-- blog item - description -->
						<div class="blog-item-description">
							<p><a href="pl.php" class="">Pixelate</a></p>
						</div>
						<!-- /blog-item-description -->
						<!-- blog item - link -->
						<div class="blog-item-link">
							<a href="pl.php" class="btn btn-nobg">Know More >></a>
						</div>
						<!-- /blog item - link -->
					</div>
					<!-- /blog item - infos -->
				</div>
			</div>
			<!-- /blog-item -->
				</div>
			</div>
		</div>
		<!-- /SECTION: Blog
		================================================== -->

		<!-- SECTION: FAQ
		================================================== -->
		<div class="section-faq section-padding section-bg-right" id="section-faq">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Faq</h2>
					<p>Do you have questions in your mind? Here are the questions which we were frequently asked..... </p>
				</div>
				<!-- /Section title -->

				<!-- FAQ list -->
	    		<div class="schedule-list">

					<!-- FAQ itens header -->
					<div class="schedule-item-header">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block schedule-item-block-top">
									<div class="schedule-item-bar schedule-item-bar-top"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10">
							</div>
						</div>
					</div>
					<!-- /FAQ itens header -->

					<!-- FAQ item -->
					<div class="schedule-item">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block">
									<div class="schedule-item-bar"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10 schedule-item-content-wrapper">
								<!-- FAQ item content -->
								<div class="schedule-item-content faq-item-content">
									<div class="row">
										<!-- col -->
										<div class="col-sm-12">
											<div class="schedule-item-infos">
												<!-- FAQ Question -->
												<h3 class="schedule-item-title faq-item-title">Can I Do A Spot Registration For Each Event?</h3>
												<!-- /FAQ Question -->
												<!-- FAQ reply -->
												<div class="schedule-item-text">
													<p>Yes you can. You can not do this process through our website. At the inital stage, you have to register for yourself to ensure that your information are stored in our database. And on the event, you can register yourself for a particular event</p>
												</div>
												<!-- /FAQ reply -->
											</div>
										</div>
										<!-- /col -->
									</div>
								</div>
								<!-- FAQ item content -->
							</div>
						</div>
					</div>
					<!-- /FAQ item -->

					<!--
					<!- FAQ item
					<div class="schedule-item">
						<div class="row">
							<div class="col-sm-2">
								<!- FAQ item bar
								<div class="schedule-item-block faq-item-block">
									<div class="schedule-item-bar"></div>
								</div>
								<!- /FAQ item bar
							</div>
							<div class="col-sm-10 schedule-item-content-wrapper">
								<!- FAQ item content
								<div class="schedule-item-content faq-item-content">
									<div class="row">
										<!- col
										<div class="col-sm-12">
											<div class="schedule-item-infos">
												<!- FAQ Question
												<h3 class="schedule-item-title faq-item-title">How Much Should I Pay For An Event?</h3>
												<!- /FAQ Question
												<!- FAQ reply
												<div class="schedule-item-text">
													<p>It varies. For some event, the registration fee is 50 and some are 100. The Amount paid is valid only for individual event</p>
												</div>
												<!- /FAQ reply
											</div>
										</div>
										<!- /col -
									</div>
								</div>
								<!- FAQ item content
							</div>
						</div>
					</div>
					<!- /FAQ item 
				-->
					<!-- FAQ item -->
					<div class="schedule-item">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block">
									<div class="schedule-item-bar"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10 schedule-item-content-wrapper">
								<!-- FAQ item content -->
								<div class="schedule-item-content faq-item-content">
									<div class="row">
										<!-- col -->
										<div class="col-sm-12">
											<div class="schedule-item-infos">
												<!-- FAQ Question -->
												<h3 class="schedule-item-title faq-item-title">To Whom and when should I Submit My Paper Presentation?</h3>
												<!-- /FAQ Question -->
												<!-- FAQ reply -->
												<div class="schedule-item-text">
													<p>You can submit your paper presentation to our <strong>Email:hitsrevelation@gmail.com</strong>. It should be submitted on or before 15th September 2016. And the topic for the paper presentation is "<strong>Any Emerging Technology In IT</strong>"</p>
												</div>
												<!-- /FAQ reply -->
											</div>
										</div>
										<!-- /col -->
									</div>
								</div>
								<!-- FAQ item content -->
							</div>
						</div>
					</div>
					<!-- /FAQ item -->



					<!-- FAQ itens footer -->
					<div class="schedule-item-footer">
						<div class="row">
							<div class="col-sm-2">
								<!-- FAQ item bar -->
								<div class="schedule-item-block faq-item-block schedule-item-block-bottom">
									<div class="schedule-item-bar schedule-item-bar-bottom"></div>
								</div>
								<!-- /FAQ item bar -->
							</div>
							<div class="col-sm-10">
							</div>
						</div>
					</div>
					<!-- /FAQ itens footer -->
				</div>
	    		<!-- /FAQ list -->
			</div>

		</div>
		<!-- /SECTION: FAQ
		================================================== -->

		<!-- SECTION: Register
		================================================== -->
		<div class="section-register inverted-section2 section-padding" id="section-register">
			<div class="container">
				<!-- Section title -->
				<div class="section-title-wrapper">
					<h2 class="title-section">Register Now</h2>
					<p>Fill In The Details</p>
				</div>
				<!-- /Section title -->

					<form method="post" class="form register-form" action="php/contact-form.php">
						<div class="row row-nopr">
						<div class="col-sm-4">
							<input pattern=".{3,}" oninput="validateAlpha();" name="name" id="vName" title="Minimum of 3 Characters" type="text" class="form-control" placeholder="Name" required>
						</div>
					</div>
					<div class="row row-nopr">
					<div class="col-sm-4">
						<input name="college" oninput="validateAlpha1();" pattern=".{8,}" id="vName1" maxlength="20" title="Minimum of 8 Characters" type="text" class="form-control" placeholder="College" required>
					</div>
				</div>
				<div class="row row-nopr">
				<div class="col-sm-4">
					<select name="year" required title="Please Select Your Year" class="form-control">
						<option value="" disabled selected>Select Your Year</option>
						<option value="1">1st Year</option>
					  <option value="2">2nd Year</option>
					  <option value="3">3rd Year</option>
						<option value="4">4th Year</option>
						<option value="5">5th Year</option>
					</select>
				</div>
			</div>
			<div class="row row-nopr">
			<div class="col-sm-4">
				<input name="dept" oninput="validateAlpha2();" id="vName2" pattern=".{3,}" max="20" title="Minimum of 3 Characters" type="text" class="form-control" placeholder="Department" required>
			</div>
		</div>
					<div class="row row-nopr">
						<div class="col-sm-4">
							<input name="email" id="email" title="Please type in your Email ID" class="form-control" type="email" placeholder="Email" required>
						</div>
					</div>
					<div class="row row-nopr">
						<div class="col-sm-4">
							<input name="tele" id="telephone" title="Please type in your contact No" class="form-control" type="text" pattern=".{10,}" maxlength="15" placeholder="Contact No" onkeypress="return isNumber(event)" required>
						</div>
					</div>
					<div class="row row-nopr">
						<label style="margin-left:20px;">Your Food Preference</label>&nbsp;
										<label class="radio-inline"><input type="radio" name="fp" value="Veg">Veg</label>
										<label class="radio-inline"><input type="radio" name="fp" value="Non-Veg">Non-Veg</label>
							</div>
						<div class="row row-nopr">
							<label style="margin-left:20px;"class="checkbox-inline"><input type="checkbox" name="ac" value="Yes">Accomodation Needed? Not Applicable for Chennai Citizens</label>
						</div>
					<div class="row row-nopr">
						<div class="col-sm-3">
							<input type="submit" class="btn btn-default btn-form" name="submit" value="Register For The Event"/>
						</div>
						<div style="margin-top:-10px;" class="col-md-offset-2 col-sm-6">
							<div class="alert alert-warning" role="alert"><strong>Note:</strong> This is not event based registration. Event based registration can only be done at spot. This is a common registration where we have your details in our database</div>
						</div>
					</div>
						<input type="hidden" value="New Event Register!" name="subject" id="subject">
					</form>
				</div>
			</div>
		<!-- /SECTION: Register
		================================================== -->

		<!-- SECTION: Location
		================================================== -->
		<div class="container-fluid">
			<div class="row">
				<div class="map" id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15562.621567732554!2d80.2243601!3d12.8008664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a585af1f362dadb!2sHindustan+Institute+of+Technology+%26+Science!5e0!3m2!1sen!2sin!4v1473580462757" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- /SECTION: Location
		================================================== -->

				<!-- SECTION: Sponsors
		================================================== -->
<!-- Footer
================================================== -->
<footer id="footer" class="jumb-footer">
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- col -->
			<div class="col-sm-6">
				E-Revelation'16 - Designed and Developed by <strong><i><a href="https://www.hashinc.in">HashInclude</a></i></strong>
			</div>
			<!-- /col -->
			<!-- col -->
			<div class="col-sm-6 text-right">
				<!-- Social Icons -->
				<div class="footer-social-icons">

					<a href="https://www.facebook.com/re2k16"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>

					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
				<!-- /Social Icons -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
</footer>
<!-- /Footer
================================================== -->
<div class="modal fade bs-example-modal-sm" id="success" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Crossbrowser-->
<script src="vendor/cross-browser.js"></script>
<!-- /Crossbrowser-->
<!-- CountDown -->
<script src="vendor/jquery.countdown.min.js"></script>
<!-- /CountDown -->
<!-- Waypoints-->
<script src="vendor/waypoints.min.js"></script>
<!-- /Waypoints-->
<!-- Validate -->
<script src="vendor/validate.js"></script>
<!-- / Validate -->
<!-- Fancybox -->
<script src="vendor/fancybox/jquery.fancybox.js"></script>
<!-- /fancybox -->
<!-- Owl Caroulsel -->
<script src="vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
<!-- /Owl Caroulsel -->
<!-- Main JS -->
<script src="js/main.js"></script>
<!-- /Main JS -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- >> /JS
============================================================================= -->
</script>
<script>
$(document).ready(function(){
	$str = window.location.hash;
    $($str).trigger("click");
});
</script>
<script>
function validateAlpha(){
	var textInput = document.getElementById("vName").value;
	textInput = textInput.replace(/[^A-Za-z]/g, "");
	document.getElementById("vName").value = textInput;
}
function validateAlpha1(){
	var textInput = document.getElementById("vName1").value;
	textInput = textInput.replace(/[^A-Za-z]/g, "");
	document.getElementById("vName1").value = textInput;
}
function validateAlpha2(){
	var textInput = document.getElementById("vName2").value;
	textInput = textInput.replace(/[^A-Za-z]/g, "");
	document.getElementById("vName2").value = textInput;
}
</script>
<script>
function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
	}
	return true;
}
</script>
<script language="javascript">
function red()
{
	window.location="index.php";
}
</script>
</body>
</html>
