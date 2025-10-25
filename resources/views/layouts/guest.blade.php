<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover Flavois – where flavor meets finesse. Enjoy a rich variety of freshly prepared dishes, weekly specials, order online today!">
    <title>Flavios-Flavors That Find You</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Delicious Chinese & Continental Dishes | YourWebsiteName">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/p2-img1.webp') }}">
    <meta property="og:description" content="Explore authentic Chinese and continental pasta dishes with modern flavors and presentation.">
    <meta property="og:site_name" content="Flavios">


</head>

<body>
    @include('components.navbar')

    {{-- <div class="m-3 text-center position-relative"
        style="background-image: url({{ asset('images/p2-img1.webp') }});background-position: center center; background-repeat: no-repeat; background-size: cover; height: 700px;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7);">
        </div>
        <div class="coming-soon-container">
            <h1 class="coming-soon-text cursive-text">Flavios</h1>
            <p style="margin-top: -25px; font-size: 20px">Flavors That Find You</p>
            <h2 class="coming-soon-text" style="font-size: 36px">Coming Soon</h2>
        </div>
    </div> --}}

    <main>
         {{$slot}}
    </main>
    @props(['socialLinks','privateInformation'])

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function () {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop === 0) {
            navbar.classList.remove('navbar-hidden');
        } else if (scrollTop > lastScrollTop) {
            // Scrolling down
            navbar.classList.add('navbar-hidden');
        } else {
            // Scrolling up
            navbar.classList.remove('navbar-hidden');
        }

        lastScrollTop = scrollTop;
    });

</script>
</body>

</html>
<div class="text-center container-fluid position-relative"
    style="background-image: url({{ asset('images/p2-img1.webp') }});">
