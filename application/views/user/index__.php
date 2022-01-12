<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talk2 an expert</title>
     
     <!--== css include ==-->
       
      <?php include(APPPATH.'views/home/include/css.php'); ?>

     <!--== css include ==-->
      
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
  
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
       
       <?php include(APPPATH.'views/home/include/header.php'); ?>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper add-video">
    <div class="hero-overlay"></div><!-- end hero-overlay -->
     <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url();?>assets/images/bg-video.mp4" type="video/mp4">
  </video>
    <div id="particles-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-content-wrapper position-relative z-2">
                    <div class="hero-heading">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-60">Find the consult That Fits Your Life <br> and Start up Your Career</h2>
                            <p class="sec__desc line-height-30 font-weight-medium color-white-rgba">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                                facere possimus, omnis voluptas assumenda est, omnis
                            </p>
                        </div>
                    </div><!-- end hero-heading -->
                    <div class="hero-form-wrap">
                        <div class="main-search-input">
                           <!--  <div class="main-search-input-item">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <span class="la la-search form-icon"></span>
                                            <input class="form-control border" type="text" placeholder="Consult title or company name">
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="main-search-input-item user-chosen-select-container">
                                <select class="user-chosen-select">
                                    <option value="">All Category</option>
                                     <?php foreach ($cat as $c) { ?>  
                                        <option value="<?php echo $c->id;?>"><?php echo $c->category_name;?></option>
                                     <?php } ?>
                                    <!--<option value="3">Banking</option>-->
                                    <!--<option value="4">Digital & Creative</option>-->
                                    <!--<option value="5">Charity & Voluntary</option>-->
                                    <!--<option value="6">Delivery Driver Jobs</option>-->
                                    <!--<option value="7">Leisure & Tourism jobs</option>-->
                                    <!--<option value="8">Graphic Designer Jobs</option>-->
                                    <!--<option value="9">IT Contractor</option>-->
                                    <!--<option value="10">Graduate</option>-->
                                    <!--<option value="11">Manufacturing jobs</option>-->
                                    <!--<option value="12">Marketing & PR</option>-->
                                    <!--<option value="13">Media</option>-->
                                    <!--<option value="14">Medical jobs</option>-->
                                    <!--<option value="15">Media, Digital & Creative jobs</option>-->
                                    <!--<option value="16">Motoring & Automotive</option>-->
                                    <!--<option value="17">Public Sector</option>-->
                                    <!--<option value="18">Retail</option>-->
                                    <!--<option value="19">Sales & Marketing</option>-->
                                    <!--<option value="20">Software Engineer Jobs</option>-->
                                    <!--<option value="21">Pharmacist Jobs</option>-->
                                </select>
                            </div><!-- end main-search-input-item -->
                            <div class="main-search-input-item user-chosen-select-container">
                                <select class="user-chosen-select">
                                    <option value>Select Location</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua &amp; Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AC">Ascension Island</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="BQ">Caribbean Netherlands</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo - Brazzaville</option>
                                    <option value="CD">Congo - Kinshasa</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d’Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czechia</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="SZ">Eswatini</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong SAR China</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao SAR China</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar (Burma)</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="MK">North Macedonia</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territories</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn Islands</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">São Tomé &amp; Príncipe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="BL">St. Barthélemy</option>
                                    <option value="SH">St. Helena</option>
                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                    <option value="LC">St. Lucia</option>
                                    <option value="MF">St. Martin</option>
                                    <option value="PM">St. Pierre &amp; Miquelon</option>
                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad &amp; Tobago</option>
                                    <option value="TA">Tristan da Cunha</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks &amp; Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican City</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis &amp; Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div><!-- end main-search-input-item -->
                            <div class="main-search-input-btn">
                                <a href="#" class="button theme-btn line-height-50">Find Jobs</a>
                            </div><!-- end main-search-input-btn -->
                        </div><!-- end main-search-input -->
                    </div><!-- end hero-form-wrap -->
                    <div class="hero-tag">
                        <ul class="list-items job-tags d-flex align-items-center mt-4">
                            <li class="text-white font-weight-medium">Popular Searches:</li>
                            <!--<li class="font-size-14"><a href="grid-view.php">Web</a></li>-->
                             <?php foreach($cat_limit as $limit){ ?>
                               <li class="font-size-14"><a href="grid-view.php"><?php echo $limit['category_name'];?></a></li>
                             <?php } ?>
                        </ul>
                        <p class="font-size-14 mt-1 font-weight-medium">320,940 new jobs in the last 7 days</p>
                    </div>
                </div><!-- end hero-content-wrapper -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="hero-shape"></div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->


