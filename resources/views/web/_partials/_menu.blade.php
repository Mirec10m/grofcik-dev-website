<nav class="navbar sticky-top background-white navbar-expand-lg section-border-bottom" id="hello">
    <div class="container">
        <a class="logo" href="{{ route('web.home.' . app()->getLocale()) }}">
            Miro<span class="text-primary">.</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link active" href="#about" data-scroll-to="#about">Hello</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills" data-scroll-to="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience" data-scroll-to="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education" data-scroll-to="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" data-scroll-to="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
