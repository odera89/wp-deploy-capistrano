<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kwik Kar</title>
    <?php wp_head()?>
</head>
<body>
	
<!-- Header -->
<div class = "header">
	<nav class="navbar navbar-default navbar-fixed-top" id = "navbar">
       	
	      <div class="container-fluid">
	        
	        	<div id="navigation" class = "navigation">
			    	<div class = "row navheader">
			             
						<button type="button" class="navbar-toggle col-sm-1 col-xs-1" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					    <div class = "col-sm-3 col-md-offset-2 col-xs-5">
							<a class="navbar-brand logo" href="#"><img class = "image-responsive" src="<?php echo get_template_directory_uri()?>/img/logo.png"/></a>
						</div>
						<div class = "navheader-call-mobile col-sm-1 col-sm-offset-2 col-xs-2 ">
							<a href = "#"><img src="<?php echo get_template_directory_uri()?>/img/hader_phone.png" /></a>	
						</div>
						<div class = "navheader-our-location col-sm-1 col-xs-2 ">
							<a href = "#"><img src="<?php echo get_template_directory_uri()?>/img/header_pinner.png"></a>
						</div>
			     	</div>
			     	
			     	<div class = "navmenu collapse navbar-collapse" id="menu">
				     	<div class = "col-sm-6 col-sm-offset-2 navbar">
				     		<ul class="nav navbar-nav navmenu">
					            <li><a href="#navbar">HOME</a></li>
					            <li><a href="#service">SERVICE</a></li>
					            <li><a href="#about">ABOUT US</a></li>
					            <li><a href="#why">WHY US</a></li>
					            <li><a href="#coupon">SPECIAL OFFER</a></li>
					            <li><a href="#faq">FAQ</a></li>
					            <li><a href="#contact">CONTACT</a></li>
					          </ul>
				     	</div>
				     	<div class = "appoint more-about navbar-brand col-sm-2">
					   		<a href="#">MAKE AN APPOINTMENT</a>
					 	</div>
				    
	          		</div>
	        </div><!--/.nav-collapse -->
	       </div>
    	</nav>
    	<section class="intro" id="intro">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-6 col-xs-8 col-xs-offset-2">
				<h2>TIRES</h2>
				<h1>ROTATION & BALANCE</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacus neque,<br>rutrum at posuere id, pharetra quis urna.</p>
				<p><div class = "more-about navbar-brand col-md-5">
				   	<a href="#"><p class = "text-center">MORE ABOUT US</p></a>
				 </div></p>
		   </div>
          </div>
        </div>
    </section>
</div>
