<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Taraana</title>

    <!-- Bootstrap -->
    <link href="lib/css/bootstrap.css" rel="stylesheet"/>
    <link href="lib/css/custom.css" rel="stylesheet"/>
	<link href="lib/css/colorbox.css" rel="stylesheet"/>
    <link href="lib/img/favicon.ico" rel="shortcut icon"/>
   
	<script src="lib/js/jquery-1.11.0.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
	<script src="lib/js/main.js"></script>
	<script src="lib/js/jquery.simplemodal.js"></script>
	<script type='text/javascript' src='lib/js/basic.js'></script>
	<script src="lib/js/move.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.logo{
			position: absolute;
			top: 74%;
			left: 41%;
		}
		.top-nav{position:relative}
	
 body{
	 overflow:hidden;
 }
 
  .appicon01
        {
            background: url(../img/appicon/01.png);
        }
        .appicon02
        {
            background: url(../img/appicon/02.png);
        }
        .appicon03
        {
            background: url(../img/appicon/03.png);
        }
        .appicon01, .appicon02, .appicon03
        {
        	display: block;
            position: absolute;
            width: 160px;
            height: 150px;
        }
        .appicon01:hover, .appicon02:hover, .appicon03:hover
        {
            text-decoration: none;
        }
        .appiconcb
        {
            position: absolute;
            left: 0px;
            bottom: 10px;
            width: 160px;
            height: 25px;
        }
        .appiconc
        {
            position: absolute;
            left: 0px;
            bottom: 10px;
        	text-align: center;
            width: 160px;
            height: 25px;
            line-height:25px;
            font-family: Verdana, Arial;
        	color: #fff;
        	font-size:14px;
        	text-decoration:none;
        }
        .appicon01:hover .appiconcb, .appicon02:hover .appiconcb, .appicon03:hover .appiconcb
        {
            background-color: #fff;
            filter: alpha(opacity=30);
            opacity: .3;
        }
        .appicon01:hover .appiconc, .appicon02:hover .appiconc, .appicon03:hover .appiconc
        {
        	color: #000;
        }
		
		
#basic-modal-content{display:none;overflow:hidden;}
#simplemodal-overlay{background:url(lib/img/overlay.png);}
#simplemodal-container{height:345px !important;width:600px;color:#bbb;background-color:#FFF;border:4px solid #681B51;padding:0px;}
#simplemodal-container .simplemodal-data{padding:0px;}
#simplemodal-container code{background:#FFF;border-left:3px solid #65B43D;color:#bbb;display:block;font-size:12px;overflow:hidden;}
#simplemodal-container a{color:#ddd;}
#simplemodal-container a:hover{color:#666;text-decoration:underline;}
#simplemodal-container a.modalCloseImg{background:url(lib/img/x2.png) no-repeat;width:25px;height:29px;display:inline;z-index:3200;position:absolute;top:0px;right:0px;cursor:pointer;}
#simplemodal-container h3{color:#84b8d9;}
.simplemodal-wrap{height:auto !important;}
video{width:100%;height:100%;}

.mobile_youtube{
		display:none;
	}
	.head1{
		   position: absolute;    left: 39%;    top: 19%;
	}
 @media screen and (max-width:500px){
	.mobile_youtube{
		display:block;
	}
	.youtube_sys{
		display:none;
	}
	#simplemodal-container a.modalCloseImg {
    background: url(lib/img/x2.png) no-repeat;
    width: 25px;
    height: 29px;
    display: inline;
    z-index: 3200;
    position: absolute;
    top: -30px;
    right: 0px;
    cursor: pointer;
}
	 #simplemodal-container {
    height: 345px !important;
    width: 300px !important;
    color: #bbb;
    background-color: #FFF;
    border: 4px solid #681B51;
    padding: 0px;
}
.container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
    margin-right: -37px;
    margin-left: -15px;
}
.head1 {
    position: absolute;
    left: 30%;
    top: 3%;
}
 }
 
	</style>
	
  </head>
  <body>
  <div id="preloader">
    <div id="status"><span class="emblem pulse-active"></span></div>
</div>
<!--// [END] Preloader //--> 
     <!--// [BEGIN] HOME //--> 
<div id="basic-modal-content" class="video" style="overflow:hidden;">
<!--<video id="demo1" class="video" loop>
      <source src="lib/video.mp4" type="video/mp4">
      <source src="lib/video.ogv" type="video/ogg">
	 
