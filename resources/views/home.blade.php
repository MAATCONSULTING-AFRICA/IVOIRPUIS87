@extends('layouts.app')
@section('content')

<!--Hero Section ======================-->
<section class="section-hero hero-1 hero-components-style-1 hero-margin-top-style-1 position-relative mb-60 mb-lg-100 mb-xxl-120">
    <div class="hero-overlay">
        <div class="hero-wrapper parallax position-relative text-bg-dark" data-bs-theme="dark">
            <div class="container">
                <div class="hero-inner d-flex flex-column gap-30 text-center text-md-start">
                    <h1 class="mb-0 hero-heading-text">Ivoir Puissance 87</h1>
                    <ul>
                        <li><p class="lead hero-text">Vous avez un projet de construction ?</p></li>
                        <li><p class="lead hero-text">Vous souhaitez construire une maison ou une école ?</p></li>
                        <li> <p class="lead hero-text">Vous cherchez à vendre ou acheter un bien immobilier ?</p></li>
                    </ul>
                    <div class="hero-bottom-components d-flex flex-column flex-lg-row align-items-lg-center gap-30">
                        <div class="mb-5 mb-md-0">
                            <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-3 text-uppercase">
                                <span>Contactez-nous</span>
                                <span class="arrow-icon-2">											
                                    <svg width="11" height="12"><use xlink:href="#arrow-icon-2"></use></svg> 
                                </span>
                            </a>
                        </div>
                        <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                            <ul class="hero-author-wrapper list-unstyled mb-0 d-flex gap-0">
                                <li>
                                    <img src="{{asset('assets/images/hero-author-1.jpg')}}" class="hero-author-image" alt="hero-author-1">
                                </li>
                                <li>
                                    <img src="{{asset('assets/images/hero-author-2.jpg')}}" class="hero-author-image" alt="hero-author-2">
                                </li>
                                <li>
                                    <img src="{{asset('assets/images/hero-author-3.jpg')}}" class="hero-author-image" alt="hero-author-3">
                                </li>
                            </ul>
                            <div class="d-flex flex-column align-items-center align-items-md-start gap-0">
                                <h5 class="mb-0 d-flex fw-semibold">
                                    <span class="odometer" data-count-to=05></span><span class="odometer-pertial-text">K+</span>
                                </h5>
                                <p class="mb-0  fw-medium">Clients satisfaits</p>
                            </div>
                        </div>	
                    </div>
                </div>
                <!-- hero-inner -->
            </div>
            <!-- container -->					
        </div>
        <!-- hero-wrapper -->
    </div>
    
</section>
<!--Hero Section ======================-->


<!--About Section ======================-->
<section class="section-about about-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row gx-40 gy-5 gy-xl-0">
            <div class="col-xl-6 col-xxl-7">
                <div class="row gy-30">
                    <div class="col-md-6">
                        <div class="about-image-1 border-10 wow fadeInUp">
                            <img src="{{asset('assets/images/about-image-6.jpg')}}" class="img-fluid" alt="about-image-6">
                        </div>									
                        <!-- about-image-1 -->
                    </div>
                    <!-- col-md-6 -->
                    <div class="col-md-6">
                        <div class="d-flex flex-column gap-30">
                            <ul class="about-experience list-unstyled d-flex align-items-center justify-content-center gap-10 border-10 shadow mb-0">
                                <li>
                                    <h2 class="display-3 fw-bold text-primary mb-0">12</h2>												
                                </li>
                                <li>
                                    <h4 class="display-6 fw-bold lh-1 mb-0">ans d'expériences</h4>
                                </li>											
                            </ul>
                            <div class="about-image-2 border-10 wow fadeInUp">
                                <img src="{{asset('assets/images/about-image-2.jpg')}}" class="img-fluid" alt="about-image-1">
                            </div>	
                            <!-- about-image-1 -->									
                        </div>
                        <!-- d-flex -->
                    </div>
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-7 -->
            <div class="col-xl-6 col-xxl-5">
                <div class="mb-30 mb-xxl-40">
                    <h6 class="mb-3 text-primary">A Propos de nous</h6>
                    <h4 class="mb-20">IVOIR PUISSANCE 87 est une entreprise <span class="text-primary">spécialisée</span> dans les domaines suivants :</h4>
                    <p class="mb-4"> le BTP, le Lotissement, la Gestion immobilière, l'Imprimerie, la Construction métallique, l'Entretien et le Nettoyage, les Arts - aménagement et divers.</p>
                    <p class="mb-0 fw-medium body-color-style-2 custom-border-left pe-xxl-30">
                        Nous offrons une gamme complète de services pour répondre à tous vos besoins : 
                    </p>
                    <ul class="list-style-none">
                        <li>🧹 Nettoyage de chantiers, bureaux, immeubles, et bien plus</li>
                        <li>🖨️ Impression sur tous types de supports</li>
                        <li>🎨 Peinture de bâtiment, enduit, design d'intérieur et d'extérieur</li>
                    </ul>
                </div>
                
                <div class="d-flex flex-wrap gap-4 align-items-md-center mb-40 mb-xxl-5">
                    <div>
                        <a href="contact-us.html" class="btn btn-primary">Contactez-nous</a>
                    </div>
                    <div class="contact-about d-flex gap-10 gap-lg-3 align-items-center">
                        <span class="contact-icon">											
                            <svg width="24" height="24"><use xlink:href="#phone-icon"></use></svg> 
                        </span>					
                        <p class="mb-0 fs-5 fw-bold"><a href="tel:+2250779240268" class="text-decoration-none link-hover-animation-1">+225 07 792 402 68</a></p>									
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3 gap-xl-10">
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=25></span><span class="odometer-pertial-text">K</span>
                        </h4>
                        <p class="mb-0 fw-medium">BTP</p>
                    </div>
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=150></span><span class="odometer-pertial-text">+</span>
                        </h4>
                        <p class="mb-0 fw-medium">Gestion Immobilière</p>
                    </div>
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=12></span><span class="odometer-pertial-text">M+</span>
                        </h4>
                        <p class="mb-0 fw-medium">Imprimerie</p>
                    </div>
                </div>
            </div>
            <!-- col-5 -->
        </div>
        <!-- row -->					
    </div>
    <!-- container -->
