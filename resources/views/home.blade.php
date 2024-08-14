@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.slides')
<!-- END REVOLUTION SLIDER -->

<div class="site-main">

  <!--zero_padding-section-->
  <section class="cmt-row zero_padding-section clearfix">
      <div class="container-fluid p-0">
          <div class="row ">
              <div class="col-12">
              <div class="cmt-bgcolor-white res-1199-mlr-15 w-100 index-spacing-1 float-lg-right">
                  <div class="section-title without-seperator">
                      <div class="title-header">
                          <h2 class="title">Request Services Today</h2>
                      </div>
                  </div>
                  <form id="res_quote-form" class="res_quote-form wrap-form clearfix" method="post" action="#">
                      <div class="d-sm-flex">
                          <div class="w-100 pr-10">
                              <label>
                                  <span class="text-input">
                                      <i class="ti-user"></i>
                                      <input name="name" type="text" class="form-control with-border bg-white" placeholder="Enter Name" required="required">
                                  </span>
                              </label>
                          </div>
                          <div class="w-100 pr-10">
                              <label>
                                  <span class="text-input">
                                      <i class="ti-mobile"></i>
                                      <input name="name" type="text" class="form-control with-border bg-white" placeholder="Enter Phone" required="required">
                                  </span>
                              </label>
                          </div>
                          <div class="w-100 pr-0">
                              <button type="submit" class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-icon-btn-right cmt-btn-color-skincolor">Request<i class="fa fa-arrow-circle-right"></i>
                              </button>
                          </div>
                      </div>
                  </form>
                  </div>
              </div>
          </div>
          <!-- row end -->
      </div>
  </section>
  <!--zero_padding-section end-->


  <!--services-section-->
  <section class="cmt-row services-section bg-img1 clearfix">
      <div class="container">
          <!-- row -->
          <div class="row">
              <div class="col-lg-4">
                  <div class="col-bg-img-one cmt-bg cmt-col-bgimage-yes cmt-bgcolor-skincolor index-spacing-2">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                          <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                      <div class="layer-content">
                          <!-- section-title -->
                          <div class="section-title without-seperator">
                              <div class="title-header">
                                  <h5>WHO WE ARE</h5>
                                  <h2 class="title">All Types Of Electricity Service Provide Firm </h2>
                              </div>
                          </div><!-- section-title end -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-8">
                  <div class="pb-70 res-991-pb-30 res-991-pl-20 pl-60 res-991-pl-0">
                      <!-- section-title -->
                      <div class="section-title without-seperator">
                          <div class="title-header">
                              <h2 class="title">Our Successful History </h2>
                          </div>
                          <div class="title-desc"><p>Established in 1986, Mr. Handy is a global franchise organization providing electrical installation and repair services. <strong>Recognized by Entrepreneur</strong> among its Franchise. Mr. Handy provide services to both residential and commercial almost 200 locations worldwide.</p>
                          </div>
                      </div>
                      <!-- section-title end -->
                      <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="about.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div><!-- row end -->
          <!-- row -->
          <div class="row slick_slider slick-arrows-style2" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots":false, "arrows":true, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}}, {"breakpoint":640,"settings":{"slidesToShow": 1}}]}'>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="electrical-engineering.html"><img class="img-fluid" src="{{asset('images/services/services-01.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electrician"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="electrical-engineering.html">Electrical Engineering</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>We only include the most qualified licensed electricians</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="electrical-engineering.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="residential-project.html"><img class="img-fluid" src="{{asset('images/services/services-02.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electric-generator-1"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="residential-project.html">Residential Project</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>Many electrical contractors started in very environment</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="residential-project.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>                
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="commercial-service.html"><img class="img-fluid" src="{{asset('images/services/services-03.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-multimeter"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="commercial-service.html">Commercial Service</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>Whatever commercial electrical service need, we can help.</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="commercial-service.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>                
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="switchboard-upgrade.html"><img class="img-fluid" src="{{asset('images/services/services-04.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electrical-circuit"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="switchboard-upgrade.html">Switchboard Upgrade</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>Fuses for the significant contain copper fuse wires.</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="switchboard-upgrade.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="domestic-electrician.html"><img class="img-fluid" src="{{asset('images/services/services-05.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electrician-4"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="domestic-electrician.html">Domestic Electrician</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>Fuses for the significant contain copper fuse wires.</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="domestic-electrician.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="industrial-electrician.html"><img class="img-fluid" src="{{asset('images/services/services-06.jpg')}}" alt="image"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electrician-6"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="industrial-electrician.html">Industrial Electrician</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p>Fuses for the significant contain copper fuse wires.</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="industrial-electrician.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
              </div>
          </div><!-- row end -->
      </div>
  </section>
  <!--services-section end-->

  <!--zero_padding-section-->
  <section class="cmt-row zero_padding-section clearfix">
      <div class="container-fluid p-0">
          <!-- row -->
          <div class="row no-gutters">
              <div class="col-12">
                  <div class="col-bg-img-three cmt-bg cmt-col-bgimage-yes  index-spacing-4">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                      <div class="layer-content">
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-white index-spacing-3">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                      <div class="layer-content">
                          <div class="section-title without-seperator">
                              <div class="title-header">
                                  <h2 class="title">Some Important Facts</h2>
                              </div>
                          </div>
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar" data-percent="75%">
                              <div class="progressbar-title">Projects Done</div>
                              <div class="progress-bar-inner">
                                  <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                              </div>
                              <div class="progress-bar-percent" data-percentage="75">75%</div>
                          </div><!-- cmt-progress-bar end -->
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar clearfix" data-percent="55%">
                              <div class="progressbar-title">Qualified Staft</div>
                              <div class="progress-bar-inner">
                                  <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                              </div>
                              <div class="progress-bar-percent" data-percentage="55">55%</div>
                          </div><!-- cmt-progress-bar end -->
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar clearfix" data-percent="99%">
                              <div class="progressbar-title">Awared Wins</div>
                              <div class="progress-bar-inner">
                                  <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                              </div>
                              <div class="progress-bar-percent" data-percentage="99">99%</div>
                          </div><!-- cmt-progress-bar end -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--zero_padding-section end-->


  <!-- pricing-section -->
  <section class="cmt-row pricing-section bg-img2 clearfix">
      <div class="container">
          <!-- row -->
          <div class="row">
              <div class="col-lg-12">
                  <!-- section title -->
                  <div class="section-title title-style-center_text">
                      <div class="title-header without-seperator">
                          <h5>Our pricing & plans</h5>
                          <h2 class="title">Best Maintenance Plans</h2>
                      </div>
                  </div>
                  <!-- section title end -->
              </div>
          </div><!-- row end -->
          <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 2, "slidesToScroll": 1 , "dots":false, "arrows":true, "autoplay":false, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":500,"settings":{"slidesToShow": 1}}]}' >
              <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="cmt-pricing-plan maintenance-plan">
                      <div class="cmt-p_table-body">
                          <div class="cmt-p_table-tag cmt-bgcolor-skincolor">POPULAR</div>
                          <div class="cmt-p_table-head">
                              <div class="cmt-p_table-icon">
                                  <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-size-lg cmt-icon_element-color-skincolor">
                                      <i class="flaticon flaticon-automobile-2"></i>
                                  </div>
                              </div>
                              <div class="cmt-p_table-title">
                                  <h5>Commercial</h5>
                              </div>
                              <div class="cmt-p_table-amount">
                                  <h5>$120</h5>
                              </div>
                          </div>
                          <ul class="cmt-p_table-features">
                              <li><i class="ti ti-check"></i>Monthly Inspection</li>
                              <li><i class="ti ti-check"></i>General Repair</li>
                              <li><i class="ti ti-check"></i>Maintenance</li>
                              <li><i class="ti ti-check"></i>Fixing of Faulty wiring</li>
                              <li><i class="ti ti-check"></i>Electrical Geyser Repair</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="cmt-pricing-plan maintenance-plan">
                      <div class="cmt-p_table-body">
                          <div class="cmt-p_table-tag cmt-bgcolor-skincolor">20% Off</div>
                          <div class="cmt-p_table-head">
                              <div class="cmt-p_table-icon">
                                  <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-size-lg cmt-icon_element-color-skincolor">
                                      <i class="flaticon flaticon-mechanical"></i>
                                  </div>
                              </div>
                              <div class="cmt-p_table-title">
                                  <h5>Industries</h5>
                              </div>
                              <div class="cmt-p_table-amount">
                                  <h5>$185</h5>
                              </div>
                          </div>
                          <ul class="cmt-p_table-features">
                              <li><i class="ti ti-check"></i>Monthly Inspection</li>
                              <li><i class="ti ti-check"></i>General Repair</li>
                              <li><i class="ti ti-check"></i>Maintenance</li>
                              <li><i class="ti ti-check"></i>Fixing of Faulty wiring</li>
                              <li><i class="ti ti-check"></i>Electrical Geyser Repair</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="cmt-pricing-plan maintenance-plan">
                      <div class="cmt-p_table-body">
                          <div class="cmt-p_table-tag cmt-bgcolor-skincolor">POPULAR</div>
                          <div class="cmt-p_table-head">
                              <div class="cmt-p_table-icon">
                                  <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-size-lg cmt-icon_element-color-skincolor">
                                      <i class="flaticon flaticon-wheel"></i>
                                  </div>
                              </div>
                              <div class="cmt-p_table-title">
                                  <h5>Residential</h5>
                              </div>
                              <div class="cmt-p_table-amount">
                                  <h5>$175</h5>
                              </div>
                          </div>
                          <ul class="cmt-p_table-features">
                              <li><i class="ti ti-check"></i>Monthly Inspection</li>
                              <li><i class="ti ti-check"></i>General Repair</li>
                              <li><i class="ti ti-check"></i>Maintenance</li>
                              <li><i class="ti ti-check"></i>Fixing of Faulty wiring</li>
                              <li><i class="ti ti-check"></i>Electrical Geyser Repair</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- row -->
          <div class="row">
              <div class="col-lg-9 m-auto">
                  <div class="mt-30 res-991-mt-15 text-center">
                      <p>We offers our services on a “Pay as You Use” basis. There is a minimum charge of $50 per visit, which is exempt if the repair cost is more than $200. We also offer 3 days workmanship guarantee.</p>
                      <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-icon-btn-right cmt-btn-color-skincolor mt-15" href="contact-us-2.html">Contact Us<i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- pricing-section -->


  <section class="cmt-row bg-img3 cmt-bgcolor-darkgrey service-section cmt-bg cmt-bgimage-yes clearfix">
      <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12">
                  <!-- section-title -->
                  <div class="section-title">
                      <div class="title-header">
                          <h5>WHAT WE PROVIDE</h5>
                          <h2 class="title">We Help Build On Past &amp; Prepare For Your Future</h2>
                      </div>
                  </div><!-- section-title end -->
                  <a class="cmt-btn cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-white cmt-btn cmt-btn-size-md" href="services-1.html">Learn More<i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <div class="col-lg-9">
                  <div class="row pl-60 res-1199-pl-0 res-991-pt-40">
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-electrician-5"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Electrical Repair </h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Here are some more ways</p>
                                  </div>
                              </div>
                          </div><!-- featured-box end-->
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-soldering"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Trouble Shooting</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>For the accurate implementation</p>
                                  </div>
                              </div>
                          </div><!-- featured-box end-->
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-toolbox-1"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Panels Changes</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>An Electrical panel maintenance</p>
                                  </div>
                              </div>
                          </div><!-- featured-box end-->
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-broken-cable-2"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Cable Service</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Outdoor Lighting can trasform</p>
                                  </div>
                              </div>
                          </div><!-- featured-box end-->
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-broken"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Rewiring Service</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>The right re-wiring designs</p>
                                  </div>
                              </div>
                          </div><!-- featured-box end-->
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <!-- featured-box -->
                          <div class=" featured-icon-box icon-align-top-content style_i_01">
                              <div class="featured-icon"> 
                                  <div class="cmt-icon cmt-icon_element-color-white cmt-icon_element-onlytxt cmt-icon_element-size-lg">
                                      <i class="flaticon flaticon-electric-generator"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-title">
                                      <h5>Generators Repair</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Above and beyond to deliver</p>
                                  </div>
                              </div>
                          </div><!-- featured-box -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                  <div class="pb-50 res-991-pb-0"></div>
              </div>
          </div><!-- row end-->
      </div>
  </section>


  <section class="cmt-row broken-section bg-layer-equal-height clearfix">
      <div class="container">
          <div class="row no-gutters mt_115 res-991-mt_30">
              <div class="col-lg-6">
                  <div class="col-bg-img-two cmt-bg cmt-col-bgimage-yes cmt-bgcolor-skincolor index-spacing-5">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                          <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                      <div class="layer-content cmt-textcolor-white">
                          <div class="row slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1 , "dots":false, "arrows":false, "autoplay":false, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":500,"settings":{"slidesToShow": 1}}]}' >
                              <div class="col-lg-7">
                                  <!-- testimonials -->
                                  <div class="testimonials cmt-testimonial-box-view-style2">
                                      <div class="testimonial-content">
                                          <div class="star-ratings">
                                              <ul class="rating">
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                              </ul>
                                          </div>
                                          <blockquote class="testimonial-text">I received a cost and time estimate for installing a ceiling fan in a bedroom with no existing fan and changing the light switch. They were very professional, kept to their cost and time estimate and cleaned up well before leaving. And most love of what we doing with your hard work.</blockquote>
                                          <div class="testimonial-avatar">
                                              <div class="testimonial-img">
                                                  <img class="img-fluid" src="{{asset('images/testimonial/01.jpg')}}" alt="testimonial-img">
                                              </div>
                                              <div class="testimonial-caption">
                                                  <h5>Justin Timberlake</h5>
                                                  <label>Senior Electrician</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- testimonials end -->
                              </div>
                              <div class="col-lg-7">
                                  <!-- testimonials -->
                                  <div class="testimonials cmt-testimonial-box-view-style2"> 
                                      <div class="testimonial-content">
                                          <div class="star-ratings">
                                              <ul class="rating">
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li><i class="fa fa-star"></i></li>
                                              </ul>
                                          </div>
                                          <blockquote class="testimonial-text">Mr. Handy professionals were prompt & efficient in completing the job. They resolved persistent & potentially hazardous situation by relocating and replacing my very old & obsolete electrical panel & added a whole house surge protection too the all as you deserve the best. </blockquote>
                                          <div class="testimonial-avatar">
                                              <div class="testimonial-img">
                                                  <img class="img-fluid" src="{{asset('images/testimonial/02.jpg')}}" alt="testimonial-img">
                                              </div>
                                              <div class="testimonial-caption">
                                                  <h5>Justine barber</h5>
                                                  <label>Senior Electrician</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- testimonials end -->
                              </div>
                              <div class="col-lg-7">
                                  <!-- testimonials -->
                                  <div class="testimonials cmt-testimonial-box-view-style2"> 
                                      <div class="testimonial-content">
                                          <div class="star-ratings">
                                              <ul class="rating">
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                                  <li class="active"><i class="fa fa-star"></i></li>
                                              </ul>
                                          </div>
                                          <blockquote class="testimonial-text">We are very satisfied with our professional Mr Handy, they do excellent work. They are very professional. Made sure we understood each & everything that was being repaired & I feel now that I have our own personal electrician. And best experience ever with all the team.</blockquote>
                                          <div class="testimonial-avatar">
                                              <div class="testimonial-img">
                                                  <img class="img-fluid" src="{{asset('images/testimonial/03.jpg')}}" alt="testimonial-img">
                                              </div>
                                              <div class="testimonial-caption">
                                                  <h5>Denis Aeronic</h5>
                                                  <label>Senior Electrician</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- testimonials end -->
                              </div>
                          </div>
                          <div class="cmt-horizontal_sep width-100 mt-45 mb-35 ml_70 mr_70"></div>
                          <div class="featured-icon-box icon-align-before-content mb-0">
                              <div class="featured-icon">
                                  <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-white cmt-icon_element-size-xl">
                                      <i class="flaticon flaticon-support"></i>
                                  </div>
                              </div>
                              <div class="featured-content">
                                  <div class="featured-desc">
                                      <p>Need a service & ready to book? Call us</p>
                                  </div>
                                  <div class="featured-title">
                                      <h5 class="mb-0">Toll Free Number: 1800 1245 7890</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class=" cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-white box-shadow index-spacing-5">
                      <!-- section title -->
                      <div class="section-title with-desc clearfix">
                          <div class="title-header">
                              <h2 class="title">Request A Quote</h2>
                          </div>
                          <p class="title-desc">Like what you’ve seen so far? What you’ve seen on our website is only the tip! To know more kindly drop us request.</p>
                      </div>
                      <!-- section title end -->
                      <form id="res_quote-form_2" class="res_quote-form wrap-form clearfix" method="post" action="#">
                          <div class="row">
                              <div class="col-sm-6 col-md-6">
                                  <label>
                                  <span class="text-input">
                                      <i class="ti-user"></i>
                                      <input name="name" type="text" class="form-control with-border bg-white" placeholder="Your Name" required="required">
                                  </span>
                                  </label>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                  <label>
                                  <span class="text-input">
                                      <i class="ti-mobile"></i>
                                      <input name="name" type="text" class="form-control with-border bg-white" placeholder="Your Phone" required="required">
                                  </span>
                                  </label>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                  <label>
                                  <span class="text-input">
                                      <i class="ti-email"></i>
                                      <input name="phone" type="text" placeholder="Enter Email" required="required" class="form-control with-border bg-white">
                                  </span>
                                  </label>
                              </div>                                    
                              <div class="col-sm-6 col-md-6">
                                  <label>
                                      <span class="text-input">
                                          <i class="fa fa-check-circle-o"></i>
                                          <select name="menu-232" >
                                              <option value="Select Category">Select Category</option>
                                              <option value="Furniture cleaning">Switch Repair</option>
                                              <option value="Outdoor cleaning">Power circuit</option>
                                              <option value="Indoor cleaning">Power Grid</option>
                                          </select>
                                      </span>
                                  </label>
                              </div>
                              <div class="col-sm-12 col-md-12">
                                  <label>
                                  <span class="text-input">
                                      <i class="ti-comments"></i>
                                      <textarea name="message" rows="5" placeholder="Additional Details!" required="required"></textarea>
                                  </span>
                                  </label>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                  <div class="mt-10">
                                      <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor text-center" href="#">Submit Quote<i class="fa fa-arrow-circle-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <!--portfolio-section-->
  <section class="cmt-row portfolio-section bg-img5 clearfix">
      <div class="container">
          <!-- row -->
          <div class="row">
              <div class="col-lg-7 col-md-8 col-sm-10 m-auto">
                  <!-- section-title -->
                  <div class="section-title title-style-center_text">
                      <div class="title-header">
                          <h2 class="title">Project We Have Done</h2>
                      </div>
                      <div class="title-desc"><p>To keep things simple we’ve created one website builder package that includes everything you need to get online & start growing your business.</p></div>
                  </div><!-- section-title end -->
              </div>
          </div><!-- row end -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="cmt-tabs cmt-tab-style-04 pt-15">
                      <ul class="tabs portfolio-filter">
                          <li class="tab active"><a href="#" data-filter="*">All</a></li>
                          <li class="tab"><a href="#" data-filter=".industrial-objects">Industrial Objects</a></li>
                          <li class="tab"><a href="#" data-filter=".offices">offices</a></li>
                          <li class="tab"><a href="#" data-filter=".residences">Residences</a></li>
                          <li class="tab"><a href="#" data-filter=".retail-objects">Retail Objects</a></li>
                      </ul>
                  </div>
                  <div class="content-tab">
                      <!-- content-inner -->
                      <div class="row isotope-project">
                          <div class="col-lg-3 col-md-6 col-sm-6 project_item offices industrial-objects">
                              <!-- featured-imagebox-portfolio -->
                              <div class="featured-imagebox featured-imagebox-portfolio style3">
                                  <div class="cmt-box-view-overlay cmt-portfolio-box-view-overlay">
                                      <!-- featured-thumbnail -->
                                      <div class="featured-thumbnail"> 
                                          <img class="img-fluid" src="{{asset('images/portfolio/portfolio-01.jpg')}}" alt="image"> 
                                      </div>
                                      <!-- featured-thumbnail end-->
                                      <div class="cmt-media-link">
                                          <a class="cmt_prettyphoto cmt_image" title="Electrical Appliance" href="{{asset('images/portfolio/project-1-1200x800.jpg')}}">
                                              <i class="fa fa-search"></i>
                                          </a>
                                          <a href="electrical-appliance.html" class="cmt_pf_link"><i class="fa fa-link"></i></a>
                                      </div>
                                  </div>
                              </div><!-- featured-imagebox-portfolio end-->
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6 project_item offices residences">
                              <!-- featured-imagebox-portfolio -->
                              <div class="featured-imagebox featured-imagebox-portfolio style3">
                                  <div class="cmt-box-view-overlay cmt-portfolio-box-view-overlay">
                                      <!-- featured-thumbnail -->
                                      <div class="featured-thumbnail">
                                          <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-02.jpg')}}" alt="image"></a>
                                      </div><!-- featured-thumbnail end-->
                                      <div class="cmt-media-link">
                                          <a class="cmt_prettyphoto cmt_image" title="Thyristor Static Switches" href="{{asset('images/portfolio/project-2-1200x800.jpg')}}">
                                              <i class="fa fa-search"></i>
                                          </a>
                                          <a href="thyristor-static-switches.html" class="cmt_pf_link"><i class="fa fa-link"></i></a>
                                      </div>
                                  </div>
                              </div><!-- featured-imagebox-portfolio -->
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6 project_item offices residences">
                              <!-- featured-imagebox-portfolio -->
                              <div class="featured-imagebox featured-imagebox-portfolio style3">
                                  <div class="cmt-box-view-overlay cmt-portfolio-box-view-overlay">
                                      <!-- featured-thumbnail -->
                                      <div class="featured-thumbnail">
                                          <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-03.jpg')}}" alt="image"></a>
                                      </div><!-- featured-thumbnail end-->
                                      <div class="cmt-media-link">
                                          <a class="cmt_prettyphoto cmt_image" title="Ultrasonic Radar" href="{{asset('images/portfolio/project-3-1200x800.jpg')}}">
                                              <i class="fa fa-search"></i>
                                          </a>
                                          <a href="ultrasonic-radar.html" class="cmt_pf_link"><i class="fa fa-link"></i></a>
                                      </div>
                                  </div>
                              </div><!-- featured-imagebox-portfolio -->
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6 project_item offices retail-objects">
                              <!-- featured-imagebox-portfolio -->
                              <div class="featured-imagebox featured-imagebox-portfolio style3">
                                  <div class="cmt-box-view-overlay cmt-portfolio-box-view-overlay">
                                      <!-- featured-thumbnail -->
                                      <div class="featured-thumbnail">
                                          <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-04.jpg')}}" alt="image"></a>
                                      </div><!-- featured-thumbnail end-->
                                      <div class="cmt-media-link">
                                          <a class="cmt_prettyphoto cmt_image" title="Temperature Controlled" href="{{asset('images/portfolio/project-4-1200x800.jpg')}}">
                                              <i class="fa fa-search"></i>
                                          </a>
                                          <a href="temperature-controlled.html" class="cmt_pf_link"><i class="fa fa-link"></i></a>
                                      </div>
                                  </div>
                              </div><!-- featured-imagebox-portfolio -->
                          </div>
                      </div>
                  </div>
              </div>
          </div><!-- row end -->
      </div>
  </section>
  <!--portfolio-section end-->


  <section class="cmt-row zero_padding-section clearfix">
      <div class="container-fluid p-0">
          <!-- row -->
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="col-bg-img-four cmt-bg cmt-col-bgimage-yes index-spacing-6">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                      <div class="layer-content">
                          <div class="d-flex align-items-center flex-column text-center cmt-textcolor-white">
                              <div class="cmt-play-icon-btn">
                                  <div class="cmt-play-icon-animation">
                                      <a href="https://youtu.be/7e90gBu4pas" target="_self" class="cmt_prettyphoto">
                                          <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-md cmt-icon_element-style-rounded">
                                              <i class="fa fa-play"></i>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-white index-spacing-7 index-spacing-8 ml-auto z-index-1 clearfix">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                      <div class="layer-content">
                          <div class="section-title without-seperator">
                              <div class="title-header">
                                  <h2 class="title">Do You Need Help With Best Electrical Maintenance?</h2>
                              </div>
                              <div class="title-desc">
                                  <p>We’re pursuing excellence from your initial consultation our warranties and follow-through. Owned & operated…</p>
                              </div>
                          </div>
                          <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-left cmt-btn-color-skincolor mt-15 mr-2" href="about-2.html"><i class="fa fa-phone"></i>Give us a call</a>
                          <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-icon-btn-left cmt-btn-color-skincolor mt-15" href="about-3.html"><i class="fa fa-bolt"></i>Free estimate</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  
  <section>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  
              </div>
          </div>
      </div>
  </section>


  <!--blog-section-->
  <section class="cmt-row blog-section bg-img2 clearfix">
      <div class="container">
          <!-- row -->
          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <!-- section-title -->
                  <div class="section-title title-style-center_text without-seperator">
                      <div class="title-header">
                          <h5>Happing events & post</h5>
                          <h2 class="title">Most Popular Posts</h2>
                      </div>
                  </div><!-- section-title end -->
              </div>
          </div>
          <!-- slick_slider -->
          <div class="row slick_slider slick-arrows-style2" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog01.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 20, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">Why Breaker Box Outside House</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>If your home is older than this, then your breaker box is probably located inside your home. The average age of homes ac...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog02.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 20, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">How Standard Light Switch Work</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>If your home is older than this, then your breaker box is probably located inside your home. The average age of homes ac...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog03.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 20, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">Why Do Light Switches Go Bad?</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>Just like any other type of simple machine, light switches have several moving parts. Over time, they wear down. Connect...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog04.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 20, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">Smart Meter for Electricity Safe?</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>A smart meter records your household’s power consumption (usually electricity, sometimes gas and water) and uses two-w...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog05.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 20, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">How to Reset a Motion Sensor for Home</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>Turn off the fixture's circuit breaker for at least 30 seconds, If the fixture has a light switch, turn the switch on fo...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
              <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{asset('images/blog/blog06.jpg')}}" alt="image">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>November 23, 2020</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="blog-single.html">How to Choose Right Light Bulbs?</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>You must be wander of how can you clean the top of the class of the cookers without removing&nbsp; inner parts. Lockdown...</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="blog-single.html" tabindex="0">Read More<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
              </div>
          </div><!-- row end -->
      </div>
  </section>
  <!--blog-section end-->


</div>

@endsection