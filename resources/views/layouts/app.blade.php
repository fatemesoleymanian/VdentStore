<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @isset($title)
            {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/jpg" href="{{asset('storage/FvdentLogo.jpg')}}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @yield('link')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet"/>

    <script src="{{asset('js/navbar.js')}}" defer></script>
    <script src="{{asset('js/footer.js')}}" defer></script>
    <link href="{{asset('css/total.css')}}" rel="stylesheet"/>

</head>
<body class="dark-mode">


<x-navbar/>
<main class="py-5" style="z-index: 10;">

    @yield('content')
</main>

@section('footer')
<x-footer/>
@show


@yield('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/total.js')}}" defer></script>
</body>
</html>

