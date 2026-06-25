@extends('layouts.app')

@section('content')

    @include('components.navbar')

    <!-- Header Section for All Projects -->
    <section class="project-header all-projects-header">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="fw-bold">All Projects</h1>
            <p>All the projects I have worked on.</p>
        </div>
    </section>

    <!-- All Projects Grid -->
    <section class="project-section all-projects-grid" id="all-projects">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid" loading="lazy">
                        </div>
                        <div class="project-content">
                            <h4>{{ $project->title }}</h4>
                            <p>
                                {!! nl2br(e($project->description)) !!}
                            </p>

                            <!-- TECHNOLOGY -->
                            <div class="project-tech">
                                @if(!empty($project->tech_stack) && is_array($project->tech_stack))
                                    @foreach($project->tech_stack as $tech)
                                        <span>{{ $tech }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ url('/') }}" class="btn-more-projects">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>

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
