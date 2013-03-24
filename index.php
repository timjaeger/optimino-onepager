<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/', trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'contact@optimino.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Optimino Website <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Optimino</title>
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!--[if !IE]>-->
  <link rel="stylesheet/less" type="text/css" href="css/scale.less" />
  <!--<![endif]-->
  <link rel="stylesheet/less" type="text/css" href="css/optimino.less" />
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" href="css/ie8.css" />
  <![endif]-->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script src="js/libs/jquery-1.9.1.min.js"></script>
  <script src="js/libs/waypoints.min.js"></script>
  <script src="js/libs/less-1.3.3.min.js" type="text/javascript"></script>
  <script src="js/libs/selectnav.min.js" type="text/javascript"></script>
  <script src="js/libs/jquery-scrolltofixed-min.js" type="text/javascript"></script>
  <script src="js/libs/respond.min.js" type="text/javascript"></script>
  <script src="js/libs/jquery.smooth-scroll.min.js" type="text/javascript"></script>
  <script src="js/libs/jquery.lazyload.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Serif:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
</head>
<body>	
  	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	
  <article>
	<div id="fixed-header">
		<a href="#nav-wrapper">
			<img src="img/optimino-logo.png" class="optimino-logo" />
		</a>
		<span id="header-logos">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.optimino.com" data-text="Optimino - User Experience Strategy &amp; Design" data-via="optimino">Tweet</a>
			<div class="fb-like" data-href="http://www.optimino.com" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
			<div id="header-social">
				<a href="https://twitter.com/optimino" target="_blank"><img src="img/twitter-logo2.png" class="twitter" /></a>
				<a href="#" target="_blank"><img src="img/facebook-logo2.png" class="facebook" /></a>
				<a href="mailto:contact@optimino.com"><img src="img/mail-icon2.png" class="mail" /></a>
			</div>
		</span>
	</div>
	<nav>
		<div id="nav-wrapper">
			<ul id="nav">
				<li class="first"><a href="#services">Services</a></li>
				<li><a href="#clients" class="active">Clients</a></li>
				<li><a href="#software">Software</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div id="company-statement">
		<h2>Optimino is a User Experience Strategy & Design consultancy.</h2><h3>We work with large companies on building and improving their products, platforms, and ecosystems.</h3>
	 <img src="img/grey.gif" data-original="img/wireframe-bg2.jpg" height="300" class="company-img lazy">
	</div>
	<div id="services">
		<div class="container">
			<h4>Our Services</h4>
				<div class="row">
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-ux3.png" /></div>
					<div class="service-description">
						<h5>User Experience (UX) Design</h5>
						<p>We can create and optimize pathwasy for users to accomplish your business goals. Our approach to UX design incorporates both waterfall and agile approaches.</p>
					</div>
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-ia3.png" /></div>
					<div class="service-description">
						<h5>Information Architecture</h5>
						<p>Once we understand your business objectives we can create the Information Architecture (IA) for your product or service, expertly crafting user flows, wireframes, and annotations. These will form the structure for both content and interactions.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-training3.png" /></div>
					<div class="service-description">
						<h5>Agile UX Training</h5>
						<p>We offer Agile UX training to jump-start your organization into one of 'continuous innovation'. Our training will help bring your UXers, developers, visual designers and product managers up to speed with the latest techniques to help you reach maximum efficiency.</p>
					</div>
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-prototype3.png" /></div>
					<div class="service-description">
						<h5>Rapid Prototyping</h5>
						<p>Rapid Prototyping involves getting your ideas into the hands of both actual users and business stakeholders as quickly as possible in order to get feedback. We can create mobile and web-based prototypes that mimic both native and non-native apps for almost any platform - including iPhone, iPad, Android - even console games.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-ui3.png" /></div>
					<div class="service-description">
						<h5>UI and Responsive Design</h5>
						<p>We can create an elegant UI for your application - everything from Metro (flat) style UIs to more complex skeumorphic techniques are all doable.</p>
					</div>
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-userresearch3.png" /></div>
					<div class="service-description">
						<h5>User Research</h5>
						<p>We conduct both online, field, and office-based research to help you understand the usage patterns and pain points of your target user base. We can map their behavior and make recommendations based on our findings.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo lazy" src="img/grey.gif" data-original="img/icon-kpis3.png" /></div>
					<div class="service-description">
						<h5>KPIs / Metrics</h5>
						<p>We use data-driven techniques to monitor and make sense of your metrics - allow us to integrate our findings into your agile or waterfall-based timelines. Using tools such as <strong>Google Analytics</strong>, <strong>Kissmetrics</strong>, and <strong>Chartbeat</strong> give us a strong insight into your product or service.</p>
					</div>
				</div>
		</div>
	</div>
	<div id="logo-top-scrolled"></div>
	<div id="positioning-statement">
		<div class="container">
			<h4>About Us</h4>
    		<h5>We focus exclusively on <span class="focus">UX</span>, <span class="focus">UI</span>, <span class="focus">Prototyping</span>, and <span class="focus">Design</span> so your team can focus on the rest.</h5>
			<div id="why-us">
				<h6>Why choose us</h6>
				<div class="why-us-icon">
					<img class="lazy" src="img/grey.gif" data-original="img/icon-hermes.png" />
					<span class="why-text">We're Fast</span>
					<div class="why-us-description">
						<p>We pride ourselves on being quick to deliver results. Oftentimes the same day as the project starts! We aim to iterate fast and can work with your team's existing tech stack, whether it's Sharepoint, Git, or Dropbox.</p>
					</div>
				</div>
				<div class="why-us-icon">
					<img class="lazy" src="img/grey.gif" data-original="img/icon-chart.png" />
					<span class="why-text">We Measure Everything</span>
					<div class="why-us-description">
						<p>There's an old saying about opinions...we prefer to measure our output and recommendations by your data. Show us usage trends and we can deliver better results that are informed by your data.</p>
					</div>
				</div>
				<div class="why-us-icon last">
					<img class="lazy" src="img/grey.gif" data-original="img/icon-specialized.png" />
					<span class="why-text">We're Specialized</span>
					<div class="why-us-description">
						<p>We are laser-focused on the user experience. Because we are so specialized we can work alongside your marketers, developers, and business analysts to identify areas of improvement for redesign initiatives, weekly sprints, and retainer-based engagements.</p>
					</div>
				</div>
			</div>
			<!-- 
			<p class="sub">Optimino was started by <a href-"#">Timothy Jaeger</a> with one mission: to help large companies create better user engagements through informed product design.</p> -->
			<p class="sub">Write us at <a href="mailto:contact@optimino.com">contact@optimino.com</a> or <a href="#contact">fill in the form below</a>.</p>
		</div>
	</div>
	<div id="clients" class="gradient">
		<div class="container">
			<h4>Companies we've worked with</h4>
			<div id="logos">
				<ul>
					<li><img class="logo lazy" src="img/grey.gif" data-original="img/emc.png" /></li>
					<li><img class="logo lazy" src="img/grey.gif" data-original="img/merrill-lynch.png"></li>
					<li><img class="logo lazy" src="img/grey.gif" data-original="img/aurionpro-logo.png"></li>
					<li><img class="logo lazy" src="img/grey.gif" data-original="img/company-here.png"></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="software">
		<div class="container">
			<h4>Software we regularly use</h4>
			<ul>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/omnigraffle.png" /></div>
					<div class="software-text"><p>Wireframing</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/trello.png" /></div>
					<div class="software-text"><p>Product Management</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/axure.png" /></div>
					<div class="software-text"><p>Prototyping</p></div>
				</li>	
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/jquery.png" /></div>
					<div class="software-text"><p>Development / Prototyping</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/photoshop.png" /></div>
					<div class="software-text"><p>Design</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/google-analytics.png" /></div>
					<div class="software-text"><p>KPI Measurement</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/invision.png" /></div>
					<div class="software-text"><p>Prototyping / Usability</p></div>
				</li>
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/kissmetrics.png" /></div>
					<div class="software-text"><p>KPI Measurement</p></div>
				</li>	
				<li>
					<div class="software-logo"><img class="lazy" src="img/grey.gif" data-original="img/optimal-sort.png" /></div>
					<div class="software-text"><p>Usability Testing</p></div>
				</li>			
			</ul>
		</div>
	</div>
	<div id="contact">
		<div id="contactWrapper" class="container" role="form">
		<h4>Contact</h4>
		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
			<script type="text/javascript">
			
			$('.error').delay(3000).fadeOut("slow");
			
			</script>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p>Email Successfully Sent! We'll be in touch shortly!</p>
			</div>
			<script type="text/javascript">
			
			$('.success').delay(3000).fadeOut("slow");
			
			</script>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" id="contactform">
			<div class="stage clear">
				<label for="name">Name: </label>
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="email">Email: </label>
				<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="subject">Subject:</label>
				<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="message">Message:</label>
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
			</div>
								
			<p class="requiredNote">All fields are required.</p>
			
			<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
		</form>
		<div id="where-we-are">
			<h3>We are...</h3>
			<div class="sidebar">
				<img class="lazy" src="img/grey.gif" data-original="img/clock.png" />
			</div>
			<div class="main-text">
				<p>45 minutes away from <span>New York City</span>, most parts of <span>New Jersey</span>, and <span>Philadelphia</span>.</p>
			</div>
			<div class="clear"></div>
			<div class="sidebar">
				<img class="lazy" src="img/grey.gif" data-original="img/phone.png" />
			</div>
			<div class="main-text">
				<p>Reachable by phone: <span>888-888-8888</span></p>
			</div>
			<div class="clear"></div>
			<div class="sidebar">
				<img class="lazy" src="img/grey.gif" data-original="img/skype.png" />
			</div>
			<div class="main-text">
				<p>On Skype - talk with us at <span>optimino</span></p>
			</div>
		</div>
		</div>
	</div>
  </article>
  <footer>
	<p>(c) 2013 Optimino LLC. All rights reserved. Get in touch with us: <a href="mailto:contact@optimino.com">contact@optimino.com</a></p>
  </footer>
  <script type="text/javascript">
	$(document).ready(function() {
		
		$(window).scroll(function() {
		    var y_scroll_pos = window.pageYOffset;
		    var scroll_pos_test = 150;             // set to whatever you want it to be

		    if(y_scroll_pos > scroll_pos_test) {
		        $("#fixed-header").waypoint(function(){
				    $(this).fadeIn(750);
				});
		    }
			
		});
		
		$('#fixed-header').scrollToFixed();
		
		$('#nav-wrapper a').smoothScroll(1000);
		
		// lazy load all images
		$("img.lazy").lazyload({
			effect       : "fadeIn"
		});
		
		$('nav').prev().css('height', '57');
		
		// validate signup form on keyup and submit
		var validator = $("#contactform").validate({
			rules: {
				contactname: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true,
					minlength: 2
				},
				message: {
					required: true,
					minlength: 10
				}
			},
			messages: {
				contactname: {
					required: "Please enter your name",
					minlength: jQuery.format("Your name needs to be at least {0} characters")
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
				subject: {
					required: "You need to enter a subject!",
					minlength: jQuery.format("Enter at least {0} characters")
				},
				message: {
					required: "You need to enter a message!",
					minlength: jQuery.format("Enter at least {0} characters")
				}
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				label.addClass("checked");
			}
		});
		
		//$('#fixed-header').waypoint('sticky');
		
		/*
		
		$("#fixed-header").waypoint(function(){
		    $(this).waypoint('sticky');
		},{
		    offset: 'bottom-in-view'
		});
		*/
		
	});
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <script src="js/scripts.js"></script>
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<script>selectnav('nav'); </script>
</body>
</html>