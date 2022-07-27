<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>MLN Global</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicons -->
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- FONTS -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,400italic,500,600,700,700italic' />

  <!-- CSS -->
  <link rel='stylesheet' href='css/global.css'>
  <link rel='stylesheet' href='css/structure.css'>
  <link rel='stylesheet' href='css/adagency2.css'>
  <link rel='stylesheet' href='css/custom.css'>
  <style>
    #more {
      display: none;
    }

    /**
Globe Elements
**/
    .globe__placeholder {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      -webkit-border-radius: 6px;
      -moz-border-radius: 6px;
      border-radius: 6px;
      overflow: visible;
      position: relative;
      float: left;
      padding: 1.7em;
      margin: 0;
      margin-bottom: 16px;
      height: 200px;
      /* Unscaled is 200px. If 'globe__container' is scaled, multiply this value by scale() property, e.g. 200px * 0.5 = 100px */
      width: 200px;
      /* Unscaled is 200px. If 'globe__container' is scaled, multiply this value by scale() property, e.g. 200px * 0.5 = 100px */
    }

    .globe__container {
      overflow: visible;
      position: relative;
      display: block;
      margin: 0;
      padding: 0;
      top: 0;
      left: 0;
    }

    .globe__container,
    .globe {
      width: 200px;
      height: 200px;
    }

    .globe {
      overflow: visible;
      position: relative;
      display: block;
      margin: 0;
      padding: 0;
      top: 0;
      left: 0;
    }

    .globe__worldmap,
    .globe__worldmap__front,
    .globe__worldmap__back,
    .globe__sphere,
    .globe__outer_shadow,
    .globe__reflections__bottom,
    .globe__inner_shadow,
    .globe__reflections__top,
    .globe__outer_shadow {
      position: absolute;
      display: block;
      margin: 0;
      right: auto;
      bottom: auto;
    }

    .globe__sphere,
    .globe__outer_shadow,
    .globe__reflections__bottom,
    .globe__inner_shadow,
    .globe__reflections__top {
      left: 0;
      top: 0;
      width: 200px;
      height: 200px;
      background-position: 0 0;
      background-repeat: no-repeat;
    }

    .globe__outer_shadow {
      left: 0;
      top: 186px;
      width: 200px;
      height: 30px;
      background-position: 0 0;
      background-repeat: no-repeat;
    }

    /* Circle mask for animated SVG files */
    .globe__worldmap {
      left: 0;
      top: 0;
      width: 200px;
      height: 200px;
      overflow: hidden;
      -webkit-border-radius: 50%;
      -khtml-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
      /*
  overflow: visible;
*/
    }

    .globe__worldmap__front,
    .globe__worldmap__back {
      left: 0;
      top: 0;
      width: 1000px;
      height: 200px;
      overflow: visible;
      background-image: url('svg/worldmap_2x.svg');
      background-repeat: no-repeat;
    }

    }

    /**
Globe elements visibility options
**/


    .globe__outer_shadow {
      background-image: url('svg/outer_shadow.svg');
    }

    .globe__reflections__top {
      background-image: url('svg/reflections.svg');
      display: none;
    }

    .globe__reflections__bottom {
      background-image: url('svg/reflections.svg');
      display: none;
    }

    .globe__inner_shadow {
      background-image: url('svg/inner_shadow.svg');
    }

    .globe__worldmap__front {
      background-position: 0px 0px;
      animation: textureSpinreverse 8s linear infinite;
    }

    .globe__worldmap__back {
      background-position: 0px -220px;
      animation: textureSpin 8s linear infinite;
    }



    div.opacity {
      padding-bottom: 0;
    }

    div.opacity div {
      padding-left: 15px;
      margin-right: 10px;
      position: relative;
      font-size: 12px;
    }

    input.range {
      width: 80px;
      float: right;

      padding: 0;
      margin: 0;
    }

    input.text {
      width: 35px;
      border: none;
      background-color: #fff;
      color: #ccc;
      display: none;
    }

    input.color {
      font-size: 12px;
      margin-top: 0px;
      width: 50px;
      border: 1px solid rgba(204, 204, 204, 0.5);
      padding: 6px;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
    }

    button#play {
      width: 50px;
    }

    .info {
      color: #a6aeb5;
      font-size: 90%;
      line-height: 1.3;
    }

    .info ul {
      padding-left: 15px;
    }

    .info ul li {
      padding-bottom: 0.5em;
    }

    a.button {
      border: 1px solid #51b7ff;
      color: #51b7ff;
      padding: 12px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }

    a.button:hover {
      border: 1px solid #609de5;
      color: #444;
    }

    #Stage code {
      position: absolute;
      top: 366px;
      right: 0px;
      left: 0;
      text-align: center;
      z-index: 99;
      font-family: Arial, "MS Trebuchet";
      font-size: 13px;
      color: #333;
    }

    #Stage code.white {
      color: rgba(255, 255, 255, 0.95);
    }

    .controls .nav-container {
      position: relative;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .controls #nav {
      width: 206px;
      display: inline-block;
      margin-right: 5px;
    }

    .controls .nav-fwd-bck {
      font-size: 13px;
      display: inline-block;
      padding: 0;
    }

    .nav-fwd-bck a {
      padding: 5px 0px;
      border: none;
    }

    .nav-fwd-bck a:hover {
      border: none;
    }

    #big-nav {
      position: absolute;
      z-index: 999;
      font-size: 36px;
      font-weight: bold;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

      width: 265px;
      text-align: left;
    }

    #big-nav a {
      display: inline-block;
      border: none;

    }

    #big-nav a:hover {
      border: none;
      color: #a6aeb5 !important;
    }

    div.reflections {
      font-size: 12px;
      padding-bottom: 20px;
    }

    .reflections strong {
      font-weight: normal;
      padding-left: 15px;
      padding-right: 5px;
    }

    .reflections a {
      padding-left: 1px;
      padding-right: 1px;
    }

    .disabled {
      color: #ccc;
    }

    .info a {
      color: #727272;
      border-bottom: 1px dashed #51b7ff;
    }

    .info a:hover {
      color: #444;
      border-bottom: 1px dashed #51b7ff;
    }

    .title p {
      font-family: Arial, "MS Trebuchet";
      font-size: 20px;
      margin: 5px 0;
      padding: 0;
    }

    .title p.sub {
      padding-top: 0.65em;
      font-size: 12px;
    }

    .buy {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .buy a {
      font-size: 13px;
      font-weight: bold;
      color: #708090;
      border-color: #708090;
      border-color: rgba(112, 128, 144, 0.85);
      border-width: 2px;
      text-align: center;
      -webkit-transition: 0.25s all ease;
      -moz-transition: 0.25s all ease;
      -o-transition: 0.25s all ease;
      transition: 0.25s all ease;
      display: inline-block;
      width: 180px;
    }

    .buy a:hover {
      border-width: 2px;
      color: #fff;
      border-color: #51b7ff;

    }

    .examples a {
      border-color: #fff;
      display: inline-block;
      margin-bottom: 3px;
    }

    .examples a:hover {
      color: #51b7ff;
    }

    .reflections .t {
      padding: 2px 5px;
      display: inline-block;
    }

    #Stage {
      -webkit-transition: background-color 0.2s ease 0s;
      -moz-transition: background-color 0.2s ease 0s;
      -ms-transition: background-color 0.2s ease 0s;
      -o-transition: background-color 0.2s ease 0s;
      transition: background-color 0.2s ease 0s;
    }

    .ani_bgc {
      -webkit-transition: background-color 0.25s ease 0s;
      -moz-transition: background-color 0.25s ease 0s;
      -ms-transition: background-color 0.25s ease 0s;
      -o-transition: background-color 0.25s ease 0s;
      transition: background-color 0.25s ease 0s;
    }

    .ani_opacity {
      -webkit-transition: 0.25s opacity;
      -moz-transition: 0.25s opacity;
      -o-transition: 0.25s opacity;
      transition: 0.25s opacity;
    }

    /*
@media screen and (max-width: 1920px){}
@media screen and (max-width: 1680px){}
*/
    @media screen and (max-width: 1400px) {

      #Stage,
      .title {
        /*  left: 250px !important;*/
      }
    }

    /*
@media screen and (max-width: 1200px){}
@media screen and (max-width: 1024px){}
*/

    @keyframes textureSpin {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(-47.5%);
      }
    }

    @keyframes textureSpinreverse {
      from {
        transform: translateX(-47.5%);
      }

      to {
        transform: translateX(0);
      }
    }
  </style>
  <script src="https://kit.fontawesome.com/9bffe64293.js" crossorigin="anonymous"></script>
  <script>

    //Contact Form validation on click event
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
      
        var userTel = $("#userTel").val();
    
        if (userTel == "") {
            $("#userTel-info").html("required.");
            $("#userTel").addClass("input-error");
            valid = false;
        }
      
        return valid;

    });