</section>
<!--About Section ======================-->


<!--Support Section ======================-->
<section class="section-support support-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="support-wrapper bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row align-items-center g-60">
                <div class="col-lg-7 col-xxl-6 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                    <div class="mb-30 mb-xxl-40">
                        <h6 class="subtitle mb-10 text-primary">Pourquoi nous choisir ?</h6>
                        <h3 class="mb-3 title">Mouvoir le  <span class="text-primary">potentiel</span> de votre entreprise</h3>
                        <p class="mb-0 descriptions-width">Nous comprenons que le choix du bon partenaire foncier est crucial pour une meilleure installation.</p>
                    </div>								

                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-30">
                        <div class="d-flex flex-column gap-10">
                            <span class="globe-icon mb-10 text-primary">											
                                <svg width="30" height="30"><use xlink:href="#globe-icon"></use></svg> 
                              </span>
                            <h6 class="mb-0 fw-medium">Réseau mondial</h6>
                            <p class="mb-0">Grâce à notre réseau mondial, nous pouvons desservir les régions les plus éloignées du globe.</p>
                        </div>
                        <div class="d-flex flex-column gap-10">
                            <span class="clock-icon mb-10 text-primary">											
                                <svg width="30" height="30"><use xlink:href="#clock-icon"></use></svg> 
                              </span>
                            <h6 class="mb-0 fw-medium">Assistance 24/7</h6>
                            <p class="mb-0">Nous pensons qu'un soutien exceptionnel à la clientèle est la pierre angulaire.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->

                <div class="col-lg-5 col-xxl-6">
                    <div class="support-image-wrapper position-relative">
                        <div class="support-inner-image-1 border-10 wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1.4s">
                            <img src="{{asset('assets/images/support-image.jpg')}}" class="img-fluid" alt="support-image">										
                        </div>	
                        <div class="support-inner-image-2 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1.6s">
                            <img src="{{asset('assets/images/support-image-3.jpg')}}" class="img-fluid" alt="support-image-3">										
                        </div>								
                    </div>
                </div>
                <!-- col-6 -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- support-wrapper -->
</section>
<!--Support Section ======================-->


