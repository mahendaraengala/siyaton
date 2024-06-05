<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Siyaton</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets-2/img/logo/favicon.png">
   <!--main css-->
   <link rel="stylesheet" href="assets-2/css/main.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   <style>
      @keyframes move_wave {
         0% {
            transform: translateX(0) translateZ(0) scaleY(1)
         }

         50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
         }

         100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
         }
      }

      .waveWrapper {
         overflow: hidden;
         position: absolute;
         left: 0;
         right: 0;
         bottom: 0;
         top: 0;
         margin: auto;
      }

      .waveWrapperInner {
         position: absolute;
         width: 100%;
         overflow: hidden;
         height: 24%;
         bottom: 0px;
         /* background-image: linear-gradient(to top, #17346f 20%, #16397a 80%); */
      }

      .bgTop {
         z-index: -1;
         opacity: 0.1;
      }

      .bgMiddle {
         z-index: 10;
         opacity: 0.75;
      }

      .bgBottom {
         z-index: 5;
      }

      .wave {
         position: absolute;
         left: 0;
         width: 200%;
         height: 100%;
         background-repeat: repeat no-repeat;
         background-position: 0 bottom;
         transform-origin: center bottom;
      }

      .waveTop {
         background-size: 50% 100px;
      }

      .waveAnimation .waveTop {
         animation: move-wave 3s;
         -webkit-animation: move-wave 3s;
         -webkit-animation-delay: 1s;
         animation-delay: 1s;
      }

      .waveMiddle {
         background-size: 50% 120px;
      }

      .waveAnimation .waveMiddle {
         animation: move_wave 10s linear infinite;
      }

      .waveBottom {
         background-size: 50% 100px;
      }

      .waveAnimation .waveBottom {
         animation: move_wave 15s linear infinite;
      }
   </style>


</head>