<div class="section-block"></div>


<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-10px padding-bottom-20px">
    <div class="container">

          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Category</h2>
                    <p class="sec__desc">
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                        facere possimus, omnis voluptas assumenda est, omnis
                    </p>
                </div><!-- end section-heading -->
            </div>
        </div><!-- end row -->

        <div class="row mt-5">
            
           <?php foreach($cat as $c){ ?>
            <div class="col-md-3">
               <div class="category-item" data-aos="zoom-in" data-aos-duration="1000">
            <a href="grid-view.php" class="cat-fig-box d-block p-4">
                <div class="icon-element mb-3">
                   
                     <img class="img-fluid" src="<?php echo base_url('uploads/images/'. $c->cat_img);?>" />
                   
                </div>
                <div class="cat-content">
                    <h4 class="cat__title mb-2">Design & Multimedia</h4>
                    <span class="font-weight-medium">(3040)</span>
                </div>
            </a>
               </div><!-- end category-item -->
          </div>
            <?php }?>

          

         
        </div><!---row--->

    </div>

  </div>
</section>
<div class="section-block"></div>    


<!-- ================================
    START MOBILE-APP AREA
================================= -->
<section class="mobile-app-area padding-top-100px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="mobile-img" data-aos="fade-right" data-aos-duration="1000">
                    <img src="<?php echo base_url();?>assets/images/why-.png" alt="mobile-img">
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="mobile-app-content process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="section-heading margin-bottom-30px">
                        <h2 class="sec__title">Why choose us</h2>
                    </div><!-- end section-heading -->
                    <ul class="info-list contact-links">
                        <li class="d-flex align-items-center mb-4">
                         
                            <div class="app-title-box">
                                <h4 class="widget-title pb-2 font-weight-bold">AR Job Search</h4>
                                <p class="color-text-3">
                                    Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    urna ut viverra.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                         
                            <div class="app-title-box">
                                <h4 class="widget-title pb-2 font-weight-bold"> Search on the go</h4>
                                <p class="color-text-3">
                                    Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    urna ut viverra.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           
                            <div class="app-title-box">
                                <h4 class="widget-title pb-2 font-weight-bold"> Instant Notifications</h4>
                                <p class="color-text-3">
                                    Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    urna ut viverra.
                                </p>
                            </div>
                        </li>
                    </ul>
                   
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end mobile-app-area -->
<!-- ================================
    END MOBILE-APP AREA
================================= -->

<!-- ================================
    START HIW AREA
================================= -->
<section class="hiw-area text-center padding-top-30px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Proccess How It Works?</h2>
                    <p class="sec__desc">
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                        facere possimus, omnis voluptas assumenda est, omnis
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
   </div><!-- end container -->
</section><!-- end hiw-area -->

<section class="our-blog p-0 m-0 bg-silver">
    <div class="container work-process  pb-5 pt-5">
       
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lorem Ipsum?</h5>
                            <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lorem Ipsum?</h5>
                            <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lorem Ipsum?</h5>
                            <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lorem Ipsum?</h5>
                            <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>
            
            
        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">05</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>What is Lorem Ipsum?</h5>
                            <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right process-last"></div>
            </div>
        </div>
        <!-- ============ -->
    </div>
</section>
   
<!-- ================================
    END HIW AREA
================================= -->


<div class="section-block"></div>
<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area padding-top-100px padding-bottom-100px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Testimonial</h2>
                    <p class="sec__desc">
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                        facere possimus, omnis voluptas assumenda est, omnis
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">

                <div class="testimonial-carousel carousel-item-wrap owl-loaded owl-carousel">

                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Richard Doe</h4>
                            <span class="testi__meta">Web Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team2.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Denwen Evil</h4>
                            <span class="testi__meta">UI/UX Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team3.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Collis Pong</h4>
                            <span class="testi__meta">Engineer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Richard Doe</h4>
                            <span class="testi__meta">Web Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team2.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Denwen Evil</h4>
                            <span class="testi__meta">UI/UX Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team3.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Collis Pong</h4>
                            <span class="testi__meta">Engineer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Richard Doe</h4>
                            <span class="testi__meta">Web Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team2.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Denwen Evil</h4>
                            <span class="testi__meta">UI/UX Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team3.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Collis Pong</h4>
                            <span class="testi__meta">Engineer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Richard Doe</h4>
                            <span class="testi__meta">Web Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team2.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Denwen Evil</h4>
                            <span class="testi__meta">UI/UX Designer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi-content mb-3">
                            <img src="<?php echo base_url();?>assets/images/small-team3.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title mt-4">Collis Pong</h4>
                            <span class="testi__meta">Engineer</span>
                        </div>
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident.
                            </p>
                        </div>
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->


