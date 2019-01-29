<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/index-3.html by g4bbar, Thu, 24 Jan 2019 15:33:51 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Home Page 03</title>
<!-- Stylesheets -->
<link href="realestate/css/bootstrap.css" rel="stylesheet">
<link href="realestate/css/style.css" rel="stylesheet">
<link href="realestate/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="realestate/css/color-themes/default-theme.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>


<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
     <!-- Main Header-->
    <header class="main-header header-style-four">
        <!--Header Top-->
         @include('front.includes.index-header.top-header') 
        <!-- End Header Top -->

        <!-- Header Lower -->
        @include('front.includes.lower-header') 
        <!--End Header Lower-->

        <!-- Sticky Header  -->
         @include('front.includes.drop-header') 
         <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!-- Banner Section -->
    <section class="banner-section style-one">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/background/13.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <div class="content-box">
                            <span class="status">For Sale</span>
                            <h2>Luxurious Home</h2>
                            <div class="address">9658 Lorem Ave, Lerno Street, San Diego, USA</div>
                            <ul class="info-box">
                                <li><span>2340</span> Area Sq-ft</li>
                                <li><span>04</span> Bed Room</li>
                                <li><span>02</span> Kitchen</li>
                            </ul>
                            <div class="price">$42, 201,00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/background/14.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <div class="content-box">
                            <span class="status">For Sale</span>
                            <h2>Perfect Property</h2>
                            <div class="address">9658 Lorem Ave, Lerno Street, San Diego, USA</div>
                            <ul class="info-box">
                                <li><span>2340</span> Area Sq-ft</li>
                                <li><span>04</span> Bed Room</li>
                                <li><span>02</span> Kitchen</li>
                            </ul>
                            <div class="price">$42, 201,00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/background/15.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <div class="content-box">
                            <span class="status">For Sale</span>
                            <h2>Find Your Home</h2>
                            <div class="address">9658 Lorem Ave, Lerno Street, San Diego, USA</div>
                            <ul class="info-box">
                                <li><span>2340</span> Area Sq-ft</li>
                                <li><span>04</span> Bed Room</li>
                                <li><span>02</span> Kitchen</li>
                            </ul>
                            <div class="price">$42, 201,00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    
    <!-- Property Search Section -->
    <section class="property-search-section">
        <div class="auto-container">
            <div class="property-search-tabs tabs-box">
                <ul class="tab-buttons">
                    <li data-tab="#sale" class="tab-btn active-btn">Sale</li>
                    <li data-tab="#rent" class="tab-btn">Rent</li>
                </ul>

                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="sale">                         
                        <div class="property-search-form">
                            <form method="post" action="https://expert-themes.com/html/ourland/index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>country</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>California</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>New York</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Price from</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>$1000</option>
                                            <option>$2000</option>
                                            <option>$5000</option>
                                            <option>$10000</option>
                                            <option>$100000</option>
                                        </select>
                                    </div>
                                   
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Price To</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>$1000</option>
                                            <option>$2000</option>
                                            <option>$5000</option>
                                            <option>$10000</option>
                                            <option>$100000</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Tab -->
                    <div class="tab" id="rent">
                        <div class="property-search-form">
                            <form method="post" action="https://expert-themes.com/html/ourland/index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>country</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>California</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>New York</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label>Area</label>
                                            <div class="area-range-slider"></div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                            <div class="title">m<sup>2</sup></div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label>Price Filter</label>
                                            <div class="price-range-slider"></div>
                                            <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                            <div class="title">US Doller</div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Property Search Section -->

    <!-- Recent Section -->
    <section class="property-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>RECENT PROPERTIES</h2>
            </div>

            <div class="row">
                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            </div>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Single House Near Orland Park.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <ul class="option-box">
                                <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                <li><a href="#"><i class="la la-heart"></i></a></li>
                                <li><a href="#"><i class="la la-retweet"></i></a></li>
                            </ul>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Apartment Morden 1243, W No.</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Block -->
                <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                            <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a></div>
                            <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="property-detail.html">Apartment</a>,</li>
                                <li><a href="property-detail.html">Bar</a>,</li>
                                <li><a href="property-detail.html">House</a>,</li>
                            </ul>
                            <h3><a href="property-detail.html">Great Home for Single fmaily</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                <li><i class="flaticon-car"></i> 2 Garage</li>
                                <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                <div class="price">$ 13,65,000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More -->
            <div class="load-more-btn text-center">
                <a href="#" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--End Property Section -->

    <!-- About Us -->
    <section class="about-us" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WELL TO OURLAND REAL ESTATE</h2>
                        </div>

                        <div class="text"><strong>OURLAND REAL ESTATE</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="about.html">Buy Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="about.html">REnt Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4><a href="about.html">Real Estate Kit</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-apartment"></span>
                                    <h4><a href="about.html">Sale Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="images/resource/image-2.jpg" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!--Popular Places Section-->
    <section class="popular-places-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
                <h2>MOST POPULAR PLACES</h2>
            </div>
    
            <div class="masonry-items-container clearfix">
                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-1.jpg" alt=""></figure>
                        <div class="info-box">
                            <span class="category">Apartment</span>
                            <h3 class="place"><a href="properties.html">New York City</a></h3>
                            <div class="properties"><a href="properties.html">7 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-2.jpg" alt=""></figure>
                        <div class="info-box">
                            <span class="category">House</span>
                            <h3 class="place"><a href="properties.html">Los Angeles</a></h3>
                            <div class="properties"><a href="properties.html">9 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-3.jpg" alt=""></figure>
                        <div class="info-box">
                            <span class="category">Restaurant</span>
                            <h3 class="place"><a href="properties.html">Singapore</a></h3>
                            <div class="properties"><a href="properties.html">5 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-4.jpg" alt=""></figure>
                        <div class="info-box">
                            <span class="category">Farm</span>
                            <h3 class="place"><a href="properties.html">Amalfi Coast</a></h3>
                            <div class="properties"><a href="properties.html">12 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>


                <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1-5.jpg" alt=""></figure>
                        <div class="info-box">
                            <span class="category">Villa</span>
                            <h3 class="place"><a href="properties.html">Miami</a></h3>
                            <div class="properties"><a href="properties.html">6 Properties</a></div>
                            <div class="view-all"><a href="properties.html">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More -->
            <div class="load-more-btn text-center">
                <a href="#" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">IN FEW SECONDS WITH WILLES</span>
                        <h2>BUY OR SALE YOUR HOUSE</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="admin/submit-property.html" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
                    <a href="#" class="theme-btn btn-style-one">BROWSE PROPERTY</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2>MEET OUR AGENTS</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-1.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Magda Anoma</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-2.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Badoy Ghaly</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-3.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Lora Ptirayto</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-1.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Magda Anoma</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-2.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Badoy Ghaly</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>

                <!-- Agent Block -->
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.html"><img src="images/resource/agent-3.jpg" alt=""></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.html">Lora Ptirayto</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">ALL ABOUT LATEST WILLIA UPDATES</span>
                <h2>NEWS & STORIES</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Dazzling retreat resort with the roof Modern Design</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="images/resource/news-2.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-photo"></span></div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Independent apartment with modern design</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.youtube.com/watch?v=oYN4RStp_t0" class="lightbox-image" data-fancybox="video"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-play"></span></div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Modron apartment adjacent to CEO park</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Main Footer -->
    @include('front.includes.full-footer')
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="la la-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now $17</a>
</div><!-- End Color Switcher -->

<script src="realestate/js/jquery.js"></script> 
<script src="realestate/js/popper.min.js"></script>
<script src="realestate/js/bootstrap.min.js"></script>
<script src="realestate/js/jquery-ui.js"></script>
<script src="realestate/js/jquery.fancybox.js"></script>
<script src="realestate/js/owl.js"></script>
<script src="realestate/js/wow.js"></script>
<script src="realestate/js/isotope.js"></script>
<script src="realestate/js/appear.js"></script>
<script src="realestate/js/script.js"></script>
<!-- Color Setting -->
<script src="realestate/js/color-settings.js"></script>
</body>

<!-- Tiger Cage/index-4.html by g4bbar, Thu, 24 Jan 2019 15:34:41 GMT -->
</html>