@extends('layouts.app')

@section('content')

    @include('components.navbar')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.skills')

    @include('sections.projects')

    @include('sections.organizations')

    @include('sections.derifting')

    @include('sections.contact')

    @include('components.footer')

    <!-- Floating Theme Toggle Switch -->
    <div class="theme-switch-wrapper floating-theme-switch">
        <label class="theme-switch" for="themeToggleCheckbox">
            <input type="checkbox" id="themeToggleCheckbox" />
            <div class="slider round-slider">
                <i class="bi bi-moon-stars-fill moon-icon"></i>
                <i class="bi bi-sun-fill sun-icon"></i>
                <span class="slider-ball"></span>
            </div>
        </label>
    </div>

@endsection