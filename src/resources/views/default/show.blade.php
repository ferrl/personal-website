@extends('layout.template')
@section('title', trans('pages.default.show.title'))
@section('meta:canonical', route(config('app.locale').'.default.show'))
@section('meta:description', trans('pages.default.show.description'))
@section('og:title', trans('pages.default.show.title'))
@section('og:description', trans('pages.default.show.description'))
@section('og:url', route(config('app.locale').'.default.show'))
@section('twitter:card', trans('pages.default.show.type'))

@section('content')
    File structure defined.
@stop
