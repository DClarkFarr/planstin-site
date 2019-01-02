<?php
/*
 Template Name: About Page
*/

wp_register_script( 'vue', get_stylesheet_directory_uri() . '/assets/js/vue.js', array(), '', true );
wp_enqueue_script( 'vue' );
wp_register_script( '3dcarousel', get_stylesheet_directory_uri() . '/assets/js/3dcarousel.js', array(), '', true );
wp_enqueue_script( '3dcarousel' );

?>


<section class="section-sm bg-red1">
    <div class="container text-center">
        <h2 class="page-title-h2 text-white bold">ABOUT</h2>
    </div>
</section>

<section class="about section bg-white">
    <div class="container">
        <div class="row max-w-990">
            <div class="col-md-4 align-self-center">
                <h4 class="fs-30 text-theme mb-4 font-weight-bold mgrt-25">About Us</h4>
                <p class="fs-20 text-light">
                    We are a business administration company specializing in employee benefits, payroll and HR services.
                </p>
            </div>
            <div class="col-lg-7 offset-lg-1 mgrt-30">
                <ul class="list-unstyled">
                    <li class="media">
                        <div class="mr-3">
                            <i class="far fa-book f-20 text-theme"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-1 text-darker font-weight-bold fs-20">Our Mission</h5>
                            <p class="text-light fs-20 mgrt-10">With our service, technology and experience our mission is to bring simplification, savings and structure to your business.</p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <div class="mr-3">
                            <i class="far fa-eye f-20 text-theme"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-1 text-darker font-weight-bold fs-20">Our Vision</h5>
                            <p class="text-light fs-20 mgrt-10">Our vision is to make running business simple and cost effective.  This way you can focus on growing running your business with peace of mind.</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="mr-3">
                            <i class="far fa-bullseye-arrow f-20 text-theme"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-1 text-darker f-10 font-weight-bold fs-20">Our Goal</h5>
                            <p class="text-light fs-20 mgrt-10">Our goal is to help businesses succeed with a true win-win attitude and intuitive solutions.  When you need us most, we will be by your side to solve your business needs.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="section team bg-background">
    <div class="container text-center mb-5">
        <h2 class="fs-48 font-weight-bold text-darker">Meet the Team</h2>
        <p class="fs-20">
            Our team is focused on serving your business with real solutions <br> that make a difference.
        </p>
    </div>
    <div class="container">
       
    <div id="example">
        <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
                   :controls-width="30" :controls-height="60" :clickable="true">
            <slide :index="0">
              <div class="card mb-4 mb-lg-0 text-center">
                <div class="card-body">
                    <div class="mb-3 px-lg-3 mx-auto w-50 w-lg-100">
                        <img class="img-fluid rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/team-nathan.jpg" alt="Nathan Udy">
                    </div>
                    <h5 class="card-title text-blue f-08">Nathan Udy</h5>
                    <p class="card-text f-06 mb-5">Chief Executive Officer</p>
                </div>
            </div>
            </slide>
            <slide :index="1">
               <div class="card mb-4 mb-lg-0 text-center">
                <div class="card-body">
                    <div class="mb-3 px-lg-3 mx-auto w-50 w-lg-100">
                        <img class="img-fluid rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/team-tiffanie.jpg" alt="Nathan Udy">
                    </div>
                    <h5 class="card-title text-blue f-08">Tiffanie Moffitt</h5>
                    <p class="card-text f-06 mb-5">Payroll & Billing Specialist</p>
                </div>
            </div>
            </slide>
              <slide :index="2">
                <div class="card mb-4 mb-lg-0 text-center">
                <div class="card-body">
                    <div class="mb-3 px-lg-3 mx-auto w-50 w-lg-100">
                        <img class="img-fluid rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/team-timothy.jpg" alt="Nathan Udy">
                    </div>
                    <h5 class="card-title text-blue f-08">Timothy Hirsch</h5>
                    <p class="card-text f-06 mb-5">Sales Manager</p>
                </div>
            </div>
            </slide>
            <slide :index="3">
                <div class="card mb-4 mb-lg-0 text-center">
                <div class="card-body">
                    <div class="mb-3 px-lg-3 mx-auto w-50 w-lg-100">
                        <img class="img-fluid rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/team-emily.jpg" alt="Nathan Udy">
                    </div>
                    <h5 class="card-title text-blue f-08">Emily Winger</h5>
                    <p class="card-text f-06 mb-5">Claims Manager</p>
                </div>
            </div>
            </slide>
            <slide :index="4">
                <div class="card mb-4 mb-lg-0 text-center">
                <div class="card-body">
                    <div class="mb-3 px-lg-3 mx-auto w-50 w-lg-100">
                        <img class="img-fluid rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/team-janna.jpg" alt="Nathan Udy">
                    </div>
                    <h5 class="card-title text-blue f-08">Janna Perkins </h5>
                    <p class="card-text f-06 mb-5">Member Services</p>
                </div>
            </div>
            </slide>
            
       </carousel-3d>

    </div>
       
    </div>
</section>