<!--Service Section ======================-->
<section class="section-service service-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row gx-30 gy-60">
            <div class="col-lg-5 col-xl-6">
                <div class="mb-30 mb-xxl-40">
                    <h6 class="subtitle mb-10 text-primary">Nos Services</h6>
                    <h5 class="mb-3 title">Services  <span class="text-primary">intégrés</span> de construction, gestion immobilière, impression et entretien .</h5>
                    <p class="mb-0 descriptions-width">
                        Les services incluent la construction et l'entretien d'infrastructures (BTP et construction métallique), la gestion et l'administration de biens immobiliers, la production de documents imprimés pour divers besoins, ainsi que l'entretien et le nettoyage des espaces pour assurer 
                        leur propreté et leur bon état. Ces services sont essentiels pour soutenir les secteurs résidentiels, commerciaux et industriels, en offrant des solutions complètes de construction, gestion, maintenance, et communication.
                    </p>
                </div>							

                <div class="video-image-wrapper position-relative border-10 wow fadeInUp">
                    <img src="{{asset('assets/images/video-image.jpg')}}" class="img-fluid" alt="video-image">
                    <a href="https://www.youtube.com/watch?v=lfDZJqSrIuk" aria-label="video-popus-icon" class="video-popup video-popup-style-1">
                        <span class="video-icon">						
                            <svg width="24" height="30"><use xlink:href="#video-icon"></use></svg> 
                        </span>	
                    </a>
                </div>		
                <!-- video-image-wrapper -->
            </div>
            <!-- col-6 -->

            <div class="col-lg-7 col-xl-6">
                <div class="d-flex flex-column gap-30">
                    <div class="card card-style-1 wow fadeIn" data-wow-delay="100ms" data-wow-duration="1.2s">
                        <div class="row gx-30 align-items-center">
                          <div class="col-lg-6 col-xxl-5">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/service-image-1.jpg')}}" class="img-fluid card-image" alt="service-image-1">
                            </div>
                            <!-- card-image-wrapper -->
                          </div>
                          <div class="col-lg-6 col-xxl-7">
                            <div class="card-body">
                                <h4 class="card-title lead fw-semibold mb-10"><a href="service-single-1.html" class="text-decoration-none stretched-link link-hover-animation-1">BTP (Bâtiment et Travaux Publics)</a></h4>												
                                <p class="card-text mb-10 mb-lg-20">Le secteur du BTP couvre un large éventail d'activités liées à la construction, la rénovation et l'entretien des infrastructures et bâtiments</p>
                                <div>
                                    <a href="service-single-1.html" class="btn btn-link text-decoration-none link-hover-animation-1 gap-10">Voir plus
                                        <span class="btn-link-icon">											
                                            <svg width="11" height="12"><use xlink:href="#arrow-icon-2"></use></svg> 
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- card-body -->
                          </div>
                        </div>
                    </div>
                    <!-- card-style-3 -->

                    <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                        <div class="row gx-30 align-items-center">
                          <div class="col-lg-6 col-xxl-5">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/service-image-2.jpg')}}" class="img-fluid card-image" alt="service-image-2">
                            </div>
                            <!-- card-image-wrapper -->
                          </div>
                          <div class="col-lg-6 col-xxl-7">
                            <div class="card-body">
                                <h4 class="card-title lead fw-semibold mb-10"><a href="service-single-2.html" class="text-decoration-none stretched-link link-hover-animation-1">Gestion immobilière </a></h4>													
                                <p class="card-text mb-10 mb-lg-20">La gestion immobilière consiste à administrer et gérer des biens immobiliers au nom des propriétaires.</p>
                                <div>
                                    <a href="service-single-2.html" class="btn btn-link text-decoration-none link-hover-animation-1 gap-10">Voir plus
                                        <span class="btn-link-icon">											
                                            <svg width="11" height="12"><use xlink:href="#arrow-icon-2"></use></svg> 
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- card-body -->
                          </div>
                        </div>
                    </div>
                    <!-- card-style-3 -->

                    <div class="card card-style-1 wow fadeIn" data-wow-delay="500ms" data-wow-duration="1.2s">
                        <div class="row gx-30 align-items-center">
                          <div class="col-lg-6 col-xxl-5">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/service-image-3.jpg')}}" class="img-fluid card-image" alt="service-image-3">
                            </div>
                            <!-- card-image-wrapper -->
                          </div>
                          <div class="col-lg-6 col-xxl-7">
                            <div class="card-body">
                                <h4 class="card-title lead fw-semibold mb-10"><a href="service-single-3.html" class="text-decoration-none stretched-link link-hover-animation-1">Imprimerie</a></h4>													
                                <p class="card-text mb-10 mb-lg-20">L'imprimerie englobe tous les services liés à la production de documents imprimés. Cela peut inclure l'impression de brochures, cartes de visite, affiches, livres, magazines, et autres matériels publicitaires ou informatifs.</p>
                                <div>
                                    <a href="service-single-3.html" class="btn btn-link text-decoration-none link-hover-animation-1 gap-10">Read More
                                        <span class="btn-link-icon">											
                                            <svg width="11" height="12"><use xlink:href="#arrow-icon-2"></use></svg> 
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- card-body -->
                          </div>
                        </div>
                    </div>
                    <!-- card-style-3 -->									
                </div>
                <!-- d-flex -->
            </div>
            <!-- col-6 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--Service Section ======================-->


