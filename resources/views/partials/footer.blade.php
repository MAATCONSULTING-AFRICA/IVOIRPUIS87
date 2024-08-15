<footer class="footer cmt-bgcolor-darkgrey widget-footer clearfix">
    <div class="first-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-6 widget-area">
                    <div class="widget widget_social">
                        <div class="social-icons circle">
                            <ul class="list-inline">
                                <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                                <li><a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 widget-area">
                    <div class="widget widget_nav_menu">                  
                        <ul class="footer-nav-menu">                  
                            <li><a href="#">Paramètres et confidentialité</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Localisation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 widget-area">
                    <div class="widget widget_logo">
                        <div class="footer-logo">
                            <img id="footer-logo-img" class="img-fluid" src="{{asset('images/logo.png')}}" alt="footer_logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text">
                        <h3 class="widget-title">Apropos IP87</h3>
                        <p>IVOIR PUISSANCE 87 est une entreprise spécialisée dans les domaines suivants : le BTP, le Lotissement, la Gestion immobilière, l'Imprimerie, la Construction métallique, l'Entretien et le Nettoyage, les Arts - aménagement et divers.</p>
                        <a class="cmt-btn cmt-btn-size-sm cmt-btn-color-skincolor btn-inline cmt-icon-btn-right" href="#">Plus d'informations<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_quick_links">
                       <h3 class="widget-title">Liens utiles</h3>
                        <ul class="menu-footer-quick-links">
                            <li> <a href="{{route('home')}}">Accueil</a></li>
                            <li> <a href="{{route('blog')}}">Blog</a></li>
                            <li> <a href="{{route('portefeuille')}}">Portefeuille projets</a></li>
                            <li> <a href="{{route('contact')}}">Contact</a></li>
                            <li> <a href="{{route('demande_devis')}}">Demande dévis</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_post clearfix">
                        <h3 class="widget-title">Blog/Actualités</h3>
                        <ul class="cmt-recent-post-list">
                            @foreach($recent_blogs as $item)
                            <li>
                                <a href="{{route('blog.detail', $item->id)}}"><img src="{{$item->image ? asset($item->image) : '' }}" alt="{{$item->title}}"></a>
                                <div class="post-detail">
                                    <a href="{{route('blog.detail', $item->id)}}">{{$item->title}}</a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>{{ $item->created_at->format('M d Y') }}</span>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_contact">
                        <h3 class="widget-title">Contact</h3>      
                        <ul class="widget_contact_wrapper">
                            <li><i class="fa fa-map-marker"></i>Cocody Riviera Palmeraie, Cocody, Abidjan, Côte d'Ivoire</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:kyliansoro@gmail.com" target="_blank">kyliansoro@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i>+225 07 79 24 02 68</li>
                            <li><i class="fa fa-paper-plane-o"></i><a href="#" target="_blank">www.ivoirpuissance87.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="copyright text-center">
                        <span> Copyright © 2024 <a href="#">Ivoir Puissance 87</a>. Tous droits réservés.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>