</script>
</head>
<!-- emoji link -->
<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
<!--  -->
<!-- bootstrap -->
<!-- JS, Popper.js, and jQuery -->
<!-- JS -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- end of bootstrap -->


<body class="home page-template-default page color-custom style-simple button-stroke layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-transparent header-fw minimalist-header-no sticky-tb-color ab-hide subheader-title-left menu-link-color menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll mobile-header-mini mobile-tr-header be-reg-20983">
  <!-- pop up code start -->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fadeInDown" id="startUpModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
      <div class="modal-content">


        <div class="modal-body">
          <center>
            <h4 class="modal-title"> <i class="em em-boom" aria-role="presentation" aria-label="COLLISION SYMBOL"></i> Dhamaka offer
              <i class="em em-boom" aria-role="presentation" aria-label="COLLISION SYMBOL"></i>
            </h4>

          </center>
          <center>
            <br>
            <h1><span style="color: rgb(134, 25, 25);">
                <b>15% OFF </b>
              </span></h1>

            <h5>
              On our Initial Enrollment fees, <br> For all our clients.<br>
              <br>Hurry! Hurry! Hurry!
              <br>Offer Valid Till <b> 25th Sept.2020!</b></h5>
          </center>
        </div>
        <div id="phoneNumberSubmitBox">
          <div class="row shadow-sm">
            <div class="col-1"></div>
            
            <div class="col-1 text-justify">
              <i class="em em-telephone_receiver" aria-role="presentation" aria-label="TELEPHONE RECEIVER"></i>
            </div>
            <form class="contact-form" action="" id="contact-form"
            method="post" enctype="multipart/form-data">
            <div class="col-6">
              <input type="userTel" name="userTel" id="" placeholder="Phone Number">
            </div> <br>
            <div class="col-4">
            <input type="submit" id="send" name="send" value="Submit" />
            </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="displayPhoneNumberFieldInPopup()" class="btn">Interested
  </button>
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php
if (! empty($_POST["send"])) {
    
    $tel = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
    $from = filter_var($_POST['mlnglobal.biz'], FILTER_SANITIZE_STRING);
    $toEmail = "assist@mlnglobal.biz";
    $mailHeaders = "From:". "<" . $tel .">\r\n";
    
    if (mail($toEmail, $subject, $mailHeaders)) {
?>
    <div id="success">Your contact information is received successfully!</div>

<?php
    }
}
?>
  

  <!-- pop up code END -->

  <div id="Wrapper">
    <div id="Header_wrapper">
      <header id="Header">
        <div id="Top_bar">
          <div class="container">
            <div class="column one">
              <div class="top_bar_left clearfix">
                <div class="logo">
                  <a id="logo" href="index.php" title="MLN Global" data-height="60" data-padding="15"><img class="logo-main scale-with-grid" src="images/mln-logo.png" data-retina="images/mln-logo.png" data-height="31" data-no-retina /><img class="logo-sticky scale-with-grid" src="images/mln-logo.png" data-retina="images/mln-logo.png" data-height="31" data-no-retina /><img class="logo-mobile scale-with-grid" src="images/mln-logo.png" data-retina="images/mln-logo.png" data-height="31" data-no-retina /><img class="logo-mobile-sticky scale-with-grid" src="images/mln-logo.png" data-retina="images/mln-logo.png" data-height="31" data-no-retina /></a>
                </div>
                <div class="menu_wrapper">
                  <nav id="menu">
                    <ul id="menu-menu" class="menu menu-main">
                      <li>
                        <a href="index.php"><span>Home</span></a>
                      </li>
                      <li class="current-menu-item">
                        <a href="about.html"><span>About</span></a>
                      </li>
                      <li>
                        <a href="services.html"><span>Services</span></a>
                      </li>
                      <li>
                        <a href="careers.html"><span>Careers</span></a>
                      </li>

                      <li>
                        <a href="contact.php"><span>Contact</span></a>
                      </li>
                      <li>
                        <a target="_blank" href="register.php"><span><span style="text-decoration:underline">Login</span></span></a>
                      </li>
                      <li>
                        <div id="google_translate_element"></div>
                      </li>
                    </ul>
                  </nav><a class="responsive-menu-toggle" href="#"><i class="fas fa-bars"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
    <div id="Content">
      <div class="content_wrapper clearfix">
        <div class="sections_group">
          <div class="entry-content">
            <div class="section mcb-section dark full-screen bg-cover" style="padding-top:0px; padding-bottom:0px; ; background-image:url(images/finance-advisory.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
              <div class="section_wrapper mcb-section-inner">
                <div class="wrap mcb-wrap one valign-top clearfix">
                  <div class="mcb-wrap-inner">

                    <div class="container">
                      <!----0--->
                      <div class="globe__placeholder">
                        <div class="globe__container">
                          <div class="globe">
                            <div class="globe__sphere"></div>
                            <div class="globe__outer_shadow"></div>
                            <div class="globe__reflections__bottom"></div>
                            <div class="globe__worldmap">
                              <div class="globe__worldmap__back"></div>
                              <div class="globe__worldmap__front"></div>
                            </div>
                            <div class="globe__inner_shadow"></div>
                            <div class="globe__reflections__top"></div>
                          </div>
                        </div>
                      </div>

                      <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                          <h1>MLN GLOBAL <br> Biz Pvt Ltd</h1>
                          <h4>My Loan Negotiator
                          </h4>
                        </div>
                      </div>
                      <div class="column mcb-column one column_button">
                        <a class="button button_size_2 button_stroke_custom button_js" href="about.html" style="border-color:#ffffff!important;color:#fff;"><span class="button_label">About Us</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section mcb-section dark full-screen bg-cover" style="padding-top:0px; padding-bottom:0px; background-color:#796344; background-image:url(images/loan-negotiater.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <!--<div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/tanta.png" />
                                                </div>
                                            </div>
                                        </div>-->
                      <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                          <h1>Negotiation
                            <br>Services
                          </h1>
                          <h4>A Covid free Digital Process
                          </h4>
                        </div>
                      </div>
                      <div class="column mcb-column one column_button">
                        <a class="button button_size_2 button_stroke_custom button_js" href="services.html" style="border-color:#ffffff!important;color:#fff;"><span class="button_label">Know More</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section mcb-section dark full-screen bg-cover" style="padding-top:0px; padding-bottom:0px; background-color:#796344; background-image:url(images/2.jpg); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover; -webkit-background-size:cover">
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <!--<div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/robins.png" />
                                                </div>
                                            </div>
                                        </div>-->
                      <div class="column mcb-column one column_column">
                        <div class="column_attr clearfix">
                          <h1>Finance
                            <br>Advisory
                          </h1>
                        </div>
                      </div>
                      <div class="column mcb-column one column_button">
                        <a class="button button_size_2 button_stroke_custom button_js" href="contact.html" style="border-color:#ffffff!important;color:#fff;"><span class="button_label">Contact Us</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section mcb-section no-margin-v bg-cover" style="padding-top:0px; padding-bottom:0px; background-color:#f0ebe7; background-image:url(images/hand-shake.png); background-repeat:no-repeat; ">
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <!-- <div class="column mcb-column two-fifth column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/adagency2-small-logo.png" />
                                                </div>
                                            </div>
                                        </div>-->
                      <div class="column mcb-column one column_divider">

                      </div>
                      <div class="column mcb-column two-third column_column">
                        <div class="column_attr clearfix">
                          <h3 style="color:#000000">Smart & Interactive Negotiation</h3>
                        </div>
                      </div>
                      <div class="column mcb-column one column_divider">
                        <hr class="no_line" style="margin: 0 auto 60px;" />
                      </div>
                    </div>
                  </div>
                  <div class="wrap mcb-wrap two-third valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one-fifth column_image">
                        <div class="image_frame image_item no_link scale-with-grid no_border">
                          <div class="image_wrapper"><img class="scale-with-grid" src="images/adagency2-home-1.png" />
                          </div>
                        </div>
                      </div>
                      <div class="column mcb-column three-fourth column_column">
                        <div class="column_attr clearfix">
                          <h5 style="color:#000000">Loan Restructuring</h5>
                          <p style="color:#000000">Nowadays, we hear this word” <b>Restructuring of loan”,</b> what it really means to a common citizen,
                            Simply put a restructured <b>Loan</b> means a <b>loan</b> for which the parties have agreed to alter the terms, usually to make them more favorable to the borrower. For example, the borrower may <b>restructure a loan</b> to receive a lower interest rate or monthly payment.
                            <span id="dots">...</span><span id="more">As per loan experts, Under the loan restructuring plan, banks/ NBFC/ Financial institution can now choose to reschedule loan repayments, convert any interest accrued or to be accrued into another credit facility, extend the loan tenor, or even extend moratorium up to two years for the existing loans, depending on the current repayment ability of the customer.<br><br>
                              Due to Covid pandemic, many citizens are finding it difficult to continue paying their EMI resulting into government announcing and offering moratorium to the citizens to pass through this difficult time and protect the good customer repayment by announcing the moratorium. Now RBI has instructed one-time restructuring scheme of the loan post the ending of Moratorium period.<br><br>
                              <b>Here's how it will impact you:</b> This scheme will cover the bulk of the existing loans sanctioned to individual borrowers and will help them in repaying their loans according to their current repayment capacity as opposed to their repayment ability when they borrowed the loan. This will mainly help those people whose salaries have been cut amid the pandemic or those who have lost their jobs and are not earning at the moment. <br><br>
                              This decision has come at a time when six-month moratorium announced on Equated Monthly Installment (EMI) is about to end on August 31, which means the following<br><br>
                              1. Loan payments will start from September 1. Borrowers who must have opted for the 6-month moratorium can either repay it in one shot or ask lenders to add these to their existing EMIs.<br> <br>
                              2. Now, borrowers also have the option of converting interest accrued during the moratorium period into a separate loan.<br><br>
                              3. Additionally, borrowers can keep their EMI unchanged but the loan tenure can be extended as well.
                              However, if possible, borrowers should aim to pre-pay the EMIs within the next 12 months in order to get rid of the additional debt incurred. Pre-paying 120 per cent of the EMIs that borrowers had to defer is ideal, meaning if a person deferred five EMIs, they are advised to pre-pay six additional EMIs over the next 12 months as it will help them bounce back in repayment plan and get out of debt quicker.<br><br>
                              Customers in this Pandemic are risking their life by stepping out of the house and are standing outside banks and their financial institution in a serpentine queues to submit their request for support of moratorium, restructuring etc., which is taking more than 2-3 visits. <br><br>
                              MLN Globalbiz has understood the challenges that are citizens are facing related to their loan liability and risk involved. <br><br>
                              Based on the above arrangement, MLN Globalbiz has come forward with <b>“Covid Free, paperless “platform/ customized mobile App </b>to help our clients to submit their request in “Bulk” and represent them on their behalf to the lenders for reprising, restructuring, rescheduling, moratorium etc. from their comfort and safety of their home. We at MLN Globalbiz will be proved to be a perfect platform which shall provide guidance along with strong, stable support to their Clients by offering them their advisory services.
                            </span><br><br>
                            <button onclick="myFunction()" id="myBtn">Read more</button>
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_divider">

                      </div>
                      <div class="column mcb-column one column_divider">
                        <hr style="margin: 0 auto 40px;" />
                      </div>
                    </div>
                  </div>
                  <div class="wrap mcb-wrap two-third valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one-fifth column_image">
                        <div class="image_frame image_item no_link scale-with-grid no_border">
                          <div class="image_wrapper"><img class="scale-with-grid" src="images/adagency2-home-2.png" />
                          </div>
                        </div>
                      </div>
                      <div class="column mcb-column three-fourth column_column">
                        <div class="column_attr clearfix">
                          <h5 style="color:#000000">Debt Consolidation</h5>
                          <p style="color:#000000">
                            Debt consolidation is a sensible solution for consumers overwhelmed by Credit term/Working Capital Loan debt. It can be done with or without a loan. Consolidation cuts costs by lowering the interest rate on debts and reducing monthly payments.
                          </p>
                        </div>
                      </div>
                      <div class="column mcb-column one column_divider">

                      </div>
                      <div class="column mcb-column one column_divider">
                        <hr style="margin: 0 auto 40px;" />
                      </div>
                    </div>
                  </div>
                  <div class="wrap mcb-wrap two-third valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one-fifth column_image">
                        <div class="image_frame image_item no_link scale-with-grid no_border">
                          <div class="image_wrapper"><img class="scale-with-grid" src="images/adagency2-home-3.png" />
                          </div>
                        </div>
                      </div>
                      <div class="column mcb-column three-fourth column_column">
                        <div class="column_attr clearfix">
                          <h5 style="color:#000000">Foreclosure / Settlements</h5>
                          <p style="color:#000000">Our motto of “Nation First “, given the current economy condition and
                            GDP has sunk to the lowest level, the biggest fear to the Banking and
                            financial system is rise in the delinquent accounts, We At MLN
                            Globalbiz proactively work towards resolving/ representing such
                            clients issue who are close to stage where Institutions enforcing
                            foreclosure or proposing settlement to close such accounts to bring
                            down the delinquency by negotiating solution favorable for our Clients & Banks/NBFC/Financial institution’s. We stand to support our financial
                            system which is the backbone of our economy and citizens by building a
                            bridge to enable clients and financial institutions to work out a “WIN
                            –WIN’ Solution for the betterment of our country and its citizens.we have a team of corporate Lawyer & chartered Accountants who supports us to reach on to a common platform to perform a balance Act for Loan Foreclosure & settlements for mutual benefit.<br>

                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column mcb-column one column_divider">

                  </div>
                  <div class="column mcb-column one column_divider">
                    <hr style="margin: 0 auto 40px;" />
                  </div>
                  <div class="wrap mcb-wrap two-third valign-top clearfix">
                    <div class="mcb-wrap-inner">
                      <div class="column mcb-column one-fifth column_image">
                        <div class="image_frame image_item no_link scale-with-grid no_border">
                          <div class="image_wrapper"><img class="scale-with-grid" src="images/adagency2-about-4.png" />
                          </div>
                        </div>
                      </div>
                      <div class="column mcb-column three-fourth column_column">
                        <div class="column_attr clearfix">
                          <h5 style="color:#000000">Finance Advisory</h5>
                          <p style="color:#000000">
                            A financial advisor will provide financial advice or guidance to customers for compensation. Financial advisors, or advisers, can provide many different services, such as investment management, tax planning, and estate planning.
                          </p> <br><br>
                          <div class="column mcb-column one column_button">
                            <a class="button button_size_2 button_stroke_custom button_js" href="services.html" style="border-color:#a4998c!important;color:#a4998c;"><span class="button_label">Know More</span></a><br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="section mcb-section" style="padding-top:80px; padding-bottom:50px; background-color:#ffffff; text-align: center;">
                <div class="section_wrapper mcb-section-inner">
                  <div class="wrap mcb-wrap one valign-top clearfix">
                    <div class="mcb-wrap-inner">

                      <div class="column_attr clearfix">
                        <h1><span style="color:#a4998c">"A Penny Saved </span><span style="color:#000000">is a Penny Earned"</span></h1> <br>
                        <h5><span style="color:#000000">- Late.Kamal Marwah (My Hero-My Mom)</span></h5>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <footer id="Footer" class="clearfix">
        <div class="widgets_wrapper" style="padding:100px 0 50px;">
          <div class="container">
            <div class="column one-third">
              <aside class="widget_text widget widget_custom_html">

                <div class="textwidget custom-html-widget">

                  <div class="logo">
                    <a id="logo" href="index.php" title="MLN Global" data-height="60" data-padding="15"><img class="logo-main scale-with-grid" src="images/mln-logo1.png" /></a>
                  </div>
                </div>
              </aside>
            </div>
            <div class="column one-third">
              <aside class="widget_text widget widget_custom_html">
                <h4>Operational Hours</h4>
                <div class="textwidget custom-html-widget">

                  <p>
                    Monday - Saturday <br>
                    11.00am - 6.30pm <br>
                    ( Visitors to follow Covid protocols.<br> Visit by prior appointment only.)
                  </p>
                </div>
              </aside>
            </div>
            <div class="column one-third">
              <aside class="widget_text widget widget_custom_html">
                <h4>Contact us</h4>
                <div class="textwidget custom-html-widget">

                  <p>
                    <b>MLN Global biz</b> <br>
                    Row House No. 37/366, <br> Opposite Arogya Chemist,
                    <br> Mahavir Nagar, Kandivali West, <br>Mumbai - 400067
                    <br><a href="https://wa.me/917710955077" target="_blank">77109 55077</a>
                    <br><a href="mailto:assist@mlnglobal.biz">assist@mlnglobal.biz</a>
                  </p>

              </aside>
            </div>

          </div>
        </div>

        <div class="footer_copy">
          <div class="container">
            <div class="column one">
              <a id="back_to_top" class="button button_js" href="#"><i class="fas fa-sort-up"></i></a>
              <div class="copyright">
                MLN Global Biz &copy; 2020 Pawan Marwaha
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div id="Side_slide" class="right dark" data-width="250">
      <div class="close-wrapper">
        <a href="#" class="close"><i class="far fa-window-close"></i></i></a>
      </div>
      <div class="extras">
        <div class="extras-wrapper"></div>
      </div>
      <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>
    <script>
      window.onload = (event) => {
        $('#phoneNumberSubmitBox').hide();
        $('#startUpModal').modal('show');
      };

      function displayPhoneNumberFieldInPopup() {
        $('#phoneNumberSubmitBox').show();
      }

      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less";
          moreText.style.display = "inline";
        }
      }
    </script>

    <!-- JS -->

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/email.js"></script>
    
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en'
        }, 'google_translate_element');
      }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>