<!--Portfolio Section ======================-->
<section class="section-portfolio portfolio-1 hover-element">
    <div class="portfolio-wrapper bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">		
            <div class="row justify-content-between align-items-md-end gx-0 gy-30 mb-40">
                <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                    <h6 class="subtitle mb-10 text-primary">Latest Project</h6>
                    <h3 class="mb-0">Explore Our <span class="text-primary">Portfolio</span> of Recent Achievements</h3>
                </div>
                <!-- col-md-5 -->
                <div class="col-md-4 col-lg-3">
                    <div class="text-md-end">
                        <a href="project.html" class="btn btn-primary">View All Project</a>
                    </div>								
                </div>
                <!-- col-md-3 -->
            </div>			
            <!--row mb-40 -->
            <div class="row g-30 wow fadeInUp">
                <div class="col-lg-5">
                    <div class="portfolio-image hover-item portfolio-image-1 border-10 position-relative">
                        <img src="{{asset('assets/images/portfolio-1.jpg')}}" class="img-fluid" alt="portfolio-1">
                        <div class="portfolio-image-hover">
                            <div class="portfolio-hover-left-content">
                                <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                <h5 class="portfolio-hover-heading mb-0">Road Freight Solution</h5>
                            </div>	
                            <!-- portfolio-hover-left-content -->
                            <div>
                                <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                    <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                </a>
                            </div>
                        </div>
                        <!-- portfolio-image-hover -->
                    </div>
                </div>
                <!-- col-5 -->
                <div class="col-lg-7">
                    <div class="row g-30">
                        <div class="col-sm-6">
                            <div class="portfolio-image hover-item portfolio-image-2 border-10 position-relative">
                                <img src="{{asset('assets/images/portfolio-2.jpg')}}" class="img-fluid" alt="portfolio-2">
                                <div class="portfolio-image-hover">
                                    <div class="portfolio-hover-left-content">
                                        <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                        <h5 class="portfolio-hover-heading mb-0">Ocean Freight Solution</h5>
                                    </div>	
                                    <!-- portfolio-hover-left-content -->
                                    <div>
                                        <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                            <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                        </a>
                                    </div>
                                </div>
                                <!-- portfolio-image-hover -->
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-sm-6">
                            <div class="portfolio-image hover-item portfolio-image-2 border-10 position-relative">
                                <img src="{{asset('assets/images/about-image-5.jpg')}}" class="img-fluid" alt="about-image-5">
                                <div class="portfolio-image-hover">
                                    <div class="portfolio-hover-left-content">
                                        <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                        <h5 class="portfolio-hover-heading mb-0">Road Freight Solution</h5>
                                    </div>	
                                    <!-- portfolio-hover-left-content -->
                                    <div>
                                        <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                            <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                        </a>
                                    </div>
                                </div>
                                <!-- portfolio-image-hover -->
                            </div>
                        </div>
                        <!-- col-6 -->
                    </div>
                    <!-- row -->
                </div>
                <!-- col-7 -->
                <div class="col-lg-7">
                    <div class="row g-30">
                        <div class="col-sm-6">
                            <div class="portfolio-image hover-item portfolio-image-2 border-10 position-relative">
                                <img src="{{asset('assets/images/portfolio-3.jpg')}}" class="img-fluid" alt="portfolio-3">
                                <div class="portfolio-image-hover">
                                    <div class="portfolio-hover-left-content">
                                        <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                        <h5 class="portfolio-hover-heading mb-0">Air Freight Solution</h5>
                                    </div>	
                                    <!-- portfolio-hover-left-content -->
                                    <div>
                                        <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                            <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                        </a>
                                    </div>
                                </div>
                                <!-- portfolio-image-hover -->
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-sm-6">
                            <div class="portfolio-image hover-item portfolio-image-2 border-10 position-relative">
                                <img src="{{asset('assets/images/portfolio-4.jpg')}}" class="img-fluid" alt="portfolio-4">
                                <div class="portfolio-image-hover">
                                    <div class="portfolio-hover-left-content">
                                        <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                        <h5 class="portfolio-hover-heading mb-0">Road Freight Solution</h5>
                                    </div>	
                                    <!-- portfolio-hover-left-content -->
                                    <div>
                                        <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                            <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                        </a>
                                    </div>
                                </div>
                                <!-- portfolio-image-hover -->
                            </div>
                        </div>
                        <!-- col-6 -->
                    </div>
                    <!-- row -->
                </div>
                <!-- col-7 -->
                <div class="col-lg-5">
                    <div class="portfolio-image hover-item portfolio-image-1 border-10 position-relative active">
                        <img src="{{asset('assets/images/about-image-3.jpg')}}" class="img-fluid" alt="about-image-3">
                        <div class="portfolio-image-hover">
                            <div class="portfolio-hover-left-content">
                                <a href="#" class="portfolio-subtitle-style-2 text-decoration-none mb-0 fw-medium">Logistics</a>
                                <h5 class="portfolio-hover-heading mb-0">Road Freight Solution</h5>
                            </div>	
                            <!-- portfolio-hover-left-content -->
                            <div>
                                <a href="project-single.html" class="text-decoration-none arrow-icon-3 arrow-style-1" aria-label="arrow-icon-style-1">											
                                    <svg width="20" height="12"><use xlink:href="#arrow-icon-3"></use></svg> 
                                </a>
                            </div>
                        </div>
                        <!-- portfolio-image-hover -->
                    </div>
                </div>
                <!-- col-5 -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- portfolio-wrapper -->
