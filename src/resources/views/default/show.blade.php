@extends('layout.template')
@section('title', trans('pages.default.show.title'))
@section('meta:canonical', route(config('app.locale') . '.default.show'))
@section('meta:description', trans('pages.default.show.description'))
@section('og:title', trans('pages.default.show.title'))
@section('og:description', trans('pages.default.show.description'))
@section('og:url', route(config('app.locale') . '.default.show'))
@section('twitter:card', trans('pages.default.show.type'))

@section('content')
    <header class="main-header">
        <div class="container">
            <div class="profile row align-items-center">
                <div class="col-3 col-md-2 col-lg-2">
                    <img src="https://source.unsplash.com/collection/162326/300x300"
                         alt="Lucas Ferreira" class="img-fluid rounded profile__image">
                </div>
                <div class="col-9 col-md-10 col-lg-7">
                    <h2 class="profile__name">Lucas Ferreira</h2>
                    <h1 class="profile__description">{{ trans('pages.default.show.content.description') }}</h1>
                    <address class="profile__address">
                        {{ trans('pages.default.show.content.address') }}
                    </address>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-3">
                    @include('default.articles.'.config('app.locale').'.contact')
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            @include('default.articles.'.config('app.locale').'.specialties')
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            @include('default.articles.'.config('app.locale').'.skills')
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-11 col-lg-7 ml-lg-5">
                    @include('default.articles.'.config('app.locale').'.about')
                    <section class="section" id="work">
                        <div class="section__header">
                            <h3 class="section__title">{{ trans('pages.default.show.content.work') }}</h3>
                        </div>
                        <div class="section__content">
                            @include('default.articles.'.config('app.locale').'.work.rits')
                            @include('default.articles.'.config('app.locale').'.work.signup')
                            @include('default.articles.'.config('app.locale').'.work.mobister-4')
                            @include('default.articles.'.config('app.locale').'.work.mobister-3')
                            @include('default.articles.'.config('app.locale').'.work.mobister-2')
                            @include('default.articles.'.config('app.locale').'.work.mobister-1')
                            @include('default.articles.'.config('app.locale').'.work.klipbox')
                            @include('default.articles.'.config('app.locale').'.work.dz3')
                            @include('default.articles.'.config('app.locale').'.work.kki')
                            @include('default.articles.'.config('app.locale').'.work.marmore')
                        </div>
                    </section>
                    <section class="section" id="projects">
                        <div class="section__header">
                            <h3 class="section__title">{{ trans('pages.default.show.content.projects') }}</h3>
                        </div>
                        <div class="section__content">
                            @include('default.articles.'.config('app.locale').'.projects.sonne')
                            @include('default.articles.'.config('app.locale').'.projects.aaa')
                            @include('default.articles.'.config('app.locale').'.projects.inversa')
                            @include('default.articles.'.config('app.locale').'.projects.cafe-brasil')
                            @include('default.articles.'.config('app.locale').'.projects.administradores-premium')
                        </div>
                    </section>
                    <section class="section" id="certificates">
                        <div class="section__header">
                            <h3 class="section__title">{{ trans('pages.default.show.content.certificates') }}</h3>
                        </div>
                        <div class="section__content">
                            @include('default.articles.'.config('app.locale').'.certificates.aws-developer')
                            @include('default.articles.'.config('app.locale').'.certificates.middle-management')
                            @include('default.articles.'.config('app.locale').'.certificates.google-analytics')
                            @include('default.articles.'.config('app.locale').'.certificates.hubspot')
                            @include('default.articles.'.config('app.locale').'.certificates.rd-station')
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    File structure defined.
@stop
