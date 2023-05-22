<?php 
require_once 'blogs/wp-config.php';
global $wpdb;
$query = new WP_Query( array( 'post_type' => 'post', 'showposts' => 3 ) );
$posts = $query->posts;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="Website Dezk is an award-winning digital agency that has helped thousands of customers expand their online presence.">
      <title>Website Dezk | Top Award-Winning Digital Agency</title>
      <?php include("includes/style.php"); ?>
   </head>
   <body id="hijo">
      <?php include("includes/header.php"); ?>

      <section class="mainBanner my-hd my-a">
         <div class="container-fluid px-3">
            <div class="row index-slider">               
                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img1_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img1_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img1_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img1_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img1_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img1_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img1_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img1_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Landing Page Design</h2>
                           <p class="btext2">Take your landing pages to the next level & convert visits into sales. </p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img2_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img2_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img2_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img2_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img2_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img2_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img2_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img2_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Ecommerce Solutions </h2>
                           <p class="btext2">Get your store online to get greater visibility and sales-producing traffic. </p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img3_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img3_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img3_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img3_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img3_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img3_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img3_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img3_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Website Design</h2>
                           <p class="btext2">Get your website designed with features and tools that enhance user experience and bring traffic. </p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img6_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img6_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img6_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img6_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img6_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img6_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img6_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img6_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Social Media Management </h2>
                           <p  class="btext2">Create captivating social media to raise brand awareness and boost online sales.</p>
                           <a href="#"  class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img5_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img5_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img5_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img5_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img5_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img5_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img5_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img5_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Digital Marketing</h2>
                           <p class="btext2">Promote your brand online to drive lead generation and brand awareness. </p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img4_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img4_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img4_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img4_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img4_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img4_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img4_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img4_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>SEO Services</h2>
                           <p class="btext2">Be a Google VIP with our SEO services, and take your site to the top!</p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 px-1">
                     <div class="mainbanner-card">
                        <div class="mainbanner-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/banner/mainbanner-img7_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img7_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img7_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img7_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/banner/mainbanner-img7_1x.webp"
                                 srcset="assets/images/banner/mainbanner-img7_1x.webp 1x, 
                                       assets/images/banner/mainbanner-img7_2x.webp 2x, 
                                       assets/images/banner/mainbanner-img7_3x.webp 3x"
                              />
                           </picture>
                        </div>

                        <div class="mainbanner-cont">
                           <h2>Website Development</h2>
                           <p class="btext2">Improve your conversion rates with beautiful, fast & secure websites developed in latest technology.</p>
                           <a href="#" class="cta1">
                              start Now
                              <span class="svg">
                                 <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </section>

      <section class="newclientlogo">
         <div class="container">
            <ul class="newClientLogoSec-list">
               <?php 
                  for ($x = 1; $x <= 8; $x++) {
                     $num = $x;
               ?>
                  <li>
                     <picture>
                        <source loading="lazy" class="img-fluid"    
                           src="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp"
                           srcset="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp 1x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_2x.webp 2x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_3x.webp 3x"
                        />
                        
                        <img loading="lazy"  class="img-fluid"
                           alt="work1"        
                           src="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp"
                           srcset="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp 1x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_2x.webp 2x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_3x.webp 3x"
                        />
                     </picture>
                  </li>
               <?php 
                  }
               ?>
               <?php 
                  for ($x = 1; $x <= 8; $x++) {
                     $num = $x;
               ?>
                  <li>
                     <picture>
                        <source loading="lazy" class="img-fluid"    
                           src="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp"
                           srcset="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp 1x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_2x.webp 2x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_3x.webp 3x"
                        />
                        
                        <img loading="lazy"  class="img-fluid"
                           alt="work1"        
                           src="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp"
                           srcset="assets/images/new_logo/ni<?php echo $num; ?>_1x.webp 1x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_2x.webp 2x, 
                                 assets/images/new_logo/ni<?php echo $num; ?>_3x.webp 3x"
                        />
                     </picture>
                  </li>
               <?php 
                  }
               ?>
            </ul>
         </div>
      </section>

      <section class="homeSection1">
         <div class="container">
            <div class="hSec1-hd my-hd">
               <h1>One-stop platform for all brands.</h1>
               <p class="subheading">Effective online marketing and branding starts and end with us.</p>
            </div>
            
            <div class="hSec1-counter my-hd">
               <ul>
                  <li data-targetit="box-bp1" class="current">
                     <div>
                        10 years of experience                     
                     </div>
                  </li>
                  <li data-targetit="box-bp2">
                     <div>
                        400+ industry experts
                     </div>
                  </li>
                  <li data-targetit="box-bp3">
                     <div>
                        1560+ projects deployed
                     </div>
                  </li>
                  <li data-targetit="box-bp4">
                     <div>
                        1000+ <br> reviews
                     </div>
                  </li>
               </ul>
            </div>
            
            <div class="box-bp1 showfirst">
               <div class="hSec1-main">
                  <div class="row align-items-stretch">
                     <div class="col-md-6">
                        <div class="hSec1-cont mn-a my-hd">
                           <p class="btext1">
                           Our team comprises experts with more than 10 years of industry experience. They have worked with several diverse clients over the years. They are up to date regarding the latest trends, developments, and innovations in the digital marketing, branding, web design, and development domain. 
                           </p>
                           <div class="text-end">
                              <a href="who-we-are.php" class="theam-color">
                                 About Us
                                 <span class="svg">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
      
                     <div class="col-md-6">
                        <div class="hSec1-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec1-img1_1x.webp"
                                 srcset="assets/images/hsec1-img1_1x.webp 1x, 
                                       assets/images/hsec1-img1_2x.webp 2x, 
                                       assets/images/hsec1-img1_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec1-img1_1x.webp"
                                 srcset="assets/images/hsec1-img1_1x.webp 1x, 
                                       assets/images/hsec1-img1_2x.webp 2x, 
                                       assets/images/hsec1-img1_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="box-bp2">
               <div class="hSec1-main">
                  <div class="row align-items-stretch">
                     <div class="col-md-6">
                        <div class="hSec1-cont mn-a my-hd">
                           <p class="btext1">
                           Our dedicated designers, developers, and marketing specialists know that winning takes more than best practices and optimizations. It takes unwavering commitment, confidence, and deep expertise to propel your business to success.  
                           </p>
                           <div class="text-end">
                              <a href="who-we-are.php" class="theam-color">
                                 About Us
                                 <span class="svg">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
      
                     <div class="col-md-6">
                        <div class="hSec1-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec1-img2_1x.webp"
                                 srcset="assets/images/hsec1-img2_1x.webp 1x, 
                                       assets/images/hsec1-img2_2x.webp 2x, 
                                       assets/images/hsec1-img2_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec1-img2_1x.webp"
                                 srcset="assets/images/hsec1-img2_1x.webp 1x, 
                                       assets/images/hsec1-img2_2x.webp 2x, 
                                       assets/images/hsec1-img2_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="box-bp3">
               <div class="hSec1-main">
                  <div class="row align-items-stretch">
                     <div class="col-md-6">
                        <div class="hSec1-cont mn-a my-hd">
                           <p class="btext1">
                           We deal with different business setups; some are startups with limited funds to allocate for promotions, and some are established corporations with more eagerness to hop on every marketing trend. Over the years, we have worked with innovative business models from different industries and have provided web design/development, marketing, and SEO solutions to countless many. 
                           </p>
                           <div class="text-end">
                              <a href="who-we-are.php" class="theam-color">
                                 About Us
                                 <span class="svg">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
      
                     <div class="col-md-6">
                        <div class="hSec1-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec1-img3_1x.webp"
                                 srcset="assets/images/hsec1-img3_1x.webp 1x, 
                                       assets/images/hsec1-img3_2x.webp 2x, 
                                       assets/images/hsec1-img3_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec1-img3_1x.webp"
                                 srcset="assets/images/hsec1-img3_1x.webp 1x, 
                                       assets/images/hsec1-img3_2x.webp 2x, 
                                       assets/images/hsec1-img3_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="box-bp4">
               <div class="hSec1-main">
                  <div class="row align-items-stretch">
                     <div class="col-md-6">
                        <div class="hSec1-cont mn-a my-hd">
                           <p class="btext1">
                           We ensure your business drives high traction for your target buyers and can sustain high sales. With our unparalleled services, we aim to make you a satisfied customer! More than 90% stick with us, creating a lasting partnership that benefits their company’s long-term revenue and success online.
                           </p>
                           <div class="text-end">
                              <a href="who-we-are.php" class="theam-color">
                                 About Us
                                 <span class="svg">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
      
                     <div class="col-md-6">
                        <div class="hSec1-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec1-img4_1x.webp"
                                 srcset="assets/images/hsec1-img4_1x.webp 1x, 
                                       assets/images/hsec1-img4_2x.webp 2x, 
                                       assets/images/hsec1-img4_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec1-img4_1x.webp"
                                 srcset="assets/images/hsec1-img4_1x.webp 1x, 
                                       assets/images/hsec1-img4_2x.webp 2x, 
                                       assets/images/hsec1-img4_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="hSec2-cta">
               <div class="hSec2-cta-hd my-hd">
                  <h1>Get started now!</h1>
                  <p class="subheading">
                  We can help you grow your brand online.
                  </p>
               </div>

               <div class="hSec2-cta-form">
                  <input type="text" placeholder="Enter Your Website">
                  <button>
                     <b>Get a Proposal</b>

                     <?php include("includes/proposal-svg.php"); ?>
                  </button>
               </div>
            </div>
         </div>
      </section>

      <section class="homeSection2">
         <div class="container">
            <div class="hSec2-hd my-hd">
               <h1>You are in good company.</h1>
               <p class="subheading">We are ready to accelerate your business forward.</p>
            </div>
             
            <div class="row align-align-items-stretch">
               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>My website isn’t getting enough traffic.</h2>
   
                           <p class="btext3">
                           Don't let your website be a ghost town! You're missing out on potential visitors, leads, and revenue with low traffic. But don’t worry! Custom SEO solutions can turn things around for you.
                           </p>
   
                           <ul>
                              <li>Boost your presence in search results</li>
                              <li>Capture targeted site traffic</li>
                              <li>Turn site visitors into leads and customers</li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore SEO Solutions
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img1_1x.webp"
                              srcset="assets/images/hsec2-img1_1x.webp 1x, 
                                    assets/images/hsec2-img1_2x.webp 2x, 
                                    assets/images/hsec2-img1_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img1_1x.webp"
                              srcset="assets/images/hsec2-img1_1x.webp 1x, 
                                    assets/images/hsec2-img1_2x.webp 2x, 
                                    assets/images/hsec2-img1_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path style="fill:#ffffff00 !important" d="M31.1953 43.5313C27.3001 44.8423 23.0894 44.8838 19.1691 43.6499C15.2488 42.416 11.8209 39.9703 9.37877 36.6647C6.93662 33.359 5.60607 29.3639 5.57856 25.254C5.55105 21.1442 6.828 17.1316 9.22567 13.7935C11.6233 10.4555 15.0181 7.9641 18.9216 6.67783C22.825 5.39156 27.0359 5.37673 30.9483 6.63547C34.8607 7.89421 38.273 10.3616 40.6941 13.6827C43.1152 17.0038 44.4204 21.0073 44.4219 25.1172C44.3591 26.6926 44.1684 28.2603 43.8516 29.8047" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M29.5781 39.9219C28.1809 41.5093 26.6492 42.9731 25 44.2969" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M25 5.46875C30.2426 10.0492 33.4865 16.4978 34.0391 23.4375C34.1525 24.6972 34.176 25.9635 34.1094 27.2266" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M25 5.46875C22.1555 7.94803 19.8704 11.0034 18.2959 14.4325C16.7214 17.8616 15.8936 21.5862 15.8672 25.3594C15.8672 38.0156 21.5547 41.7656 24.9766 44.2969" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M8.10156 15.5469H41.9922" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M25 5.46094V44.2969" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M8.63281 35.5312H28.9375" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M5.57812 25.3594L44.4219 24.8828" stroke="black" stroke-width="2.34375"/>
                              <path style="fill:#ffffff00 !important" d="M41.8516 44.5313L45.3125 41.0625L39.0625 34.8125L42.6172 32.5391C42.669 32.5085 42.7103 32.4628 42.7356 32.4082C42.7609 32.3536 42.7689 32.2927 42.7588 32.2334C42.7486 32.174 42.7207 32.1192 42.6786 32.0762C42.6366 32.0331 42.5825 32.0038 42.5235 31.9922L30.5782 29.1953C30.5288 29.1853 30.4778 29.1876 30.4296 29.2021C30.3814 29.2166 30.3375 29.2429 30.3019 29.2785C30.2663 29.314 30.2401 29.3579 30.2256 29.4061C30.2111 29.4543 30.2087 29.5054 30.2188 29.5547L32.8125 41.7266C32.825 41.7858 32.8548 41.8399 32.8981 41.8821C32.9414 41.9243 32.9963 41.9526 33.0558 41.9635C33.1153 41.9744 33.1766 41.9673 33.2321 41.9432C33.2876 41.9191 33.3346 41.8791 33.3672 41.8282L35.6016 38.2813L41.8516 44.5313Z" stroke="black" stroke-width="2.34375"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>My website isn’t generating enough leads.</h2>
   
                           <p class="btext3">
                           Is your website leaving your lead pipeline dry? Don't panic! It's time to turn up the with custom digital marketing plans that fit your goals and budget.
                           </p>
   
                           <ul>
                              <li>Fill up your lead pipeline</li>
                              <li>Reach your most-valuable audience</li>
                              <li>Maximize conversion opportunities</li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore Digital Marketing Solutions
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img2_1x.webp"
                              srcset="assets/images/hsec2-img2_1x.webp 1x, 
                                    assets/images/hsec2-img2_2x.webp 2x, 
                                    assets/images/hsec2-img2_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img2_1x.webp"
                              srcset="assets/images/hsec2-img2_1x.webp 1x, 
                                    assets/images/hsec2-img2_2x.webp 2x, 
                                    assets/images/hsec2-img2_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1008_13535)">
                                 <path d="M42 15.0755V4.11895C42 1.85341 40.1568 0.0102539 37.8913 0.0102539H4.1087C1.84316 0.0102539 0 1.85341 0 4.11895V15.0755C0 17.341 1.84316 19.1842 4.1087 19.1842H15.1747L21.7887 39.0261C22.2033 40.2698 23.9718 40.2726 24.3873 39.0261L26.5918 32.4126L35.3678 41.1886C36.4357 42.2565 38.1735 42.2565 39.2415 41.1886L41.1785 39.2518C42.2463 38.1838 42.2463 36.4461 41.1784 35.3781L32.4024 26.6021L39.0159 24.3976C40.2603 23.9827 40.2617 22.2143 39.0159 21.799L31.1719 19.1843H37.8913C40.1568 19.1842 42 17.341 42 15.0755ZM34.2518 23.0982L29.4339 24.7041C28.4684 25.0259 28.1801 26.2534 28.8985 26.9719L39.2414 37.3149L37.3045 39.2517L26.9616 28.9087C26.2416 28.1886 25.0155 28.4797 24.6939 29.444L23.0879 34.262L17.506 17.5162C17.8425 17.6284 33.0017 22.6815 34.2518 23.0982ZM22.9544 16.4451V16.445L15.7737 14.0515C14.706 13.6953 13.6848 14.7144 14.0413 15.784L14.2617 16.4452H4.1087C3.35352 16.4452 2.73911 15.8308 2.73911 15.0756V4.11904C2.73911 3.36386 3.35352 2.74944 4.1087 2.74944H37.8913C38.6465 2.74944 39.2609 3.36386 39.2609 4.11904V15.0756C39.2609 15.8308 38.6465 16.4452 37.8913 16.4452L22.9544 16.4451Z" fill="black"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_1008_13535">
                                       <rect width="42" height="42" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>My website is dull and cluttered.</h2>
   
                           <p class="btext3">
                           Is your website layout poorly designed? Lack of color contrast and inconsistent typography are just a few reasons to blame. We’ll help you create a website that is:
                           </p>
   
                           <ul>
                              <li>Clear structure </li>
                              <li>Consistent visual display</li>
                              <li>Relevant content </li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore Website Design Solutions
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img3_1x.webp"
                              srcset="assets/images/hsec2-img3_1x.webp 1x, 
                                    assets/images/hsec2-img3_2x.webp 2x, 
                                    assets/images/hsec2-img3_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img3_1x.webp"
                              srcset="assets/images/hsec2-img3_1x.webp 1x, 
                                    assets/images/hsec2-img3_2x.webp 2x, 
                                    assets/images/hsec2-img3_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M30.3333 26C28.9519 26 27.8096 26.5443 27.0747 27.3745C26.3397 28.2065 26 29.2777 26 30.3333C26 31.6853 25.0155 32.7912 24.596 33.1188C23.9512 33.6284 24.31 34.6649 25.1333 34.6667H29.4667C30.8291 34.6667 32.0961 34.268 33.0581 33.5192C34.0201 32.7704 34.6667 31.6299 34.6667 30.3333C34.6667 29.1495 34.3321 28.0453 33.5747 27.2393C32.812 26.4333 31.6732 26 30.3333 26ZM30.3333 27.7333C31.3213 27.7333 31.9176 28.0107 32.3093 28.4267C32.7028 28.8427 32.9333 29.4701 32.9333 30.3333C32.9333 31.0821 32.604 31.6784 31.9973 32.1533C31.3855 32.6248 30.4859 32.9333 29.4667 32.9333H27.0001C27.4109 32.24 27.7316 31.3733 27.7316 30.3333C27.7316 29.6573 27.9569 28.9952 28.3695 28.5255C28.7855 28.0575 29.3817 27.7333 30.3333 27.7333ZM50.7589 8.68402C50.5405 8.71002 50.3551 8.76722 50.1488 8.84002C49.7363 8.97868 49.2596 9.20402 48.6963 9.48828C47.5696 10.0603 46.1361 10.8975 44.6229 11.8543C41.5896 13.7661 38.2789 16.1131 36.5768 17.8135C34.9561 19.4324 33.7757 20.9057 33.2211 22.3843C32.6664 23.8611 32.8987 25.4644 34.0496 26.6136C35.2023 27.7663 36.8056 28.0003 38.2824 27.4456C39.7609 26.8909 41.2343 25.7088 42.8532 24.0899C44.5519 22.386 46.9005 19.0753 48.8159 16.0472C49.7727 14.5288 50.6099 13.0936 51.1819 11.9687C51.4679 11.4071 51.6897 10.9287 51.8319 10.5161C51.9012 10.3081 51.9567 10.1244 51.9809 9.90602C52.0035 9.68762 52.0624 9.33922 51.6915 8.97002C51.3205 8.59735 50.9756 8.65802 50.7555 8.68055L50.7589 8.68402ZM49.6375 11.1869C49.1053 12.2321 48.2855 13.6413 47.3495 15.1216C45.4775 18.0908 43.0855 21.4101 41.6295 22.8661C40.0903 24.4036 38.7209 25.4315 37.6723 25.8249C36.6253 26.2149 36.0187 26.1317 35.2751 25.3916C34.5349 24.6463 34.4517 24.0396 34.8417 22.9927C35.2369 21.9457 36.2631 20.5764 37.8057 19.0407C39.2617 17.5847 42.5793 15.1927 45.5468 13.3207C47.0305 12.3812 48.438 11.5613 49.4849 11.0292C49.7172 10.9668 49.7103 11.0673 49.6409 11.1852L49.6375 11.1869ZM4.33333 13.8667H33.8C34.2801 13.8667 34.6667 14.2532 34.6667 14.7333C34.6667 15.2135 34.2801 15.6 33.8 15.6H4.33333C3.8532 15.6 3.46667 15.2135 3.46667 14.7333C3.46667 14.2532 3.8532 13.8667 4.33333 13.8667ZM12.1333 11.2667C12.1333 11.7451 11.7451 12.1333 11.2667 12.1333C10.7883 12.1333 10.4 11.7451 10.4 11.2667C10.4 10.7883 10.7883 10.4 11.2667 10.4C11.7451 10.4 12.1333 10.7883 12.1333 11.2667ZM8.66667 11.2667C8.66667 11.7451 8.2784 12.1333 7.8 12.1333C7.3216 12.1333 6.93333 11.7451 6.93333 11.2667C6.93333 10.7883 7.3216 10.4 7.8 10.4C8.2784 10.4 8.66667 10.7883 8.66667 11.2667ZM5.2 11.2667C5.2 11.7451 4.81173 12.1333 4.33333 12.1333C3.85493 12.1333 3.46667 11.7451 3.46667 11.2667C3.46667 10.7883 3.85493 10.4 4.33333 10.4C4.81173 10.4 5.2 10.7883 5.2 11.2667ZM2.6 6.93335C1.1752 6.93335 0 8.10855 0 9.53335V42.4667C0 43.8915 1.1752 45.0667 2.6 45.0667H45.9333C47.3581 45.0667 48.5333 43.8915 48.5333 42.4667V21.6667C48.5333 20.5088 46.8 20.514 46.8 21.6667V42.4667C46.8 42.9624 46.4291 43.3333 45.9333 43.3333H2.6C2.10427 43.3333 1.73333 42.9624 1.73333 42.4667V9.53335C1.73333 9.03762 2.10427 8.66668 2.6 8.66668H45.9333C47.086 8.66668 47.0721 6.93335 45.9333 6.93335H2.6Z" fill="black"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>My website is heavy and takes time to load.</h2>
   
                           <p class="btext3">
                           Is your website losing its visitors and positions on search engines due to its speed? We got the solution to enhance user experience online through:
                           </p>
   
                           <ul>
                              <li>Front-end development  </li>
                              <li>Back-end development </li>
                              <li>Speed optimization </li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore Website Development Solutions 
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img4_1x.webp"
                              srcset="assets/images/hsec2-img4_1x.webp 1x, 
                                    assets/images/hsec2-img4_2x.webp 2x, 
                                    assets/images/hsec2-img4_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img4_1x.webp"
                              srcset="assets/images/hsec2-img4_1x.webp 1x, 
                                    assets/images/hsec2-img4_2x.webp 2x, 
                                    assets/images/hsec2-img4_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1008_13581)">
                                 <path d="M4.78333 35.5333C2.14635 35.5333 0 37.6797 0 40.3167C0 40.6945 0.30545 41 0.683333 41H8.88333C9.26122 41 9.56667 40.6945 9.56667 40.3167C9.56667 37.6797 7.42032 35.5333 4.78333 35.5333ZM1.43568 39.6333C1.70765 38.2974 2.76408 37.2478 4.1 36.9752V38.2667H5.46667V36.9752C6.80258 37.2485 7.85902 38.2974 8.13098 39.6333H1.43568Z" fill="black"/>
                                 <path d="M40.3167 29.3833H39.1181C39.0805 29.2884 39.0416 29.194 38.9992 29.0991L39.8472 28.251C40.1144 27.9839 40.1144 27.552 39.8472 27.2848L36.9485 24.3861C36.8071 24.2447 36.6205 24.1832 36.4353 24.1921C37.5184 23.6174 38.2667 22.4919 38.2667 21.1833V3.41667C38.2667 1.53272 36.734 0 34.85 0H3.41667C1.53272 0 0 1.53272 0 3.41667V21.1833C0 23.0673 1.53272 24.6 3.41667 24.6H12.3342L9.75253 29.3833H9.56667H8.54167C7.22283 29.3833 6.15 30.4562 6.15 31.775C6.15 33.0938 7.22283 34.1667 8.54167 34.1667H23.2333C23.2333 34.5446 23.5388 34.85 23.9167 34.85H25.1152C25.1528 34.945 25.1918 35.0393 25.2341 35.1343L24.3861 35.9823C24.1189 36.2495 24.1189 36.6813 24.3861 36.9485L27.2848 39.8472C27.552 40.1144 27.9839 40.1144 28.251 39.8472L29.0991 38.9992C29.194 39.0416 29.2884 39.0805 29.3833 39.1181V40.3167C29.3833 40.6946 29.6888 41 30.0667 41H34.1667C34.5446 41 34.85 40.6946 34.85 40.3167V39.1181C34.945 39.0805 35.0393 39.0416 35.1343 38.9992L35.9823 39.8472C36.2495 40.1144 36.6813 40.1144 36.9485 39.8472L39.8472 36.9485C40.1144 36.6813 40.1144 36.2495 39.8472 35.9823L38.9992 35.1343C39.0416 35.0393 39.0805 34.945 39.1181 34.85H40.3167C40.6946 34.85 41 34.5446 41 34.1667V30.0667C41 29.6888 40.6946 29.3833 40.3167 29.3833ZM1.36667 3.41667C1.36667 2.28643 2.28643 1.36667 3.41667 1.36667H34.85C35.9802 1.36667 36.9 2.28643 36.9 3.41667V17.7667H1.36667V3.41667ZM3.41667 23.2333C2.28643 23.2333 1.36667 22.3136 1.36667 21.1833V19.1333H36.9V21.1833C36.9 22.3136 35.9802 23.2333 34.85 23.2333H34.1667H30.0667H24.7872H13.4794H3.41667ZM35.9734 24.395L35.1343 25.2341C35.0393 25.1918 34.945 25.1528 34.85 25.1152V24.6C35.2457 24.6 35.6194 24.5194 35.9734 24.395ZM29.3833 24.6V25.1152C29.2884 25.1528 29.194 25.1918 29.0991 25.2341L28.4649 24.6H29.3833ZM27.0703 24.6L26.4812 25.189L26.0801 24.6H27.0703ZM23.2333 32.8H8.54167C7.97655 32.8 7.51667 32.3401 7.51667 31.775C7.51667 31.2099 7.97655 30.75 8.54167 30.75H9.56667H10.1598H23.2333V32.8ZM11.3054 29.3827L13.8867 24.6H24.4264L25.4979 26.1723L24.3861 27.2841C24.1189 27.5513 24.1189 27.9832 24.3861 28.2504L25.2341 29.0984C25.1918 29.1934 25.1528 29.2877 25.1152 29.3827H23.9167H11.3054ZM39.6333 33.4833H38.6364C38.3377 33.4833 38.0747 33.6767 37.9845 33.961C37.8806 34.291 37.7405 34.6272 37.5676 34.958C37.4296 35.2231 37.4795 35.5463 37.6906 35.7575L38.3986 36.4654L36.4661 38.3979L35.7581 37.6899C35.5463 37.4788 35.2238 37.4296 34.9587 37.5669C34.6279 37.7398 34.2917 37.8799 33.9617 37.9838C33.6767 38.0746 33.4833 38.3377 33.4833 38.6364V39.6333H30.75V38.6364C30.75 38.3377 30.5566 38.0747 30.2723 37.9845C29.9423 37.8806 29.6061 37.7405 29.2754 37.5676C29.0102 37.4303 28.687 37.4795 28.4759 37.6906L27.7679 38.3986L25.8355 36.4661L26.5434 35.7581C26.7546 35.547 26.8044 35.2238 26.6664 34.9587C26.4935 34.6279 26.3534 34.2917 26.2496 33.9617C26.1587 33.6767 25.8956 33.4833 25.597 33.4833H24.6V30.75H25.597C25.8956 30.75 26.1587 30.5566 26.2489 30.2723C26.3527 29.9423 26.4928 29.6061 26.6657 29.2754C26.8037 29.0102 26.7539 28.687 26.5427 28.4759L25.8348 27.7679L27.7672 25.8355L28.4752 26.5434C28.6863 26.7552 29.0095 26.8044 29.2747 26.6664C29.6054 26.4935 29.9416 26.3534 30.2717 26.2496C30.5566 26.1587 30.75 25.8956 30.75 25.597V24.6H33.4833V25.597C33.4833 25.8956 33.6767 26.1587 33.961 26.2489C34.291 26.3527 34.6272 26.4928 34.958 26.6657C35.2231 26.8037 35.5456 26.7545 35.7575 26.5427L36.4654 25.8348L38.3979 27.7672L37.6899 28.4752C37.4788 28.6863 37.4289 29.0095 37.5669 29.2747C37.7398 29.6054 37.8799 29.9416 37.9838 30.2717C38.0746 30.5566 38.3377 30.75 38.6364 30.75H39.6333V33.4833Z" fill="black"/>
                                 <path d="M32.1166 28.0167C29.8555 28.0167 28.0166 29.8556 28.0166 32.1167C28.0166 34.3779 29.8555 36.2167 32.1166 36.2167C34.3778 36.2167 36.2166 34.3779 36.2166 32.1167C36.2166 29.8556 34.3778 28.0167 32.1166 28.0167ZM32.1166 34.8501C30.6092 34.8501 29.3833 33.6242 29.3833 32.1167C29.3833 30.6093 30.6092 29.3834 32.1166 29.3834C33.624 29.3834 34.8499 30.6093 34.8499 32.1167C34.8499 33.6242 33.624 34.8501 32.1166 34.8501Z" fill="black"/>
                                 <path d="M13.4666 5.2664L12.5003 4.30017L7.71699 9.0835C7.44981 9.35069 7.44981 9.78255 7.71699 10.0497L12.5003 14.8331L13.4666 13.8668L9.16634 9.56662L13.4666 5.2664Z" fill="black"/>
                                 <path d="M28.4998 9.0835L23.7165 4.30017L22.7502 5.2664L27.0505 9.56662L22.7502 13.8668L23.7165 14.8331L28.4998 10.0497C28.767 9.78255 28.767 9.35069 28.4998 9.0835Z" fill="black"/>
                                 <path d="M20.5696 2.43148L14.4214 14.7279L15.6437 15.3391L21.7919 3.04265L20.5696 2.43148Z" fill="black"/>
                                 <path d="M28.0166 13.6666H26.6499V15.0333H28.0166V13.6666Z" fill="black"/>
                                 <path d="M30.75 13.6666H29.3833V15.0333H30.75V13.6666Z" fill="black"/>
                                 <path d="M33.4834 13.6666H32.1167V15.0333H33.4834V13.6666Z" fill="black"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_1008_13581">
                                       <rect width="41" height="41" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>My social media isn’t generating organic traffic.</h2>
   
                           <p class="btext3">
                           Is your business not getting new customers from traditional marketing tactics? Don’t panic! We can help you expand your organic reach online through the following and more:
                           </p>
   
                           <ul>
                              <li>User-engaging social media posts </li>
                              <li>Profile optimization with analytics </li>
                              <li>Paid advertisement options! </li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore Social Media Solutions  
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img5_1x.webp"
                              srcset="assets/images/hsec2-img5_1x.webp 1x, 
                                    assets/images/hsec2-img5_2x.webp 2x, 
                                    assets/images/hsec2-img5_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img5_1x.webp"
                              srcset="assets/images/hsec2-img5_1x.webp 1x, 
                                    assets/images/hsec2-img5_2x.webp 2x, 
                                    assets/images/hsec2-img5_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1008_13609)">
                                 <path d="M37.6775 20.2889C37.6502 19.2945 37.1617 18.4051 36.4199 17.8204C36.6159 17.4005 36.7253 16.9324 36.7253 16.4393C36.7253 14.6322 35.2551 13.162 33.448 13.162H29.6493L29.6688 8.5765C29.6726 7.67836 29.3257 6.83317 28.6919 6.19671C28.0581 5.56026 27.2145 5.20972 26.3163 5.20972C24.9687 5.20972 23.7565 6.01366 23.2281 7.25778C22.7752 8.3241 21.9099 9.90741 20.7256 11.8364C20.2238 12.6539 19.3155 13.1619 18.3554 13.1619H15.6616H13.0476H6.32129V31.5389H13.0477H15.6617L32.4947 31.539C34.3018 31.539 35.772 30.0686 35.772 28.2616C35.772 27.7744 35.6651 27.3116 35.4736 26.8957C36.2355 26.295 36.7254 25.364 36.7254 24.3209C36.7254 23.8343 36.6189 23.3723 36.4279 22.9567C36.5408 22.8676 36.6485 22.7703 36.7505 22.6655C37.3727 22.0258 37.7019 21.1817 37.6775 20.2889ZM13.0476 28.9249H8.93526V15.7759H13.0476V28.9249ZM34.8772 20.8425C34.8041 20.9175 34.6453 21.0434 34.4016 21.0434H33.4483H30.8364V23.6574H33.4483C33.814 23.6574 34.1116 23.955 34.1116 24.3208C34.1116 24.6865 33.8141 24.9841 33.4483 24.9841H32.4949H30.8365V27.5981H32.4949C32.8606 27.5981 33.1582 27.8958 33.1582 28.2615C33.1582 28.6272 32.8607 28.9249 32.4949 28.9249H15.6616V15.7759H18.3554C20.2178 15.7759 21.9796 14.7904 22.9535 13.2039C23.8258 11.783 24.999 9.77533 25.6342 8.27967C25.7519 8.00269 26.0197 7.82368 26.3165 7.82368C26.5144 7.82368 26.7001 7.90085 26.8399 8.04111C26.9795 8.18127 27.0558 8.3675 27.055 8.56541L27.0243 15.7759H33.4482C33.814 15.7759 34.1116 16.0736 34.1116 16.4393C34.1116 16.805 33.814 17.1027 33.4482 17.1027H30.8363V19.7167H33.4482H34.3606C34.7391 19.7167 35.055 20.0054 35.0647 20.3605C35.0714 20.6053 34.95 20.7675 34.8772 20.8425Z" fill="black"/>
                                 <path d="M0 0.860657V36.7594H17.3026L22 43.1393L26.6975 36.7594H44.0001V0.860657H0ZM41.3861 34.1454H25.3759L22 38.7305L18.624 34.1453H2.61397V3.47454H41.3861V34.1454Z" fill="black"/>
                              </g>
                              <defs>
                                 <clipPath id="clip0_1008_13609">
                                       <rect width="44" height="44" fill="white"/>
                                 </clipPath>
                              </defs>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-card">
                     <div class="hSec2-cont my-a">
                        <div class="hSec2-cont-main my-hd my-ul">
                           <h2>I can’t set up my ecommerce store.</h2>
   
                           <p class="btext3">
                           Feeling lost in the e-commerce jungle? Let's navigate it together! We'll help you set up your e-commerce store!
                           </p>
   
                           <ul>
                              <li>Understand ecommerce platforms</li>
                              <li>Set up your amazon store</li>
                              <li>Drive sales from your online store</li>
                           </ul>
                        </div>

                        <a href="#" class="cta3">
                           Explore Ecommerce Solutions
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                     </div>

                     <div class="hSec2-img">
                        <picture>
                           <source loading="lazy" class="img-fluid"    
                              src="assets/images/hsec2-img6_1x.webp"
                              srcset="assets/images/hsec2-img6_1x.webp 1x, 
                                    assets/images/hsec2-img6_2x.webp 2x, 
                                    assets/images/hsec2-img6_3x.webp 3x"
                           />
                           
                           <img loading="lazy"  class="img-fluid"
                              alt="work1"        
                              src="assets/images/hsec2-img6_1x.webp"
                              srcset="assets/images/hsec2-img6_1x.webp 1x, 
                                    assets/images/hsec2-img6_2x.webp 2x, 
                                    assets/images/hsec2-img6_3x.webp 3x"
                           />
                        </picture>
                     </div>

                     <div class="hSec2-veiw">
                        <a href="#">
                           <svg width="41" height="39" viewBox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M35.527 0H4.74009C2.12682 0 0 2.12686 0 4.74009V33.3999C0 36.0132 2.12686 38.14 4.74009 38.14H35.527C38.1403 38.14 40.2671 36.0131 40.2671 33.3999V4.74009C40.2671 2.12491 38.1402 0 35.527 0ZM38.2338 33.3984C38.2338 34.8901 37.0187 36.1052 35.527 36.1052L4.74009 36.1071C3.24843 36.1071 2.03335 34.892 2.03335 33.4004L2.03144 11.8363H38.2338L38.2338 33.3984ZM38.2338 9.80101H2.0314V4.74058C2.0314 3.24892 3.24648 2.03384 4.73814 2.03384H35.5251C37.0167 2.03384 38.2318 3.24892 38.2318 4.74058L38.2338 9.80101Z" fill="#FF6052"/>
                              <path d="M5.13916 5.19226H8.09958V7.22566H5.13916V5.19226Z" fill="#FF6052"/>
                              <path d="M9.92651 5.19226H12.8869V7.22566H9.92651V5.19226Z" fill="#FF6052"/>
                              <path d="M14.7144 5.19226H17.6748V7.22566H14.7144V5.19226Z" fill="#FF6052"/>
                              <path d="M6.06184 30.5369H14.6035C15.1643 30.5369 15.6202 30.0811 15.6202 29.5203V18.1098C15.6202 17.549 15.1643 17.0931 14.6035 17.0931H6.06184C5.50106 17.0931 5.04517 17.549 5.04517 18.1098V29.5203C5.04517 30.081 5.49915 30.5369 6.06184 30.5369ZM7.07852 19.1264H13.5868V28.5036H7.07852V19.1264Z" fill="#FF6052"/>
                              <path d="M17.8787 18.0526H27.2558V20.086H17.8787V18.0526Z" fill="#FF6052"/>
                              <path d="M17.8787 22.7985H34.0351V24.8319H17.8787V22.7985Z" fill="#FF6052"/>
                              <path d="M17.8787 27.5425H34.0351V29.5759H17.8787V27.5425Z" fill="#FF6052"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>            
         </div>
      </section>

      <section class="homeAwardSection">
         <div class="container">
            <div class="hAwardSec-hd my-hd">
               <h1>Our results speak for us</h1>
               <p class="subheading">Our powerful results and outstanding customer service has <br> created a remarkable impact for our clients.</p>
            </div>
            
            <div class="row justify-content-center">
               <div class="col-md-8">
                  <div class="hSec2-cta-form">
                     <input type="text" placeholder="Enter Your Website">
                     <button>
                        <b>Get a Proposal</b>

                        <?php include("includes/proposal-svg.php"); ?>
                     </button>
                  </div>
               </div>
            </div>

            <div class="row align-items-stretch">
               <div class="col-md-3">
                  <div class="eCommerceSec3-card mn-a">
                     <h3>Andy’s Cleaning</h3>
                     <h4>Decrease in Cost <br> per lead</h4>
                     <p>80%</p>
                     <a href="#" class="theam-color">
                        Read Full Case Study
                        <span class="svg">
                           <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"></path>
                           </svg>
                        </span>
                     </a>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="eCommerceSec3-card mn-a">
                     <h3>Roofers </h3>
                     <h4>Increase in website traffic and leads</h4>
                     <p>3x</p>
                     <a href="#" class="theam-color">
                        Read Full Case Study
                        <span class="svg">
                           <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"></path>
                           </svg>
                        </span>
                     </a>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="eCommerceSec3-card mn-a my-hd">
                     <h3>Good Smell Club</h3>
                     <h4>Increase in organic traffic</h4>
                     <p>180%</p>
                     <a href="#" class="theam-color">
                        Read Full Case Study
                        <span class="svg">
                           <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"></path>
                           </svg>
                        </span>
                     </a>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="eCommerceSec3-card mn-a my-hd">
                     <h3>Samantha’s Home</h3>
                     <h4>Increase in Click-through rate</h4>
                     <p>300%</p>
                     <a href="#" class="theam-color">
                        Read Full Case Study
                        <span class="svg">
                           <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"></path>
                           </svg>
                        </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="homeSection4">
         <div class="container">
            <div class="hSec4-hd my-hd">
               <h1>The top choice for businesses online.</h1>
               <p class="subheading">We are here to help your venture reach new heights. </p>
            </div>

            <div class="row hSec4-main align-items-stretch">
               <div class="col-md-6">
                  <div class="hSec4-card hSec4-full">
                     <a href="#">
                        <div class="hSec4-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec4-1_1x.webp"
                                 srcset="assets/images/hsec4-1_1x.webp 1x, 
                                       assets/images/hsec4-1_2x.webp 2x, 
                                       assets/images/hsec4-1_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec4-1_1x.webp"
                                 srcset="assets/images/hsec4-1_1x.webp 1x, 
                                       assets/images/hsec4-1_2x.webp 2x, 
                                       assets/images/hsec4-1_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </a>
                     

                     <div class="hSec4-cont my-hd mn-a mn-hd">
                        <a href="#"><h2>Andy’s Cleaning</h2></a>
                        <a href="#"><p class="btext3">We helped a leading cleaning company get a clean website layout and cutting-edge Facebook ads.</p></a>

                        <a href="#" class="theam-color">
                           View Casestudy
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                        <!-- <div class="row">
                           <div class="col-md-8">
                           </div>

                           <div class="col-md-4">
                              <div class="hSec4-tags">
                                 <span>8 Specialists</span>
                                 <span>6 weeks</span>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec4-card hSec4-full">
                     <a href="#">
                        <div class="hSec4-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec4-2_1x.webp"
                                 srcset="assets/images/hsec4-2_1x.webp 1x, 
                                       assets/images/hsec4-2_2x.webp 2x, 
                                       assets/images/hsec4-2_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec4-2_1x.webp"
                                 srcset="assets/images/hsec4-2_1x.webp 1x, 
                                       assets/images/hsec4-2_2x.webp 2x, 
                                       assets/images/hsec4-2_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </a>

                     <div class="hSec4-cont my-hd mn-a">
                        <a href="#"><h2>Samantha’s Food</h2></a>
                        <a href="#"><p class="btext3">We helped an online food business with a wholesome website and captivating Instagram ads.</p></a>

                        <a href="#" class="theam-color">
                           View Casestudy
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                        <!-- <div class="row">
                           <div class="col-md-8">
                           </div>

                           <div class="col-md-4">
                              <div class="hSec4-tags">
                                 <span>5 Specialists</span>
                                 <span>7 weeks</span>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="hSec4-card hSec4-full">
                     <a href="#">
                        <div class="hSec4-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec4-3_1x.webp"
                                 srcset="assets/images/hsec4-3_1x.webp 1x, 
                                       assets/images/hsec4-3_2x.webp 2x, 
                                       assets/images/hsec4-3_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec4-3_1x.webp"
                                 srcset="assets/images/hsec4-3_1x.webp 1x, 
                                       assets/images/hsec4-3_2x.webp 2x, 
                                       assets/images/hsec4-3_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </a>

                     <div class="hSec4-cont my-hd mn-a">
                        <a href="#"><h2>Roofers</h2></a>
                        <a href="#"><p class="btext3">Roofers got a simplistic website design from us and some awesome lead-generation based Facebook campaigns</p></a>

                        <a href="#" class="theam-color">
                           View Casestudy
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                        <!-- <div class="row">
                           <div class="col-md-12">
                           </div>

                           <div class="col-md-12 pt-4">
                              <div class="hSec4-tags">
                                 <span>6 Specialists</span>
                                 <span>9 weeks</span>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="hSec4-card hSec4-full">
                     <a href="#">
                        <div class="hSec4-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec4-4_1x.webp"
                                 srcset="assets/images/hsec4-4_1x.webp 1x, 
                                       assets/images/hsec4-4_2x.webp 2x, 
                                       assets/images/hsec4-4_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec4-4_1x.webp"
                                 srcset="assets/images/hsec4-4_1x.webp 1x, 
                                       assets/images/hsec4-4_2x.webp 2x, 
                                       assets/images/hsec4-4_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </a>

                     <div class="hSec4-cont my-hd mn-a">
                        <a href="#"><h2>Good Smell Club </h2></a>
                        <a href="#"><p class="btext3">We helped an online aroma diffuser brand optimize its Shopify store’s SEO.</p></a>
                        

                        <a href="#" class="theam-color">
                           View Casestudy
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                        <!-- <div class="row">
                           <div class="col-md-12">
                           </div>

                           <div class="col-md-12 pt-4">
                              <div class="hSec4-tags">
                                 <span>4 Specialists</span>
                                 <span>8 weeks</span>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="hSec4-card hSec4-full">
                     <a href="#">
                        <div class="hSec4-img">
                           <picture>
                              <source loading="lazy" class="img-fluid"    
                                 src="assets/images/hsec4-5_1x.webp"
                                 srcset="assets/images/hsec4-5_1x.webp 1x, 
                                       assets/images/hsec4-5_2x.webp 2x, 
                                       assets/images/hsec4-5_3x.webp 3x"
                              />
                              
                              <img loading="lazy"  class="img-fluid"
                                 alt="work1"        
                                 src="assets/images/hsec4-5_1x.webp"
                                 srcset="assets/images/hsec4-5_1x.webp 1x, 
                                       assets/images/hsec4-5_2x.webp 2x, 
                                       assets/images/hsec4-5_3x.webp 3x"
                              />
                           </picture>
                        </div>
                     </a>

                     <div class="hSec4-cont my-hd mn-a">
                        <a href="#"><h2>Verivox</h2></a>
                        <a href="#"><p class="btext3">A platform for monitoring existing offers at the request of a client, which allows users to choose the best deal.</p></a>

                        <a href="#" class="theam-color">
                           View Casestudy
                           <span class="svg">
                              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z" fill="black"/>
                              </svg>
                           </span>
                        </a>
                        <!-- <div class="row">
                           <div class="col-md-12">
                           </div>

                           <div class="col-md-12 pt-4">
                              <div class="hSec4-tags">
                                 <span>7 Specialists</span>
                                 <span>12 weeks</span>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <?php include("includes/awrdsection.php"); ?>

      <section class="homeBlogSection">
         <div class="container">
            <div class="hBlogSec-hd my-hd">
               <h1>Our blogs & resources</h1>
               <p class="subheading">Unlock business growth with WebsiteDezk's blog!</p>
            </div>
            <div class="row">
               <?php 
               foreach ($posts as $post) {                     
                  $image_id = get_post_thumbnail_id($post->ID);
                  $img_src = wp_get_attachment_image_url($image_id, 'large');
                  $img_srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
                  $img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
                  ?>
                  
                  
                     <div class="col-md-4">
                        <div class="hBlogSec-card">
                           <a href="<?php the_permalink() ?>">
                              <div class="hBlogSec-img"> 
                                 <picture>
                                    <source loading="lazy" class="img-fluid" src="<?php echo esc_attr($img_src); ?>" srcset="<?php echo esc_attr($img_srcset); ?>" />

                                    <img loading="lazy"  class="img-fluid" alt="<?php $img_alt ?>" src="<?php echo esc_attr($img_src); ?>" srcset="<?php echo esc_attr($img_srcset); ?>" />
                                 </picture>
                              </div>

                              <div class="hBlogSec-cont my-hd">
                                 <div class="hd">
                                    <h2>
                                       <?php echo the_field('short_title'); ?>
                                    </h2>
                                    <span class="blog_date"><?php echo get_the_date(); ?></span>
                                 </div>
                                 <?php echo the_excerpt(); ?>
                                 
                                 <div class="hBlogSec-tag">
                                 <?php
                                    $tags = get_tags();
                                    foreach ( $tags as $tag ) :
                                    $tag_link = get_tag_link( $tag->term_id );
                                 ?>
                                    <span><?php echo $tag->name ?></span>
                                 <?php
                                    endforeach;
                                 ?>
                                 </div>
                                 <!-- <div class="row align-items-center mypading">
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6 text-end">
                                       <div class="hBlogSec-btn mn-a d-inline-block">
                                          <a href="<?php the_permalink() ?>">
                                             View Detail
                                             <span class="svg">
                                                   <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                         d="M10.9968 10.3886C11 6.6319 10.9862 3.34356 11 0C7.24647 0.00318716 3.94985 0.0138121 0.611899 0.00318737C0.607649 0.998721 0.606587 1.76154 0.602337 2.72933C2.56886 2.73464 4.63084 2.72933 6.3383 2.72933L0.225108 8.84282C-0.0766219 9.14457 -0.0745006 9.69491 0.228295 9.99877L1.00065 10.7712C1.3045 11.075 1.85482 11.0761 2.15655 10.7754L8.26974 4.66193C8.26655 6.57221 8.27293 8.48147 8.26443 10.3916C9.18446 10.3863 10.1863 10.3916 10.997 10.3885L10.9968 10.3886Z"
                                                         fill="black" />
                                                   </svg>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div> -->
                              </div>
                           </a>
                        </div>
                     </div>
                  
               <?php } ?>
            </div>
         </div>
      </section>

      <?php include("includes/featuresection.php"); ?>

      <section>
         <div class="container">
            <div class="hSec2-cta">
               <div class="hSec2-cta-hd my-hd">
                  <h1>Get on board now!</h1>
                  <p class="subheading">
                  Let us elevate your online presence.
                  </p>
               </div>

               <div class="hSec2-cta-form">
                  <input type="text" placeholder="Enter Your Website">
                  <button>
                     <b>Get a Proposal</b>

                     <?php include("includes/proposal-svg.php"); ?>
                 </button>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>