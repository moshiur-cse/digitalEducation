<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Digital Education</title>
	<link rel="favicon" href="images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css"> 
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
	<script type='text/javascript' src='js/jquery-3.1.1.min.js'></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="Techro HTML5 template"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right mainNav">
						<li id="a" ><a  onClick="Animate2id('#box1');" href="index">Home</a></li>
						<li ><a onClick="Animate2id('#box2');" href="about">About</a></li>
						<li><a href="courses">Courses</a></li>
						<li><a href="price">Price</a></li>
						<li><a href="videos">Videos</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sidebar-right">Right Sidebar</a></li>
								<li><a href="#">Dummy Link1</a></li>
								<li><a href="#">Dummy Link2</a></li>
								<li><a href="#">Dummy Link3</a></li>
							</ul>
						</li>
						<li><a href="contacts">Contact</a></li>
						<li><a href="signin">Sign in</a></li>

					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>

		<!-- /.navbar -->

@yield('body')
		<footer id="footer">

			<div class="container">
				<div class="row">
					<div class="footerbottom">
						<div class="col-md-3 col-sm-6">
							<div class="footerwidget">
								<h4>
									Course Categories
								</h4>
								<div class="menu-course">
									<ul class="menu">
										<li><a href="#">
											List of Technology 
										</a>
									</li>
									<li><a href="#">
										List of Business
									</a>
								</li>
								<li><a href="#">
									List of Photography
								</a>
							</li>
							<li><a href="#">
								List of Language
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="footerwidget">
				<h4>
					Products Categories
				</h4>
				<div class="menu-course">
					<ul class="menu">
						<li> <a href="#">
							Individual Plans  </a>
						</li>
						<li><a href="#">
							Business Plans
						</a>
					</li>
					<li><a href="#">
						Free Trial
					</a>
				</li>
				<li><a href="#">
					Academic
				</a>
			</li>
		</ul>
	</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
	<div class="footerwidget">
		<h4>
			Browse by Categories
		</h4>
		<div class="menu-course">
			<ul class="menu">
				<li><a href="#">
					All Courses
				</a>
			</li>
			<li> <a href="#">
				All Instructors
			</a>
		</li>
		<li><a href="#">
			All Members
		</a>
	</li>
	<li>
		<a href="#">
			All Groups
		</a>
	</li>
</ul>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6"> 
	<div class="footerwidget"> 
		<h4>Contact</h4> 
		<p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
		<div class="contact-info"> 
			<i class="fa fa-map-marker"></i> Kerniles 416  - United Kingdom<br>
			<i class="fa fa-phone"></i>+00 123 156 711 <br>
			<i class="fa fa-envelope-o"></i> youremail@email.com
		</div> 
	</div><!-- end widget --> 
</div>
</div>
</div>
<div class="social text-center">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-dribbble"></i></a>
	<a href="#"><i class="fa fa-flickr"></i></a>
	<a href="#"><i class="fa fa-github"></i></a>
</div>

<div class="clear"></div>
<!--CLEAR FLOATS-->
</div>
<div class="footer2">
	<div class="container">
		<div class="row">

			<div class="col-md-6 panel">
				<div class="panel-body">
					<p class="simplenav">
						<a href="index">Home</a> | 
						<a href="about">About</a> |
						<a href="courses">Courses</a> |
						<a href="price">Price</a> |
						<a href="videos">Videos</a> |
						<a href="contact">Contact</a>
					</p>
				</div>
			</div>

			<div class="col-md-6 panel">
				<div class="panel-body">
					<p class="text-right">
						Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
					</p>
				</div>
			</div>

		</div>
		<!-- /row of panels -->
	</div>
</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="js/modernizr-latest.js"></script> 
<script type='text/javascript' src='js/jquery.min.js'></script>

<script type='text/javascript' src='js/fancybox/jquery.fancybox.pack.js'></script>

<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/camera.min.js'></script> 
<script src="js/bootstrap.min.js"></script> 

<script src="js/custom.js"></script>

 <script type="text/javascript">

   $(document).ready(function() {
         //alert("OK");
         $('#a').addClass('active');
     });

  jQuery(function(){
   jQuery('#camera_wrap_4').camera({
    transPeriod: 500,
    time: 3000,
    height: '600',
    loader: 'false',
    pagination: true,
    thumbnails: false,
    hover: false,
    playPause: false,
    navigation: false,
    opacityOnGrid: false,
    imagePath: 'images/'
  });

 });
  
</script>
<script type="text/javascript">       
	function Animate2id(id){ 
    //alert("OK");
    $('#a').removeClass('active');
    $(this).addClass('active');
   /* var animSpeed=2000; 
    var $container=$("#container"); 
    if(ease){ 
        var easeType=ease;
    } else {
        var easeType="easeOutQuart"; 
    }
    $container.stop().animate({"left": -($(id).position().left)}, animSpeed, easeType);*/
}
</script>
</body>
</html>