</video>-->
<!--<img src="lib/pop.jpg"/>-->
 <iframe class="play youtube_sys" width="608" height="337" src="https://www.youtube.com/embed/naM3uf2UOTY?autoplay=1" frameborder="0" allowfullscreen></iframe>
 <iframe class="play mobile_youtube" width="308" height="337" src="https://www.youtube.com/embed/naM3uf2UOTY?autoplay=1" frameborder="0" allowfullscreen></iframe>
<!--<input type="button" value="" id="btn1">-->

</div>
  
  
  <section class="loading height width" id="load" style="position:fixed;z-index:10;">
  <div class="container height" style="position:relative">
  <div class="load-slider">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-6" >
				<?php require_once "loading-slider.php" ?>
			</div>
			<div class="col-xs-offset-3 col-xs-8 col-sm-offset-5 col-sm-6 col-md-offset-5" >
			<img src="lib/img/icon.png"/>
			</div>
		</div>
		
	</div>
  </div>
  <div class="arrow" style="display:none">
<a href="#index" class="arrow-down"><img src="lib/img/down-arrow.png" alt="taraana"></a>
		</div>
  </div>
  </section>
	<section class="index-bg height width " id="home" style="position:relative;">
	<header>
		<nav class="navbar navbar-default desktop" style="display:none;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=" top-nav" id="bs-example-navbar-collapse-3">
	<div class="container">
	<div class="col-sm-5 text-center">
      <ul class="nav navbar-nav">
        <li><a href="#home">Home</a></li>
		<li><a href="#about">About Us</a></li>
		<li><a href="#biography">Biography</a></li>
        
      </ul>
	  </div>
      <!--<ul class="nav navbar-nav">
		<li><a href="#"><img src="lib/img/logo-new.png" alt="taraana" class="img-responsive"></a></li>
	  </ul>-->
	  <div class="col-sm-2" style="margin-top:-2%;padding:0px;">
		<a href="#index"><img src="lib/img/logo.png" alt="taraana" class="img-responsive"></a>
	  </div>
	  <div class="col-sm-5 text-center">
      <ul class="nav navbar-nav">
        <li><a href="#courses">Courses</a></li>
		<li><a href="#gallery">Gallery</a></li>
		<li><a href="#contact">Contact Us</a></li>
      </ul>
	  </div>
	 </div>
    </div><!-- /.navbar-collapse -->
	<!--<div class="logo">
	<a href="#"><img src="lib/img/logo-new.png" alt="taraana" class="img-responsive"></a>
</div>-->
  </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default nav-mobile "style="width:630px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header navhead-mobile">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#index"><img src="lib/img/logo-mobile.png" alt="taraana"  style="margin-top: -30px;
  margin-left: 31px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: #4B102F;opacity: 0.8;" >
      <ul class="nav navbar-nav list-unstyled mobile">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#about">About Us</a></li>
        <li class="link"><a href="#biography">Biography</a></li>
        <li class="link"><a href="#courses">Courses</a></li>
        <li class="link"><a href="#gallery">Gallery</a></li>
        <li class="link"><a href="#contact">Contact Us</a></li>											
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	</header>
	</section>
	<section class=" background height width home" id="about" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				         <h2 align="center" class="head1" style="">about us</h2>
					<div class="scroll">
					
						<p class="text-justify">Taraana Academy Of Kathak Dance, A Chennai based organization works towards 
insinuating the practice, understanding and appreciation of Kathak.</p>
<p class="text-justify">Built on an aim to promote this classical dance form in a social and educational 

context, Taraana strives to develop a systematic and structural dance and 

educational training programme under the guidance of Shritha Baskar, a Kathak 

danceuse and the artistic director at Taraana.</p>
						<p class="text-justify"> Training sessions in classical and contemporary Kathak are held by Taraana

Academy under the direction of Shritha Baskar at GeeGee Emerald Complex, 

Nungambakkam, Chennai.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-3"></div>
			</div>
		</div>
	</section>
	<section class="background width about" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 box no-padding">
					<img src="lib/img/about-banner.jpg" alt="taraana" class="img-responsive">
					<p class="abt">Taraana was founded in 2013 by artistic director and Kathak danceuse – Shritha 

Baskar , along with her mother and business head – Vasantha Baskar.  A joint 

vision – Taraana – was born out of a Skype conversation with the rest of the 

