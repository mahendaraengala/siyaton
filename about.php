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

    <!-- Preloader Start Here -->
    <!-- <div class="preloader__wrap">
        <div class="preloader__box">
            <div class="robot">
                <img src="./siyaton-images/SIYATON-LOGO-01.png" alt="img">
            </div>
        </div>
    </div> -->
    <!-- Preloader End Here -->

<?php
include("./includes/header.php");
?>
<!-- Header top End -->

<!-- Banner Here -->
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
             
                  
                  <h1 class="title"> 
                About Us
                  </h1>
                              <p class="bread_crumbs"><a href="index.php" class="home_page">Home</a> / <a class="current_page"> Manufacturing</a></p>

                  <div class="combine-shape">
                  <img src="./assets-2/img/sbds-2.png">
               </div>
               </div>
            </div>
            <!--col-->
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 col-sm-12">
               <div class="breadcumnd__thumb bdt">
                  <img src="assets-2/img/hero-single-img-6.svg" alt="bread">
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

<!-- artificial Here -->
<section class="artificial__section bg__white pt-120 pb__60">
   <!--Container-->
   <div class="container">
      <div class="row align-items-center flex-row-reverse justify-content-between">
         <!--about content-->
         <div class="col-xl-6 col-xl-6 col-lg-6">
            <div class="artificial__content">
               <div class="section__header">
                  <h2>
                     We provide
                     most realistic
                     Artificial intelligence
                  </h2>
                  <p>
                     There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                  </p>
               </div>
               <div class="artificial__app">
                  <div class="articial__items">
                     <span class="apptext">
                        App Store
                     </span>
                     <span class="apppweek">
                        APP OF THE WEEK
                     </span>
                     <span class="date">
                        2023
                     </span>
                  </div>
                  <div class="articial__items">
                     <span class="apptext">
                        Google play
                     </span>
                     <span class="apppweek">
                        AWARD WINNER
                     </span>
                     <span class="date">
                        2023
                     </span>
                  </div>
                  <div class="articial__items">
                     <span class="apptext">
                        Envato
                     </span>
                     <span class="apppweek">
                        AWARD WINNER
                     </span>
                     <span class="date">
                        2023
                     </span>
                  </div>
               </div>
               <p class="pb__40">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
               </p>
               <a href="about-3.html" class="cmn--btn">
                  <span>
                     Read More
                  </span>
               </a>
            </div>
         </div>
         <!--about content-->
          <!--about thumb-->
          <div class="col-xl-5 col-xl-6 col-lg-6">
            <div class="artificial__thumb">
               <img src="assets/img/efective/artificial.png" alt="about">
            </div>
         </div>
         <!--about thumb-->
      </div>
   </div>
   <!--Container-->
   <!--element-->
   <div class="light__element1">
      <img src="assets/img/elements/light-elements.png" alt="light">
   </div>
   <div class="light__element2">
      <img src="assets/img/elements/light-elements.png" alt="light">
   </div>
   <div class="light__element3">
      <img src="assets/img/elements/light-elements.png" alt="light">
   </div>
   <div class="light__element4">
      <img src="assets/img/elements/light-elements.png" alt="light">
   </div>
   <div class="light__element5">
      <img src="assets/img/elements/light-elements.png" alt="light">
   </div>
   <div class="light__checkai">
      <img src="assets/img/elements/checkai.png" alt="light">
   </div>
   <!--element-->
</section>
<!-- artificial End -->

<section class="includeai__section bg-2 bgsection pt-80 pb-80">
   <!--container-->
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <!--col grid-->
         <div class="col-xxl-7 col-xl-7 col-lg-7">
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
                  Our Vision
                  </h4>
               
               </div>
               <ul class="about__chack about abte">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Our goal is to enable everybody who has come in contact with Siyaton Global to improve their position, both in the workplace and at home, or in life in general.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     We search for people & Teams that are motivated for changes. It is our firm belief that, in doing that, we can help them define and realize their personal and business goals. We offer various life skills, progress in career, as well as experienced experts interaction to understand the patterns in the industry. We are constantly striving towards new approaches and contact with the best teachers available. We use technology in order to generate comparative advantage, as we want to achieve mutual benefit both for our employees and our clients, in cooperation with us…
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     We inspire individuals and organizations to work more effectively and efficiently, and create greater choice in the domain of work, for the benefit of all concerned. As the world’s leading provider of solutions – a business that has a positive impact on millions of people every day – we are conscious of our global role.
                     </span>
                  </li>
                  
                  
               </ul>
               
            </div>
         </div>
         <div class="col-xxl-5 col-xl-5 col-lg-5">
            <div class="vis-img">
            <img src="./assets-2/img/vision.jpg">
            </div>
         </div>
        
      </div>
   </div>
   <!--container-->
   
<!--element-->

