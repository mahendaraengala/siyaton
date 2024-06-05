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


/* Style the tab */
.tab {
 
  
  width: 100%;
 
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: #29aae1;
    color: #fff;
    padding: 15px 16px;
    margin: 5px 0px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #1e2462;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #29aae1;
}

/* Style the tab content */
.tabcontent {
    padding: 15px 15px;
    border: 1px solid #ccc;
    width: 100%;
}
.v-tabs{
   padding: 80px 0px;
}


.tablinks::after {
    content: "";
    width: 20%;
    height: 3px;
    background: #0f4c5c;
    position: absolute;
    top: -5px;
    left: 0;
    transition: all 0.3s ease 0s;
}


.center {
  width: 180px;
  height: 60px;
  position: absolute;
}

.btn {
  width: 180px;
  height: 60px;
  cursor: pointer;
  background: transparent;
  border: 1px solid #91C9FF;
  outline: none;
  transition: 1s ease-in-out;
}

svg {
  position: absolute;
  left: 0;
  top: 0;
  fill: none;
  stroke: #fff;
  stroke-dasharray: 150 480;
  stroke-dashoffset: 150;
  transition: 1s ease-in-out;
}

.btn:hover {
  transition: 1s ease-in-out;
  background: #4F95DA;
}

.btn:hover svg {
  stroke-dashoffset: -480;
}

.btn span {
  color: white;
  font-size: 18px;
  font-weight: 100;
}


.buton1 {
    display: inline-block;
    padding: 0.75rem 1.25rem;
    border-radius: 10rem;
    color: #fff;
  
    font-size: 1rem;
   
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
 .buton1:after {
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: #0cf;
	 border-radius: 10rem;
	 z-index: -2;
}
 .buton1:before {
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 width: 0%;
	 height: 100%;
	 background-color: #008fb3;
	 transition: all 0.3s;
	 border-radius: 10rem;
	 z-index: -1;
}
 .buton1:hover {
	 color: #fff;
}
 .buton1:hover:before {
	 width: 100%;
}

 
 span a {
	 font-size: 0.7rem;
	 color: #999;
	 text-decoration: underline;
}

.active:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1e2462;
    border-radius: 10rem;
    z-index: -2;
}
 .tabcontent .about__chack li span {
    line-height: 32px;
    color: #000;
}

section.v-tabs {
    background: #f3f5f7;
}
.ai-ig{
   position: relative;
   top: 20px;
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
                  Artificial Intelligence
                  </h1>
                              <p class="bread_crumbs"><a href="index.php" class="home_page">Home</a> / <a class="current_page">   Artificial Intelligence</a></p>

               
               </div>
            </div>
            <!--col-->
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 col-sm-12">
               <div class="breadcumnd__thumb bdt">
                  <img class="ai-ig" src="assets-2/img/artificial-intelligence-1.png" alt="bread">
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
            <div class="wave waveTop" style="background-image: url('./assets-2/img/wave-top.png')"></div>
         </div>
         <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('./assets-2/img/wave-mid.png')"></div>
         </div>
         <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('./assets-2/img/wave-bot.png')"></div>
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
               <img src="./assets-2/img/ai.jpg" alt="about">
            </div>
         </div>
         <!--about thumb-->
         <!--about content-->
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about__content abt-bg">
               <div class="section__header">
             
                  <h2>
                  Artificial <span class="spe-color"> Intelligence</span>
                  </h2>
             
                
               
                  <ul class="about__chack about">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Artificial intelligence (AI) is intelligence exhibited by machines. In computer science, the field of AI research defines itself as the study of “intelligent agents”: any device that perceives its environment and takes actions that maximize its chance of success at some goal. Colloquially, the term “artificial intelligence” is applied when a machine mimics “cognitive” functions that humans associate with other human minds, such as “learning” and “problem solving”.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     SAP Artificial Intelligence is leveraged by the new dimension products such as SAP Leonardo and Clea.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     SAP Clea is SAP’s AI solution that is targeted towards developing intelligent enterprise applications.
                     </span>
                  </li>

                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     For starters there are going to be few application from SAP which are going to use CLEA for “smart” applications.
                     </span>
                  </li>
                
        
                  
               </ul>
               
               </div>
               
            </div>
         </div>
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="about__content abt-bg">
               <div class="section__header">
             
                 
                
               
                  <ul class="about__chack about">
               
               
                  <h4>Applications like</h4>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     SAP Clea Cash- Automatic matching of Payments to Invoice
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     SAP Clea Resume Matching
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     SAP Clea Brand Intelligence
                     </span>
                  </li>

                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Maybe in future you will have the Clea as a platform where you can have your custom application use CLEA for intelligence.
                     </span>
                  </li>
        
                  
               </ul>
               
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
      <img src="assets-2/img/medicine.png" alt="ball3d">
   </div>
   <!--elements-->
</section>
<!-- About End -->



<!-- efective Here -->
<section class="includeai__section bg-5 bgsection pt-80 pb-80">
   <!--container-->
   <div class="container">
      <div class="row justify-content-center align-items-center">
           <!--col grid-->
           <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="sales-force-bg">
               <img src="./assets-2/img/sales-force-5.png">
               
               
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
                  Siyaton Global’s Pharmaceutical division typically places:
                  </h4>
                 
               
               </div>
               <ul class="about__chack">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Mechanical Technician
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Manufacturing Technicians
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Maintenance Technicians
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Assembly Workers
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Inventory Control Technicians
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Materials Handling Technicians
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span>
                     Quality Control Specialists
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
   
<!--element--> 
<div class="include__elements">
   <img src="assets/img/elements/include-element.png" alt="include">
</div>
<div class="include__blumb">
   <img src="assets/img/elements/blumb.png" alt="include">
</div>
<!--element-->
</section>

<!-- Footer Here -->
<?php
   include("./sub-form.php");
   ?>

<?php 
include("./includes/footer.php");
?>

<!-- Footer End -->





   <!--Jquery 3 6 0 Min Js-->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets-2/js/jquery-3.6.0.min.js"></script>
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
   <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>

</html>