family.</p>
					<p class="abt"> Taraana has evolved into a premier Kathak Academy catering to over students of 

differing backgrounds ages ranging from 6 to 60. The dance academy offers 40 

group lessons a week in their state of the art studio in Nungambakkam.</p>
					<p class="abt"> They also offer  intensive one on one training sessions to focus on the students’ 

individual requirements.</p>
					<p class="abt"> At Taraana, we strongly believe, that a strong dancer is created in the studio and 

star performer is born onstage.</p>
					<p class="abt"> Taraana Academy is really commited to including differently-abled or the under 

privileged persons in our student population. It is one of the few Kathak academies 

in Chennai to focus on classical dance as a form of therapy and facilitates yoga 

dance and meditation sessions.</p>
					<p class="abt">Through training sessions, workshops and events, Taraana Academy is trying to

build a discerning network of art-lovers in Chennai ; making training in Kathak 

available to ALL keen learners in the city.</p>
				</div>
				<div class="col-xs-12 col-sm-2"></div>
			</div>
		</div>
	 </section>
	 <section class="background  width" id="biography">
		<div class="container">
			<div class="row">
			    
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 box bio">
				 <h2 align="center" class="head">Biography</h2>
					<h1>SHRITHA BASKAR</h1>
					<div class="col-xs-12 col-sm-8">
					<p>Shritha Baskar is a  Kathak danseuse born and brought up in Dubai. She began

training at the tender age of five under Guru Smt. Ketaki Hazra, who herself is a 

disciple of Smt. Bela Arnab. Being trained in the Jaipur and Lucknow Gharana of 

Kathak, Shritha had earned herself a Senior Diploma in Kathak Dance  from the 

Surabharati Sangeet Parishad, Kolkata, at the age of seventeen.</p>
					<p>She has several performances to her credit in Dubai which include regular recitals

for the Diplomatic Corps of various countries, the Indian Embassy and the Festival 

of India around regions of the Arabian Gulf.</p>
					<p>In addition to her regular performances and schooling, Shritha simultaneously took 

pleasure in teaching Kathak and contemporary dance to the students of the ‘Dubai 

Centre for Special Needs’ and ‘Special Needs Families’ for three consecutive 

summers.  Her work with the differently-abled has gained her many more 

accolades in the United Arab Emirates.</p>
					<p>Moving to Chennai in 2011 only made it more opportune for Shritha to attend 

workshops conducted by Pandit Birju Maharaj and Saswati Sen in Delhi. 

Performing for the annual Indo-Korea trade meet is just one of her many 

performances in Chennai. Adept in both Nrtta and Abhinaya, Shritha’s 

performances have been well lauded.</p>
					<!--<p>In addition, Shritha also happens to be a very regular face on dozens of television commercials on all Indian national Television channels. Besides currently pursuing her under graduation in Psychology, her immense passion for performing arts has been instrumental in her establishing - ‘Taraana Academy of Kathak Dance’ in Chennai. The chief aspiration behind launching the dance academy is to primarily popularize this dance form in Chennai and make it available to keen learners in the city. </p>

					<p>Without a doubt, Shritha is a focused, keen and fervent dancer in the reckoning.</p>-->
					</div>
					<div class="col-xs-12 col-sm-4">
						<img src="lib/img/shritha.png" alt="taraana" class="img-responsive">
					</div>
				</div>
				<div class="col-xs-12 col-sm-2"></div>
			</div>
		</div>
	 </section>
	  <section class="background  width" id="courses">
		<div class="container">
			<div class="row">
			  
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 box no-padding bio ">
				     	   <h2 align="center" class="head">Courses</h2>
					<img src="lib/img/courses-banner.jpg" alt="taraana" class="img-responsive">
					<div class="row class abt">
					<div class="col-xs-12 col-sm-4">
						<h2 class="left">Classes</h2>
					</div>
					<div class="col-xs-12 col-sm-8 bor-left">
						<p>All training sessions in classical and contemporary Kathak are held by Taraana 

Academy under the direction of Shritha Baskar in Nungambakkam. Taraana offers 

dance programmes from a wider perspective; personalised dance training 

