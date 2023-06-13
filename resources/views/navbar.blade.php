<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vet Project</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var links = document.querySelectorAll([
                '.scroll-to-localization',
                '.scroll-to-aboutus',
                '.scroll-to-services',
                '.scroll-to-certificates',
                '.scroll-to-ourteam',
                '.scroll-to-ourreviews',
                '.scroll-to-localization'
            ]);

            links.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    var targetSection = document.getElementById(link.getAttribute('data-scroll-target'));

                    if (targetSection) {
                        targetSection.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            var dropdownToggle = document.getElementById('dropdown-toggle');
            var dropdownContent = document.getElementById('dropdown-content');

            dropdownToggle.addEventListener('click', function() {
                dropdownContent.classList.toggle('show');
            });

            window.addEventListener('click', function(event) {
                if (!dropdownToggle.contains(event.target) && !dropdownContent.contains(event.target)) {
                    dropdownContent.classList.remove('show');
                }
            });
        });
    </script>

</head>
<body class="body">
<div class="navbar">
    <div class="navbar-logo">
        <a href="{{ url('/') }}">
            <img src="avatar.png" alt="Avatar">
            <div class="text-column">
                <div class="clinic-name">
                    Gabinet Weterynaryjny AdaVet
                </div>
                <div class="subtext">
                    Centrum Zdrowia Zwierząt<br>
                    lek.wet. Adrianna Michniewicz
                </div>
            </div>
        </a>
    </div>
    <div class="navbar-links">
        <div class="navbar-toggle">
            <i class="fas fa-bars" id="navbar-toggle-icon"></i>
        </div>
        <div class="navbar-menu">
            @if (Request::is('/'))
            <a href="#" class="scroll-to-aboutus" data-scroll-target="about-us-section">O nas</a>
            <a href="#" class="scroll-to-services" data-scroll-target="services-section">Usługi</a>
            <a href="#" class="scroll-to-certificates" data-scroll-target="certificates-section">Szkolenia</a>
            <a href="#" class="scroll-to-ourteam" data-scroll-target="ourteam-section">Zespół</a>
            <a href="#" class="scroll-to-ourreviews" data-scroll-target="reviews-section">Recenzje</a>
            <a href="#" class="scroll-to-localization" data-scroll-target="localization-section">Lokalizacja</a>
            @endif
            @if (Route::has('login'))
                <div class="dropdown">
                    @auth
                        <div id="dropdown-toggle">{{ Auth::user()->name }}</div>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="{{ url('/home') }}">Home</a>
                            <a href="{{ url('/logout') }}">Wyloguj się</a>
                        </div>
                    @else
                        <div class="navbar-menu">
                            <a href="{{ route('login') }}" class="">Zaloguj się!</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">Zarejestruj się!</a>
                        </div>
                            @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
