@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.pagetitle')
<!-- END REVOLUTION SLIDER -->


 <!--site-main start-->
 <div class="site-main">
        

    <section class="cmt-row grid-section clearfix">
        <div class="container">
            <div class="row mt_15 mb_15">
                @foreach($portfolios as $portfolio)
                <div class="cmt-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio cmt-bgcolor-darkgrey style1">
                        <!-- cmt-box-view-overlay -->
                        <div class="cmt-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="{{route('portfolio_detail', $portfolio->id)}}">
                                 <img class="img-fluid" src="{{$portfolio->image ? asset($portfolio->image) : '' }}" alt="{{$portfolio->title}}">
                                </a>
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
                        </div><!-- cmt-box-view-overlay end-->
                    </div><!-- featured-imagebox -->
                </div>
                @endforeach
            </div>
        </div>
    </section>


</div><!--site-main end-->

@endsection