according the needs of its students.</p>
                          <p>Dance can be used to:</p>
						<ul>
							<li>Improve  body language</li>
							<li>Destress</li>
							<li>Develop flexibility</li>
							<li>Improve posture and alignment of body.</li>
							<li>Understand the proper execution of Laya and Taal.</li>
							<li>Perform on stage in front of audiences; building confidence and self expression.</li>
						</ul>
					</div>
					</div>
					<div class="row class abt">
					<div class="col-xs-12 col-sm-4 elgi">
						<h2 class="left">Eligibility</h2>
					</div>
					<div class="col-xs-12 col-sm-8 left bor-right">
						<p>There is no restriction on age. People of any age can join these programmes.

Similarly we don’t put conditions like prior knowledge of dance. Beginners as well 

as the experienced can join these programmes.</p>
						
					</div>
					<div class="col-xs-12 col-sm-4 elgib" style="display:none;">
						<h2>Eligibility</h2>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2"></div>
			</div>
		</div>
	 </section>
	 <section class="background  height width" id="gallery">
	 <div class="container">
			<div class="row">
		
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 box no-padding bio">
				     		   <h2 align="center" class="head">Gallery</h2>  
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-8 slide" style="">
							<?php require_once "slider1.php" ?>
						</div>
						<div class="col-xs-12 col-md-2"></div>
					</div>
					
				</div>
				<div class="col-sm-2"></div>
			</div>
	</div>
		
	 </section>
	 <section class="background width" id="contact">
		<div class="container">
			<div class="row">
			
				<div class="col-xs-12 col-sm-offset-2 col-sm-8 box no-padding bio peacock">
				   	     <h2 align="center" class="head">Contact</h2>
					<div class="bg">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.5605698904074!2d80.2461983!3d13.0636193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666f610c5cf9%3A0xd6e6199dfa1945be!2sTaraana+Academy+Of+Kathak!5e0!3m2!1sen!2sin!4v1429859926103" width="100%" height="254" frameborder="0" style="border:0"></iframe>
					</div>
					<div class="row bio">
						<div class="col-xs-12 col-sm-6 left1 left-mob">
						  <div class="enquiry">
							<h2>Enquiry</h2>
							<form  id="contact-form" action="" method="post" data-validate="parsley">
							  <div class="form-group">
								
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" required>
							  </div>
							  <div class="form-group">
								
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
							  </div>
							  <div class="form-group">
								
								<input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Number" name="phone" minlength="10" maxlength="11" required>
							  </div>	
								<div class="form-group">
									<textarea class="form-control" rows="3" placeholder="Message" name="message" required></textarea>
								</div>							  
							  <input type="submit" class="btn btn-default" placeholder="Submit">
							</form>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 left-mob">
							<h2>Address</h2>
							<address>
								<p>Taraana Academy Of Kathak Dance,Chennai</p>
								<p> Studio 22, 3rd floor, GeeGee Emerald Complex,</p>
								<p>Nungambakkam, Chennai, 600034</p>
								<p style="visibility:hidden">v</p>
								<p style="visibility:hidden">v</p>
								<p style="visibility:hidden">v</p>
								<p>Tel: 044- 4312 9199</p>
								<p>Mobile: +91 95000 81900, +91 96298 72833</p>
								<p>Email:shritha@taraanaacademy.in</p>
								<p>contact@taraanaacademy.in</p>
							</address>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-2"></div>
			</div>
		</div>
		<div class="container-fluid">
			<p style="font-size: 15px;text-align: right;padding-right: 30px;">Designed & Developed by <a href="http://www.ummstudios.com/" target="blank">UMM</a></p>
		</div>
	 </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="lib/js/parsley.js"/>
	  <!--<script src="lib/js/jquery-1.11.0.min.js">-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->


	<script>
	
	$(function() {
    $('.link a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });
	
});
	</script>
	<script type="text/javascript">
	$('#contact-form').submit(function(e) 
		{
			
			
				if ( $(this).parsley('validate'))
				{
					
								var values = $(this).serialize();
								$.ajax({
								url: "includes/contact-handler.php",
								type: "post",
								data: values,
								success: function(msg){
								    alert("Thank you. One of our representative will call you back!!");
								//alert(msg);
								$('form').each(function(){
								   this.reset();
								});
								},
								error:function(){
								//alert("Thank you. One of our representative will call you back!!");
								$('form').each(function(){
									this.reset();
								});
								}
								});	
					}		
			else{}
			e.preventDefault();
		});
		
		
</script>
<script>
$(document).ready(function(e) {
	$('.simplemodal-close').click(function(){
		$('.play').remove();
	})
});
</script>
  </body>
</html>