<div class="include__elements">
   <img src="assets/img/elements/include-element.png" alt="include">
</div>
<div class="include__blumb">
   <img src="assets/img/elements/blumb.png" alt="include">
</div>
<!--element-->
</section>
<section class="includeai__section mis bgsection pt-80 pb-80">
   <!--container-->
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <!--col grid-->
         
         <div class="col-xxl-5 col-xl-5 col-lg-5">
            <div class="vis-img">
            <img src="./assets-2/img/vision.jpg">
            </div>
         </div>
         <div class="col-xxl-7 col-xl-7 col-lg-7">
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
                  Our Mission
                  </h4>
               
               </div>
               <ul class="about__chack about abte">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Connecting together People, Business & Technology is our obligation both at the local and the global level. Having defined that objective, we want to be available at any moment for the clients and their challenges, and to enable them to fully realize the possibilities arising from cooperation with us, as well as the kinds of services we offer. In Siyaton Global, we firmly believe that, as a company, we are going to help the clients and their employees to achieve their goals, in accordance with our motto: Bringing Great People and Great Organizations Together.
                     </span>
                  </li>
            
                  
               </ul>
               
            </div>
         </div>
        
      </div>
   </div>
   <!--container-->
   
<!--element-->

<div class="include__elements">
   <img src="assets/img/elements/include-element.png" alt="include">
</div>
<div class="include__blumb">
   <img src="assets/img/elements/blumb.png" alt="include">
</div>
<!--element-->
</section>

<section class="includeai__section bg-2 bgsection pt-80 pb-80">
   <!--container-->
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <!--col grid-->

         <div class="col-xxl-7 col-xl-7 col-lg-7">
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
                  Our Strategy
                  </h4>
               
               </div>
               <ul class="about__chack about abte">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     The world of work is constantly changing and Siyaton Global is one of the leading forces shaping that change. With a growing demand for both flexible and skilled workforces, we have two distinct approaches to the market.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     For positions that require general skills, we offer our clients tailored solutions, focusing on industry know-how and cost leadership. This also means ensuring continuity and nurturing long-term relationships with associates.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     To fill positions requiring specialized professional skills, we have experts who can find the right candidates. Our aim is to provide consecutive assignments, ensuring talent retention and skill enhancement for our associates. In both approaches to the market, it is our goal to focus on operational excellence, specialization, and efficient delivery models.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     As the leader in CWS, we are aware that traditional patterns of employment will continue to evolve in the years to come. We, therefore, encourage present and future generations to see change as an opportunity in its multiple forms. We invite people to accept tomorrow’s challenges with confidence and to join us in shaping the future of the workplace.
                     </span>
                  </li>
                  
                  
               </ul>
               
            </div>
         </div>
         
         <div class="col-xxl-5 col-xl-5 col-lg-5">
            <div class="vis-img">
            <img src="./assets-2/img/vision.jpg">
            </div>
         </div>
         
        
      </div>
   </div>
   <!--container-->
   
<!--element-->

<div class="include__elements">
   <img src="assets/img/elements/include-element.png" alt="include">
</div>
<div class="include__blumb">
   <img src="assets/img/elements/blumb.png" alt="include">
</div>
<!--element-->
</section>



