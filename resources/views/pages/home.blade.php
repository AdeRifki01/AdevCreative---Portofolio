@extends('layouts.app')

@section('content')

    @include('partials.navbar')

    @include('partials.hero')

    @include('partials.about')

    @include('partials.skills')

    @include('partials.project')

    @include('partials.organization')

    @include('partials.contact')

    @include('partials.footer')

    <button id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </button>

@endsection