@extends('layout.template')
@section('title', trans('pages.default.show.title'))
@section('meta:canonical', route(config('app.locale') . '.default.show'))
@section('meta:description', trans('pages.default.show.description'))
@section('og:title', trans('pages.default.show.title'))
@section('og:description', trans('pages.default.show.description'))
@section('og:url', route(config('app.locale') . '.default.show'))
@section('og:image', url('images/cover.png'))
@section('twitter:card', trans('pages.default.show.type'))

@php
$resumes = new App\Services\ResumeService;
$works = new App\Services\WorkService;
$projects = new App\Services\ProjectService;
$certificates = new App\Services\CertificateService;
@endphp

@section('content')
    <main id="resume" itemscope itemtype="http://schema.org/Person">
        <header class="main-header">
            <div class="container">
                <div class="main-header__content">
                    <ul class="language">
                        <li class="language__item {{ config('app.locale') === 'en' ? 'active' : '' }}">
                            <a href="{{ route('en.default.show') }}" hreflang="en-US" class="language__link">
                                <span class="d-none d-md-inline-block">English</span>
                                <span class="d-inline-block d-md-none">EN</span>
                            </a>
                        </li>
                        <li class="language__item {{ config('app.locale') === 'pt_BR' ? 'active' : '' }}">
                            <a href="{{ route('pt_BR.default.show') }}" hreflang="pt-BR" class="language__link">
                                <span class="d-none d-md-inline-block">Português</span>
                                <span class="d-inline-block d-md-none">PT</span>
                            </a>
                        </li>
                    </ul>
                    <div class="profile">
                        <div class="profile__image">
                            <img src="{{ asset('images/picture.png') }}" itemprop="image"
                                 alt="{{ $resumes->first()->name }} - {{ $resumes->first()->position }}" class="img-fluid rounded profile__image">
                        </div>
                        <div class="profile__info">
                            <h2 class="profile__name" itemprop="name">{{ $resumes->first()->name }}</h2>
                            <h1 class="profile__description" itemprop="jobTitle">{{ $resumes->first()->position }}</h1>
                            <meta itemprop="email" content="me@ferrl.io">
                            <meta itemprop="sameAs" content="lucasferreira_113">
                            <address class="profile__address" itemprop="address">
                                {{ $resumes->first()->location }}
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-content" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-11 col-lg-3">
                        <article class="section">
                            <header class="section__header">
                                <h3 class="section__title">{{ trans('pages.default.show.content.about') }}</h3>
                            </header>
                            <div class="section__content" itemprop="description">
                                {!! $resumes->first()->about !!}
                            </div>
                        </article>
                        @component('layout.components.section')
                            @slot('title', trans('pages.default.show.content.contact'))
                            {!! $resumes->first()->contact !!}
                        @endcomponent
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-12">
                                @component('layout.components.section')
                                    @slot('title', trans('pages.default.show.content.specialties'))
                                    {!! $resumes->first()->specialties !!}
                                @endcomponent
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                @component('layout.components.section')
                                    @slot('title', trans('pages.default.show.content.skills'))
                                    {!! $resumes->first()->skills !!}
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-11 col-lg-7 ml-lg-5">
                        @component('layout.components.section')
                            @slot('title', trans('pages.default.show.content.work'))
                            @each('layout.components.article-organization', $works->all(), 'resource')
                        @endcomponent
                        @component('layout.components.section')
                            @slot('title', trans('pages.default.show.content.projects'))
                            @each('layout.components.article-project', $projects->all(), 'resource')
                        @endcomponent
                        @component('layout.components.section')
                            @slot('title', trans('pages.default.show.content.certificates'))
                            @each('layout.components.article-certificate', $certificates->all(), 'resource')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
