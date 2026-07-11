@extends('layouts.public')

@section('title', 'IKA SMAN 1 CIRUAS')
@section('meta_description', 'Landing page organisasi alumni IKA SMAN 1 CIRUAS.')

@section('content')
    @include('pages.home.sections.hero')
    @include('pages.home.sections.about')
    @include('pages.home.sections.vision-mission')
    @include('pages.home.sections.statistics')
    @include('pages.home.sections.gallery-preview')
    @include('pages.home.sections.publications')
    @include('pages.home.sections.faq')
    @include('pages.home.sections.aspiration')
@endsection