<section class="card-area section-bg padding-top-100px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Top listed profile</h2>
                    <p class="sec__desc">
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                        facere possimus, omnis voluptas assumenda est, omnis
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-12">


              
                <div class="margin-top-35px">
                   
                        <div class="row" >
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">BlueTech</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">Graphic Designer</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                   <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">MuffinTech</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">Executive, HR Operations</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                     <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">GoodLayer</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">Art Production Specialist</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Part Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                  <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">ThemeGood</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">Finance Manager &amp; Health</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Part Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                   <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">TechyDevs</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">ACB Product Sales Specialist</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Part Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="job-card">
                                    <div class="job-card-content">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="expert-details.php" class="d-block">
                                                    <img src="<?php echo base_url();?>assets/images/small-team1.jpg" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <h4 class="card-title mb-1"><a href="expert-details.php">Penske Media</a> </h4>
                                                <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="card-content mt-4 margin-bottom-30px">
                                            <h4 class="card-title mb-2"><a href="job-details.html">Senior Web Designer</a> </h4>
                                            <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                        </div>
                                        <div class="section-block-2"></div>
                                        <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                            <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                            <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                            <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                        </div>
                                    </div><!-- end job-card-content -->
                                </div><!-- end job-card -->
                            </div><!-- end col-lg-4 -->
                        </div>
                    </div><!-- end tab-pane -->
                  
                </div><!-- end tab-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center mt-4">
                    <a href="grid-view.php" class="theme-btn">View all Expert</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
</div>



<!-- ================================
    START FUN-FACT AREA
================================= -->
<section class="funfact-area section-bg-2 padding-top-100px padding-bottom-60px text-center" id="num">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title text-white">Numbers Say Everything!</h2>
                    <p class="sec__desc color-white-rgba">
                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit <br>
                        facere possimus, omnis voluptas assumenda est, omnis
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-3 responsive-column">
                <div class="counter-item">
                    <div class="icon-element">
                        <i class="la la-briefcase"></i>
                    </div>
                    <div class="counter-number">
                        <span data-purecounter-duration="2.5" data-purecounter-end="19000" class="counter purecounter">0</span>
                    </div><!-- end counter-number -->
                    <div class="counter-content mt-3">
                        <p class="counter__title">Jobs Posted</p>
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="counter-item">
                    <div class="icon-element">
                        <i class="la la-users"></i>
                    </div>
                    <div class="counter-number">
                        <span data-purecounter-duration="2.5" data-purecounter-end="8090" class="counter purecounter">0</span>
                    </div><!-- end counter-number -->
                    <div class="counter-content mt-3">
                        <p class="counter__title">Candidates</p>
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="counter-item">
                    <div class="icon-element">
                        <i class="la la-black-tie"></i>
                    </div>
                    <div class="counter-number">
                        <span data-purecounter-duration="2.5" data-purecounter-end="15095" class="counter purecounter">0</span>
                    </div><!-- end counter-number -->
                    <div class="counter-content mt-3">
                        <p class="counter__title">Companies</p>
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="counter-item">
                    <div class="icon-element">
                        <i class="la la-file-text-o"></i>
                    </div>
                    <div class="counter-number">
                        <span data-purecounter-duration="2.5" data-purecounter-end="2350" class="counter purecounter">0</span>
                    </div><!-- end counter-number -->
                    <div class="counter-content mt-3">
                        <p class="counter__title">Resumes</p>
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
    END FUN-FACT AREA
================================= -->


<div class="section-block"></div>




<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area padding-top-50px padding-bottom-35px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title mb-0">Top Companies Hiring at Zobstar Now</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row margin-top-35px">
            <div class="col-lg-12 mx-auto">
                <div class="client-logo-wrap d-flex flex-wrap justify-content-center align-items-center">
                   <div class="client-logo-item">
                        <img src="<?php echo base_url();?>assets/images/client-logo.png" class="img-fluid" alt="">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="<?php echo base_url();?>assets/images/client-logo-2.png" class="img-fluid" alt="">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="<?php echo base_url();?>assets/images/client-logo-3.png" class="img-fluid" alt="">
                    </div><!-- end client-logo-item -->
                      <div class="client-logo-item">
                        <img src="<?php echo base_url();?>assets/images/client-logo-4.png" class="img-fluid" alt="">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="<?php echo base_url();?>assets/images/client-logo-5.png" class="img-fluid" alt="">
                    </div><!-- end client-logo-item -->
                  </div>
                  
                
                  
                   
                  
                </div><!-- end client-logo-wrap-->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->



