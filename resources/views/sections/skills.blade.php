<section class="skills-section" id="skills">
    <div class="container">
        <!-- TITLE -->
        <div class="section-title text-center" data-aos="fade-up">
            <h2>My Skills</h2>
            <p>
                Teknologi dan kemampuan yang saya kuasai
            </p>
        </div>

        <div class="row mt-5">
            @php
                $colors = ['#f97316', '#3b82f6', '#facc15', '#a855f7', '#9333ea', '#ef4444'];
            @endphp
            <!-- ITEM -->
            @foreach($skills as $skill)
            <div class="col-md-6 col-lg-4 mb-4" data-aos="zoom-in">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="{{ asset('storage/' . $skill->image) }}" alt="{{ $skill->name }}" style="width: 40px; height: 40px; object-fit: contain;" loading="lazy">
                    </div>
                    <h4>{{ $skill->name }}</h4>
                    <div class="progress">
                        @php
                            $bgColor = $colors[$loop->index % count($colors)];
                            $textColor = ($bgColor == '#facc15') ? '#000' : '#fff';
                        @endphp
                        <div class="progress-bar" style="width: {{ $skill->percentage }}%; background: {{ $bgColor }}; color: {{ $textColor }};">
                            {{ $skill->percentage }}%
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>