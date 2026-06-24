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

                        <!-- BUTTON -->
                        <!-- <div class="project-button mt-4">
                            <a href="{{ $project->link_url ?? '#' }}" target="_blank" class="btn-project-code">
                                <i class="bi bi-github"></i> Code
                            </a>
                            <a href="{{ $project->link_url ?? '#' }}" target="_blank" class="btn-project-demo">
                                <i class="bi bi-box-arrow-up-right"></i> Demo
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>