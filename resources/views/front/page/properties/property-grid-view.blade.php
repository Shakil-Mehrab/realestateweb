<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Properties</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('realestate/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('realestate/css/color-themes/default-theme.css')}}" rel="stylesheet">

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
   @include('front.includes.full-header')
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Property Grid View</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Property Grid View</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-grid-view">
                        <div class="upper-box clearfix">
                            <div class="sec-title">
                                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                                <h2>PROPERTY GRID</h2>
                            </div>

                            <ul class="filter-options">
                                <li><a href="property-list-view.html"><span class="la la-th-list"></span></a></li>
                                <li class="active"><a href="property-grid-view.html"><span class="la la-th-large"></span></a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <!-- Property Block -->
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
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
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-2.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-6.jpg" alt=""></div>
                                        <h3><a href="property-detail.html">Apartment Morden 1243, W No...</a></h3>
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
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-3.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-7.jpg" alt=""></div>
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

                            <!-- Property Block -->
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-4.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-4.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-8.jpg" alt=""></div>
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
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-5.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-5.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-9.jpg" alt=""></div>
                                        <h3><a href="property-detail.html">Apartment Morden 1243, W No...</a></h3>
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
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/property-6.jpg" alt=""></figure>
                                        <span class="for">FOR SALE</span>
                                        <span class="featured">FEATURED</span>
                                        <ul class="option-box">
                                            <li><a href="images/resource/property-6.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                            <li><a href="#"><i class="la la-heart"></i></a></li>
                                            <li><a href="#"><i class="la la-retweet"></i></a></li>
                                        </ul>
                                        <ul class="info clearfix">
                                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <li><a href="property-detail.html">Apartment</a>,</li>
                                            <li><a href="property-detail.html">Bar</a>,</li>
                                            <li><a href="property-detail.html">House</a>,</li>
                                        </ul>
                                        <div class="thumb"><img src="images/resource/thumb-10.jpg" alt=""></div>
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
                        
                        <!-- Pagination -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span>Prev</span></a></li>
                                <li><a href="#"><span>1</span></a></li>
                                <li class="active"><a href="#"><span>2</span></a></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#"><span>4</span></a></li>
                                <li class="next"><a href="#"><span>Next</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--search box-->
                        <div class="sidebar-widget sort-by">
                            <select class="custom-select-box">
                                <option>Sort By</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Industrial</option>
                                <option>Apartments</option>
                            </select>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget search-properties">
                            <div class="sidebar-title"><h3>Search Properties</h3></div>
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form method="post" action="https://expert-themes.com/html/ourland/index.html">
                                    <div class="row no-gutters">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Location</option>
                                                <option>New York</option>
                                                <option>Los Angeles</option>
                                                <option>Chicago</option>
                                                <option>Houston</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Status</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Any Bedrooms</option>
                                                <option>01 Bedroom</option>
                                                <option>02 Bedrooms</option>
                                                <option>03 Bedrooms</option>
                                                <option>04 Bedrooms</option>
                                                <option>05 Bedrooms</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Any Bathrooms</option>
                                                <option>01 Bathroom</option>
                                                <option>02 Bathrooms</option>
                                                <option>03 Bathrooms</option>
                                                <option>04 Bathrooms</option>
                                                <option>05 Bathrooms</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="range-slider-one clearfix">
                                                <label>Price Filter</label>
                                                <div class="price-range-slider"></div>
                                                <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                                <div class="title">US Doller</div>
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>

                         <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Category Properties</h3></div>
                            <ul class="cat-list">
                                <li><a href="#">Apartments <span>22</span></a></li>
                                <li><a href="#">Villas <span>45</span></a></li>
                                <li><a href="#">Open Houses <span>62</span></a></li>
                                <li><a href="#">Offices <span>70</span></a></li>
                                <li><a href="#">Residentals <span>90</span></a></li>
                                <li><a href="#">Co-Working <span>65</span></a></li>
                                <li><a href="#">Flat <span>48</span></a></li>
                                <li><a href="#">Cottage <span>24</span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h3>Recent Properties</h3></div>
                            <div class="widget-content">
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.html">
                                            <img src="images/resource/property-thumb-1.jpg" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                    <div class="price">$ 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.html">
                                            <img src="images/resource/property-thumb-2.jpg" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                    <div class="price">$ 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.html">
                                            <img src="images/resource/property-thumb-3.jpg" alt="">
                                            <span class="status hot">hot</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                    <div class="price">$ 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.html">
                                            <img src="images/resource/property-thumb-4.jpg" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="blog-detail.html">Laxury Balles Villa</a></h3>
                                    <div class="price">$ 760,000</div>
                                </article>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->


    <!--Clients Section-->
    <section class="clients-section style-three">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section--> 

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

<script src="{{asset('realestate/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/js/bootstrap.min.js')}}"></script>
<script src="{{asset('realestate/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('realestate/js/owl.js')}}"></script>
<script src="{{asset('realestate/js/wow.js')}}"></script>
<script src="{{asset('realestate/js/isotope.js')}}"></script>
<script src="{{asset('realestate/js/mixitup.js')}}"></script>
<script src="{{asset('realestate/js/appear.js')}}"></script>
<script src="{{asset('realestate/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('realestate/js/color-settings.js')}}"></script>
</body>

<!-- Tiger Cage/property-grid-view.html by g4bbar, Thu, 24 Jan 2019 15:35:04 GMT -->
</html>