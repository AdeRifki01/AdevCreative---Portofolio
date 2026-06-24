<section class="skills-section" id="skills">
    <div class="container">
        <!-- TITLE -->
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Technical Skills</h2>
            <p>
                Technical skills yang saya kuasai
            </p>
        </div>

        <div class="row mt-5">
            @php
                $colors = ['#f97316', '#3b82f6', '#facc15', '#a855f7', '#9333ea', '#ef4444'];
            @endphp
            <!-- ITEM -->
            @foreach($skills as $skill)
            <div class="col-6 col-md-4 col-lg-3 mb-4" data-aos="zoom-in">
                <div class="skill-card">
                    @php
                        $bgColor = $colors[$loop->index % count($colors)];
                        $textColor = ($bgColor == '#facc15') ? '#000' : '#fff';
                    @endphp
                    
                    <div class="skill-header-card">
                        <div class="skill-icon-card">
                            <img src="{{ asset('storage/' . $skill->image) }}" alt="{{ $skill->name }}" style="width: 25px; height: 25px; object-fit: contain;" loading="lazy">
                        </div>
                        <h4>{{ $skill->name }}</h4>
                    </div>

                    <div class="skill-stats">
                        <span class="prof-label">Ability</span>
                        <span class="prof-percent" style="color: {{ $bgColor }};">{{ $skill->percentage }}%</span>
                    </div>

                    <div class="progress skill-progress">
                        <div class="progress-bar" style="width: {{ $skill->percentage }}%; background: {{ $bgColor }};"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>