@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
    @include('layouts.partials.navbar')
    @include('layouts.partials.hero')
    @include('layouts.partials.quote')
    @include('layouts.partials.about')
    @include('layouts.partials.jurusan')
    @include('layouts.partials.program')
    @include('layouts.partials.fasilitas')
    @include('layouts.partials.ekstrakurikuler')
    @include('layouts.partials.testimoni')
    @include('layouts.partials.timeline')
    @include('layouts.partials.faq')
    @include('layouts.partials.cta')
    @include('layouts.partials.footer')
@endsection
