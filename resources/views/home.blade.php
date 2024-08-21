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
                          <h2 class="title">Dévis rapide</h2>
                      </div>
                  </div>
                  <form id="res_quote-form_2" class="res_quote-form wrap-form clearfix" method="post" action="{{route('store.devis')}}">
                    @csrf
                      <div class="d-sm-flex">
                          <div class="w-100 pr-10">
                              <label>
                                  <span class="text-input">
                                      <i class="ti-user"></i>
                                      <input name="fullname" type="text" class="form-control with-border bg-white" placeholder="Votre nom" required="required">
                                  </span>
                              </label>
                          </div>
                          <div class="w-100 pr-10">
                              <label>
                                  <span class="text-input">
                                      <i class="ti-mobile"></i>
                                      <input name="phone" type="text" class="form-control with-border bg-white" placeholder="N° téléphone" required="required">
                                  </span>
                              </label>
                          </div>
                          <div class="w-100 pr-0">
                              <button type="submit" class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-icon-btn-right cmt-btn-color-skincolor">Envoyer<i class="fa fa-arrow-circle-right"></i>
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
                                  <h5>QUI SOMMES-NOUS ?</h5>
                                  <h2 class="title">P87 votre partenaire pour bâtir l'avenir en toute sérénité.</h2>
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
                              <h2 class="title">Bon à savoir </h2>
                          </div>
                          <div class="title-desc"><p>IVOIR PUISSANCE 87 est une entreprise spécialisée dans les domaines suivants : le BTP, le Lotissement, la Gestion immobilière, l'Imprimerie, la Construction métallique, l'Entretien et le Nettoyage, les Arts - aménagement et divers.</p>
                          </div>
                      </div>
                      <!-- section-title end -->
                      <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{route('portefeuille')}}">Voir plus<i class="fa fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div><!-- row end -->
          <!-- row -->
          <div class="row slick_slider slick-arrows-style2" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "dots":false, "arrows":true, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}}, {"breakpoint":640,"settings":{"slidesToShow": 1}}]}'>
              @foreach($services as $service)
                <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox -->
                  <div class="featured-imagebox featured-imagebox-services style1">
                      <!-- featured-thumbnail -->
                      <div class="featured-thumbnail">
                          <a href="{{route('service.detail', $service->id)}}"><img class="img-fluid" src="{{$service->image ? asset($service->image) : '' }}" alt="{{$service->name}}"></a>
                      </div><!-- featured-thumbnail end-->
                      <div class="featured-content">
                          <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                          <i class="flaticon flaticon-electrician"></i>
                          </div>
                          <div class="featured-title">
                              <h5><a href="{{route('service.detail', $service->id)}}">{{$service->name}}</a></h5>
                          </div> 
                          <div class="featured-desc">
                              <p> {{ \Illuminate\Support\Str::limit(strip_tags($service->description), 20, '...') }}</p>
                          </div>
                          <div class="mt-15">
                              <a class="cmt-btn cmt-btn-size-md btn-inline cmt-icon-btn-right" href="{{route('service.detail', $service->id)}}">Voir détail<i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div><!-- featured-imagebox end -->
                </div>
              @endforeach
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
                                  <h2 class="title">Quelques atouts importants</h2>
                              </div>
                          </div>
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar" data-percent="75%">
                              <div class="progressbar-title">Construction d'école</div>
                              <div class="progress-bar-inner">
                                  <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                              </div>
                              <div class="progress-bar-percent" data-percentage="75">75%</div>
                          </div><!-- cmt-progress-bar end -->
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar clearfix" data-percent="55%">
                              <div class="progressbar-title">Aménagement foncier</div>
                              <div class="progress-bar-inner">
                                  <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                              </div>
                              <div class="progress-bar-percent" data-percentage="55">55%</div>
                          </div><!-- cmt-progress-bar end -->
                          <!-- cmt-progress-bar -->
                          <div class="cmt-progress-bar clearfix" data-percent="99%">
                              <div class="progressbar-title">Néttoyage de terrain</div>
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
          {{-- <div class="row">
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
          </div><!-- row end --> --}}
          {{-- <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 2, "slidesToScroll": 1 , "dots":false, "arrows":true, "autoplay":false, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":500,"settings":{"slidesToShow": 1}}]}' >
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
          </div> --}}
          <!-- row -->
          <div class="row">
              <div class="col-lg-9 m-auto">
                  <div class="mt-30 res-991-mt-15 text-center">
                    <h2 class="title">Nous offrons une gamme complète de services pour répondre à tous vos besoins : </h2>
                    
                        <p>🧹 Nettoyage de chantiers, bureaux, immeubles, et bien plus</p>
                        <p>🖨️ Impression sur tous types de supports</p>
                        <p>🎨 Peinture de bâtiment, enduit, desi...</p>
                    
                      <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-border cmt-icon-btn-right cmt-btn-color-skincolor mt-15" href="{{route('contact')}}">Contactez-nous<i class="fa fa-arrow-circle-right"></i></a>
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
                          <h5>CE QUE NOUS OFFRONS</h5>
                          <h4 class="title">Nous faisons la peinture du bâtiment, l'enduit, les designs d'intérieur et d'extérieur</h4>
                          
                      </div>
                  </div><!-- section-title end -->
                  <a class="cmt-btn cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-white cmt-btn cmt-btn-size-md" href="#">Voir plus<i class="fa fa-arrow-circle-right"></i></a>
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
                                      <h5>BTP </h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Bâtiment et Travaux Publics</p>
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
                                      <h5>Gestion Immobilière</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Gestion des biens immobiliers</p>
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
                                      <h5>Imprimerie</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Services d’impression</p>
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
                                      <h5>Construction Métallique</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Construction en métal</p>
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
                                      <h5>Entretien </h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Services d’entretien </p>
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
                                      <h5> Néttoyage</h5>
                                  </div>
                                  <div class="featured-desc">
                                      <p>Services de néttoyage</p>
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
                      
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class=" cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-white box-shadow index-spacing-5">
                      <!-- section title -->
                      <div class="section-title with-desc clearfix">
                          <div class="title-header">
                              <h2 class="title">DEMANDER UN DEVIS</h2>
                          </div>
                          <p class="title-desc">Ce formulaire permet de recueillir vos informations afin de constituer un dévis sur mésure.</p>
                      </div>
                      <!-- section title end -->
                      <form id="res_quote-form_2" class="res_quote-form wrap-form clearfix" method="post" action="{{route('store.devis')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <label>
                                <span class="text-input">
                                    <i class="ti-user"></i>
                                    <input name="fullname" type="text" class="form-control with-border bg-white" placeholder="Nom & prénom(s)" required="required">
                                </span>
                                </label>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label>
                                <span class="text-input">
                                    <i class="ti-mobile"></i>
                                    <input name="phone" type="text" class="form-control with-border bg-white" placeholder="N° téléphone" required="required">
                                </span>
                                </label>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label>
                                <span class="text-input">
                                    <i class="ti-email"></i>
                                    <input name="email" type="text" placeholder="Adresse E-mail" required="required" class="form-control with-border bg-white">
                                </span>
                                </label>
                            </div>                                    
                            <div class="col-sm-6 col-md-6">
                                <label>
                                    <span class="text-input">
                                        <i class="fa fa-check-circle-o"></i>
                                        <select name="service">
                                        <option value="">Selectionner votre service</option>
                                        @foreach($services as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                        </select>
                                    </span>
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <label>
                                <span class="text-input">
                                    <i class="ti-comments"></i>
                                    <textarea name="comment" rows="5" placeholder="Informations complémentaires" required="required"></textarea>
                                </span>
                                </label>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="mt-10">
                                    <button type="submit" class="cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-icon-btn-right cmt-btn-color-skincolor text-center">Envoyer le dévis <i class="fa fa-arrow-circle-right"></i>
                                    </button>
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
                            <h2 class="title">Portefeuille de projets</h2>
                        </div>
                        <div class="title-desc"><p>Quelques images de nos différents travaux réalisés</p></div>
                    </div><!-- section-title end -->
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="cmt-tabs cmt-tab-style-04 pt-15">
                        <ul class="tabs portfolio-filter">
                            <li class="tab active"><a href="#" data-filter="*">Tous</a></li>
                            @foreach($categories as $category)
                                <li class="tab"><a href="#" data-filter=".{{ Str::slug($category->category) }}">{{ $category->category }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="content-tab">
                        <!-- content-inner -->
                        <div class="row isotope-project">
                            @foreach($portfolios as $portfolio)
                                <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6 project_item {{ Str::slug($portfolio->category) }}">
                                    <!-- featured-imagebox-portfolio -->
                                    <div class="featured-imagebox featured-imagebox-portfolio cmt-bgcolor-darkgrey style1">
                                        <!-- cmt-box-view-overlay -->
                                        <div class="cmt-box-view-overlay">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <img class="img-fluid" src="{{$portfolio->image ? asset($portfolio->image) : '' }}" alt="{{$portfolio->title}}">
                                            </div><!-- featured-thumbnail end-->
                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($portfolio->description), 20, '...') }}</p>
                                                </div>
                                                <div class="featured-title">
                                                    <h5><a href="{{route('portfolio_detail', $portfolio->id)}}">{{$portfolio->title}}</a></h5>
                                                </div>
                                                <a class="cmt-btn cmt-btn-size-sm cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-skincolor" href="{{route('portfolio_detail', $portfolio->id)}}">Plus de détail</a>
                                            </div>
                                            
                                        </div>
                                    </div><!-- featured-imagebox-portfolio -->
                                </div>
                            @endforeach
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
                                      <a href="#" target="_self" class="cmt_prettyphoto">
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
                                  <h2 class="title">Vous avez besoin d'aide pour la construction de votre maison ?</h2>
                              </div>
                              <div class="title-desc">
                                  <p>Vous êtes propriétaire de maisons , immeubles, magasins ou bureau,</p>
                                  <p>contactez nous pour une meilleure gestion.</p>
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
                          <h5>Blogs et Actualités</h5>
                          <h2 class="title">Postes les plus populaires</h2>
                      </div>
                  </div><!-- section-title end -->
              </div>
          </div>
          <!-- slick_slider -->
          <div class="row slick_slider slick-arrows-style2" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
              @foreach($posts as $post)
                <div class="cmt-box-col-wrapper col-lg-4">
                  <!-- featured-imagebox-post -->
                  <div class="featured-imagebox featured-imagebox-post style2">
                      <div class="cmt-post-thumbnail featured-thumbnail">
                          <img class="img-fluid" src="{{$post->image ? asset($post->image) : '' }}" alt="{{$post->title}}">
                      </div>
                      <div class="featured-content">
                          <div class="post-meta">
                              <span class="cmt-meta-line post-date"><i class="fa fa-calendar mr-1"></i>{{ $post->created_at->format('d M Y') }}</span>
                          </div>
                          <div class="featured-title">
                              <h5><a href="{{route('blog.detail', $post->id)}}">{{$post->title}}</a></h5>
                          </div>
                          <div class="featured-desc">
                              <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->description), 20, '...') }}</p>
                              <div class="mt-15">
                                  <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-icon-btn-right" href="{{route('blog.detail', $post->id)}}" tabindex="0">Lire la suite<i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div><!-- featured-imagebox-post end-->
                </div>
               @endforeach
          </div><!-- row end -->
      </div>
  </section>
  <!--blog-section end-->


</div>

@endsection