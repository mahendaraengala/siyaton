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
    height: 20%;
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


.wrapper div {
    height: 30px;
    width: 30px;
    border: 2px solid rgba(255, 255, 255, 0.7);
    border-radius: 50px;
    position: absolute;
    top: 10%;
    left: 10%;
    animation: 4s linear infinite;
}
div .dot {
  height: 10px;
  width: 10px;
  border-radius: 50px;
  background: rgba(255, 255, 255, 0.5);
  position: absolute;
  top: 20%;
  right: 20%;
}
.wrapper div:nth-child(1) {
  top: 20%;
  left: 20%;
  animation: animate 8s linear infinite;
}
.wrapper div:nth-child(2) {
  top: 60%;
  left: 80%;
  animation: animate 10s linear infinite;
}
.wrapper div:nth-child(3) {
  top: 40%;
  left: 40%;
  animation: animate 3s linear infinite;
}
.wrapper div:nth-child(4) {
  top: 66%;
  left: 30%;
  animation: animate 7s linear infinite;
}
.wrapper div:nth-child(5) {
  top: 90%;
  left: 10%;
  animation: animate 9s linear infinite;
}
.wrapper div:nth-child(6) {
  top: 30%;
  left: 60%;
  animation: animate 5s linear infinite;
}
.wrapper div:nth-child(7) {
  top: 70%;
  left: 20%;
  animation: animate 8s linear infinite;
}
.wrapper div:nth-child(8) {
  top: 75%;
  left: 60%;
  animation: animate 10s linear infinite;
}
.wrapper div:nth-child(9) {
  top: 50%;
  left: 50%;
  animation: animate 6s linear infinite;
}
.wrapper div:nth-child(10) {
  top: 45%;
  left: 20%;
  animation: animate 10s linear infinite;
}
.wrapper div:nth-child(11) {
  top: 10%;
  left: 90%;
  animation: animate 9s linear infinite;
}
.wrapper div:nth-child(12) {
  top: 20%;
  left: 70%;
  animation: animate 7s linear infinite;
}
.wrapper div:nth-child(13) {
  top: 20%;
  left: 20%;
  animation: animate 8s linear infinite;
}
.wrapper div:nth-child(14) {
  top: 60%;
  left: 5%;
  animation: animate 6s linear infinite;
}
.wrapper div:nth-child(15) {
  top: 90%;
  left: 80%;
  animation: animate 9s linear infinite;
}
@keyframes animate {
  0% {
    transform: scale(0) translateY(0) rotate(70deg);
  }
  100% {
    transform: scale(1.3) translateY(-100px) rotate(360deg);
  }
}




.go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background-color: #00838d;
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
    display: block;
    position: relative;
   
    border-radius: 8px;
   
    z-index: 0;
    overflow: hidden;
    
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('./assets-2/img/card1-bg.jpg');


    &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -26px;
    right: -29px;
    background: #29aae1;
    height: 70px;
    width: 70px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
}

  &:hover:before {
    transform: scale(21);
  }
}