<body>



   <?php
   include("./includes/header.php");
   ?>

   <!-- Banner Here -->
   <section class="banner__section breadcumnd__banner micro-bg">


      <!--Mask-->

      <!--Mask-->
      <!--Container-->
      <div class="container">
         <div class="breadcumnd__wrapper">
            <div class="row justify-content-between">
               <!--col-->
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                  <div class="breadcumnd__content">
                     <!-- <div class="top-shape">
                  <img src="./assets-2/img/grop-shape-3.svg">
               </div> -->

                     <div class="b-h">


                     </div>
                     <h1 class="title">
                        Automotive
                     </h1>
                     <p class="bread_crumbs"><a href="index.php" class="home_page">Home</a> / <a class="current_page"> Automotive</a></p>

              
                  </div>
               </div>
               <!--col-->
               <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 col-sm-12">
                  <div class="breadcumnd__thumb bdt">
                     <img src="assets-2/img/automotive industry.png" alt="bread">
                  </div>
               </div>
               <!--col-->
            </div>
            <!--ai text-->

            <!--ai text-->
         </div>
      </div>
      <div class="waveWrapper waveAnimation">
         <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
         </div>
         <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
         </div>
         <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
         </div>
      </div>
      <!-- <div class="banner__bgmask bgm">
      <img src="./assets-2/img/hero-bottom-shape.svg" class="bg-shape" alt="mask">
   </div>  -->
      <!--Container-->
   </section>
   <!-- Banner End -->

   <!-- About Here -->
   <section class="about__section about__section__two bg__white pt-80 pb-80">
      <!--Container-->
      <div class="container">
         <div class="row align-items-center flex-row-reverse">


            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="service-img">
                  <img src="./assets-2/img/automotive-industry-2.jpg" alt="about">
               </div>
            </div>
            <!--about thumb-->
            <!--about content-->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="about__content abt-bg">
                  <div class="section__header">

                     <h2>
                        Siyaton Automotive
                     </h2>


                     <p>
                        Siyaton Global understands the intricacies of the automotive industry and will provide candidates with highly matched skills from entry level to senior positions. Siyaton Global can specialize your Automotive staffing plan and has done so for current clients by supplying on-site account management.
                     </p>

                     <p>Our expertise in the automotive industry allows us to provide close partnerships with clients and to work quickly and efficiently to find and hire the best and most appropriate Technical Professionals. Our goal is to meet the product development needs of our clients and at the same time, create a fit for their corporate culture.</p>
                  </div>

               </div>
            </div>

         </div>
      </div>
      <!--Container-->
      <!--elements-->
      <div class="ball3d">
         <img src="assets-2/img/elements/ball3d.png" alt="ball3d">
      </div>
      <div class="banner3__two">
         <img src="assets-2/img/elements/3dround.png" alt="ball3d">
      </div>
      <div class="banner__blump">
         <img src="assets-2/img/elements/blumb.png" alt="ball3d">
      </div>
      <div class="banner__nulldimond">
         <img src="assets-2/img/elements/null-dimond.png" alt="ball3d">
      </div>
      <!--elements-->
   </section>
   <!-- About End -->

   <!-- efective Here -->
   <section class=" bg-2 bgsection pt-80 pb-80">
      <!--container-->
      <div class="container">
         <div class="row justify-content-center align-items-center">
            <!--col grid-->
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="sales-force-bg">
                  <img src="./assets-2/img/automotive-3.jpg">


               </div>
            </div>
            <!--col grid-->
            <!--col grid-->
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="about__content include__cheack">
                  <!--Include element-->
                  <div class="threeroune">
                     <img src="assets/img/elements/3dround.png" alt="img">
                  </div>
                  <div class="include__null">
                     <img src="assets/img/elements/null-dimond.png" alt="img">
                  </div>
                  <!--Include element-->
                  <div class="section__header">
                     <h4 class="wow fadeInUp micro-head" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        Siyaton Global’s automotive division typically places:
                     </h4>
                     <p style="color:#fff;">Along with all this support and education, Rely Services continues to offer the best Customer Support in the marketplace.</p>

                  </div>
                  <ul class="about__chack">
                     <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Design Engineers
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Quality Assurance Engineer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Project Engineer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Software Engineer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Application Developer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Supply Chain/Logistics Engineer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Test Engineer
                        </span>
                     </li>
                     <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <span class="icon">
                           <i class="material-symbols-outlined">
                              task_alt
                           </i>
                        </span>
                        <span>
                           Finance/Accounting
                        </span>
                     </li>

                  </ul>

               </div>
            </div>
            <!--col grid-->
            <!-- <div class="col-xxl-1 col-xl-1 col-lg-1"></div> -->

         </div>
      </div>
      <!--container-->

   </section>

   <section class="newsletter__section bg__white">
      <!--container-->
      <div class="container">
         <!--newsletter wrapper-->
         <div class="newsletter__wrapper pt-120 pb-120">
            <div class="row justify-content-center">
               <!--col grid-->
               <div class="col-xl-6 col-lg-6">
                  <div class="newsletter__content">
                     <div class="section__header section__center">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                           SUBSCRIBE TO NEWSLETTERS AND GET NEWS.
                        </h2>
                        <p class="wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                           Sign up for updates and stay informed about the latest developments and be a part of our community and get the latest news and insights
                        </p>
                     </div>
                     <form action="#">
                        <input type="email" placeholder="Enter your email address" fdprocessedid="djijqg">
                        <button class="cmn--btn" type="submit" fdprocessedid="gmnmx">
                           <span>
                              Subscribe
                           </span>
                        </button>
                     </form>
                     <!--map mast-->
                     <div class="map__mask">
                        <img src="assets-2/img/elements/map.png" alt="ma--mask">
                     </div>
                     <!--map mast-->
                  </div>
               </div>
               <!--col grid-->
            </div>
            <!--newletter element-->
            <div class="news__element1">
               <img src="assets-2/img/elements/news-elements2.png" alt="new">
            </div>
            <div class="news__element2">
               <img src="assets-2/img/elements/news-element1.png" alt="new">
            </div>
            <!--newletter element-->
         </div>
         <!--newsletter wrapper-->
      </div>
      <!--container-->
      <!--efect Element-->
      <div class="efect__element2">
         <img src="assets-2/img/elements/efect-cross.png" alt="img">
      </div>
      <div class="efect__cross">
         <img src="assets-2/img/elements/efect-cross2.png" alt="img">
      </div>
      <div class="efect__element7">
         <img src="assets-2/img/elements/efect-rount.png" alt="img">
      </div>
      <div class="efect__element8">
         <img src="assets-2/img/elements/efect-rount.png" alt="img">
      </div>
      <!--efect Element-->
   </section>
   <!-- Footer Here -->
   <?php
   include("./includes/footer.php");
   ?>

   <!-- Footer End -->





   <!--Jquery 3 6 0 Min Js-->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="assets-2/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets-2/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets-2/js/viewport.jquery.js"></script>
   <!--Odometer min Js-->
   <script src="assets-2/js/odometer.min.js"></script>
   <!--Magnifiw Popup Js-->
   <script src="assets-2/js/jquery.magnific-popup.min.js"></script>
   <!--Wow min Js-->
   <script src="assets-2/js/wow.min.js"></script>
   <!--Owl carousel min Js-->
   <script src="assets-2/js/owl.carousel.min.js"></script>
   <!--Prijm Js-->
   <script src="assets-2/js/prism.js"></script>
   <!--main Js-->
   <script src="assets-2/js/main.js"></script>
</body>

</html>