<section class="project-section" id="project">
    <div class="container">

        <!-- TITLE -->
        <div class="section-title text-center" data-aos="fade-up">
            <h2>My Projects</h2>
            <p>
                Beberapa project yang pernah saya kerjakan
            </p>
        </div>

        <div class="row mt-5">
            <!-- ITEM -->
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                <div class="project-card">
                    <div class="project-image">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid" loading="lazy">
                    </div>
                    <div class="project-content">
                        <h4>{{ $project->title }}</h4>
                        <p>
                            {{ $project->description }}
                        </p>

                        <!-- TECHNOLOGY (Optional: could be a separate table later, static for now or removed) -->
                        <div class="project-tech">
                            <!-- You can add technology fields in DB later if needed -->
                        </div>

                        <!-- BUTTON -->
                        <div class="project-button">
                            @if($project->link_url)
                            <a href="{{ $project->link_url }}" target="_blank" class="btn-project-github">
                                GitHub / Link
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>