</section>
<!--Portfolio Section ======================-->


<!--Pricing Section ======================-->
<section class="section-pricing pricing-1 hover-element py-60 py-lg-100 py-xxl-120">
    <div class="container">
        <div class="text-lg-center mb-40">
            <h6 class="mb-10 text-primary fw-medium">Pricing</h6>
            <h3 class="mb-0">Our Best <span class="text-primary">Pricing</span> Plan</h3>
        </div>
        <!-- text-lg-center -->
        <div class="row gx-30 gy-40">
            <div class="col-lg-6 col-xl-4">
                <div class="card card-pricing hover-item shadow wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.3s">
                    <img src="{{asset('assets/images/pricing-image-1.jpg')}}" class="card-img-top" alt="pricing-image-1">
                    <div class="card-body card-body-bg-2 text-center">
                      <h4 class="card-title mb-10 position-relative">Road Freight</h4>
                      <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                        <h4 class="fs-2 pricing-amount mb-0">$120</h4>
                        <span class="pricing-quantity">/150kg</span>
                      </div>
                      <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Real Time Rate Shoping
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Customs Business Rules
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            200 Freight Shipment/Month
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            1 Warehouse
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Full Insurance
                        </li>
                      </ul>
                      <div>
                        <a href="contact-us.html" class="btn btn-secondary">Get Started</a>
                      </div>

                    </div>
                </div>
            </div>
            <!-- col-4 -->
            <div class="col-lg-6 col-xl-4">
                <div class="card card-pricing hover-item shadow active wow fadeIn" data-wow-delay="400ms" data-wow-duration="1.3s">
                    <img src="{{asset('assets/images/pricing-image-2.jpg')}}" class="card-img-top" alt="pricing-image-2">
                    <div class="card-body card-body-bg-1 text-center">
                      <h4 class="card-title mb-10 position-relative">Air Freight</h4>
                      <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                        <h4 class="fs-2 pricing-amount mb-0">$270</h4>
                        <span class="pricing-quantity">/250kg</span>
                      </div>
                      <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Real Time Rate Shoping
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Customs Business Rules
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            200 Freight Shipment/Month
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            1 Warehouse
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Full Insurance
                        </li>
                      </ul>
                      <div>
                        <a href="contact-us.html" class="btn btn-secondary">Get Started</a>
                      </div>

                    </div>
                </div>
            </div>
            <!-- col-4 -->
            <div class="col-lg-6 col-xl-4">
                <div class="card card-pricing hover-item shadow wow fadeIn" data-wow-delay="650ms" data-wow-duration="1.3s">
                    <img src="{{asset('assets/images/pricing-image-3.jpg')}}" class="card-img-top" alt="pricing-image-3">
                    <div class="card-body card-body-bg-3 text-center">
                      <h4 class="card-title mb-10 position-relative">Ocean Freight</h4>
                      <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                        <h4 class="fs-2 pricing-amount mb-0">$320</h4>
                        <span class="pricing-quantity">/500kg</span>
                      </div>
                      <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Real Time Rate Shoping
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Customs Business Rules
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            200 Freight Shipment/Month
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            1 Warehouse
                        </li>
                        <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                            <span class="check-icon">											
                                <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                              </span>
                            Full Insurance
                        </li>
                      </ul>
                      <div>
                        <a href="contact-us.html" class="btn btn-secondary">Get Started</a>
                      </div>

                    </div>
                </div>
            </div>
            <!-- col-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--Pricing Section ======================-->


