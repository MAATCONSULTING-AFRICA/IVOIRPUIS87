@extends('layouts.admin')
@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            @include('partials.__breadcrumbs')
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <div class="col-lg-5 col-md-5 col-sm-12 mb-4">
                    <input id="search-input" type="text" name="search" placeholder="Search" class="form-control" value="{{ request()->search }}">
                </div>
                
                <div class="col-lg-7 col-md-7 col-sm-12 mb-4">
                    <form method="GET" action="{{ route('admin.blog.index') }}">  
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <select class="form-select" name="category">
                                    <option value="All Category" {{ request()->category == 'All Category' ? 'selected' : '' }}>Toutes les catégories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ request()->category == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <select class="form-select" name="sort">
                                    <option value="Recent" {{ request()->sort == 'Recent' ? 'selected' : '' }}>Récents</option>
                                    <option value="Popular" {{ request()->sort == 'Popular' ? 'selected' : '' }}>Populaire</option>
                                </select>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <button type="submit" class="btn btn-primary w-100 p-2">Filtrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="row">

                @foreach($posts as $post)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4 post-item">
                    <a href="{{route('admin.blog.show', $post->id)}}" class="card style-2 mb-md-0 mb-4">
                        <img src="{{$post->image ? asset($post->image) : '' }}" class="card-img-top" alt="{{$post->title}}">
                        <div class="card-body px-0 pb-0">
                            <h5 class="card-title mb-3 post-title">{{$post->title}}</h5>
                            <div class="media mt-4 mb-0 pt-1">
                                <img src="{{ $post->user->profile_image ?? asset('assets/images/default_user.jpeg') }}" class="card-media-image me-3" alt="">
                                <div class="media-body">
                                    <h4 class="media-heading mb-1">{{ $post->user->name ?? null}}</h4>
                                    <p class="media-text">{{ $post->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        
    </div> 

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');
            const posts = document.querySelectorAll('.post-item');
    
            searchInput.addEventListener('keyup', function () {
                const searchQuery = this.value.toLowerCase();
    
                posts.forEach(post => {
                    const title = post.querySelector('.post-title').textContent.toLowerCase();
                    // Filtrer par titre (ajouter d'autres éléments à rechercher si nécessaire)
                    if (title.includes(searchQuery)) {
                        post.style.display = '';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection