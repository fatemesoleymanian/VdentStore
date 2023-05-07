@extends('layouts.app', ['title' => 'داشبورد'])
@section('link')
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <script type="text/javascript" src="{{asset('js/jquery.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('js/lightslider.js')}}" defer></script>
@endsection
@section('content')
{{--    <div class="whole pt-5 mt-5">--}}
{{--        helooo dash--}}
{{--        <ul class="uls">--}}
{{--            @foreach($ids as $id)--}}
{{--                <li>{{$id}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        <form action="/send" method="post">--}}
{{--            @csrf--}}
{{--            <input type="number" name="age">--}}
{{--            <input type="submit">--}}
{{--        </form>--}}
{{--    </div>--}}
<section class="wrap" style="position: absolute;">
<ul id="autoWidth" class="cs-hidden">
    <li class="item-a">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Lacoste</a>
                    <span>Sweatshirt</span>
                </div>
                <a href="#" class="price">Rs.8680</a>
            </div>
        </div>
    </li>
    <li class="item-b">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Mango</a>
                    <span>Casual Shirt</span>
                </div>
                <a href="#" class="price">Rs.4490</a>
            </div>
        </div>
    </li>
    <li class="item-c">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Nike Tshirt</a>
                    <span>V-Neck T-shirt</span>
                </div>
                <a href="#" class="price">Rs.3051</a>
            </div>
        </div>
    </li>
    <li class="item-d">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Allen Solly Woman</a>
                    <span>Formal Shirt</span>
                </div>
                <a href="#" class="price">Rs.1299</a>
            </div>
        </div>
    </li>
    <li class="item-e">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Puma</a>
                    <span>V-Neck T-shirt</span>
                </div>
                <a href="#" class="price">Rs.3299</a>
            </div>
        </div>
    </li>
    <li class="item-f">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Ritu Kumar</a>
                    <span>Embroidered Tunic</span>
                </div>
                <a href="#" class="price">Rs.5600</a>
            </div>
        </div>
    </li>
    <li class="item-g">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">UNDER ARMOUR</a>
                    <span>Golf T-shirt</span>
                </div>
                <a href="#" class="price">Rs.4499</a>
            </div>
        </div>
    </li>
    <li class="item-h">
        <div class="box">
            <div class="slide-img">
                <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="" />
                <div class="overlay">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">DOROTHY PERKINS</a>
                    <span>Solid Cape Top</span>
                </div>
                <a href="#" class="price">Rs.3990</a>
            </div>
        </div>
    </li>
</ul>
</section>
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('js/script.js')}}" defer></script>
@endsection

{{--@section('footer')--}}
{{--    <h2 style="color: black"> different footer in dash</h2>--}}
{{--    @parent--}}
{{--it's after!--}}
{{--@endsection--}}
