<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<meta http-equiv="Access-Control-Allow-Origin" content="*" /> 
<meta http-equiv="Access-Control-Allow-Headers" content="X-Requested-With" />
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<title>ISKCON VRINDAVAN | ISKCON VRINDABAN | ISKCONVRINDABAN.COM </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="ISKCON VRINDABAN" />
        <meta name="keywords" content="ISKCON VRINDABAN, ISKCONVRINDABAN, ISKCONVRINDAVAN, ISKCON VRINDAVAN, ISKCONVRINDABAN.COM" />
        <meta name="author" content="ISKCON" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        
        <link rel="icon" href="https://iskconvrindavan.com/wp-content/uploads/2017/12/ywuqYuVc-100x100.png" sizes="32x32" />
        <link rel="icon" href="https://iskconvrindavan.com/wp-content/uploads/2017/12/ywuqYuVc-300x300.png" sizes="192x192" />
		
		<!-- Google Font -->
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
		<!-- media-queries -->
		<!-- SLider Css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/w3.css">

        <link rel="stylesheet" href="<?= base_url()?>assets/css/media-queries.css">
		<!-- Modernizer Script for old Browsers -->
        <script src="<?= base_url()?>assets/js/modernizr-2.6.2.min.js"></script>



       



        <style type="text/css">
        	/* Style the buttons that are used to open and close the accordion panel */
			.accordion {
	  			  background-color: #eee;
				  color: #444;
				  cursor: pointer;
				  padding: 18px;
				  width: 100%;
				  border: none;
				  text-align: left;
				  outline: none;
				  font-size: 15px;
				  transition: 0.4s;
				}

			/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
			.active, .accordion:hover {
			  background-color: #ccc;
			}

			/* Style the accordion panel. Note: hidden by default */
			.panel {
			  padding: 0 18px;
			  background-color: white;
			  display: none;
			  overflow: hidden;
			}

			button.accordion:after {
		    content: '\002B';
		    color: #777;
		    font-weight: bold;
		    float: right;
		    margin-left: 5px;
		}



img{
	width:100%;
}
/*-- //Reset-Code --*/

.signupform {
    padding: 3em 0;
}
.left_grid_info h1 {
    font-size: 45px;
    margin: 1em 0em .5em 0em;
    color: #333;
    font-weight: 700;
}

input[type="email"] {
	font-size: 15px;
	color: #333;
    text-align: left;
    letter-spacing: 1px;
    padding: 14px 10px;
	width:93%;
	display:inline-block;
    box-sizing: border-box;
   	border: none;
    outline: none;
    background: transparent;
	font-family: 'Raleway', sans-serif;
}
input[type="text"] {
	font-size: 15px;
	color: #333;
    text-align: left;
    text-transform: capitalize;
    letter-spacing: 1px;
    padding: 14px 10px;
	width:93%;
	display:inline-block;
    box-sizing: border-box;
   	border: none;
    outline: none;
    background: transparent;
	font-family: 'Raleway', sans-serif;
}
.input-group {
    margin-top: 10px;
    margin-bottom: 20px;
	padding: 3px 10px;
	border: 1px solid #ddd;
	background: #fff;
}
.btn-block {
    background: #ff4040;
    border: none;
    color: #fff;
    font-size: 13px;
    padding: 12px 40px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
}
.w3_info h2 {
  display: inline-block;
    font-size: 26px;
    margin-bottom: 10px;
    color: #333;
    letter-spacing: 2px;	
    text-transform: capitalize;
}
.w3_info h4 {
    display: inline-block;
    font-size: 15px;
	padding: 8px 0px;
    color: #444;
    text-transform: capitalize;
}
a.btn.btn-block.btn-social.btn-facebook {
    display: block;
    width: 100%;
    padding: 10px 0px;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
	letter-spacing: 1px;
	font-family: 'Raleway', sans-serif;
}

.w3_info {
    flex-basis: 50%;
	-webkit-flex-basis: 50%;
    box-sizing: border-box;
	padding: 3em 4em;
    /* -webkit-box-shadow: 1px 0px 15px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 1px 0px 15px 0px rgba(0,0,0,0.2);
    box-shadow: 1px 0px 15px 0px rgba(0,0,0,0.2); */
}


