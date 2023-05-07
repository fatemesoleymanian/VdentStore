{{--https://hackthestuff.com/article/how-to-add-owl-carousel-slider-in-html--}}
@extends('layouts.app')
@section('link')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet"
          href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('content')
    <section class="slider-home">
        <img src="{{URL('storage/slider/3-min.jpg')}}" alt="img-slider" class="slider-img-slide active-slide">
        <img src="{{URL('storage/slider/2-min.jpg')}}" alt="img-slider" class="slider-img-slide">
        <img src="{{URL('storage/slider/1-max.jpg')}}" alt="img-slider" class="slider-img-slide">
        <img src="{{URL('storage/slider/pexels-tara-winstead-7722927.jpg')}}" alt="img-slider" class="slider-img-slide">
        <img src="{{URL('storage/slider/pexels-cedric-fauntleroy-4269492.jpg')}}" alt="img-slider" class="slider-img-slide">
        <div class="slider-content active-slide">
            <h2>فروشگاه دندانپزشکی ویدنت</h2>
            <a href="#">مشاهده محصولات</a>
        </div>
        <div class="slider-content">
            <h2>تجربه خریدی مدرن با ویدنت</h2>
            <a href="#">جدید ترین محصولات</a>
        </div>
        <div class="slider-content">
            <h2>فروش انواع هندپیس و آنگل</h2>
            <a href="#">مشاهده</a>
        </div>
        <div class="slider-content">
            <h2>تجربه خریدی مدرن با ویدنت</h2>
            <a href="#">جدید ترین محصولات</a>
        </div>
        <div class="slider-content">
            <h2>فروش انواع هندپیس و آنگل</h2>
            <a href="#">مشاهده</a>
        </div>

        <div class="slider-media-icons">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-telegram"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
        </div>

        <div class="slider-navigation">
            <div class="dot active-slide"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

    <section class="latest-product-section">
        <div class="slider-small-category">
            <div class="category-item" data-tooltip="ارتودنسی" data-flow="bottom">
                <img src="{{URL('storage/cat/8.png')}}  " class="img-fluid light" alt="ارتودنسی">
            </div>
            <div class="category-item" data-tooltip="ترمیمی و زیبایی" data-flow="bottom">
                <img src="{{URL('storage/cat/7.png')}} " class="img-fluid light" alt="ترمیمی و زیبایی">
            </div>
            <div class="category-item" data-tooltip="ایمپلنت" data-flow="bottom">
                <img src="{{URL('storage/cat/6.png')}} " class="img-fluid light" alt="ایمپلنت">
            </div>
            <div class="category-item" data-tooltip="تجهیزات و دستگاه" data-flow="bottom">
                <img src="{{URL('storage/cat/9.png')}} " class="img-fluid light" alt="تجهیزات و دستگاه">
            </div>
        </div>


        <div class="swiper-container">
            <div class="title-lp"><h2>محصولات پرفروش ویدنت</h2></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-1.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-2.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-3.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-4.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-5.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-6.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-7.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-1.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-8.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="overlay">
                        <a href="#"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                        <a href="#"><i class="bi bi-eyeglasses"></i>مشاهده محصول</a>
                    </div>
                    <img src="{{URL('storage/products/latest/mk1-9.jpg')}}">
                    <div class="vit-detail-box">
                        <div class="type-light">
                            <span>کارپول ۲درصد لقمان</span>
                        </div>
                        <div class="price-light">
                            <span>9,500,000 تومان</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="product-sc no-hundred" id="ps-sl-third">
        <div class="title-cards-light"><h2>جدیدترین های ویدنت</h2></div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-4.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>کارپول ۲درصد لقمان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>9,500,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-7.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>آلژینات ایتالیایی BMS</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,400,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-1.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>آمالگام</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>10,888,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-5.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>گان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,400,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>درموسپت نیم لیتری</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>800,000 تومان</span>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="no-hundred" id="poster">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 hpb-sm-3"  data-aos="fade-up"
                     data-aos-duration="1500">
                    <img src="{{URL('storage/ad/landingPage/1.jpg')}}" id="poster-img" class="img-fluid rounded box-shadow-3">
                    <a href="#" class="poster-btn" id="poster-btn-r">همین الان خرید کن<i class="bi bi-hourglass-split"></i></a>
                </div>
                <div class="col-sm-12 col-md-6" data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1500">
                    <img src="{{URL('storage/ad/landingPage/2.png')}}" class="img-fluid rounded box-shadow-3">
                    <a href="#" class="poster-btn" id="poster-btn-l">همین الان خرید کن<i class="bi bi-hourglass-split"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="product-sc no-hundred" id="ps-sl-fourth">
        <div class="title-cards-light"><h2>تخفیف های ویدنت</h2></div>
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-4.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class=price-light">
                        <span>کارپول ۲ درصد لقمان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,780,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-3.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class=price-light">
                        <span>گان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>9,500,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class=price-light">
                        <span>آمالگام</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>400,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-1.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class=price-light">
                        <span>درموسپت نیم لیتری</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,670,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-2.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class=price-light">
                        <span>آلژینات ایتالیایی BMS</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>1,300,000 تومان</span>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="product-sc no-hundred" id="ps-sl-fifth">
        <div class="title-cards-light"><h2>پربازدید های ویدنت</h2></div>
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-8.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>کارپول ۲ درصد لقمان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,780,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-4.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>گان</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>9,500,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-1.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>آمالگام</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>400,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-2.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>درموسپت نیم لیتری</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>3,670,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-img">
                    <img src="{{URL('storage/products/latest/mk1-3.jpg')}}" alt="product">
                    <div class="overlay">
                        <a href="#" class="buy-btn"><i class="bi bi-plus"></i>اضافه به سبد خرید</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="type-light">
                        <span>آلژینات ایتالیایی BMS</span>
                    </div>
                    <div class="price-light">
                        <span data-tooltip="ارتودنسی" data-flow="left" class="light-cat-icon"><i class="bi bi-layers-half"></i></span>
                        <span>1,300,000 تومان</span>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="product-sc no-hundred" id="sl-brand">
        <div class="title-cards-light"><h2>برندها</h2></div>
        <div class="owl-carousel owl-theme">
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/composit&band&flow/Hoffman.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/composit&band&flow/Ivoclar_Vivadent.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/composit&band&flow/Meta-Biomed-Logo.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/composit&band&flow/saremco.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/composit&band&flow/tokuyama.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/Sirona.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/nsk.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/W&H.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/Bien air.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/Woodpecker.png')}}" alt="product">
            </div>
            <div class="item-brand">
                <img src="{{URL('storage/slider/Brands/toorbin&airmotor/Saeshin.png')}}" alt="product">
            </div>


        </div>
    </section>

    {{--    api--}}
    {{--            @foreach($collection  as $item)--}}
    {{--            <tr>--}}
    {{--                <td>{{$item['id']}}</td>--}}
    {{--                <td>{{$item['first_name']}}</td>--}}
    {{--                <td>{{$item['email']}}</td>--}}
    {{--                <td><img src="{{$item['avatar']}}"></td>--}}
    {{--            </tr>--}}
    {{--            @endforeach--}}
@endsection
@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script  src="{{asset('js/home.js')}}" defer></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#ps-sl-third .owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:0,
            items:5,
            pagination:false,
            responsiveClass: true,
            autoplayTimeout: 20000,
            smartSpeed: 900,
            center: false,
            autoplay:true,
            dots:false,
            autoHeight:false,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:1,
                    margin:-20,
                },
                600:{
                    items:3,
                    margin:100,
                },
                900:{
                    items:4,
                    margin:150,
                },
                1200:{
                    items:4
                }
            }
        });
        $('#ps-sl-fourth .owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:0,
            items:5,
            pagination:false,
            responsiveClass: true,
            autoplayTimeout: 15000,
            smartSpeed: 900,
            center: false,
            autoplay:true,
            dots:false,
            autoHeight:false,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:1,
                    margin:-20,
                },
                600:{
                    items:3,
                    margin:100,
                },
                900:{
                    items:4,
                    margin:150,
                },
                1200:{
                    items:4
                }
            }
        });
        $('#ps-sl-fifth .owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:0,
            items:5,
            pagination:false,
            responsiveClass: true,
            autoplayTimeout: 25000,
            smartSpeed: 900,
            center: false,
            autoplay:true,
            dots:false,
            autoHeight:false,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:1,
                    margin:-20,
                },
                600:{
                    items:3,
                    margin:100,
                },
                900:{
                    items:4,
                    margin:150,
                },
                1200:{
                    items:4
                }
            }
        });
        $('#sl-brand .owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:0,
            items:4,
            pagination:true,
            responsiveClass: true,
            autoplayTimeout: 45000,
            smartSpeed: 900,
            center:false,
            autoplay:true,
            dots:true,
            autoHeight:false,
            responsive:{
                0:{
                    items:1
                },
                300:{
                    items:2,
                },
                600:{
                    items:3,
                },
                900:{
                    items:4,
                },
                1200:{
                    items:5
                }
            }
        });
        AOS.init();
    </script>
@endsection
