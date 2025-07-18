        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">
                        <img src="{{ asset('frontend_assets/assets/Sharif Patowary logo dark.png') }}"
                            alt="Sharif Patowary Logo" class="w-25 h-100">
                    </span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('resume') ? 'active' : '' }}"
                                href="{{ route('resume') }}">Resume</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('projects') ? 'active' : '' }}"
                                href="{{ route('projects') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
