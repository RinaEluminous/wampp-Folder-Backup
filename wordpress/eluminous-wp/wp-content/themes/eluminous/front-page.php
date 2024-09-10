<?php get_header();?>
<div id="cookieStrip">
    <div class="container">
        <div class="cookieStrip">
            <p>By continuing to use this website you agree to our <a id="privacyPolicy" href="privacy-policy/index.html" title="Cookie Policy">Cookie Policy.</a>
                <a id="contBtn" class="border-btn" id="cookie-button">Okay</a>
            </p>
        </div>
    </div>
</div>
<style>
    .section_hidden {
    display: none;
}
</style>
<section class="new_home_banner homeBanner">
    <div class="container">
        <div class="row mt-0 pt-0 mt-lg-3 pt-lg-3 flex-lg-row-reverse">
            <div class="col-lg-6">
                <div class="mobile_optimize">
                    <div id="home_banner_slider" class="owl-carousel owl-theme section_hidden">
                        <div class="client_review_slider">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/pic-1.webp" alt="Client" width="225" height="225" class="img">
                            <p>
                                &quot;Delivering engineering
                                <span class="font-weight-bold d-inline-block">excellence</span>
                                since 10+ years.&quot;
                            </p>
                            <div class="star_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/star-rating-4-5.svg" alt="Rating" width="172" height="31"><span class="rating">
                                    <span class="font-weight-bold d-inline-block">4.8</span>
                                    /5</span>
                            </div>
                            <span class="details">CEO, Design Agency, Europe</span>
                        </div>
                        <div class="client_review_slider">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/pic-2.webp" alt="Client" width="225" height="225" loading="lazy" class="img">
                            <p>
                                &quot;eLuminous always responds
                                <span class="font-weight-bold d-inline-block">positively</span>
                                to requests.&quot;
                            </p>
                            <div class="star_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/star-rating-4-5.svg" alt="Rating" loading="lazy" width=" 172" height="31"><span class="rating">
                                    <span class="font-weight-bold d-inline-block">4.8</span>
                                    /5</span>
                            </div>
                            <span class="details">CEO, Digital Agency, USA</span>
                        </div>
                        <div class="client_review_slider">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/pic-3.webp" alt="Client" width="225" height="225" loading="lazy" class="img">
                            <p>
                                &quot;With eLuminous' programmers, I've always had an
                                <span class="font-weight-bold d-inline-block">open line of communication.</span>&quot;
                            </p>
                            <div class="star_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/star-rating-4-5.svg" alt="Rating" loading="lazy" width=" 172" height="31"><span class="rating">
                                    <span class="font-weight-bold d-inline-block">4.9</span>
                                    /5</span>
                            </div>
                            <span class="details">CEO, Software Agency, South Africa</span>
                        </div>
                        <div class="client_review_slider">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/pic-4.webp" alt="Client" width="225" height="225" loading="lazy" class="img">
                            <p>
                                &quot;We're pleased with the
                                <span class="font-weight-bold d-inline-block">quality</span>
                                of eLuminous' work.&quot;
                            </p>
                            <div class="star_wrap">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/star-rating-5.svg" alt="Rating" loading="lazy" width="172" height="31"><span class="rating">
                                    <span class="font-weight-bold d-inline-block">5</span>
                                    /5</span>
                            </div>
                            <span class="details">CEO, Startup, Canada</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            $banner = get_field('banner_section');
            if($banner){
            ?>
            <div class="col-lg-6">
                <div class="text">
                    <img src="<?php echo $banner['image'];?>" alt="Testi Arrow Icon" class="testi_icon" loading="lazy">
                    <h1 class="title fw900 text-capitalize">
                        <?php echo $banner['primary_title'];?>
                    </h1>
                    <h2 class="subTitle mb-4"><?php echo $banner['secondary_title'];?></h2>
                    <p class="subSubTitle">
                        Hire Gen AI ready developers from an award winning software development company. We help you to Scale, grow and enhance capabilities by using our Staff Augmentation services.
                    </p>
                    <a href="<?php echo $banner['button_link'];?>" class="btn scroll_form"><?php echo $banner['button_text'];?></a>
                    <div class="our_client w-100">
                        <h3 class="slider_title d-none">
                            Our<br>
                            <span>Clientele</span>
                        </h3>
                        <style>
                            .section_hidden {
                            display: none;
                        }
                        </style>
                        <div class="our_client w-100 client_slider">
                            <h3 class="slider_title d-none">
                                Our<br>
                                <span>Clientele</span>
                            </h3>
                            <div class="Our_Clientele_slider_box">
                                <div id="Our_Clientele_slider" class="owl-carousel owl-theme">
                                    <div class="client_logo_wrapper" style="width: 265px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/continental.webp" alt="continental" loading="lazy" width="265" height="56">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 265px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/novartis.webp" alt="novartis" loading="lazy" width="265" height="56">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 121px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/london-bridge.webp" alt="london-bridge" loading="lazy" width="121" height="56">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 203px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/tech-mahindra.webp" alt="tech-mahindra" loading="lazy" width="203" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 169px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/princeton-university.webp" alt="princeton-university" loading="lazy" width="169" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 227px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/droplabs.webp" alt="droplabs" loading="lazy" width="227" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 241px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/angelcare.webp" alt="angelcare" loading="lazy" width="241" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 365px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/independent-gyms.webp" alt="independent-gyms" loading="lazy" width="365" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 219px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/trtcle.webp" alt="trtcle" loading="lazy" width="219" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 278px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/janssen.webp" alt="janssen" loading="lazy" width="278" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 175px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/vivaback.webp" alt="vivaback" loading="lazy" width="175" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 143px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/balance.webp" alt="balance" loading="lazy" width="143" height="56" class="lazyload">
                                    </div>
                                    <div class="client_logo_wrapper" style="width: 114px;">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/client-logo/pcp.webp" alt="pcp" loading="lazy" width="114" height="56" class="lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="8efb612bb118a64b9ccb388b-text/javascript"></script>
                        <script type="8efb612bb118a64b9ccb388b-text/javascript">
                        window.onload = function() {
                            var e = document.getElementById("home_banner_slider");
                            setTimeout(function() {
                                e.classList.remove("section_hidden");
                            }, 500);
                        };
                        </script>
                    </div>
                </div>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
</section>
<script type="8efb612bb118a64b9ccb388b-text/javascript"></script>
<script type="8efb612bb118a64b9ccb388b-text/javascript">
window.onload = function() {
    var e = document.getElementById("home_banner_slider");
    setTimeout(function() {
        e.classList.remove("section_hidden");
    }, 500);
};
</script>
<section class="offshore_24" id="Why_Choose_Us">
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/offshore-24.webp" alt="Hire Offshore Developers in 24 Hours" width="1600" height="688" class="offshore_24_bg">
    <div class="container">
        <h2 class="sub_title text-center mb-3 mb-xl-4 mx-auto">Acquire Dedicated Software <br> Development Services
            Today!</h2>
        <p class="text-center ml-auto mr-auto f-18">Hassle-free onboarding with our Dream-Team Engagement Model & our<br class="d-none d-md-block"> vast pool of Certified Professionals. <a href="hire-laravel-developers/index.html">Hire dedicated
                developers</a> to benefit from our core and tailor-made offerings.</p>
        <div class="bottom_wrap">
            <div class="box blue_bg">
                <span class="offshore_24_title">Core<br>Offerings
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/core%e2%80%8boofferings.webp" alt="core​oofferings Icon" class="icon" width="60" height="69" loading="lazy"></span>
                <ul>
                    <li>Dedicated Developer​</li>
                    <li>Great Communication​</li>
                    <li>Supervision by TL​</li>
                    <li>Part-time QA</li>
                </ul>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/plus.webp" alt="plus Icon" width="50" height="50" loading="lazy" class="plus_icons">
            <div class="box">
                <span class="offshore_24_title">Excellent<br>Additions
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/excellent-additions.webp" alt="Excellent Additions Icon" class="icon" width="57" height="67" loading="lazy"></span>
                <p>Book a meeting to know more about our
                    <strong>Dream Team Model.</strong>
                </p>
                <a href="contact/index.html" class="btn"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/call-icon-white.webp" alt="Call Icon" width="20" height="20" loading="lazy"> Let's Talk</a>
            </div>
            <div class="review_box">
                <p><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/quote-icon.webp" alt="Call Icon" width="27" height="20" loading="lazy"> With my <strong>decades</strong> of experience, I found eluminous to
                    be highly <strong>reliable</strong> and <strong>responsive</strong> to my business needs</p>
                <div class="avatar_wrap">
                    <div class="avatar"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/stewart-g.webp" alt="stewart-g" width="89" height="89" loading="lazy"></div>
                    <div>
                        <p class="fw_500">Stewart G</p><span>Project & Content Director, Digital<br>Agency, NZ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why_choose_sec">
    <div class="container">
        <h2 class="sub_title text-center mb-3 mb-xl-4 w-75 mx-auto">Why Rely on our Software <br> Development Company?
        </h2>
        <p class="text-center ml-auto mr-auto f-18">At eLuminous, we have a systematic and well-thought software development team structure. <a href="hire-dedicated-developers/index.html" target="_blank">Hire dedicated developers </a>who use <br class="d-none d-lg-block"> a methodical approach to build customized digital products that contribute to driving revenue for your business.
            <p class="text-center ml-auto mr-auto f-18">Check out some evident reasons to partner with our dynamic and dedicated software development team. </p>
            <div id="why_choose_list" class="mt-5 why_choose_list_wrap owl-carousel owl-theme">
                <div class="box"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/technology-proficiency.webp" alt="Technology Proficiency" width="80" height="80" loading="lazy" class="img"><span class="why_choose_title">Technology Proficiency</span>
                    <ul>
                        <li>Pool of Certified Developers</li>
                        <li>We Follow Top 5% Talent Vetting Process</li>
                        <li>Choose Tech Stack of Your Choice</li>
                    </ul>
                </div>
                <div class="box"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/top-notch-quality.webp" alt="Top-notch Quality" width="80" height="77" loading="lazy" class="img"><span class="why_choose_title">Top-notch Quality</span>
                    <ul>
                        <li>Clutch Top 100 Rated IT Company</li>
                        <li>Apple App Store Award Winner</li>
                        <li>Well-Defined Documentation</li>
                    </ul>
                </div>
                <div class="box"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/non-disclosure-agreement.webp" alt="Non-disclosure Agreement" width="80" height="70" loading="lazy" class="img"><span class="why_choose_title">Non-disclosure Agreement</span>
                    <ul>
                        <li>We Sign NDA with Clients/Employees/Vendors</li>
                        <li>Complete Data Confidentiality</li>
                        <li>Safeguarding Intellectual Property</li>
                    </ul>
                </div>
                <div class="box"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/easy-collaboration-%26-flexibility.webp" alt="Easy Collaboration & Flexibility" width="82" height="64" loading="lazy" class="img"><span class="why_choose_title">Easy Collaboration & Flexibility</span>
                    <ul>
                        <li>Time-Zone Overlap with EST & GMT</li>
                        <li>Easy Ramp Up & Ramp Down</li>
                        <li>Single Point of Contact with Great Communication</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4 mt-lg-5"><a href="#contact" class="btn">Get Started Today</a></div>
    </div>
</section>
<?php 
            // $developementServices = get_field('
            // developement_services');
            // if($developementServices){
            ?>
<section class="our_offshore">
    <div class="container">
           <h2 class="sub_title text-center mb-4 mx-auto"><?php //echo $banner['secondary_title'];?>Our Software <br>Development Services </h2>
        <p class="text-center mb-0 ml-auto mr-auto f-18">At eLuminous, we aim to revolutionize businesses by helping
            them achieve splendid digital transformation. <br class="d-none d-md-block">Take a look at our professional
            services that can augment your company’s output profoundly. </p>
        <div class="offshore_list_wrap"><a class="box" href="web-application-development/index.html"><span class="our_offshore_title"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/web-application-development.webp" alt="Web application development" width="49" height="48" loading="lazy"> Web application
                    development </span>
                <p>Experts in static, dynamic, PWAs, and all the prominent types of web applications</p>
            </a>
            <a class="box" href="front-end-development/index.html"><span class="our_offshore_title">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/front-end-development.webp" alt="Front-end development" width="49" height="48" loading="lazy"> Front-end development </span>
                <p>Dedicated developers with hands-on experience in using React, Angular, JavaScript, CSS, and lot more
                </p>
            </a><a class="box" href="mobile-app-development/index.html"><span class="our_offshore_title"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/mobile-app-development.webp" alt="Mobile app development" width="38" height="48" loading="lazy"> Mobile app development
                </span>
                <p>Skilled in developing customized SEO-friendly mobile apps with a high emphasis on splendid UI and UX
                </p>
            </a><a class="box" href="web-application-development/index.html"><span class="our_offshore_title"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/digital-transformation.webp" alt="Digital Transformation" width="49" height="48" loading="lazy"> Digital Transformation
                </span>
                <p>Modules like team augmentation and seamless offshore development ensure relevant online
                    transformation through the latest trends</p>
            </a><a class="box" href="digital-marketing-services/index.html"><span class="our_offshore_title"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/digital-marketing-services.webp" alt="Digital marketing services" width="49" height="48" loading="lazy"> Digital marketing
                    services </span>
                <p>SEO-centric content provision with continual tracking of all the important web metrics</p>
            </a><a class="box" href="virtual-assistant-services/index.html"><span class="our_offshore_title"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/virtual-assistance-services.webp" alt="Virtual assistance services" width="49" height="48" loading="lazy"> Virtual assistance
                    services </span>
                <p>24x7 seamless VA support to offer professional assistance at every stage of your digital project</p>
            </a></div>
    </div>
</section>
<?php 
            // }
            ?>
<section class="technology_expertise technologySection slider-with-arrow pb-5 pb-md-3">
    <div class="container text-center">
        <div class="technologiesList__wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <h2 class="text-center sub_title mb-4">Technology Proficiency </h2>
                    <p class="text-center mx-auto mb-3 mb-md-5 f-18">Leverage the expertise of a dependable software
                        development team. We utilize various tech stacks and leverage frameworks like Angular, Laravel,
                        and much more. The developers in our team are well-versed in choosing the right CMS, database,
                        and server to help you achieve remarkable results.</p>
                </div>
            </div>
            <div class="services_stack_tabs w-100 mt-3">
                <ul class="nav nav-pills">
                    <li><a href="#Front_End" data-toggle="tab" class="active">Front End</a></li>
                    <li><a href="#Back_End" data-toggle="tab">Back End</a> </li>
                    <li><a href="#full-stack" data-toggle="tab">Full stack</a>
                    </li>
                    <li><a href="#CMS" data-toggle="tab">CMS</a>
                    </li>
                    <li><a href="#Database" data-toggle="tab">Database</a></li>
                    <li><a href="#Server" data-toggle="tab">Server</a></li>
                </ul>
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="Front_End">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <a href="hire-angular-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-1 img"></span>Angular</a>
                            </div>
                            <div class="li">
                                <a href="hire-vuejs-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-42 img"></span>Vue JS</a>
                            </div>
                            <div class="li">
                                <a href="hire-reactjs-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-35 img"></span>React JS</a>
                            </div>
                            <div class="li">
                                <a href="#" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-31 img"></span>Nuxt JS</a>
                            </div>
                            <div class="li">
                                <a href="hire-react-native-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-35 img"></span>React Native</a>
                            </div>
                            <div class="li">
                                <a href="hire-flutter-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-14 img"></span>Flutter</a>
                            </div>
                            <div class="li">
                                <a href="hire-ionic-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-19 img"></span>Ionic</a>
                            </div>
                            <div class="li">
                                <a href="hire-android-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-52 img"></span>Android</a>
                            </div>
                            <div class="li">
                                <a href="hire-ios-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-20 img"></span>iOS
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Hybrid">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <a href="hire-react-native-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-35 img"></span>React Native</a>
                            </div>
                            <div class="li">
                                <a href="hire-flutter-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-14 img"></span>Flutter</a>
                            </div>
                            <div class="li">
                                <a href="hire-ionic-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-19 img"></span>Ionic</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Back_End">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <a href="hire-laravel-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-23 img"></span>Laravel</a>
                            </div>
                            <div class="li">
                                <a href="hire-nodejs-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-30 img"></span>Node</a>
                            </div>
                            <div class="li">
                                <a href="hire-php-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-32 img"></span>PHP</a>
                            </div>
                            <div class="li">
                                <a href="hire-dot-net-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-28 img"></span>.net</a>
                            </div>
                            <div class="li">
                                <a href="#" target="”_blank”" class="f-18 pe-none">
                                    <span class="sprite_img bg-29 img"></span>.net
                                    Core</a>
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-34 img"></span>Python
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-11 img"></span>Django
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="full-stack">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-01 img"></span>.NET&nbsp;+&nbsp;Angular</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-02 img"></span>.NET&nbsp;+&nbsp;React</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-03 img"></span>Laravel&nbsp;+&nbsp;ReactJS</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-04 img"></span>Laravel&nbsp;+&nbsp;VueJS</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-05 img"></span>Laravel&nbsp;+&nbsp;Angular</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-06 img"></span>Java&nbsp;+&nbsp;ReactJS</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-07 img"></span>Java&nbsp;+&nbsp;Angular</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-08 img"></span>MEAN</a>
                            </div>
                            <div class="li">
                                <a href="hire-fullstack-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img_plus bg-plus-09 img"></span>MERN</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="CMS">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <a href="hire-wordpress-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-44 img"></span>Wordpress</a>
                            </div>
                            <div class="li">
                                <a href="hire-drupal-developers/index.html" target="”_blank”">
                                    <span class="sprite_img bg-47 img"></span>Drupal</a>
                            </div>
                            <div class="li">
                                <a href="hire-magento-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-24 img"></span>Magento</a>
                            </div>
                            <div class="li">
                                <a href="hire-shopify-developers/index.html" target="”_blank”" class="f-18">
                                    <span class="sprite_img bg-36 img"></span>Shopify</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Database">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <span class="sprite_img bg-26 img"></span>MongoDB
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-33 img"></span>PostgreSQL
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-27 img"></span>MySQL
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Server">
                        <div class="technologiesSliderInner technologiesList owl-theme">
                            <div class="li">
                                <span class="sprite_img bg-3 img"></span>AWS
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-10 img"></span>Digital&nbsp;Ocean
                            </div>
                            <div class="li">
                                <span class="sprite_img bg-4 img"></span>Azure
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/pages/technology-stacks/full-stack-technologies-stack.js" type="8efb612bb118a64b9ccb388b-text/javascript">
            </script>
            <div class="text-center mt-4 mb-4">
                <a href="#contact" class="btn">Get Started Today</a>
            </div>
        </div>
    </div>
</section>
<section class="testimonial_video">
    <h2 class="sub_title text-center mb-4">Their Experience, Their Words: <br>Watch Why Clients Choose Team ET </h2>
    <p class="text-center mb-3 w-50 ml-auto mr-auto">Listen to what our beloved clients say about their experience partnering with our dedicated team.</p>
    <div class="testimonial_video_wrapper">
        <div class="video-container">
            <video controls preload="auto" controls poster="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/maxresdefault.jpg">
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/design-agency-europe.mp4" type="video/mp4">
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/design-agency-europe.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-container">
            <video controls preload="auto" controls poster="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/maxresdefault.webp">
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/design-agency-europe-1.mp4" type="video/mp4">
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/images/clients-testimonials/design-agency-europe-1.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>
<section class="our_casestudies">
    <div class="container">
        <h2 class="sub_title text-center mb-2">Case Studies</h2>
        <p class="text-center mb-4 mb-xl-5 f-18">We possess over two decades of experience in custom software
            development services and provide advanced technology solutions for most vital industries. Our software
            development projects help cut down costs & transform the conventional operation processes. </p>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl_outer">
                    <div class="owl-casestudies owl-theme">
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/angel_care_logo.webp" alt="Angel Care" class="caseStudyLogo img-fluid lazyload" loading="lazy" width="827" height="517">
                                <h3>FDA Compliant E-Commerce Platform in 90 Days</h3>
                                <p>
                                    We developed a web application for UK based Pharma Company selling
                                    baby care products using web based legacy system in the domestic
                                    market
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/hire-dedicated-developers/case-studies/Getting-FDA-compliant-eCommerce-ready-within-90days.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download
                                    PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/case-studies-angel-care.webp" alt="Angle Care" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/vivaback-logo.webp" alt="vivaback" class="caseStudyLogo img-fluid lazyload" loading="lazy" width="800" height="500">
                                <h3>IOT based Healthcare solution for relieving back pain</h3>
                                <p>
                                    A healthcare brand based in UK has developed a back movement sensor
                                    system to measure the bending of the spine during everyday situations.
                                    The collected data serves as a basis for analysis and consultation on
                                    lumbar motion monitoring and health
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/vivaback-case-study.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download
                                    PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/case-studies-viva.webp" alt="vivaback" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="800" height="500">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/janssen_logo.webp" alt="Janssen" class="caseStudyLogo img-fluid lazyload" loading="lazy" width="827" height="517">
                                <h3>
                                    Intelligent Forecasting Solution for Pharmaceutical Salesforce –
                                    Middle East
                                </h3>
                                <p>
                                    Janssen Neuroscience is a well-known pharmaceutical brand all over the
                                    world. To support their on fields sales activities in Gulf countries
                                    client came up with the idea to build an intelligent solution
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/women-health-brand.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/case-studies-jonhson.webp" alt="Janssen" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/chefpin-logo.webp" alt="ChefPin" class="caseStudyLogo img-fluid lazyload" loading="lazy" width="827" height="517">
                                <h3>Food delivery app with user friendly UI using ReactJS</h3>
                                <p>
                                    Client offers a platform for home chefs and diners to provide a clean
                                    hygienic home cooked meal experience. The client represents a new age
                                    startup
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/Food-delivery-app-with-user-friendly-UI-using-React-js.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <picture>
                                    <source media="(max-width: 575px)" srcset="https://eluminoustechnologies.com/<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/chefpin-mobile.webp" width="425" height="265">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/chefpin.webp" alt="ChefPin" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                                </picture>
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/trtcle-logo.webp" alt="TRTCLE" class="caseStudyLogo img-fluid lazyload" loading="lazy" width="827" height="517">
                                <h3>eLearning Management Solution for CLE</h3>
                                <p>
                                    CLE course certificates are essentials for the Lawyers as a mandatory
                                    legal compliance. Hence, the key requirement was to generate course
                                    completion certificates based on the User's time zone
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/eLearning-managemen-t-solution-for-CLE.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download
                                    PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/trtcle.webp" alt="TRTCLE" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <h3>Developing a Bridge between Businesses & NGOs Worldwide</h3>
                                <p>
                                    Maximizing Social Impact: NGO's Journey to Engaging More Businesses and Individuals in Giving
                                </p>
                                <a href="case-studies/platform-for-ngos/index.html" class="btn herobanner-btn pdf-btn mt-5" target="_blank">View Case Study</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/b1g1.webp" alt="Developing a Bridge between Businesses & NGOs Worldwide" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <h3>All In one platform for the Equestrian Community</h3>
                                <p>
                                    Galloping towards Success: Developing Horsebook, a Comprehensive
                                    Equestrian Platform with Angular, Laravel and Agile Methodology
                                </p>
                                <a href="case-studies/online-platform-for-horses-sell/index.html" class="btn herobanner-btn pdf-btn mt-5" target="_blank">View Case Study</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <picture>
                                    <source media="(max-width: 575px)" srcset="https://eluminoustechnologies.com/<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/all-in-one-platform-for-the-equestrian-community-mobile.webp" width="425" height="265">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/all-in-one-platform-for-the-equestrian-community.webp" alt="All In one platform for the Equestrian Community" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                                </picture>
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <h3>Streamlined Audit and <br>Process Management for Manufacturing Industry</h3>
                                <p>
                                    The firm intends to automate its internal processes to boost productivity and refine audit and
                                    compliance activity.
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/streamlined-audit-and-process-management-using-ms-power-apps.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank"><span class="sprite_img bg-48"></span>Download
                                    PDF</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/streamlined-audit-and-process-management-for.webp" alt="Streamlined Audit and Process Management using MS Power Apps" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <h3>Bugs to Brilliance: Case study for Delegation of Authority Application</h3>
                                <p>
                                    Utilization of apt Power Apps features to automate tasks and establish new-age document processing
                                    attributes
                                </p>
                                <a href="case-studies/optimization-of-power-apps-based-digital-platform/index.html" class="btn herobanner-btn pdf-btn mt-5" target="_blank"> View Case Study</a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/bugs-to-brilliance-case-study-for-delegation-of-authority-application.png" alt="Bugs to Brilliance: Case study for Delegation of Authority Application" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-xl-4 col-lg-5 d-flex flex-column justify-content-center align-items-lg-start align-items-center text-lg-left text-center">
                                <h3>Boosting Small Business Operations Through AI Integration</h3>
                                <p>
                                    The client is a budding name in the tattoo-making industry who was looking for an innovative web platform.
                                </p>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/assets/images/pdf-file/customized-ai-integration.pdf" class="btn herobanner-btn pdf-btn mt-5" target="_blank">
                                    Download PDF
                                </a>
                            </div>
                            <div class="col-xl-1 d-none d-xl-flex"></div>
                            <div class="col-xl-7 col-lg-7">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/healthcare/customized-ai-integration.webp" alt="Boosting Small Business Operations Through AI Integration" class="caseStudyBanner img-fluid lazyload" loading="lazy" width="827" height="517">
                            </div>
                        </div>
                    </div>
                </div>
                <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/pages/case-studies/health-care-case-study.js" type="8efb612bb118a64b9ccb388b-text/javascript"></script>
            </div>
        </div>
    </div>
</section>
<section class="engagement_models_sec pb-0 px-0 " id="Engagement_Models">
    <div class="container container_padd_mobile">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-11 text-center">
                <h2 class="title">Engagement Models</h2>
                <p class="subTitle">Software outsourcing has never been so easy! We can help you to hire a dedicated
                    software development team including Developers, Testers, Business Analysts, and Technology
                    Architects as per your need and preferred time zone.</p>
            </div>
        </div>
        <div class="engagement_wrapper mb-0">
            <div class="box">
                <div class="icons">
                    <div class="icon sprite_img bg-62"></div>
                </div>
                <p class="heading">Dedicated</p>
                <div class="box2 blue_bg">
                    <ul>
                        <li>Unlimited flexibility - optimal model</li>
                        <li>A dedicated team focused solely on your project</li>
                        <li>Customize your team - complete autonomy</li>
                        <li>Ability to easily add or remove resources as needed</li>
                    </ul>
                    <a href="#contact" class="btn hire-developer-tab">Hire Developers</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <div class="icon sprite_img bg-63"></div>
                </div>
                <p class="heading">Fixed-Cost</p>
                <div class="box2">
                    <ul>
                        <li>Clear pricing - transparent cost structure</li>
                        <li>Defined timeline for project delivery</li>
                        <li>Suitable for projects with well-defined requirements</li>
                        <li>Milestone/Sprint-wise payments</li>
                    </ul> <a href="#contact" class="btn Fixed-cost-tab">Get A
                        Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awards_recognitions_slider pb-5">
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/awards_recognitions_slider_bg.webp" alt="Awards & Recognitions" width="1600" height="688" class="offshore_24_bg" loading="lazy">
    <div class="container">
        <h2 class="title mb-4">Awards & Recognitions</h2>
        <p class="text-center mb-4 mb-lg-5 f-18">Explore the notable awards and honors we've received for our
            exceptional contributions that serve <br class="d-none d-lg-block"> as testaments for the tag of one of best
            software development companies</p>
        <div class="they_believed_us2 pb-3 pb-md-5">
            <div class="logo">
                <span class="awards_recognitions_sprite bg-champion"></span>
            </div>
            <div class="logo">
                <span class="awards_recognitions_sprite bg-clutch1000"></span>
            </div>
            <div class="logo">
                <span class="awards_recognitions_sprite bg-clutch"></span>
            </div>
            <div class="logo">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/awards-%26-recognitions-icons/webp/aws-certified.webp" alt="AWS Certified" width="150" height="174" loading="lazy">
            </div>
            <div class="logo"><span class="awards_recognitions_sprite bg-best_of_app_store_winner"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-gartner"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-goodfirms"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-itfirms"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-laravel_certified_company"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-microsoft_certified"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-PMP_Certification_Logo"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-psm"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-sfc"></span></div>
            <a class="logo" href="https://www.designrush.com/agency/it-services/outsourcing" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/awards-%26-recognitions-icons/accredited-agency.png" alt="eLuminous Technologies Accredited Company on DesignRush" loading="lazy">
            </a>
            <a class="logo" href="https://www.techimply.com/services/software-development" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home/awards-%26-recognitions-icons/techimply.webp" alt="techimply" loading="lazy">
            </a>
            <div class="logo"><span class="awards_recognitions_sprite bg-top_staff_argmentation_company_clutch"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-top_vuejs_company_clutch"></span></div>
            <div class="logo"><span class="awards_recognitions_sprite bg-top_web_developers"></span></div>
        </div>
        <div class="text-center mt-5"><button class="btn" id="loadMoreBtn">Load More</button></div>
    </div>
</section>
<!-- <section class="our_insights d-none d-md-block">
    <div class="container">
        <h2 class="sub_title text-center mb-3">Our Insights</h2>
        <p class="text-center mb-4 w-50 ml-auto mr-auto f-20">Challenge your thinking with thought-provoking insights - read our blogs below!</p>
        <div class="owl_outer">
            <div class="our_insightss owl-theme">
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/index0a90.html?p=13253" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/04/What-is-the-Project-Discovery-Phase.png" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>April 25, 2024</small>
                            <h3>What is the Project Discovery Phase?</h3>
                            <p class="f-18">If you have ever developed an IT project, one lesson might be clear: the budget exceeds its planned ...</p>
                            <a href="blog/index0a90.html?p=13253" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/index2363.html?p=13138" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/04/A-Complete-Guide-to-Front-End-Testing-With-7-Best-Practices.png" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>April 17, 2024</small>
                            <h3>A Complete Guide to Front-End Testing With 7 Best Practices</h3>
                            <p class="f-18">Have you abandoned a cart recently because the webpage took ages to load? If so, you are not alone! ...</p>
                            <a href="blog/index2363.html?p=13138" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/index0f3d.html?p=12630" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/03/Next-Gen-UX.png" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>March 19, 2024</small>
                            <h3>Behavior Design - Future of UX</h3>
                            <p class="f-18">As a business owner, I'm often perplexed about how we might persuade individuals to make certain dec...</p>
                            <a href="blog/index0f3d.html?p=12630" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/index81cb.html?p=12258" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/02/software-development-risks.webp" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>February 21, 2024</small>
                            <h3>Software Development Risks: A Detailed Guide 2024</h3>
                            <p class="f-18">"All businesses are risky if they don't invest in risk management."
                                Gary Cohn, Vice Chairman of I...</p>
                            <a href="blog/index81cb.html?p=12258" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/indexb196.html?p=12138" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/02/A-Guide-on-building-scalable-Micro-Front-end-Application-with-React.webp" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>February 14, 2024</small>
                            <h3>Mastering React Micro Frontend: A Deep Beginner's Guide</h3>
                            <p class="f-18">Overview: Micro Frontend development is the process of dividing large, monolithic frontends into sev...</p>
                            <a href="blog/indexb196.html?p=12138" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="shadow_box mb-4 p-0">
                        <div class="insights_image">
                            <a href="blog/index2221.html?p=11935" target="_blank">
                                <img alt="Blog Image" data-src class="w-100" src="blog/wp-content/uploads/2024/02/End-to-end-testing-Integration-1.webp" loading="lazy">
                            </a>
                        </div>
                        <div class="insights_content"><small>February 01, 2024</small>
                            <h3>End to End Testing vs Integration Testing: In-Depth Comparison</h3>
                            <p class="f-18">In 2022, cybersecurity spending exceeded $133.7 billion. Therefore, it is necessary to test security...</p>
                            <a href="blog/index2221.html?p=11935" target="_blank" aria-label="Read more about blog details">Keep Reading <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/right-arrow.svg" alt="right-arrow" class="img-fluid" width="12" height="14" loading="lazy"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/pages/insights/our-insights.js" type="8efb612bb118a64b9ccb388b-text/javascript"></script>
    </div>
</section> -->
<section class="p-0">
    <div class="container">
        <div class="schedule_free p-4 p-xl-5"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/web-app/schedule_free.webp" alt="Start Growing Your Business with Us" class="schedule_free_img" loading="lazy">
            <h3>Looking for Skilled Developers? <br /> Let's create a Powerful App for Your Business!</h3><a href="contact/index.html" class="btn herobanner-btn">Schedule Free Consultation</a>
        </div>
    </div>
</section>
<section class="faq_web">
    <div class="container">
        <h2 class="sub_title text-center mb-3 mb-xl-5">Frequently Asked Questions</h2>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div id="accordionExample" class="accordion">
                    <div class="card">
                        <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>How
                                    much does it cost to hire offshore software development teams?</button></h2>
                        </div>
                        <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0">It totally depends on the size of the software project
                                    and the experience of resources required to execute your project. The rate varies
                                    from $25 - 35/hour. To know more reach out to us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>How
                                    soon can I begin working with my offshore team?</button></h2>
                        </div>
                        <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0">Once you select the team of dedicated developers with
                                    sound technological expertise for your project, you can begin working with them
                                    within 1 – 2 weeks. So, a project manager can initiate the task without any hassle.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>What
                                    if any of the resources may not meet my expectations in between the project
                                    execution?</button></h2>
                        </div>
                        <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0">We are one of the top software development companies
                                    and ensure that this scenario will not happen to anyone at any time as it directly
                                    impacts business growth. In case such an incident occurs, you can raise your concern
                                    and we provide immediate resources replacement for smooth project execution &
                                    support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingfour" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>How
                                    easily can I ramp up/ramp down my offshore software development team?</button></h2>
                        </div>
                        <div id="collapsefour" aria-labelledby="headingfour" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0">For launching new products or features or executing
                                    multiple projects for you, we can add resources and provide the best offshore
                                    development teams. We can also ramp down the dedicated software development team
                                    after the final execution during the support or maintenance phase. We plan an
                                    effective ramp up, ramp down activity with 4-6 weeks of advance information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingfive" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="headingfive" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>How
                                    do I get assurance on Quality & Security of My Project?</button></h2>
                        </div>
                        <div id="collapsefive" aria-labelledby="headingfive" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light mb-3">We follow a 'Top 5% talent vetting process' quarterly
                                    to provide the most suitable candidate to our clients. Our team consists of project
                                    managers, skilled software developer, and many other technicians.</p>
                                <p class="font-weight-light m-0">We also sign an NDA (Non-disclosure Agreement) wherein
                                    intellectual property rights are owned by clients. We can help you to setup the best
                                    offshore software development center (ODC) at a rapid pace.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingsix" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapsegsix" aria-expanded="false" aria-controls="collapsegsix" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>In
                                    which time zone do you work?</button></h2>
                        </div>
                        <div id="collapsegsix" aria-labelledby="headingsix" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0">We are an offshore software company that offers
                                    flexible working hours to accommodate various time zones. We have 4 hours of overlap
                                    with EST, 6+ hours with GMT time zone and can tweak the timings for PST.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingseven" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapsegseven" aria-expanded="false" aria-controls="collapsegseven" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>What
                                    is your support or post launch policy?</button></h2>
                        </div>
                        <div id="collapsegseven" aria-labelledby="headingseven" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0 mb-3">Depending on the size of the project, we deliver
                                    1-3 months of post launch support. This service includes solving issues and user’s
                                    questions. This phase is covered in development cost as a warranty period.</p>
                                <p class="font-weight-light m-0">After the warranty period, we provide dedicated teams
                                    for maintenance in case of big projects or hourly support. So, you receive scalable
                                    software solutions at reasonable rates to maintain fluent business processes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="headingeight" class="card-header bg-white shadow-sm border-0">
                            <h2 class="mb-0"><button type="button" data-toggle="collapse" data-target="#collapsegeight" aria-expanded="false" aria-controls="collapsegeight" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link"><span>Q.</span>How
                                    do you manage a software development team?</button></h2>
                        </div>
                        <div id="collapsegeight" aria-labelledby="headingeight" data-parent="#accordionExample" class="collapse">
                            <div class="card-body p-4">
                                <p class="font-weight-light m-0 mb-3">To manage a software development team effectively,
                                    you need to align the professionals with your core objectives. Ensure to use a good
                                    connectivity platform and keep everyone in loop about the mission and vision of your
                                    business. If possible, try to cover the non-technical activities and allow the
                                    software developers to focus on their primary activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="tg-frm page_bottom_form gotForm section-padding">
    <div class="mb-3 mb-lg-5" id="contact">
        <h2 class="sub_title text-center mb-2">Contact Us</h2>
        <p class="text-center mb-3 w-50 ml-auto mr-auto">Tell us more about Your Project</p>
    </div>
    <div class="tabs_scroll">
        <ul class="technology_tabs_menu nav nav-pills" id="pills-tab">
            <li class="nav-item"><a class="nav-link active" id="pills-Web-tab" data-toggle="pill" href="#pills-Web" aria-controls="pills-Web" aria-label="Hire Developers">Hire Developers</a></li>
            <li class="nav-item"><a class="nav-link" id="pills-Mobile-tab" data-toggle="pill" href="#pills-Mobile" aria-controls="pills-Mobile" aria-label="Fixed Cost Project">Fixed Cost Project</a></li>
            <li class="nav-item"><a class="nav-link" id="pills-CMS-tab" data-toggle="pill" href="#pills-CMS" aria-controls="pills-CMS" aria-label="Apply for Job">Apply for Job</a></li>
        </ul>
    </div>
    <div class="technology_tabs">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Web" role="tabpanel" aria-labelledby="pills-Web-tab">
                <div class="container-custom">
                    <h2 class="sub_title text-center mb-1 font-18">Hire Developers</h2>
                    <p class="text-center mb-4 ml-auto mr-auto f-18">One of our Business Consultants will get back to you in a few hours</p>
                    <form method="post" class="form" id="planform" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input type="text" class="form-control" name="name" id="name" onkeydown="if (!window.__cfRLUnblockHandlers) return false; return/[a-z ]/i.test(event.key)" placeholder="Name*" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group"><input type="email" class="form-control" name="email" id="email" placeholder="Work Email*" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/^[a-zA-Z0-9@\\._-]+$/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input type="text" class="form-control" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/[0-9]/i.test(event.key)" name="number" id="number" maxlength="12" placeholder="Mobile Number" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group">
                                    <div class="rev-select"><select name="experience" id="experience" class="select-hidden form-control">
                                            <option value>Select Experience Level</option>
                                            <option value="Junior level (1-3 Years of experience)">Junior level (1-3 Years of experience)</option>
                                            <option value="Mid level (3-5 Years of experience)">Mid level (3-5 Years of experience)</option>
                                            <option value="Expert level (5-8 Years of experience)">Expert level (5-8 Years of experience)</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="row small-or-add">
                            <div class="col-md-6 pad-adjs-r d-flex flex-column flex-lg-row">
                                <div class="form-group input03 or-adjs w-100">
                                    <div class="filemain">
                                        <div class="fileupload">
                                            <div class="file-upload-wrapper"><span class="icon sprite_img bg-17"></span><label for="file-upload">Attach Job Description</label><input type="file" name="file" class="file-upload form-control" id="file-upload" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword" data-msg-accept="Upload document only in pdf,docx,doc format.">
                                                <div id="file-upload-filename"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="or-section m-0">
                                    <p class="form-head m-0">OR</p>
                                </div>
                            </div>
                            <div class="col-md-6 pad-adjs-l">
                                <div class="form-group"><textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Describe Job Role, Technology Stack"></textarea></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="H_k5 gz_RQ gz_RH false"><input type="checkbox" class="cfNda" name="cfNda" id="cfNda" data-gtm-form-interact-field-id="0" checked="checked"><label for="cfNda">Send me NDA</label></div>
                                <div class="submit-btn text-center"><button class="btn herobanner-btn pdf-btn">submit</button> <input type="hidden" name="hire_for" value="index" id="hire_for"></div>
                            </div>
                        </div>
                    </form>
                    <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/forms/home/contact/hire-developer.js" type="8efb612bb118a64b9ccb388b-text/javascript"></script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    function hiredeveloperfunction() {
                        const phoneInput3 = document.querySelector("#number");
                        const iti3 = window.intlTelInput(phoneInput3, {
                            hiddenInput: "hiredevelopermobile",
                            separateDialCode: true,
                            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js"
                        });
                        const toggleBtn3 = document.querySelector('#planform .iti__selected-flag');
                        const countryListContainer3 = document.querySelector('#planform .iti__flag-container');
                        const initialCountryList3 = countryListContainer3.querySelector('ul');
                        const isExpanded3 = toggleBtn3.getAttribute('aria-expanded');
                        if (isExpanded3 === 'false') {
                            if (initialCountryList3 != null) {
                                initialCountryList3.remove();
                            }
                        }
                        if (toggleBtn3) {
                            toggleBtn3.addEventListener('click', function() {
                                const countryList3 = countryListContainer3.querySelector('ul');
                                if (countryList3 == null) {
                                    if (initialCountryList3 != null) {
                                        countryListContainer3.appendChild(initialCountryList3);
                                    }
                                }
                                //countryListContainer3.style.display = countryList3 ? 'none' : 'block';
                            });
                        }

                    }
                    </script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    var input = document.getElementById("file-upload"),
                        infoArea = document.getElementById("file-upload-filename");

                    function showFileName(e) {
                        infoArea.textContent = "";
                        var n = e.srcElement.files[0].name;
                        infoArea.textContent = "File name: " + n
                    }
                    input.addEventListener("change", showFileName)
                    </script>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Mobile" role="tabpanel" aria-labelledby="pills-Mobile-tab">
                <div class="container-custom">
                    <h2 class="sub_title text-center mb-1 font-18">Fixed Cost Project</h2>
                    <p class="text-center mb-4 ml-auto mr-auto f-18">Please share the details & we will get back to you within 1 business day</p>
                    <form method="post" class="form" id="fixedcostproject" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input type="text" class="form-control" name="name" id="name1" placeholder="Name*" onkeydown="if (!window.__cfRLUnblockHandlers) return false; return/[a-z ]/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group"><input type="email" class="form-control" name="email" id="email1" placeholder="Work Email*" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/^[a-zA-Z0-9@\\._-]+$/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input type="text" class="form-control" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/[0-9]/i.test(event.key)" name="number" id="number1" maxlength="12" placeholder="Mobile Number" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group">
                                    <div class="rev-select"><select name="services" id="services" class="select-hidden form-control">
                                            <option value>Select Your Budget Range(USD) *</option>
                                            <option value="25-50K">25-50K</option>
                                            <option value="50-100K">50-100K</option>
                                            <option value="100K +">100K +</option>
                                            <option value="Other">Other</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="row small-or-add">
                            <div class="col-md-6 pad-adjs-r">
                                <div class="form-group input03 or-adjs">
                                    <div class="filemain">
                                        <div class="fileupload">
                                            <div class="file-upload-wrapper"><span class="icon sprite_img bg-17"></span><label for="file-upload">Upload Requirement Document</label><input type="file" name="file" class="file-upload form-control" id="file-upload1" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword" data-msg-accept="Upload document only in pdf,docx,doc format.">
                                                <div id="file-upload-filename1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="or-section m-0">
                                    <p class="form-head m-0">OR</p>
                                </div>
                            </div>
                            <div class="col-md-6 pad-adjs-l">
                                <div class="form-group"><textarea class="form-control" name="requirements" id="requirements" cols="30" rows="10" placeholder="Brief Requirement"></textarea></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="H_k5 gz_RQ gz_RH false"><input type="checkbox" class="cfNda" name="cfNda" id="cfNda1" data-gtm-form-interact-field-id="1" checked="checked"><label for="cfNda">Send me NDA</label></div>
                                <div class="submit-btn text-center"><button class="btn herobanner-btn pdf-btn">submit</button> <input type="hidden" name="hire_for" value="index" id="hire_for"></div>
                            </div>
                        </div>
                    </form>
                    <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/forms/home/contact/fixed-cost-project.js" type="8efb612bb118a64b9ccb388b-text/javascript"></script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    function fixedcostfunction() {
                        const phoneInput4 = document.querySelector("#number1");
                        const iti4 = window.intlTelInput(phoneInput4, {
                            hiddenInput: "fixcostprojectMobile",
                            separateDialCode: true,
                            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js"
                        });
                        const toggleBtn4 = document.querySelector('#fixedcostproject .iti__selected-flag');
                        const countryListContainer4 = document.querySelector('#fixedcostproject .iti__flag-container');
                        const initialCountryList4 = countryListContainer4.querySelector('ul');
                        const isExpanded4 = toggleBtn4.getAttribute('aria-expanded');
                        if (isExpanded4 === 'false') {
                            if (initialCountryList4 != null) {
                                initialCountryList4.remove();
                            }
                        }
                        if (toggleBtn4) {
                            toggleBtn4.addEventListener('click', function() {
                                const countryList4 = countryListContainer4.querySelector('ul');
                                if (countryList4 == null) {
                                    if (initialCountryList4 != null) {
                                        countryListContainer4.appendChild(initialCountryList4);
                                    }
                                }
                                //  countryListContainer4.style.display = countryList4 ? 'none' : 'block';
                            });
                        }

                    }
                    </script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    var input1 = document.getElementById("file-upload1"),
                        infoArea1 = document.getElementById("file-upload-filename1");

                    function showFileName1(e) {
                        infoArea1.textContent = "";
                        var n = e.srcElement.files[0].name;
                        infoArea1.textContent = "File name: " + n
                    }
                    input1.addEventListener("change", showFileName1)
                    </script>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-CMS" role="tabpanel" aria-labelledby="pills-CMS-tab">
                <div class="container-custom">
                    <h2 class="sub_title text-center mb-1 font-18">Apply for Job</h2>
                    <p class="text-center mb-4 ml-auto mr-auto f-18">Send Your Resume</p>
                    <form id="applyforjob" method="POST" class="form" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="ccol-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input class="form-control" type="text" name="name" id="name2" placeholder="Name*" onkeydown="if (!window.__cfRLUnblockHandlers) return false; return/[a-z ]/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="ccol-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group"><input class="form-control" type="email" name="email" id="email2" placeholder="Email*" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/^[a-zA-Z0-9@\\._-]+$/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="ccol-sm-12 col-md-6 pad-adjs-r">
                                <div class="form-group"><input class="form-control" type="text" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return/[0-9]/i.test(event.key)" name="number" id="number2" maxlength="12" placeholder="Mobile Number" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-sm-12 col-md-6 pad-adjs-l">
                                <div class="form-group"><input class="form-control" type="text" name="designation" id="designation" placeholder="Designation/Post you are looking for*" onkeydown="if (!window.__cfRLUnblockHandlers) return false; return/[a-z ]/i.test(event.key)" data-cf-modified-8efb612bb118a64b9ccb388b-></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input03 or-adjs">
                                    <div class="filemain">
                                        <div class="fileupload">
                                            <div class="file-upload-wrapper"><span class="icon sprite_img bg-17"></span><label for="file-upload">Upload Your Resume*</label><input type="file" class="file-upload form-control" name="file" id="file-upload2" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword" data-msg-accept="Upload resume in only pdf,docx,doc format.">
                                                <div id="file-upload-filename2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="submit-btn text-center"><button class="btn herobanner-btn pdf-btn">submit</button></div>
                            </div>
                        </div>
                    </form>
                    <script defer="defer" src="<?php echo get_stylesheet_directory_uri();?>/components/forms/home/contact/apply-for-job.js" type="8efb612bb118a64b9ccb388b-text/javascript"></script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    function applyforjobfunction() {
                        const phoneInput5 = document.querySelector("#number2");
                        const iti5 = window.intlTelInput(phoneInput5, {
                            hiddenInput: "applyjobMobile",
                            separateDialCode: true,
                            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js"
                        });
                        const toggleBtn5 = document.querySelector('#applyforjob .iti__selected-flag');
                        const countryListContainer5 = document.querySelector('#applyforjob .iti__flag-container');
                        const initialCountryList5 = countryListContainer5.querySelector('ul');
                        const isExpanded5 = toggleBtn5.getAttribute('aria-expanded');
                        if (isExpanded5 === 'false') {
                            if (initialCountryList5 != null) {
                                initialCountryList5.remove();
                            }
                        }
                        if (toggleBtn5) {
                            toggleBtn5.addEventListener('click', function() {
                                const countryList5 = countryListContainer5.querySelector('ul');
                                if (countryList5 == null) {
                                    if (initialCountryList5 != null) {
                                        countryListContainer5.appendChild(initialCountryList5);
                                    }
                                }
                                // countryListContainer5.style.display = countryList5 ? 'none' : 'block';
                            });
                        }

                    }
                    </script>
                    <script type="8efb612bb118a64b9ccb388b-text/javascript">
                    var input2 = document.getElementById("file-upload2"),
                        infoArea2 = document.getElementById("file-upload-filename2");

                    function showFileName2(e) {
                        infoArea2.textContent = "";
                        var n = e.srcElement.files[0].name;
                        infoArea2.textContent = "File name: " + n
                    }
                    input2.addEventListener("change", showFileName2)
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="8efb612bb118a64b9ccb388b-text/javascript">
hiredeveloperfunction(),
    fixedcostfunction(),
    applyforjobfunction()