.login-check {
    position: relative;
}
.w3_info .login-check label{
    text-transform: capitalize;
    font-size: 13px;
    letter-spacing: 1px;
    color: #000;
}
.checkbox i {
    position: absolute;
    top: 0px;
    left: 0%;
    text-align: center;
    display: block;
    width: 14px;
    height: 14px;
    border: 1px solid #777;
    outline: none;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -o-border-radius: 0px;
    cursor: pointer;
}
.checkbox input:checked + i:after {
    opacity: 1;
}
.checkbox input + i:after {
    position: absolute;
    opacity: 0;
    transition: opacity 0.1s;
    -o-transition: opacity 0.1s;
    -ms-transition: opacity 0.1s;
    -moz-transition: opacity 0.1s;
    -webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
    content: url(../images/tick.png);
    top: 0px;
    left: 2px;
}
.checkbox {
    position: relative;
    display: inline-block;
    padding-left: 25px !important;
    text-transform: capitalize;
    letter-spacing: 1px;
    font-size: 14px;
    color: #fff;
}
input[type="checkbox" i] {
    display: none;
}
.agile_info {
	display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
	display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
	display: -ms-flexbox;      /* TWEENER - IE 10 */
	display: -webkit-flex;     /* NEW - Chrome */
	display: flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.left_grid_info {
    padding-right: 3em;
}
.w3l_form {
    padding: 0px;
    flex-basis: 50%;
	-webkit-flex-basis: 50%;
}
.w3_info p {
    padding-bottom: 30px;
}
p.account,p.account1 {
    padding-top: 20px;
    padding-bottom: 0px;
    line-height: 1.5em;
    font-size: 13px;
}
p.account a,p.account1 a {
    color: #ff4040;
    font-size: 11px;
    text-decoration: underline;
}
p.account a:hover,p.account1 a:hover {
    text-decoration: none;
}
.w3_info label {
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
    color: #000;
    margin-bottom: 20px;
    font-size: 13px;
    padding-left: 0px;
}
h3.w3ls {
    margin: 10px 0px;
    padding-left: 60px;
}
h3.agileits {
    padding-left: 10px;
}
 
.input-group span.fa {
   font-size: 16px;
    vertical-align: middle;
	box-sizing:border-box;
	float:left;
    text-align: center;
	width:6%;
    padding: 15px 0px;
	color: #01cd74;
}
.input-group{
	width: 100%;
}

        </style>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<!--<div id="preloader">-->
		<!--	<img src="img/preloader.gif" alt="Preloader">-->
		<!--</div>-->
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="http://iskconvrindaban.com">
						<h1 id="logo">
							<img src="<?= base_url()?>assets/img/logo.png" alt="ISKCON VRINDABAN">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="font-weight: 600">
                    <ul   class="nav navbar-nav">
                        <li class="current"><a href="http://iskconvrindaban.com">HOME</a></li>                     
                   <!--      <li><a href="#projects">Projects</a></li> -->
                        <li><a href="<?= base_url('about-us'); ?>">ABOUT US</a></li>
                        <li><a href="<?= base_url('festival/vasanta-panchami'); ?>">FESTIVALS</a></li>
                        <li><a href="<?= base_url('donation'); ?>">DONATIONS</a></li>
                        <li><a href="<?= base_url('news'); ?>">NEWS </a></li>
                        <li><a href="<?= base_url('csr/plantation-environmental'); ?>">CSR ACTIVITIES </a></li>
                        <li><a href="<?= base_url('contact-us'); ?>">CONTACT US</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		


 

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Order Free Prashadam</h4>
            </div>
            <div class="modal-body">
            		<div class="row">
            			<div class="col-lg-12">

            				<div class="left_grid_info">
            				    <img src="<?= base_url()?>assets/img/iskcon-vrindaban-banner.jpg" alt="" style="padding-left:22px" width="100%"> 
								<div class="left_grid_info"> 
								 	
								</div> 
							</div> 
            				<div class="w3_info"> 

								<h2>Order Free Prashadam</h2>
								<p>Enter your details to login.</p>
								<form action="<?= base_url()?>home-page" method="post" onsubmit="return alert('Your order has been place. We will contact you soon');"> 
									<div class="input-group">
										<span class="fa fa-bars" aria-hidden="true"></span>
										<input type="text" placeholder="Enter Your name" required="" name="fullname"> 
									</div> 
									<div class="input-group">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<input type="email" placeholder="Enter Your Email" required="" name="email">  
									</div> 
									<div class="input-group"> 
										<span class="fa fa-mobile" aria-hidden="true"></span>
										<input type="text" placeholder="Phone Numbers" required="" class="mobile" name="mobile" maxlength="10">
									</div> 
									
									<div class="input-group"> 
										<span class="fa fa-building-o" aria-hidden="true"></span>
										<input type="text" placeholder="City" required="" class="city" name="city">
									</div> 
									 					
										<button class="btn btn-danger btn-block" type="submit" name="btn">Order</button>                
								</form>
								<p class="account">By clicking login, you agree to our <a href="#">Terms &amp; Conditions!</a></p>
								
							</div> 
            			</div>
            		</div> 
				</div>
        </div>
    </div>
</div>
 




		
		
        <!--   Home Slider    ==================================== -->

        		<div class="page-header-image relative"> 
        		  <img class="mySlides" src="<?= base_url()?>assets/img/banner-slider-iskcontemple.jpg" style="width:100%"> 
                  <img class="mySlides" src="<?= base_url()?>assets/img/banner-slider-krishna-balaram.jpg" style="width:100%">
                  <img class="mySlides" src="<?= base_url()?>assets/img/banner-slider-rath-yatra.jpg" style="width:100%">
                  <img class="mySlides" src="<?= base_url()?>assets/img/banner-slider-srila-prabhupada.jpg" style="width:100%">
                  <img class="mySlides" src="<?= base_url()?>assets/img/banner-child-kritan.jpg" style="width:100%">
                 <!--  <img class="mySlides" src="<?= base_url()?>assets/img/banner-ing-3.jpg" style="width:100%">
 -->

                  
                

                  <button class="w3-button w3-black w3-display-left"  onclick="plusDivs(-1)">&#10094;</button>
                  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> 
             </div>  

		<!--   Home Slider END   ==================================== -->



		
		 <!--  <section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet  
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides  
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide - 
					<div class="item active" style="background-image: url(<?= base_url()?>assets/img/banner.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
								ISKCON<span style="color: #fc8744"> VRINDABAN</span></h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated">
							   We are a team of ISKCON</h3>
							<!-- <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of iskcon</p> - 
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
					


					
					<!-- end single slide -->	<!-- single slide  
					<div class="item" style="background-image: url(<?= base_url()?>assets/img/banner-ing-4.jpg);">
						<div class="carousel-caption">
						</div>
					</div>
					<!-- end single slide -->
						
					<!-- end single slide -->	<!-- single slide - 
					<div class="item" style="background-image: url(<?= base_url()?>assets/img/banner-main.jpg);">
						<div class="carousel-caption">
						</div>
					</div>
					<!-- end single slide -->

					<!-- end single slide -->	<!-- single slide -- 
					<div class="item" style="background-image: url(<?= base_url()?>assets/img/banner-ing-3.jpg);">
						<div class="carousel-caption">
						</div>
					</div>
					<!-- end single slide -->

					 

					<!-- end single slide -->	<!-- single slide -- 
					<div class="item" style="background-image: url(<?= base_url()?>assets/img/banner-ing.jpg);">
						<div class="carousel-caption">	
						</div>
					</div>

					<!-- single slide -- 
					<div class="item" style="background-image: url(<?= base_url()?>assets/img/banner-ing-2.jpg);">
						<div class="carousel-caption">
							<!-- <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">ISKCON<span style="color: #fc8744"> VRINDABAN</span></h2> -->
							<!-- <h3 data-wow-duration="500ms" class="wow slideInLeft animated">Founder :   Srila Prabhupada</h3> -->
							<!-- <p data-wow-duration="500ms" class="wow slideInRight animated">Better people better world</p> -->
							
							<!-- <ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul> -- 
						</div>
					</div>

					
				</div>
				<!-- End Wrapper for slides -- 
				
			</div>
		</section>
		
        <!-- End Home SliderEnd  ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features"  style="background: #f1fff7; padding-top: 40px">
			<div class="container">
				<div class="row">	 
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Features</h2>
						<div class="devider"><i class="fa fa-circle"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Goshala Seva</h3>
								<p>We have saved lakhs of cattle through emergency relief camps in Braj Dham. We conduct free animal welfare workshops and programs in schools and colleges in 10+ cities.
								</p><br>
								<a href="<?=base_url()?>csr/cow-protection" style="font-size: 14px; font-weight: 800; color: #fc8744">Red More</a>
								

								
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Deity Worship Seva</h3>
								<p>The Krishna Balaram Temple is famous all over the world for its spectacular deity worship. Needless to say, though, much goes on behind the scenes to make this happen.</p>

								 <br>
								<a href="https://iskconvrindavan.com/donation-deity-worship/" style="font-size: 14px; font-weight: 800; color: #fc8744">Red More</a>
								
								
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Food For Life</h3>
								<p>We freely distribute sanctified food to poor people on daily basis in schools and villages of local area and inside temple premises. ISKCON food relief foundation is helping the Government to address the pressing issues of hunger and illiteracy.</p>

								<br>
								<a href="<?=base_url()?>csr/middayMeal-poverty-relief-programs" style="font-size: 14px; font-weight: 800; color: #fc8744">Red More</a>

							</div>
						</div>
					</div>
					<!-- end service item --> 
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		
 
        
		
		<section id="projects" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Our Goals & and Purposes</h2>
						<div class="devider"><i class="fa fa-circle"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-6 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item"> 							
							<div class="service-desc">
								 <ul style="list-style-type: circle">
								 	<li>To systematically propagate spiritual knowledge to society at large and to educate all people in the techniques of spiritual life in order to check the imbalance of values in life and to achieve real unity and peace in the world.</li>
									<li>To bring the members of society closer together for the purpose of teaching a simpler and more natural way of life.</li>
									<li>Digital India: Use of computers, internet, smart phones for the farmers & digitally illiterate.</li>
									<li><b>Swachh Bharat Mission </b>- Cleaning of the Braj villages, drains, toilets and use of safe protective dustbins etc.</li>
									<li><b>Skill India</b>- Indigenous small-scale industries, spiritually productive industries to help the local brajavasis for financial upliftment.</li>
									<li><b>Plantation </b>- Due to deforestation of 12 sacred forests of Braj, plantation is very necessary. (Green India model)</li>
									<li><b>Organic India </b>- Healthy eating, healthier humans. Distribution of Organic seeds to the farmers for healthier food produces.</li>
									<li>Midday Meal Program for school children, Food for life - Prasad distribution to the needy villagers.</li>
								 	<li>Renovation and Preservation of holy places.</li>
								 </ul>
								 <br>
								 <br>
							</div>
						</div>
					</div>
					<!-- end service item -->


					<!-- service item -->
					<div class="col-md-6 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item"> 							
							<div class="service-desc">
								 <ul style="list-style-type: circle">
								 		
								 		<li><b>Women empowerment </b>– Facilitating women to develop different kinds of skills to stand on their own to support their families and society.</li>
								 		<li><b>Child Protection </b>– Special wing is keen on spreading awareness through seminars and presentations on how to take care of the children emotionally, physically and spiritually.</li>
								 		<li>With  a  view  towards  achieving  the  aforementioned  purposes,  publish  and  distribute
periodicals, magazines, books and other writings on regular intervals. </li>
								 		<li><b>ISKCON Tribal Care </b>– We have Special ISKCON Tribal Care wing for giving special attention to the tribal society to assist with education, health, food and employment.</li>
								 		<li><b>Save Yamuna, Save Braja </b>– Stop contamination of major water bodies of Braj Dham</li>
								 		<li><b>Cow Protection </b>– Special attention is given for cow protection to protect and nurture spiritual values of non-violence and mercy.</li>
								 		<li><b>Environmental Protection </b>–To protect holy places like Vrindavan/Braj and others against
pollution of plastic, by preaching and educating on troubles created by usage of plastic.</li>
								 	 
								 </ul>
								 <br>
								 <br>
							</div>
						</div>
					</div>
					<!-- end service item -->

				 

					
					<!-- <div class="sec-sub-title">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
					</div> -->
					
					<!-- <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".branding" class="filter">Delhi</a></li>
							<li><a href="javascript:;" data-filter=".web" class="filter">Mumbai</a></li>
							<li><a href="javascript:;" data-filter=".logo-design" class="filter">Other</a></li>
						</ul>
					</div> -->
					
				</div>
			</div>
			
			<div class="project-wrapper">
				<!-- <div class="container">
					<div class="row"> -->
			
				<figure class="mix work-item branding">
					<img src="<?= base_url()?>assets/img/works/item-1.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Deity Worship</h4>
						<p> The Krishna Balaram Temple is famous all over the world for its spectacular deity worship.</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="<?= base_url()?>assets/img/works/item-2.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Goshalam</h4>
						<p>, we are trying to serve the noble cause of cow protection in a humble way; Cows, Bulls and Calves are looked after with great care and love</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="<?= base_url()?>assets/img/works/item-3.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Srila Prabhupada Samadhi</h4>
						<p>From 1965 to 1977, Srila Prabhupada toured the world 14 times, establishing 108 ISKCON centers in his lifetime.  He continued to travel,</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="<?= base_url()?>assets/img/works/item-4.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Srila Prabhupada House</h4>
						<p>When you visit the Krishna Balaram Mandir, you will find behind the temple a small residence</p>
					</figcaption>
				</figure>
			
				<figure class="mix work-item branding">
					<img src="<?= base_url()?>assets/img/works/item-5.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>24Hours Kirtan</h4>
						<p>The Krisna-Balaram Mandir 24 Hour Kirtana Mandal was inaugurated and is sustained by the express will of ISKCON’s</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="<?= base_url()?>assets/img/works/item-6.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Book Distribution</h4>
						<p>DISTRUBUTION OF THE TRESURE – SANKIRTAN DEPARTMENT ♦ The Sankirtan Department at ISKCON Vrindavan</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="<?= base_url()?>assets/img/works/item-7.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Life Membership</h4>
						<p>The Life patron program is an opportunity to become part of ISKCON’s international family.</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="<?= base_url()?>assets/img/works/item-8.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="<?= base_url()?>assets/img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Community Service Centre</h4>
						<p>Our Mission Statement To create and offer programs and facilities that promote ongoing advancement in: Devotional Service</p>
					</figcaption>
				</figure>
				
			<!-- </div>
		</div> -->
	</div>
		</section>
		
        <!--End Our Works  ==================================== -->







       <!--
        Our Works
        ==================================== -->



            <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                    <div class="row number-counters">
                        
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2>Some Donations Facts</h2>
                            <div class="devider"><i class="fa fa-circle"></i></div>
                        </div>
                        
                    
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item">
                               <img src="<?= base_url()?>assets/img/cow.png" />
                                <strong data-to="3200">0</strong>
                                <p>Goshala Donation</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <img src="<?= base_url()?>assets/img/food-for-life.png">
                                <strong data-to="120">0</strong>
                                <p>Life Membership</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                               <img src="<?= base_url()?>assets/img/deities-worship.png">
                                <strong data-to="360">0</strong>
                                <p> Deity Worship  </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                               <img src="<?= base_url()?>assets/img/book-distrubtion.png">
                                <strong data-to="6454">0</strong>
                                <p>Book Distribution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









		
        <!--        Meet Our Team        ==================================== -	
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Let's Discuss</h2>
						<div class="devider"><i class="fa fa-circle"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
						</p>
						
					</div>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>John Filmr Doe</h4>
						<span>Managing Director</span>
					</figure>


					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/member-2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Martin Matrone</h4>
						<span>Lead Developer</span>
					</figure>


					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/member-3.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Steve Flaulkin</h4>
						<span>Sr. UI Designer</span>
					</figure>

					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>John Filmr Doe</h4>
						<span>Managing Director</span>
					</figure>

					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!-- Some fun facts ==================================== --		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Some Fun Facts</h2>
							<div class="devider"><i class="fa fa-circle"></i></div>
						</div>
						
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="3200">0</strong>
								<p>Hours of Work</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="120">0</strong>
								<p>Satisfied Clients</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="360">0</strong>
								<p> Projects Delivered </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="6454">0</strong>
								<p>Awards Won</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		
		
		<!--
        Contact Us
        ==================================== -->		
		

        <section id="team" class="team">
            <div class="container" style="width: 90%;">
                <div class="row">
        
                    <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                        <h2>Our Team</h2>
                        <div class="devider"><i class="fa fa-circle"></i></div>
                    </div>
                    
                    <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        </p> -->
                        
                    </div>

                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="member-thumb">
                            <img src="<?= base_url()?>assets/img/team/member-1.jpg" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Pancha Gauda Das </h5>
                                <p>ISKCON Vrindavan Temple president,</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Pancha Gauda Das</h4>
                        <span>ISKCON Vrindavan Temple president</span>
                    </figure>


                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="member-thumb">
                            <img src="<?= base_url()?>assets/img/team/saurabh_prabhu.jpg" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>Saurabh Trivikrama Das</h5>
                                <p>Director Communications</p>
                                <ul class="social-links text-center">
                                    <li><a href="https://www.youtube.com/watch?v=8l8OxLJqHkE"><i class="fa fa-youtube fa-lg"></i></a></li>
                                    <li><a href="https://www.facebook.com/SaurabhTrivikramadas/"><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>Saurabh Trivikrama Das</h4>
                        <span>Director Communications</span>
                    </figure>  

                   
<!--
                      <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="member-thumb">
                            <img src="<?= base_url()?>assets/img/team/member-3.png" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>voluptatem quia voluptas </h5>
                                <p>sit aspernatur aut odit aut fugit,</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>HH Lokanath Swami Mahraj</h4>
                        <span>The GBC member</span>
                    </figure>

                    <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="member-thumb">
                            <img src="<?= base_url()?>assets/img/team/member-1.png" alt="Team Member" class="img-responsive">
                            <figcaption class="overlay">
                                <h5>voluptatem quia voluptas </h5>
                                <p>sit aspernatur aut odit aut fugit,</p>
                                <ul class="social-links text-center">
                                    <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <h4>John Filmr Doe</h4>
                        <span>Managing Director</span>
                    </figure>    -->

                    
                </div>
            </div>
        </section>



		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Let’s Discuss</h2>
						<div class="devider"><i class="fa fa-circle"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
				<!-- 		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
				 -->	</div>
					
					<!-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Our Location:</h3>
							<p>ISKCON Vrindavan, Krishna Balaram Temple</p>
							<p>Bhaktivedanta Swami Marg Raman Reti, Vrindavan.</p>
							<p>Uttar Pradesh-281121, India</p>
						</div>
					</div> -->
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">

						<button class="accordion">
							What is the real spirit of Janmashtami ?
						</button>
						<div class="panel">
							<div class="row"> 
								<div class="col-md-9">
									<p>The sun rises in the East each day. Not that it is born that time, but it comes to our relative vision and with each setting, it no longer appears to our vision. My spiritual master, SrilaPrabhupada said that Krishna is within everyone's heart and with the sincerity of our devotion, can appear to us every day. He reciprocates to us according to our desires. <br><br>
									Everyone is looking for pleasure. The question arises that if our ultimate aim is pleasure and if the world is designed to frustrate our attempts to attain pleasure, then what is the hope? Therefore, the Supreme personally descends into this world simply to reveal the way by which we can not only attain true happiness and peace but also perfect our life and go ahead to the eternal spiritual world. <br><br>When Krishna appeared, he appeared in a way to attract us to his sweetness and love rather than his power and grandeur. He appeared as a simple cowherd boy in Vrindavan, just to attract our love. The Gita says that we are infatuated by beautiful people and beautiful things, but the beauty of this world is an infinitesimal spark of the supreme splendour of God. With no monetary gains in return, they make time from their daily routine, to serve – to share our love for Krishna through service is the real spirit of Janmashtami.
							
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/rsm.jpg">
									<strong style="color: red">HH Radhanath Swami Maharaja</strong>
								</div>
							</div>
						  	
						</div>


						<button class="accordion">What is the price to receive Krishna Prem ?</button>
                        <div class="panel">
                        	<div class="row"> 
								<div class="col-md-9">
									<p>There is a verse from the Christian Scriptures -That faith comes from hearing but that the hearing should be the pure word of God. So, we can see that even this is understood in all theistic religions around the world. Faith comes byhearing (Simple, Submissive Hearing). <br><br>We need to hear submissively with an open heart, from someone who has a pure heart and understanding, from the approved scriptures in a systematic continuous manner. If we hear from someone with 100% faith, then our faith can grow to meet that percentage. <br><br>If we hear from those with little or no faith, then how do we expect to grow beyond that limit?
							
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/hhjpsm.jpg">
									<strong style="color: red">HH  JayaPataka Swami Maharaja</strong>
								</div>
							</div>
                        </div>


						<button class="accordion">Our Mind is very flickering, how to engage Mind in the service of the Lord ?</button>
						<div class="panel">
                        	<div class="row"> 
								<div class="col-md-9">
									<p>There is a verse from the Christian Scriptures -That faith comes from hearing but that the hearing should be the pure word of   <p> This is not a new Problem. This is coming from OLD times. <br><br>Even Arjuna also asked this in Bhagavad Gita. Mind is Flickering. Then what is above mind is Intelligence. With the help of intelligence we should control mind. Let the mind flicker but we take to chanting the holy names. It is not that let the mind first become stable and then I will chant. <br><br>Whole life will go away without chanting the holy name. we go on chanting and slowly mind will come under control. 
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/gkm.jpg">
									<strong style="color: red">HH Gopal Krishna Goswami Maharaja.</strong>
								</div>
							</div>
                        </div>


						<button class="accordion">Krishna consciousness is the solution of all problems? And what is the proof ?</button>
						  <div class="panel">
                        	<div class="row"> 
								<div class="col-md-9">
									<p>The root cause of all our problems is our forgetfulness of Krishna. It is due to our forgetfulness of Krishna that we fall into this material nature and become subjected to the three-fold miseries. <br><br>But when we become Krishna Consciousness and re-establish our relationship with Krishna, then we develop our natural constitutional position of eternal life, absolute knowledge and bliss. In that state of existence, there cannot possibly be any problem. <br><br>As far as the proof is concerned, just ask yourself whether all your problems have been solved since you accepted Krishna Consciousness. And you can also consider, if at all you have any problems, whether it is due to your Krishna Consciousness or lack of it.
							
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/hhbcs.jpg">
									<strong style="color: red">HH  Bhakti charu Swami Maharaja</strong>
								</div>
							</div>
                        </div>



                        <button class="accordion">Arjuna at first was not prepared to fight war with kaurava's but why did he fight the war later ?</button>
                          <div class="panel">
                        	<div class="row"> 
								<div class="col-md-9">
									<p> Yes, so we hear Arjuna speaks at the beginning of Bhagvatgita first chapter, we kind of agree – it makes sense. Arjuna was also thinking he was confident and he was expecting that soon Krishna would say yes yes you are right Arjuna, there is no need to fight. Morning time just have breakfast (laughter) you don't have to fight. So Arjuna was expecting also Krishna responding like that he was not willing to fight and Krishna would agree yes yes you don't have to fight.<br><br>

									 Some of those talks and thoughts of Arjuna they fit into dharmic principles, sounds like dharma. Principles of morality and kula dharma, this dharma that dharma. But if that comes in the way of executing the will of the Lord, mission of the Lord then it should be abandoned, should be given up. That is “sarvadhramanparityajya mam ekamsaranamvraja” The war was the will of the Lord; Krishna is behind the battle Arjuna was not able to see. This battle was going to serve the purpose of Lord's mission, Lord's advent into this world “dharma samsthapanarthayasambhavamiyugeyuge” (B.G 4.8)<br><br> so how is He going to do that? “paritranayasadhanamvinasaya ca duskrtam” I will annihilate the miscreants. This battle field forum provided whole sale opportunity let all the demons come out kill them. So some higher purpose Krishna's purpose was going to be served by battling, fighting. There is some higher principle.
							
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/hhlsm.jpg">
									<strong style="color: red">HH  LokanathSawmi Maharaja</strong>
								</div>
							</div>
                        </div> 


                        <button class="accordion">What is the color of the forms of Krishna in Satya yuga, in Tretayuga, in Dvapara yuga and in Kali yuga ?</button>
						<div class="panel">
                        	<div class="row"> 
								<div class="col-md-9">
									<p>He said kritamtretadvaparamcakalirityeshukesavah (SB 11.5.20) There are four yugas – Satya yuga, Tretayuga, Dvapara yuga and Kali yuga and eshu in these ages Kesava is worshipped. Lord Kesava who is controller of Lord Brahma and Lord Siva, He is called Kesava. He is worshiped in all ages but in every age He is worshipped with different names, different process, different complexion and form. Everything different.<br><br> In Kaliyuga Krishna will appear krishna- varnam always He will describe Krishna, He will chant Krishna’s names but in complexion He is not Krishna, krishna-varnamtvisha ‘akrishnam’. <br><br>He is not Krishna, He is Gaura. He is not black, His complexion is not blackish. Everyone knows that Gaura is Krishna, syama but in Kaliyuga Krishna will appear but not in blackish form. Trit (?) means kanti, His kanti in Kaliyuga will be akrishna. Akrishna means Gaura or golden. So, this verse directly describes CaitanyaMahaprabhu.
							
							</p>
								</div>
								<div class="col-md-3" align="center">
									<img src="<?=base_url()?>assets/resources/questionanswer/hhrggm.jpg">
									<strong style="color: red">H.H. Radha Govinda Goswami Maharaja.</strong>
								</div>
							</div>
                        </div> 
 

							<!-- <h3>Say hello!</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="Send message">
								</div>
							</form> -->



						</div>
					</div>
					<!-- end contact form -->
					
					<!-- footer social links -->
					<!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div> -->
					<!-- end footer social links -->
					
				</div>
			</div>
			
			<!-- Google map 
			<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
			<!-- End Google map -->
			
		</section>
		
        <!--
        End Contact Us
        ==================================== -->
		
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="<?= base_url()?>assets/img/footer-log.png" alt=""><br>
							<p>ISKCON, This grand temple represents the fulfilled dream of Srila Prabhupada, Founder Acharya of ISKCON,</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							 <?php if($this->session->flashdata('message')){ ?>
                                <div style="color: green"> <?= $this->session->flashdata('message') ?></div>

                            <?php } ?>

							<form action="<?= base_url('subscribe')?>" class="subscribe" method="post">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form> 
    						    <div class="row">
    						        <div class="footer-single">
							        <h6>Social Media Link </h6>
    						        <div class="col-md-3">
    						            <a href="https://www.facebook.com/iskconvrindavann"><i class="fa fa-facebook fa-2x"></i></a>
    						        </div>
    						        <div class="col-md-3">
    						            <a href="https://twitter.com/vrindavantv"><i class="fa fa-twitter fa-2x"></i></a>
    						        </div>
    						        <div class="col-md-3">
    						            <a href="https://www.youtube.com/user/ivtv108"><i class="fa fa-youtube fa-2x"></i></a>
    						        </div>
    						        <div class="col-md-3">
    						            <a href="https://www.instagram.com/iskcon_vrindavan/"><i class="fa fa-instagram fa-2x"></i></a>
    						        </div>
    						        
    						        
    						        </div>
    						    </div> 
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>

								<li><a href="http://vrindavan.tv/" target="_new">Vrindavan TV</a></li>
								<li><a href="http://gomatabliss.org/">Gomata Bliss</a></li>
								<li><a href="http://vrindavandarshan.in/">Vrindavan Darshan</a></li>
								<li><a href="http://goshala.com/">Goshala</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="https://aravali.serverforhost.com:2096/">Webmail</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Pressroom</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2015 <a href="http://supperserver.com/">supperserver</a>. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-down fa-4x" style="color: #fc8744;"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->

	

        <script src="<?= base_url()?>assets/js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?= base_url()?>assets/js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?= base_url()?>assets/js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="<?= base_url()?>assets/js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="<?= base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="<?= base_url()?>assets/js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="<?= base_url()?>assets/js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->
		<!-- jquery easing -->
        <script src="<?= base_url()?>assets/js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="<?= base_url()?>assets/js/wow.min.js"></script>

       
       <?php if($stoppup == 2) { ?>
       
         <script type="text/javascript">
			$(document).ready(function(){
				$("#myModal").modal('show');
			});
		</script>
		
		<?php } ?>


			<script>
        var slideIndex = 1;
        //showDivs(slideIndex);
        carousel();

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > x.length) {slideIndex = 1}
          x[slideIndex-1].style.display = "block";
          setTimeout(carousel, 5000); // Change image every 5 seconds
        }
        </script>



		
 
 

		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->

		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.display === "block") {
			      panel.style.display = "none";
			    } else {
			      panel.style.display = "block";
			    }
			  });
			}
		</script>


        <script src="<?= base_url()?>assets/js/custom.js"></script>
		
	<!-- 	<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script> -->
    </body>
</html>
