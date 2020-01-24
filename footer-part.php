<style type="text/css">
	h1, h2, h3, h4, h5, h6 {
      padding: 0px 0;  
} 
ul li a{ color: #FFFFFF }
.footer{ margin-top:52px }
</style>
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
							Copyright © 2019 <a href="https://digosoft.com/">Digosoft .ind </a>. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>


        <!--Load JavaScript-->
        <script type="text/javascript" src="<?=base_url()?>assets/resources/js/jquery.js"></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='<?=base_url()?>assets/resources/js/main.js'></script>

      
       <script type="text/javascript">
   //      jQuery(document).ready(function($){

			//    $(document).on('mousemove', function(e) {
			// 	  var y = e.clientY;
			// 	  var h = $(window).height();
			// 	  var n = h - y;  
			// 	  if (n < 60) {
			// 	    var t = parseFloat($(window).scrollTop());
			// 	    console.log(t);
			// 	    $('html,body').animate({scrollTop:t + 320 + 'px'},1000);
			// 	  } else {
			// 	    $('html,body').stop();
			// 	  }
			// 	});
			// });
		</script>



    </body>
</html>
