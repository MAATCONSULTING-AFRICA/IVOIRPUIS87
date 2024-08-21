@extends('layouts.admin')
@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            @include('partials.__breadcrumbs')
            <!-- /BREADCRUMB -->
            <div class="row layout-top-spacing">
            <div class="card style-3">
    <img src="./assets/img/grid-blog-style-2.jpeg" class="card-img-top" alt="...">
    <div class="card-body px-0 py-0 align-self-center">
        <p class="card-category mb-1">Photography</p>
        <h5 class="card-title mb-3">Elegant and useful Admin Templates on Themeforest</h5>
        <div class="media mt-4 mb-0 pt-1">
            <img src="./assets/img/profile-2.jpeg" class="card-media-image me-3" alt="">
            <div class="media-body">
                <h4 class="media-heading mb-1">Vanessa Kirby</h4>
                <p class="media-text">14 Mar</p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    </div>
@endsection