<!--CTA Section ======================-->
<section class="section-cta cta-1 mb-60 mb-lg-100 mb-xxl-120">
    <div class="cta-wrapper text-bg-dark py-60 py-lg-100 py-xxl-120" data-bs-theme="dark">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between gy-40">
                <div class="col-lg-7">
                    <h3 class="mb-0 cta-heading">Delivering <span class="text-primary">Excellence</span> Your Premier Transport Agency</h3>
                </div>
                <!-- col-7 -->

                <div class="col-lg-3">
                    <div class="d-flex justify-content-lg-end">
                        <a href="contact-us.html" class="btn btn-secondary">Contact with us</a>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- cta-wrapper -->
</section>
<!--CTA Section ======================-->


<!--Team Section ======================-->
<section class="section-team pb-60 pb-lg-100 pb-xxl-120 hover-element">
    <div class="container">
        <div class="section-top-contents text-lg-center mb-40">
            <h6 class="mb-10 text-primary fw-medium">Our Team</h6>
            <h3 class="mb-20 mb-lg-30">Meet Our <span class="text-primary">Dedicated</span> Team</h3>
            <p class="mb-0">Get to know the individuals who work tirelessly behind the scenes to ensure that we deliver top-notch service to our clients.</p>
        </div>
        <!-- text-lg-center -->

        <div class="row g-30 wow fadeInUp">
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10 active">								
                    <img src="{{asset('assets/images/team-1.jpg')}}" class="img-fluid" alt="team-1">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="team-single.html" class="text-decoration-none stretched-link link-hover-animation-1">David M.Lalan</a></h5>
                        <p class="mb-0 fw-medium">Supply Chain Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{asset('assets/images/team-2.jpg')}}" class="img-fluid" alt="team-2">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="team-single.html" class="text-decoration-none stretched-link link-hover-animation-1">Tim David</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{asset('assets/images/team-3.jpg')}}" class="img-fluid" alt="team-3">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="team-single.html" class="text-decoration-none stretched-link link-hover-animation-1">James Bond</a></h5>
                        <p class="mb-0 fw-medium">Architechture Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{asset('assets/images/team-4.jpg')}}" class="img-fluid" alt="team-4">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="team-single.html" class="text-decoration-none stretched-link link-hover-animation-1">Elena Dewan</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{asset('assets/images/team-5.jpg')}}" class="img-fluid" alt="team-5">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="team-single.html" class="text-decoration-none stretched-link link-hover-animation-1">Tom Justin</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper position-relative border-10 custom-active">								
                    <img src="{{asset('assets/images/team-6.jpg')}}" class="img-fluid" alt="team-6">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column text-center align-items-center gap-1">																			
                        <h2 class="mb-0">300+</h2>	
                        <p class="mb-20 team-image-text">Creative team member in logistics Company</p>
                        <a href="team.html" class="btn btn-primary">Join Our Team</a>																	
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--Team Section ======================-->


<!--Brand Section ======================-->
<section class="section-brand brand-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="text-lg-center">
                <h6 class="mb-10 text-primary fw-medium">Our Partners</h6>
                <h3 class="mb-40">Our <span class="text-primary">Trusted</span> Collaborators</h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-30">
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-1.png')}}" class="img-fluid" alt="brand-1">
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-2.png')}}" class="img-fluid" alt="brand-2">
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-3.png')}}" class="img-fluid" alt="brand-3">
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-4.png')}}" class="img-fluid" alt="brand-4">
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-5.png')}}" class="img-fluid" alt="brand-5">
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="brand-item text-decoration-none">
                            <img src="{{asset('assets/images/brand-6.png')}}" class="img-fluid" alt="brand-6">
                        </a>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
        </div>
        <!-- container -->
    </div>
    <!-- brand-wrapper -->
</section>
<!--Brand Section ======================-->


