@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.pagetitle')
<!-- END REVOLUTION SLIDER -->

<!--site-main start-->
<div class="site-main">
    <!--- conatact-section -->
    <section class="cmt-row conatact-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="pr-25">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Si vous avez des questions, n'hésitez pas à nous contacter !</h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    IVOIR PUISSANCE 87 est une entreprise spécialisée dans les domaines suivants : 
                                    le BTP, le Lotissement, la Gestion immobilière, l'Imprimerie, la Construction métallique, l'Entretien et le Nettoyage, les Arts - aménagement et divers.
                                </p>
                            </div>
                        </div><!-- section title end -->
                        <ul class="social-icons circle mt-25 res-991-mb-30 cmt-textcolor-skincolor">
                            <li><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="tooltip-top" target="_blank" href="#" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a></li>
                            <li><a class="tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form id="contact_form_3" class="contact_form_3 wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="name" type="text" value="" placeholder="Nom & prénom(s)" required="required"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="address" type="text" value="" placeholder="E-mail" required="required"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="phone" type="text" value="" placeholder="N° téléphone" required="required"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="phone" type="text" value="" placeholder="Objet" required="required"></span>
                                </label>
                            </div>
                        </div>
                        <label>
                            <span class="text-input"><textarea name="message" rows="5" placeholder="Votre Message" required="required"></textarea></span>
                        </label>
                        <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-square cmt-btn-style-fill cmt-btn-color-skincolor" type="submit">Envoyer</button>
                    </form>
                </div>
            </div><!-- row end -->                
        </div>
    </section>
    <!-- conatact-section end -->


    <!-- zero_padding-section -->
    <section class="cmt-row zero_padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cmt-col-bgcolor-yes cmt-bgcolor-darkgrey cmt-bg pl-50 res-991-pl-30 res-991-pt-20 res-991-pb-20 border-rad_100 z-index-1">
                        <div class="cmt-col-wrapper-bg-layer cmt-bg-layer border-rad_100 overflow-hidden">
                            <div class="cmt-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="row cmt-vertical_sep">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="featured-icon-box icon-align-before-content pt-15 pb-15 res-991-pb-0 pl-0 pr-0">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-md cmt-icon_element-style-rounded">
                                                <i class="ti ti-email"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content pl-20">
                                            <div class="featured-title">
                                                <h5>Adresse E-mail</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>info@ivoirpuissance87.com</p>
                                                <p>kyliansoro@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="featured-icon-box icon-align-before-content pt-15 pb-15 res-991-pb-0 pl-0 pr-0">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-md cmt-icon_element-style-rounded">
                                                <i class="ti ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content pl-20">
                                            <div class="featured-title">
                                                <h5>Localisation</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Cocody Riviera Palmeraie, </p>
                                                <p>Cocody, Abidjan, Côte d'Ivoire,</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="featured-icon-box icon-align-before-content pt-15 pb-15 pl-0 pr-0">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-md cmt-icon_element-style-rounded">
                                                <i class="ti-alarm-clock"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content pl-20">
                                            <div class="featured-title">
                                                <h5>Horaires</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Lun – Ven: 8h00 – 17h30</p>
                                                <p>Sam – Dim: fermé</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- zero_padding-section end -->


   <!--google_map-->
    <div id="google_map" class="google_map mt_70 res-991-mt-60">
        <div class="map_container">
        <div id="map"></div>
        </div>
    </div>

</div><!--site-main end-->

@endsection