<!-- Testimonial Here -->
<section class="testimonial__section__five bgsection pt-120 pb-120">
   <!--contaienr-->
   <div class="container">
      <div class="row justify-content-between">
         <!--col grid-->
         <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="testimonial__content__five">
               <div class="section__header pb__40">
                  <h3 class="mb-4">
                     Customer Satisfaction Support & Services
                  </h3>
                  <p>
                     AI is the broader concept of machines being able to perform tasks that would normally require human intelligence, such as visual perception, speech recognition, and language translation.
                  </p>
               </div>
            </div>
         </div>
         <!--col grid-->
         <div class="col-xl-8 col-xl-8 col-lg-8">
            <div class="testimonial__wrap owl-theme owl-carousel">
               <div class="testimonial__items">
                  <div class="quote__icon">
                     <i class="material-symbols-outlined">
                        format_quote
                     </i>
                  </div>
                  <div class="star__grp">
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star_half
                     </i>
                  </div>
                  <p>
                     Our company has seen significant improvement in efficiency and accuracy since implementing AI and ML technology in our processes...
                  </p>
                  <div class="client__wrap">
                     <div class="thumb">
                        <img src="assets/img/testimonial/devon.png" alt="img">
                     </div>
                     <div class="content">
                        <h5>
                           Devon Lane 
                        </h5>
                        <span class="designation">
                           Louis Vuitton
                        </span>
                     </div>
                  </div>
               </div>
               <div class="testimonial__items titems__two">
                  <div class="quote__icon">
                     <i class="material-symbols-outlined">
                        format_quote
                     </i>
                  </div>
                  <div class="star__grp">
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star_half
                     </i>
                  </div>
                  <p>
                     Our company has seen significant improvement in efficiency and accuracy since implementing AI and ML technology in our processes...
                  </p>
                  <div class="client__wrap">
                     <div class="thumb">
                        <img src="assets/img/testimonial/jenny.png" alt="img">
                     </div>
                     <div class="content">
                        <h5>
                           Devon Lane 
                        </h5>
                        <span class="designation">
                           Louis Vuitton
                        </span>
                     </div>
                  </div>
               </div>
               <div class="testimonial__items">
                  <div class="quote__icon">
                     <i class="material-symbols-outlined">
                        format_quote
                     </i>
                  </div>
                  <div class="star__grp">
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star_half
                     </i>
                  </div>
                  <p>
                     Our company has seen significant improvement in efficiency and accuracy since implementing AI and ML technology in our processes...
                  </p>
                  <div class="client__wrap">
                     <div class="thumb">
                        <img src="assets/img/testimonial/devon.png" alt="img">
                     </div>
                     <div class="content">
                        <h5>
                           Devon Lane 
                        </h5>
                        <span class="designation">
                           Louis Vuitton
                        </span>
                     </div>
                  </div>
               </div>
               <div class="testimonial__items">
                  <div class="quote__icon">
                     <i class="material-symbols-outlined">
                        format_quote
                     </i>
                  </div>
                  <div class="star__grp">
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star
                     </i>
                     <i class="material-symbols-outlined">
                        star_half
                     </i>
                  </div>
                  <p>
                     Our company has seen significant improvement in efficiency and accuracy since implementing AI and ML technology in our processes...
                  </p>
                  <div class="client__wrap">
                     <div class="thumb">
                        <img src="assets/img/testimonial/jenny.png" alt="img">
                     </div>
                     <div class="content">
                        <h5>
                           Devon Lane 
                        </h5>
                        <span class="designation">
                           Louis Vuitton
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--col grid-->
      </div>
   </div>
   <!--contaienr-->
</section>
<!-- Testimonial End -->



<!-- work section five Here -->
<section class="five__work__section bg__white pt-120 pb-120">
   <!--container-->
   <div class="container">
      <!--Header-->
      <div class="section__header section__center pb__60">
         <h2>
            How It’s Work
         </h2>
         <p>
            AI is the broader concept of machines being able to carry out tasks in a way that would normally require human intelligence.
         </p>
      </div>
      <!--Header-->
     <div class="row g-4">
         <!--col-->
         <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="five__work__items">
               <div class="icon">
                  <img src="assets/img/svg-icon/brain.svg" alt="icon">
               </div>
               <div class="content">
                  <h5>
                     Data Generated
                  </h5>
                  <p>
                     The integration of AI and ML is leading to the creation of...
                  </p>
               </div>
            </div>
         </div>
         <!--col-->
         <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="five__work__items five__work__2">
               <div class="icon">
                  <img src="assets/img/svg-icon/stored.svg" alt="icon">
               </div>
               <div class="content">
                  <h5>
                     Data Stored
                  </h5>
                  <p>
                     The integration of AI and ML is leading to the creation of...
                  </p>
               </div>
            </div>
         </div>
         <!--col-->
         <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="five__work__items five__work__3">
               <div class="icon">
                  <img src="assets/img/svg-icon/prosesing.svg" alt="icon">
               </div>
               <div class="content">
                  <h5>
                     Data Processing
                  </h5>
                  <p>
                     The integration of AI and ML is leading to the creation of...
                  </p>
               </div>
            </div>
         </div>
         <!--col-->
         <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="five__work__items five__work__4">
               <div class="icon">
                  <img src="assets/img/efective/actionable.png" alt="icon">
               </div>
               <div class="content">
                  <h5>
                     Actionable Insights
                  </h5>
                  <p>
                     The integration of AI and ML is leading to the creation of...
                  </p>
               </div>
            </div>
         </div>
         <!--col-->
     </div>
   </div>
   <!--container-->
   <!--element-->
   <div class="jav__round">
      <img src="assets/img/elements/j-shape.png" alt="img">
   </div>
   <div class="jthred__ball">
      <img src="assets/img/elements/ball3d.png" alt="img">
   </div>
   <!--element-->
</section>
<!-- work section five End -->




<!-- Footer Here -->
<?php
include('./includes/footer.php');
?>




   <!--Jquery 3 6 0 Min Js-->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--Odometer min Js-->
   <script src="assets/js/odometer.min.js"></script>
   <!--Magnifiw Popup Js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!--Wow min Js-->
   <script src="assets/js/wow.min.js"></script>
   <!--Owl carousel min Js-->
   <script src="assets/js/owl.carousel.min.js"></script>
   <!--Prijm Js-->
   <script src="assets/js/prism.js"></script>
   <!--main Js-->
   <script src="assets/js/main.js"></script>

</body>


</html>