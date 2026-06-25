<section class="organization-section" id="organization">
    <div class="container">
        <!-- TITLE -->
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Organization Experience</h2>
            <p>
                Organization and event experience that I have participated in
            </p>
        </div>
        <div class="timeline-wrapper mt-5">
            <div class="timeline">
                @foreach($organizations as $index => $org)
                <div class="timeline-container {{ $index % 2 == 0 ? 'left' : 'right' }}" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            @if($org->image)
                            <img src="{{ asset('storage/' . $org->image) }}" alt="{{ $org->name }}" loading="lazy">
                            @else
                            <i class="bi bi-building"></i>
                            @endif
                        </div>
                        <div class="timeline-text">
                            <span class="timeline-year">{{ $org->year }}</span>
                            <h4>{{ $org->name }}</h4>
                            <p>{{ $org->role }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>