<!--Testimonial Section ======================-->
<section class="section-testimonial testimonial-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="position-relative">
            <div class="row align-items-lg-center mb-40">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-lg-center">
                        <h6 class="mb-10 text-primary fw-medium">Testimonial</h6>
                        <h3 class="mb-20 mb-lg-30">Over 30,000 People Trusted Us</h3>
                        <p class="mb-0">“At Logistip, we are more than just a transportation company - we're your trusted partner in navigating the complexities of logistics and supply chain management.”</p>
                    </div>
                    <!-- text-lg-center -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
            
            <div class="swiper testimonial-thumb-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{asset('assets/images/testimonial-2.jpg')}}" class="img-fluid" alt="testimonial-2">
                                </div>															
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{asset('assets/images/testimonial-1.jpg')}}" class="img-fluid" alt="testimonial-1">
                                </div>															
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{asset('assets/images/testimonial-3.jpg')}}" class="img-fluid" alt="testimonial-3">
                                </div>															
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="swiper testimonial-thumb-swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">David Malan</a></h4>
                                    <p class="mb-0 fs-base">Marketing Manager</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with Logistip has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">Mark Arnold</a></h4>
                                    <p class="mb-0 fs-base">Cargo Handler</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with Logistip has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">Melina Rose</a></h4>
                                    <p class="mb-0 fs-base">Architechture Manager</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with Logistip has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                </div>
                
            </div>
                
            <!-- testimonialSwiper-1-buttons -->
            <div class="testimonialSwiper-1-buttons">
                <div class="testimonialSwiper-1-button-prev">
                    <span class="chevron-right-icon arrow-reverse">											
                        <svg width="10" height="20"><use xlink:href="#chevron-right-icon"></use></svg> 
                    </span>
                </div>
                <div class="testimonialSwiper-1-button-next">
                    <span class="chevron-right-icon">											
                        <svg width="10" height="20"><use xlink:href="#chevron-right-icon"></use></svg> 
                    </span>
                </div>									
            </div>
            <!-- testimonialSwiper-1-buttons -->						
        </div>
        <!-- position-relative -->
    </div>
    <!-- container -->
</section>
<!--Testimonial Section ======================-->


<!--Blog Section ======================-->
<section class="section-blog pb-60 pb-lg-100 pb-xxl-120">
    <div class="blog-wrapper bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-end mb-30 mb-md-40">
                <div class="col-md-9">
                    <div class="d-flex flex-column gap-10">
                        <h6 class="mb-0 text-primary fw-medium">Blog & Article</h6>
                        <h3 class="mb-0">Get The <span class="text-primary">Latest</span> Our News</h3>	
                    </div>
                    <!-- section-top-contents -->
                </div>
                <!-- col-9 -->
                <div class="col-md-3 col-lg-2">
                    <div class="blogSwiper-buttons d-flex gap-3 gap-lg-20 justify-content-md-end">
                        <div class="blogSwiper-button-prev">
                            <span class="blog-arrow-icon arrow-reverse">											
                                <svg width="13" height="7"><use xlink:href="#arrow-icon-3"></use></svg> 
                            </span>
                        </div>
                        <div class="blogSwiper-button-next">
                            <span class="blog-arrow-icon">											
                                <svg width="13" height="7"><use xlink:href="#arrow-icon-3"></use></svg> 
                            </span>
                        </div>									
                    </div>
                    <!-- blogSwiper-buttons -->								
                </div>
                <!-- col-2 -->
            </div>
            <!-- row -->
            <div class="swiper blogSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card-style-3 wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1.3s">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/blog-1.jpg')}}" class="card-img-top" alt="blog-1">
                            </div>
                            <!-- card-image-wrapper -->
                            <div class="card-body">
                                <div class="d-flex flex-column gap-10">	
                                    <p class="card-info fw-medium mb-0 font-family-style-1">10 May 2025 | <a href="#" class="text-decoration-none blog-custom-link">Logistics</a></p>										
                                    <h5 class="card-title fw-medium mb-0 mb-xl-2"><a href="news-single.html" class="text-decoration-none link-hover-animation-2">Optimizing Supply Chain Efficiency</a></h5>
                                    <div>
                                        <a href="news-single.html" class="btn btn-link link-hover-animation-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card-body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- swiper-slide -->
                    <div class="swiper-slide">
                        <div class="card card-style-3 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1.3s">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/blog-2.jpg')}}" class="card-img-top" alt="blog-2">
                            </div>
                            <!-- card-image-wrapper -->
                            <div class="card-body">
                                <div class="d-flex flex-column gap-10">	
                                    <p class="card-info fw-medium mb-0 font-family-style-1">10 July 2025 | <a href="#" class="text-decoration-none blog-custom-link">Transport</a></p>										
                                    <h5 class="card-title fw-medium mb-0 mb-xl-2"><a href="news-single.html" class="text-decoration-none link-hover-animation-2">Navigating International Customs Regulations</a></h5>
                                    <div>
                                        <a href="news-single.html" class="btn btn-link link-hover-animation-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card-body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- swiper-slide -->
                    <div class="swiper-slide">
                        <div class="card card-style-3 wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1.3s">
                            <div class="card-image-wrapper border-10">
                                <img src="{{asset('assets/images/blog-3.jpg')}}" class="card-img-top" alt="blog-3">
                            </div>
                            <!-- card-image-wrapper -->
                            <div class="card-body">
                                <div class="d-flex flex-column gap-10">	
                                    <p class="card-info fw-medium mb-0 font-family-style-1">10 September 2025 | <a href="#" class="text-decoration-none blog-custom-link">Warehouse</a></p>										
                                    <h5 class="card-title fw-medium mb-0 mb-xl-2"><a href="news-single.html" class="text-decoration-none link-hover-animation-2">Sustainable Logistics Building a Greener Supply Chain</a></h5>
                                    <div>
                                        <a href="news-single.html" class="btn btn-link link-hover-animation-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card-body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- swiper-slide -->
                </div>
                <!-- swiper-wrapper -->	
            </div>
            <!-- swiper blogSwiper -->
        </div>
        <!-- container -->
    </div>
    <!-- blog-wrapper -->