</script>
<div class="floating_wrapper">
    <div class="action">
        <a data-balloon="Book a Meeting" data-balloon-pos="left" rel="noopener" aria-label="Book a Meeting" href="https://calendly.com/eluminoustechnologies_sandipkute/15min?month=2023-02">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/floating-menu/calendar.svg" alt="Book a Meeting" width="32" height="32" loading="lazy">
            <span class="live-toggle">Book a Meeting</span></a>
    </div>
    <div class="action">
        <a data-balloon="Call Us" data-balloon-pos="left" rel="noopener" aria-label="Call Us" href="tel:+918208222939">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/floating-menu/call.svg" alt="Call Us" width="32" height="32" loading="lazy">
            <span class="live-toggle"> Call Us </span></a>
    </div>
    <div class="action">
        <a data-balloon="Write to us" data-balloon-pos="left" rel="noopener" aria-label="Write to us" href="mailto:biz@eluminoustechnologies.com" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/floating-menu/sms.svg" alt="Write to us" width="32" height="26" loading="lazy">
            <span class="live-toggle"> Write to us </span></a>
    </div>
    <div class="action">
        <a data-balloon="WhatsApp" data-balloon-pos="left" rel="noopener" aria-label="WhatsApp" href="https://api.whatsapp.com/send?phone=918208222939" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/floating-menu/whatsapp.svg" alt="WhatsApp" width="32" height="32" loading="lazy">
            <span class="live-toggle"> WhatsApp </span></a>
    </div>
    <div onclick="if (!window.__cfRLUnblockHandlers) return false; fling();" id="fltBtn" class="floating-btn" data-cf-modified-8efb612bb118a64b9ccb388b->
        <p class="plus"></p>
    </div>
</div>
<div id="scroll" class="scrolltop scroll icon">
    <div><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fluent-mdl2_up.svg" alt="fluent up" width="24" height="24" loading="lazy"></div>
</div>
<?php get_footer();?>