<div class="section-block"></div>

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area section-bg padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Latest Tips &amp; Articles</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat,<br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-4 responsive-column">
                <div class="card-item">
                    <div class="card-content-wrap">
                        <div class="card-badge-wrap">
                            <span class="card-badge">Jobs</span>
                            <div class="icon-element">
                                <i class="la la-share-alt"></i>
                                 <ul class="shared-list">
                                    <li><a href="#"><i class="la la-facebook"></i></a></li>
                                     <li><a href="#"><i class="la la-twitter"></i></a></li>
                                     <li><a href="#"><i class="la la-instagram"></i></a></li>
                                 </ul>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/images/img1.jpg" alt="blog image" class="img-fluid">
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="blog-single.html">3 things to know about the October 2019 jobs report</a>
                            </h4>
                            <p class="card-meta">
                                <img src="<?php echo base_url();?>assets/images/small-team1.jpg" alt="" class="author-avatar">
                                <span class="font-weight-semi-bold">Kamran Adi</span> - 25 Jan, 2020
                            </p>
                        </div><!-- end card-content -->
                    </div><!-- end card-content-wrap -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item">
                    <div class="card-content-wrap">
                        <div class="card-badge-wrap">
                            <span class="card-badge">Retail</span>
                            <div class="icon-element">
                                <i class="la la-share-alt"></i>
                                 <ul class="shared-list">
                                    <li><a href="#"><i class="la la-facebook"></i></a></li>
                                     <li><a href="#"><i class="la la-twitter"></i></a></li>
                                     <li><a href="#"><i class="la la-instagram"></i></a></li>
                                 </ul>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/images/img2.jpg" alt="blog image" class="img-fluid">
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="blog-single.html">8 tips for the perfect retail sales resume</a>
                            </h4>
                            <p class="card-meta">
                                <img src="<?php echo base_url();?>assets/images/small-team2.jpg" alt="" class="author-avatar">
                                <span class="font-weight-semi-bold">David Wise</span> - 25 Jan, 2020
                            </p>
                        </div><!-- end card-content -->
                    </div><!-- end card-content-wrap -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item">
                    <div class="card-content-wrap">
                        <div class="card-badge-wrap">
                            <span class="card-badge">Health</span>
                            <div class="icon-element">
                                <i class="la la-share-alt"></i>
                                 <ul class="shared-list">
                                    <li><a href="#"><i class="la la-facebook"></i></a></li>
                                     <li><a href="#"><i class="la la-twitter"></i></a></li>
                                     <li><a href="#"><i class="la la-instagram"></i></a></li>
                                 </ul>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/images/img3.jpg" alt="blog image" class="img-fluid">
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="blog-single.html">10 high-paying health care jobs (besides doctors)</a>
                            </h4>
                            <p class="card-meta">
                                <img src="<?php echo base_url();?>assets/images/small-team3.jpg" alt="" class="author-avatar">
                                <span class="font-weight-semi-bold">Mike Doe</span> - 25 Jan, 2020
                            </p>
                        </div><!-- end card-content -->
                    </div><!-- end card-content-wrap -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center mt-4">
                    <a href="blog-grid.html" class="theme-btn">Read More Articles</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       START BLOG AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area section-bg-2 padding-top-30px padding-bottom-30px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="subscribe-form d-flex align-items-center">
                   
                    <p class="mr-2 text-white font-weight-bold">Email of all new jobs</p>
                    <div class="contact-form-action flex-grow-1 mr-2">
                        <form method="post">
                            <div class="input-box">
                                <div class="form-group mb-0">
                                    <span class="la la-envelope-o form-icon"></span>
                                    <input class="form-control" type="email" name="text" placeholder="Enter Your Email Address...">
                                </div>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                    <div class="btn-box mt-0">
                        <button type="submit" class="theme-btn border-0 line-height-45">Subscribe</button>
                    </div>
                </div><!-- end subscribe-form -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->


<div class="section-block"></div>



<div class="section-block"></div>

<!-- ================================
       START FOOTER AREA
================================= -->
   
      <?php include(APPPATH.'views/home/include/footer.php'); ?>


<!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script type="text/javascript">
  AOS.init();
</script>

<!-- Template JS Files -->
   
    <?php include(APPPATH.'views/home/include/js.php'); ?>

</body>
</html>