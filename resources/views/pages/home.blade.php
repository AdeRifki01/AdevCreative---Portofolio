@extends('layouts.app')

@section('content')

    @include('components.navbar')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.skills')

    @include('sections.projects')

    @include('sections.organizations')

    @include('sections.contact')

    @include('components.footer')

    <button id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </button>

@endsection