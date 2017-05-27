			</div>

<!-- Footer -->
<div id="footer">

   <footer>
		<section id = "footer-section">
			<div class="footer container">
			<div class="row">
				<div class="footer-column col-sm-3 col-xs-3 logo">
					<img src="<?php echo get_template_directory_uri()?>/img/logo.png">
				</div>
				<div class="footer-column col-sm-3 col-xs-3">
					<h3>QUICK NAVIGATION</h3><br>
					<ul class="footer-menu">
						<li><a href="#navbar">Home</a></li>
						<li><a href="#service">Services</a></li>
						<li><a href="#about">About us</a></li>
						<li><a href="#why">Why us?</a></li>
						<li><a href="#coupon">Special Offers</a></li>
						<li><a href="#faq">FAQ</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
					
				</div>
				<div class="footer-column col-sm-3 col-xs-3">
					<h3>LOCATIONS</h3><br>
					<ul class="footer-menu">
						<li><a href="#"><b>Kwik Kar - Uptown</b></a></li>
						<li><a href="#">Address Line 1 Goes Here</a></li>
						<li><a href="#">Dallas, Tx, 000000</a></li>
						<li><a href="#">555-555-5555</a></li>
					</ul><p>
					<ul class="footer-menu">
						<li><a href="#"><b>Kwik Kar -White Rock Lake Dallas</b></a></li>
						<li><a href="#">Address Line 1 Goes Here</a></li>
						<li><a href="#">Dallas, Tx, 000000</a></li>
						<li><a href="#">555-555-5555</a></li>
					</ul>
				</div>
				<div class="footer-column col-sm-3 col-xs-3">
					<ul class="footer-menu">
						<li><br><br><br></li>
						<li><a href="#"><b>Kwik Kar -Lake Highlands Dallas</b></a></li>
						<li><a href="#">Address Line 1 Goes Here</a></li>
						<li><a href="#">Dallas, Tx, 000000</a></li>
						<li><a href="#">555-555-5555</a></li>
					</ul>
				</div>
			</div>	
			<hr>
			<div class = "container">
				<div class = "row">
					<p class="col-sm-6 text-left">&copy Copyright 2017 Kwik Kar. All Rights Reserved</p>
					<p class = "col-sm-6 text-right"><font style="color:rgb(253, 209, 0);">Powerd by</font> AdPages.com</p>
				</div>
			</div>
		</div>
		</section>
	</footer>

</div>
<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		
		function myMap() {
		var mapProp= {
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUrQmCNxEstSMMH2mbUlTvIV2xaC3ZvrQ&callback=myMap"></script>
		</script>

</body>
</html>
		

		