</section>
<!--Blog Section ======================-->


<!--Faq Section ======================-->
<section class="section-faq faq-1 pb-60 pb-lg-100 pb-xxl-120">				

    <div class="container">
        <div class="mb-40">
            <h6 class="mb-10 text-primary fw-medium">Faq</h6>
            <h3 class="mb-0 title">Frequently Asked <span class="text-primary">Questions</span></h3>
        </div>					
        <div class="row align-items-center gx-20 gx-xl-60 gy-40 gy-lg-0">
            <div class="col-lg-6">
                <div class="faq-image overflow-hidden border-10">
                    <img src="{{asset('assets/images/faq-image-1.jpg')}}" class="img-fluid" alt="faq-image-1">							
                </div>
            </div>
            <!-- col-5 -->
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <div class="accordion" id="faq-1-accordion">
                        <div class="accordion-item wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button d-flex justify-content-between align-items-center " type="button" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-expanded="true" aria-controls="itemOne">
                                    <span class="accordion-title fs-5 fw-semibold mb-0">How do I request a quote?</span>
                                    <span class="accordion-icon"></span>																							
                                </button>
                            </h2>
                            <div id="itemOne" class="accordion-collapse collapse show" data-bs-parent="#faq-1-accordion">
                                <p class="accordion-body mb-0">
                                    Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                </p>
                            </div>
                        </div>
                        <!-- accordion-item -->

                        <div class="accordion-item wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-expanded="false" aria-controls="itemTwo">
                                    <span class="accordion-title fs-5 fw-semibold mb-0">What are your delivery times?</span>
                                    <span class="accordion-icon"></span>												
                                </button>
                            </h2>
                            <div id="itemTwo" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                <p class="accordion-body mb-0">
                                    Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                </p>
                            </div>
                        </div>
                        <!-- accordion-item -->

                        <div class="accordion-item wow fadeIn" data-wow-delay="450ms" data-wow-duration="1.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemThree" aria-expanded="false" aria-controls="itemThree">
                                    <span class="accordion-title fs-5 fw-semibold mb-0">How do I request a quote?</span>
                                    <span class="accordion-icon"></span>												
                                </button>
                                
                            </h2>
                            <div id="itemThree" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                <p class="accordion-body mb-0">
                                    Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                </p>
                            </div>
                        </div>
                        <!-- accordion-item -->

                        <div class="accordion-item wow fadeIn" data-wow-delay="600ms" data-wow-duration="1.2s">
                            <h2 class="accordion-header">
                            <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemFour" aria-expanded="false" aria-controls="itemFour">
                                <span class="accordion-title fs-5 fw-semibold mb-0">What measures do you take to ensure the safety of my cargo?</span>
                                <span class="accordion-icon"></span>											   
                            </button>
                            </h2>
                            <div id="itemFour" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                <p class="accordion-body mb-0">
                                    Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                </p>
                            </div>
                        </div>
                        <!-- accordion-item -->									
                    </div>
                    <!-- .accordion -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Faq Section ======================-->


<!--Delivery Section ======================-->
<section class="section-delivery bg-custom-light py-60 py-lg-100 py-xxl-120">
    <div class="container">
        <div class="delivery-wrapper py-40 py-lg-60 ps-3 ps-lg-0">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="d-flex flex-column text-lg-center align-items-lg-center gap-30 gap-lg-40 position-relative">
                        <h3 class="mb-0">Find Out The <span class="text-primary">Approximate Cost</span> of Delivery Of Your Shipment</h3>
                        <div>
                            <a href="calculate.html" class="btn btn-primary">Calculate My Shipping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delivery-wrapper -->
    </div>
    <!-- container -->
</section>
<!--Delivery Section ======================-->

@endsection