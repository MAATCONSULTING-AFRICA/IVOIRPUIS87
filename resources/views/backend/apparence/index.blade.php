@extends('layouts.admin')
@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            @include('partials.__breadcrumbs')
            <!-- /BREADCRUMB -->
            <div class="row layout-top-spacing">
                <div class="col-md-10 mx-auto">
                    <div class="card style-3 mb-2">
                        <div class="m-2">
                            <img src="{{asset('backend/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <input class="form-control" type="file" name="slide1_image">
                        </div>
                        <div class="card-body px-0 py-0 align-self-center">
                            <div class="form-group mb-2">
                                <label for="slide1_titre" class="form-label">Titre</label>
                                <input type="text" name="slide1_titre" id="slide1_titre" class="form-control" value="{{ old('slide1_titre') }}" placeholder="UN TRAVAIL DE QUALITE AVEC UN TARIF COMPÉTITIF" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer le titre du slide 1.
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="slide1_description" class="form-label">Description</label>
                                <textarea type="text" name="slide1_description" id="slide1_description" class="form-control" value="{{ old('slide1_description') }}" rows="3" placeholder="Nous offrons une gamme complète de services pour répondre à tous vos besoins, Vous avez un projet de construction ?"></textarea>
                                <div class="invalid-feedback">
                                    Veuillez entrer la description slide 1.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-2">
                                        <label for="slide1_button_titre" class="form-label">Titre Button</label>
                                        <input type="text" name="slide1_button_titre" id="slide1_button_titre" class="form-control" value="{{ old('slide1_button_titre') }}" placeholder="CONTACTEZ-NOUS">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le titre button du slide 1.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group mb-2">
                                        <label for="slide1_button_link" class="form-label">Lien Button</label>
                                        <input type="text" name="slide1_button_link" id="slide1_button_link" class="form-control" value="{{ old('slide1_button_link') }}">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le lien button du slide 1.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card style-3 mb-2">
                        <div class="m-2">
                            <img src="{{asset('backend/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <input class="form-control" type="file" name="slide2_image">
                        </div>
                        <div class="card-body px-0 py-0 align-self-center">
                            <div class="form-group mb-2">
                                <label for="slide2_titre" class="form-label">Titre</label>
                                <input type="text" name="slide2_titre" id="slide2_titre" class="form-control" value="{{ old('slide2_titre') }}" placeholder="UN TRAVAIL DE QUALITE AVEC UN TARIF COMPÉTITIF" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer le titre du slide 2.
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="slide2_description" class="form-label">Description</label>
                                <textarea type="text" name="slide2_description" id="slide2_description" class="form-control" value="{{ old('slide2_description') }}" rows="3" placeholder="Nous offrons une gamme complète de services pour répondre à tous vos besoins, Vous avez un projet de construction ?"></textarea>
                                <div class="invalid-feedback">
                                    Veuillez entrer la description slide 2.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-2">
                                        <label for="slide2_button_titre" class="form-label">Titre Button</label>
                                        <input type="text" name="slide2_button_titre" id="slide2_button_titre" class="form-control" value="{{ old('slide2_button_titre') }}" placeholder="CONTACTEZ-NOUS">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le titre button du slide 2.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group mb-2">
                                        <label for="slide2_button_link" class="form-label">Lien Button</label>
                                        <input type="text" name="slide2_button_link" id="slide2_button_link" class="form-control" value="{{ old('slide2_button_link') }}">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le lien button du slide 2.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card style-3 mb-2">
                        <div class="m-2">
                            <img src="{{asset('backend/assets/img/grid-blog-style-2.jpeg')}}" class="card-img-top" alt="...">
                            <input class="form-control" type="file" name="slide3_image">
                        </div>
                        <div class="card-body px-0 py-0 align-self-center">
                            <div class="form-group mb-2">
                                <label for="slide3_titre" class="form-label">Titre</label>
                                <input type="text" name="slide3_titre" id="slide3_titre" class="form-control" value="{{ old('slide3_titre') }}" placeholder="UN TRAVAIL DE QUALITE AVEC UN TARIF COMPÉTITIF" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer le titre du slide 3.
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="slide3_description" class="form-label">Description</label>
                                <textarea type="text" name="slide3_description" id="slide3_description" class="form-control" value="{{ old('slide3_description') }}" rows="3" placeholder="Nous offrons une gamme complète de services pour répondre à tous vos besoins, Vous avez un projet de construction ?"></textarea>
                                <div class="invalid-feedback">
                                    Veuillez entrer la description slide 3.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-2">
                                        <label for="slide3_button_titre" class="form-label">Titre Button</label>
                                        <input type="text" name="slide3_button_titre" id="slide3_button_titre" class="form-control" value="{{ old('slide3_button_titre') }}" placeholder="CONTACTEZ-NOUS">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le titre button du slide 3.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group mb-2">
                                        <label for="slide3_button_link" class="form-label">Lien Button</label>
                                        <input type="text" name="slide3_button_link" id="slide3_button_link" class="form-control" value="{{ old('slide3_button_link') }}">
                                        <div class="invalid-feedback">
                                            Veuillez entrer le lien button du slide 3.
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
@endsection