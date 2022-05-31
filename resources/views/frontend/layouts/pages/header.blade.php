<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('website') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            {{-- <!-- Uncomment the line below if you also wish to use an image logo --> --}}
            <!-- <img src= "{{ asset('frontend') }}/assets/img/logo.png" alt=""> -->
            <h1>HeroBiz<span>.</span></h1>
        </a>
        @include('frontend.layouts.pages.navbar')
        <!-- .navbar -->

        <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
</header>
