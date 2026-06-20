<section class="organization-section" id="organization">
    <div class="container">
        <!-- TITLE -->
        <div class="section-title text-center" data-aos="fade-up">
            <h2>Organization Experience</h2>
            <p>
                Organization and event experience that I have participated in
            </p>
        </div>
        <div class="organization-wrapper mt-5">
            <!-- ITEM -->
            @foreach($organizations as $index => $org)
            <div class="organization-item" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                <div class="organization-icon">
                    @if($org->image)
                    <img src="{{ asset('storage/' . $org->image) }}" alt="{{ $org->name }}" style="width: 65px; height: 65px; border-radius: 10%; object-fit: cover; object-position: center;" loading="lazy">
                    @endif
                </div>
                <div class="organization-content">
                    <span class="organization-year">
                        {{ $org->year }}
                    </span>
                    <h4>
                        {{ $org->name }}
                    </h4>
                    <p>
                        {{ $org->role }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>