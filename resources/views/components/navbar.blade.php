<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container navbar-container">

        <!-- Logo -->
        <a class="navbar-brand logo-text" href="{{ url('/') }}#hero">
            Ade<span class="logo-accent">Rifki</span>
        </a>

        <!-- Toggle Mobile -->
        <button class="navbar-toggler shadow-none border-0" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="toggler-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>
        </button>

        <!-- Menu & Actions -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Navigation Links (Centered) -->
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#organization">Organization</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#derifting">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#contact">Contact</a>
                </li>
            </ul>

            <!-- Actions Container (Right side) -->
            <div class="navbar-actions d-flex align-items-center">
                
                <!-- Vertical Divider -->
                <div class="nav-divider"></div>
                

                <!-- Download CV Button -->
                <a href="https://drive.google.com/file/d/11_iFH-UcK6HNJtaR3TWiZRd7ZZlm1MI7/view?usp=sharing" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="btn btn-download-cv d-inline-flex align-items-center gap-2">
                    <span>Download CV</span>
                    <i class="bi bi-download"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
