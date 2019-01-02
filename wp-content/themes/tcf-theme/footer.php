<!-- Footer Wrap -->
		<section class="section footer-cta bg-theme text-white">
			<div class="container">
				<div class="d-lg-flex text-center text-lg-left align-items-center">
					<div class="mb-4 mb-lg-0">
						<h3 class="font-weight-normal m-0 fs-30">
							ARE YOU READY TO GET STARTED?  SIGN UP NOW!
						</h3>
					</div>
					 
					<div class="ml-auto">
						<a href="/sign-up"><button class="btn btn-light btn-rounded bold fs-20 arial sign-up-btn">SIGN UP</button></a>
					</div>
					
				</div>
				
			</div>
		</section>
		<footer>
			<div class="section footer-top bg-dark text-lightest">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<h4 class="text-white mb-4">PLANSTIN</h4>
							<p class="mb-4">We are a HR, Payroll and Benefit Administration solution provider for small to large businesses. Because business is our passion, we know how to help and we deliver with real service.</p>
							<a href="/about" class="link link-white">Read More <i class="far fa-arrow-right"></i></a>
						</div>
						<div class="col-lg-3">
							<h4 class="text-white mb-4">ONLINE PORTALS</h4>
							<div class="media mb-4">
								<div class="bg-darker p-3 mr-3 icon text-white men-icon-pd2">
									<i class="fas fa-user-tie fss-30"></i>
								</div>
								<div class="media-body text-lighter">
									Employer portal to see services, invoices, payments and employee maintenance.  
								</div>
							</div>
							<div class="media mb-4">
								<div class="bg-darker p-3 mr-3 icon text-white men-icon-pd">
									<i class="fas fa-users fs-30"></i>
								</div>
								<div class="media-body text-lighter">
									Employee portal to select benefits and update personal information.
								</div>
							</div>
							<div class="media">
								<div class="bg-darker p-3 mr-3 icon text-white men-icon-pd3">
									<i class="far fa-user-tie fss-30"></i>
								</div>
								<div class="media-body text-lighter">
									Affiliate portal to view clients, compensation and maintain contact information.
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<h4 class="text-white mb-4">TAGS</h4>
							<div class="mb-4">
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Business</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Health</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">HR</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Brokers</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Benefits</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Group</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Dental</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Vision</span>
								<span class="bg-darker py-1 px-2 mb-2 d-inline-block rounded">Healthcare</span>
							</div>

							<h4 class="text-white mb-4">LINKS</h4>
							<ul class="list-unstyled">
								<li><a class="link" href="">Employer's portal </a></li>
								<li><a class="link" href="">Employee's portal</a></li>
								<li><a class="link" href="">Broker's portal</a></li>
								<li><a class="link" href="">Open Enrollment</a></li>
								<li><a class="link" href="">Claims Processing</a></li>
							</ul>
						</div>
						<div class="col-lg-3 get-in-touch">
							<h4 class="text-white mb-4">GET IN TOUCH</h4>
							<div class="d-flex mb-3">
								<div><i class="far fa-fw mr-3 d-inline-block fa-phone"></i></div>
								<div>(888) 920-7526</div>
							</div>
							<div class="d-flex mb-3">
								<div><i class="far fa-fw mr-3 d-inline-block fa-envelope"></i></div>
								<div>info@planstin.com</div>
							</div>
							<div class="d-flex mb-3">
								<div><i class="far fa-fw mr-3 d-inline-block fa-map-marker"></i></div>
								<div>283 W Hilton Dr Suite 1<br>St George, UT 84770</div>
							</div>
							<h4 class="text-white my-4">BUSINESS HOURS</h4>
							<div>
								Monday – Friday: 8 am to 6 pm MST
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom bg-darker text-white text-center py-3">
				All Rights Reserved 2018 Planstin Inc.
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script>

            var width = 100;
var animation_speed = 700;
var time_val = 5000;
var current_slide = 1;

var $slider = $('#slider');
var $slide_container = $('.slides');
var $slides = $('.slide');

var interval;

$slides.each(function(index){
  $(this).css('left',(index*100)+'%');
});

function startSlider() {
  interval = setInterval(function() {
    $slide_container.animate({'left': '-='+(width+'%')}, animation_speed, function() {
      if (++current_slide === $slides.length) {
        current_slide = 1;
        $slide_container.css('left', 0);
      }
    });
  }, time_val);
}

startSlider();

</script>
    
   
    

	</body>
</html>