.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
}
img.ai-bag {
    margin-top: 33px;
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

<!-- Banner Here -->

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
             
                  <div class="b-h">
                
               
                  </div>
                  <h1 class="title"> 
                  Artificial Intelligence & Business Analytics
                  </h1>
                              <p class="bread_crumbs"><a href="index.php" class="home_page">Home</a> / <a class="current_page">Artificial Intelligence & Business Analytics</a></p>

                  
               </div>
            </div>
            <!--col-->
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 col-sm-12">
               <div class="breadcumnd__thumb bdt">
                  <img class="ai-bag" src="assets-2/img/ai-1.png" alt="bread">
               </div>
            </div>
            <!--col-->
         </div>   
         <!--ai text-->
         
         <!--ai text-->
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
   </div>
   
    
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
               <img src="./assets-2/img/ai-business-analytics.jpg" alt="about">
            </div>
         </div>
         <!--about thumb-->
         <!--about content-->
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about__content">
               <div class="section__header">
                  <h2>
                  Siyaton Artificial Intelligence & Business Analytics
                  </h2>
                  <h4>SAP Business Intelligence</h4>
                  
                  <p>
                    <b>Boost up your business performance with SAP HANA and Siyaton partnership.</b><br>
                    SAP Business Intelligence (SAP BI), a component of the SAP Business Analytics platform, is a powerful tool for the identification, integration, and analysis of disparate business data from heterogeneous sources.
                  </p>
                  
                  <p>
                  It includes data-warehousing features, reporting and analysis tools, best-practice models, business-analysis applications, and administrative resources. With its superior analytical capabilities, SAP BI generates and delivers tailored business insight and expertise for any purpose enabling better informed management decisions</p>
                  <p>More and more companies realize that business insight is needed anywhere in their organizations – from administrator to executive level. Consequently, business insight components could become an integral part of all business scenarios as companies move to service oriented architectures.</p>
                
               </div>
               
            </div>
         </div>

         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-12">
            <div class="about__content">
               <div class="section__header">
               <p>Siyaton can help your enterprise in its journey of SAP HANA implementation with well-defined solution offerings. Siyaton‘s HANA deployment approach includes assessment, landscape integration, software and data services, and data analytics.</p>
                
                  <h4>SAP HANA</h4>
                  <p>SAP is evolving its in-memory technology with the introduction of SAP High- Performance Analytic Appliance (SAP HANA) software, a flexible, multi-purpose, data source agnostic in-memory appliance that combines SAP software components optimized on hardware provided and delivered by SAP leading hardware partners.</p>

                  <p>SAP HANA can enable organizations to analyze business operations based on large volumes of detailed information as it develops. Organizations can instantly explore and analyze all of their transactional and analytical data from virtually any data source in real time. Operational data is captured in memory as business happens, and flexible views expose analytic information at the speed of thought. External data can be added to analytic models to expand analysis across the entire organization.</p>
                  <p>HANA, which was unveiled last year, takes advantage of in-memory computing to deliver faster data analytics on-the-fly by analyzing huge amounts of data in real time.</p>
                  <p>He added that SAP HANA enables nearly 80 per cent of SAP’s customers, which are small and midsize businesses, to bring together structured and unstructured data analysis from any source, as well as transactional applications and analytics, in a single highly scalable, elastic infrastructure for true real-time computing.</p>
                  <p>HANA Edge will be targeted at those in the midmarket and running Business All-in-One, the company said. It can also be bundled with SAP Business Objects Edge Business Intelligence software. SAP HANA Edge edition is now globally available.</p>
                  <h4>Challenges</h4>
                  <ul class="about__chack about">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Every day, we create 2.5 quintillion bytes of data — so much that 90% of the data in the world today has been created in the last two years alone.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     10,000 payment card transactions are made every second around the world.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Wal-Mart handles more than 1 million customer transactions an hour.
                     </span>
                  </li>

                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     340 million tweets are sent per day. That’s nearly 4,000 tweets per second.
                     </span>
                  </li>
        
                  
               </ul>
               
               <section class="includeai__section bg-2 bgsection pt-80 pb-80">
   <!--container-->
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <!--col grid-->
         <div class="col-xxl-12 col-xl-12 col-lg-12">
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
                  Our professional Microsoft consultants have deep expertise in major technologies, including:
                  </h4>
               
               </div>
               <ul class="about__chack about">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Our expert consulting team aim to provide significant value and enable you to stay ahead in a competitive landscape with our Siyaton’s Oracle Practice. Our practice helps our clients with faster adoption and return on investment across the Oracle suite of products.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     We combine industry, technology, and Oracle expertise to deliver solutions that drive competitive advantage for your business across the enterprise to perform business functions and innovate, transform, enhance, and optimize your business.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     We provide end-to-end services that range from consulting, implementations, rollouts, and upgrades to application support and maintenance.
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="01.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     With experienced Oracle professionals around the world, we work closely with our customers in any given market to deliver the resources and expertise needed for success.
                     </span>
                  </li>
                  
               </ul>
               
            </div>
         </div>
         <div class="col-xxl-4 col-xl-4 col-lg-4">
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
               <h4>Updates</h4>
               <span>SAP Announcement</span>
               <p>SAP has announced that it will make its HANA real-time analytics platform available to small and medium business (SMBs) later this year. The company says that big data is an opportunity and challenge for small and mid-size enterprises too.</p>

<p>Vishal Sikka, member of the SAP Executive Board, Technology and Innovation Platform, said: “Small businesses have the dual need of a real-time software platform for their business, and yet simplicity in their IT landscapes.”</p>
<h4>HANA a Database?</h4>
<ul class="about__chack about">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Is SAP HANA a database or an appliance?
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Can you use it with non-SAP BI tools?
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     How do you build views and replicate data?
                     </span>
                  </li>

                  
        
                  
               </ul>
               <h4>Category’s</h4>

<p>The company unveiled two new products – HANA for SAP Business One and HANA Edge.<br>

SAP HANA for SAP Business One, is targeted at companies using SAP Business One. This channel-only solution aims to offer a small-scale, HANA-based application including operational reporting with SAP Crystal Reports software.</p>
<h4>Today’s Scenario</h4>
<p>Organizations today are struggling to keep up: more data, more decisions, and increased pressure to deliver value faster

With the amount of digital data increasing tenfold every five years, large, complex, global organizations need solutions to help manage their business.</p>
<h4>Data Integration, Transformation and Reconciliation</h4>
<p>When you’re confident that your knowledge into corporate data is sound, informed and complete, you can trust that all your decisions will help you create competitive advantage and achieve corporate objectives.<br>

We can help you harness data that exists across disparate systems and transform that data into knowledge that enables effective</p>
<h4>Why We?</h4>
<b>With any new product, it’s not always easy to get straightforward information.</b>
<p>Is SAP HANA a database or an appliance? Can you use it with non-SAP BI tools? How do you build views and replicate data? Get the information you need with advice and instruction from SAP HANA experts who have demonstrable knowledge, practical experience, and no agenda. Here’s your chance: Separate the hype from the facts, and the roadmap from the reality.</p>

<ul class="about__chack about">
                  <li class="wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                 
SAP certified HANA consultants — HANA Administration and Solution Modeling
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     40+ SAP BW-BO consultants with 15+ BI solutions delivered
                     </span>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-name: fadeInUp;">
                     <span class="icon">
                        <i class="material-symbols-outlined">
                           task_alt
                        </i>
                     </span>
                     <span class="pnt">
                     Core team of BI Solution and technical architects brings Innovation and thought leadership to defined client centric long-term BI strategy.
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
      <img src="assets-2/img/elements/null-dimond.png" alt="ball3d">
   </div>
   <!--elements-->
</section>
<!-- About End -->

<section style="background:#f3f5f7; padding-bottom:60px;" class="faq__section bgsection pt-60 pb-60">
   <!--container-->
   <div class="container">
    
      <!--accordion head-->
      <div class="row justify-content-between align-items-center">
         <!--col grid-->
         <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="accordion__wrap">
               <div class="accordion" id="accordionExample">
                  <h2>How Can We Help You?</h2>
                  <!--Accordion items-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Hands on Experience
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>
                        Having delivered several of successful business intelligence projects across industry sectors, we are one of the leading providers and recognized thought leaders in business intelligence.

With our comprehensive portfolio of services and flexible engagement approach many leading organizations see us as their trusted advisor and preferred sup¬plier for information management. Our services range from defining information management strategies to building technical architectures, project delivery and application management.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!--Accordion items-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Information Management Strategy ?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>
                        Our approach to Information Management Strategy focuses at how information supports key decision making and business processes to develop an information management framework that is closely aligned with enterprise strategy and objectives.

With emphasis on business benefits, our approach takes a comprehensive look at the infor¬mation flows, data governance roles and responsibilities as well as technology to deliver strategies with tangible business benefits.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!--Accordion items-->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Business Intelligence Capability Review ?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p>
                        With our direct experience of delivering major information management initiatives and our extensive skills in all major business intelligence technologies and platforms we can offer impartial advice in helping you assess your Business Intelligence capability.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!--Accordion items-->
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree4">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                       Data Integration, Transformation And Reconciliation ?
                       </button>
                     </h2>
                     <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                         <p>
                         When you’re confident that your knowledge into corporate data is sound, informed and complete, you can trust that all your decisions will help you create competitive advantage and achieve corporate objectives.

We can help you harness data that exists across disparate systems and transform that data into knowledge that enables effective
                         </p>
                       </div>
                     </div>
                   </div>
              
                </div>
            </div>
         </div>
         <!--col grid-->
         <div class="col-xxl-5 col-xl-6 col-lg-6">
            <div class="accordion__thumb">
               <img src="assets/img/faq/faq2.png" alt="img">
               <div class="qustion">
                  <img src="assets/img/faq/faqqustion2.png" alt="qustion">
               </div>
            </div>
         </div>
         <!--col grid-->
      </div>
   </div>
   <!--container-->
</section>

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
</body>

</html>  