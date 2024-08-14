<header id="masthead" class="header cmt-header-style-01 clearfix">

  <!-- top_bar -->
  <div class="top_bar cmt-textcolor-black clearfix">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="d-flex flex-row align-items-center justify-content-center">
                      <div class="top_bar_contact_item">
                          <div class="top_bar_icon"><i class="fa fa-phone"></i></div><a href="tel:+2250779240268">+225 07 79 24 02 68 / 05 02 40 94 82</a>
                      </div>
                      <div class="top_bar_contact_item">
                          <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div><a href="mailto:kyliansoro@gmail.com">kyliansoro@gmail.com</a>
                      </div>
                      <div class="top_bar_contact_item">
                          <div class="top_bar_icon"><i class="fa fa-clock-o"></i></div>Lundi-Vendredi: 08:00-17:30
                      </div>
                      
                      <div class="top_bar_contact_item top_bar_social mr_10 text-end">
                          <ul class="social-icons d-flex">
                              <li><a href="https://www.facebook.com/profile.php?id=61550845094511"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- top_bar end-->


  <!-- site-header-menu -->
  <div id="site-header-menu" class="site-header-menu">
      <div class="site-header-menu-inner cmt-stickable-header">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <!--site-navigation -->
                      <div class="site-navigation d-flex align-items-center justify-content-between">
                          <!-- site-branding -->
                          <div class="site-branding mr-auto">
                              <a class="home-link" href="{{route('home')}}" title="Ivoir Puissance 87" rel="home">
                                  <img id="logo-img" class="img-fluid" src="{{asset('images/logo.png')}}" alt="logo-img">
                              </a>
                          </div><!-- site-branding end -->
                          <div class="btn-show-menu-mobile menubar menubar--squeeze">
                              <span class="menubar-box">
                                  <span class="menubar-inner"></span>
                              </span>
                          </div>
                          <!-- menu -->
                          <nav class="main-menu menu-mobile" id="menu">
                              <ul class="menu">
                                  <li class="mega-menu-item active">
                                      <a href="#">Accueil</a>
                                      
                                  </li>
                                 
                                  <li class="mega-menu-item">
                                      <a href="#" class="mega-menu-link">Services</a>
                                      <ul class="mega-submenu">
                                        @foreach ($services as $service)
                                            <li><a href="{{route('service.detail', $service->id)}}">{{$service->name}} </a></li>
                                        @endforeach
                                      </ul>
                                  </li>
                                  <li class="mega-menu-item">
                                      <a href="#">Portfolio/Projets réalisés</a>
                                      
                                  </li>
                                  <li class="mega-menu-item">
                                      <a href="#">Blog/Actualités</a>
                                      
                                  </li>
                                  <li class="mega-menu-item">
                                      <a href="#">Contact</a>
                                      
                                  </li>
                              </ul>
                          </nav>
                          <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                              <div class="header_search">
                                  <a href="#" class="btn-default search_btn"><i class="fa fa-search"></i></a>
                                  <div class="header_search_content">
                                      <div class="header_search_content_inner">
                                          <a href="#" class="close_btn"><i class="ti ti-close"></i></a>
                                          <form id="searchbox" method="get" action="#">
                                              <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                              <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="header_btn mr_50">
                                  <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor" href="#">DEMANDER UN DEVIS<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div><!-- site-navigation end-->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- site-header-menu end-->
</header>