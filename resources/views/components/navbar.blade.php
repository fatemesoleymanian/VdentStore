    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="wrapper">
        <nav>

            <div class="search-icon"><i class="fas fa-search"></i></div>
            <div class="cancel-icon"><i class="fas fa-times"></i></div>
            <div class="content">
                {{-- remember--}}
                <div class="logo"><a href="https:\\vdentstore.ir">
                        {{-- <img src="{{asset('storage/vdentLogo.jpg')}}" alt="vdent Logo" id="vdentLogo" />--}}
                        VDENT
                    </a></div>
                @if(Route::has('login'))
                <ul class="links">
                    @auth
                    <li class="{{request()->is('dashboard') ? 'exact-link' : '' }}">
                        <a href="{{asset('/dashboard')}}" class="desktop-link">
                            <i class="bi bi-person-check-fill"></i>حساب کاربری من</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features"><i class="bi bi-person-fill"></i>حساب کاربری من</label>
                        <ul>
                            <li>
                                <a href="{{route('logout')}}" style="text-align: right" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{'خروج'}}</a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </ul>

                    </li>
                    <li class="{{request()->is('card') ? 'exact-link' : '' }}">
                        <a href="/card" class="desktop-link"><i class="bi bi-basket-fill"></i>سبد خرید</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services"><i class="bi bi-basket-fill"></i>
                            سبد خرید</label>
                        <ul>
                            <li class="{{request()->is('card') ? 'exact-link' : '' }}">
                                <a href="/card">سبد</a>
                            </li>

                        </ul>
                    </li>
                    @else
                    <li class="{{request()->is('register') ? 'exact-link' : '' }}">
                        <a href="{{route('login')}}"><i class="bi bi-person-fill"></i>ورود / ثبت نام</a>
                    </li>
                    @endauth
                    @endif

                    <li>
                        <a href="#"><i class="bi bi-speedometer"></i>خرید سریع</a>
                    </li>

                    {{-- <li class="category-open"><a href="#"><i class="bi bi-list-task " ></i>دسته بندی محصولات</a></li>--}}
                    <li>
                        <a href="#"><i class="bi bi-whatsapp"></i>ارتباط با ویدنت</a>
                    </li>
                </ul>
            </div>

            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <form action="#" class="search-form">
                @csrf
                <input type="search" class="search-data" placeholder="جستجو ...">
                <button type="submit" class="fas fa-search"></button>
            </form>
        </nav>
    </div>
    <div class="theme-mode">
        <i id="theme-toggle" class="bi bi-brightness-low m-3" style="font-size: 20px;"></i>
    </div>
    <div id="mySidenav" class="sidenav">
        <button class="dropdown-btn ex">ابزار
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار اندو</a>
            <button class="dropdown-btn">ابزار ترمیمی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار عمومی ترمیمی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پست و کور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کریر و گوده</a>
            </div>
            <button class="dropdown-btn">ابزار جراحی و پریو
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار عمومی جراحی و پریو</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>الواتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فورسپس</a>
            </div>
            <button class="dropdown-btn">ابزار دندانپزشکی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار ترمیمی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>الواتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>جرمگیری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ست رابر دم</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فورسپس</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیگر ابزار</a>
            </div>
            <button class="dropdown-btn">ابزار معاینه و تشخیص
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آینه</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دنتال فتوگرافی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ظروف استیل</a>
        </div>
        <button class="dropdown-btn ex">ارتودنسی
            <i class="bi bi-chevron-down " id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار دستی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اکسپنشن</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>الاستیک</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>الاینر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>براکت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>بند و تیوب</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم بیمار</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد ارنودنسی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>وایر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>هدگیر و لوازم جانبی</a>
        </div>
        <button class="dropdown-btn ex">اندودنتیکس
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسپری سرما</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزارعمومی اندو</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پرکننده موقت و دائمی کانال</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پانسمان موقت و کویت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>جا فایلی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سیلر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گوتا پرکا </a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کانال لوبریکنت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کن کاغذی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شستشو و ضدعفونی کننده کانال</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گیتس و پیزو</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد عمومی اندو</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فایل روتاری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فایل دستی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>MTA</a>
        </div>
        <a href="#contact" class="dropdown-btn ex">اطفال</a>
        <button class="dropdown-btn ex">بهداشت دهان و دندان
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دهانشویه</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضد حساسیت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فلوراید</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پولیش دندان و بلیچینگ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم جانبی</a>
            <button class="dropdown-btn">مسواک
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مسواک باتری دار</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مسواک برقی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مسواک دستی</a>
            </div>
            <button class="dropdown-btn">تمیز کنده بین دندانی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>چند عملکردی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تک عملکردی</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>نخ دندان</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فیشور سیلانت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تشخیص پوسیدگی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>خمیر پروفیلاکسی</a>
        </div>
        <button class="dropdown-btn ex">پرداخت و پولیش
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>برس پولیش</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیسک پولیش</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سوهان</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاپ و مولت پولیش</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ماندرل</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>نوار پرداخت</a>
        </div>
        <button class="dropdown-btn ex">تجهیزات دندانپزشکی
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <button class="dropdown-btn">تجهیزات جراحی و ایمپلنتولوژی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>الکتروسرجری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنگل و هندپیس</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پیزو سرجری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ساکشن جراحی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تشخیص پایداری ایمپلنت</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیجیتال ایمپلنتولوژی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>موتور جراحی و ایمپلنت</a>
            </div>
            <button class="dropdown-btn">تجهیزات اندو
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنگل اندو</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اندو اسکیلر و اولتراسونیک</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آبچوراتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اپکس لوکیتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شستشو دهنده کانال</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گوتا کاتر</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لایت کیور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>موتور روتاری اندو</a>
            </div>
            <button class="dropdown-btn">تجهیزات ترمیمی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکیلر و اولتراسونیک</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لایت کیور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آمالگاماتور</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تجهیزات ارتودنسی</a>
            <button class="dropdown-btn">تجهیزات استریلیزاسیون
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آب مقطر</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اتوکلاو</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه تمیز کننده و اولتراسونیک</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه پک و بسته بندی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه روغن کاری</a>
            </div>
            <button class="dropdown-btn">تجهیزات پروتزی و لابراتواری
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکنر دیجیتال</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آرتیکلاتور</a>
            </div>
            <button class="dropdown-btn">تجهیزات عمومی و اپراتوری
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پرینتر و اسکنر سه بعدی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوپ و سیستم بزرگنمایی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکیلر جرمگیری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کمپرسور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ساکشن مرکزی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لایت کیور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آمالگاماتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اتوکلاو</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه سیلر و دسته بندی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آب مقطر ساز</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>چراغ دندانپزشکی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه بلیچینگ</a>
                <button class="dropdown-btn">ظهور و مشاهده عکس
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تاریکخانه</a>
                </div>
                <button class="dropdown-btn">لیزر
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لیزر بافت نرم</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لیزر تمام بافت</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لیزر کم توان</a>
                </div>
            </div>
            <button class="dropdown-btn">تجهیز مطب
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>یونیت و صندلی بیمار</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تابوره</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روتور و کابینت</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرویتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ترالی</a>
                <button class="dropdown-btn">ظهور و مشاهده عکس
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تاریکخانه</a>
                </div>
            </div>
            <button class="dropdown-btn">دندانپزشکی دیجیتال
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیجیتال ایمپلنتولوژی</a>
            </div>
            <button class="dropdown-btn">دوربین و رادیوگرافی دیجیتال
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکنر داخل دهانی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فسفر پلیت (PSP)</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تاریکخانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>نگاتوسکوپ</a>
                <button class="dropdown-btn">رادیوگرافی دیجیتال
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سنسور دیجیتال(RVG)</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>رادیوگرافی تک دندان</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>رادیوگرافی پانورامیک</a>
                </div>
                <button class="dropdown-btn">دوربین دیجیتال
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دوربین داخل دهانی</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دوربین خارج دهانی</a>
                </div>
            </div>
            <button class="dropdown-btn">دستگاه های تشخیص
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تست پالپ</a>
            </div>
        </div>
        <button class="dropdown-btn ex">ترمیمی و زیبایی
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کامپوزیت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آمالگام و آمالکپ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>وج</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گلاس آینومر ترمیمی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>باندینگ و رزین</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>بیس و لاینر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سمان و لوتینگ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>بلیچینگ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسید اچ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاندیشنر و پرایمر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>خمیر پولیش و گلیز</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آرتیکلاتور</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد عمومی ترمیمی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فیشور سیلانت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فلوراید</a>
            <button class="dropdown-btn">نوار ماتریکس
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>متال</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سلولوئیدی</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضد حساسیت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تشخیص پوسیدگی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد هموستات</a>
        </div>
        <button class="dropdown-btn ex">جراحی و ایمپلنت
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پک جراحی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد پریودنتال</a>
            <button class="dropdown-btn">مواد بازسازی کننده استخوان
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>بلاک</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ممبرین</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ژل</a>
                <button class="dropdown-btn">گرفت و پودر استخوان
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>زنوگرفت</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آلوگرفت</a>
                </div>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پوتی</a>
            </div>
            <button class="dropdown-btn">محصولات مرتبط با جراحی فک و صورت
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گان</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شان</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تیغ بیستوری</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>نخ بخیه</a>
            <button class="dropdown-btn">محصولات مرتبط با جراحی ایمپلنت
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سیستم GBR</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم و کیت های جانبی</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم هیپودرمیک</a>
            <button class="dropdown-btn">ایمپلنت
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فیکسچر</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>هیلینگ</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنالوگ</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کیت جراحی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اباتمنت</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ایمپرشن کوپینگ</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم و محصولات شستشو و وریدی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>محصولات مرتبط با اپریتینگ جراحی</a>
        </div>
        <button class="dropdown-btn ex">دستکش
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستکش جراحی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستکش معاینه</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستکش نظافت و تمیزکاری</a>
        </div>
        <button class="dropdown-btn ex">سرساکشن و سرپوآر
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرساکشن</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرساکشن جراحی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرپوآر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش ساکشن و پوآر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>محلول تمیز کننده ساکشن</a>
        </div>
        <button class="dropdown-btn ex">فرز ها
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فرز المااسی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فرز استیل</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فرز کارباید</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فرز سرامیکی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم جانبی فرز</a>
        </div>
        <button class="dropdown-btn ex">فیلم و ابزار رادیو گرافی
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پیشبند رادیوگرافی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش رادیوگرافی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فیلم رادیوگرافی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>فریم و پاکت فیلم رادیوگرافی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>هولد و لوازم جانبی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>داروی ظهور و ثبوت</a>
        </div>
        <button class="dropdown-btn ex">کراون و بریج
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش موقت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>نخ زیرلثه</a>
        </div>
        <button class="dropdown-btn ex">کنترل عفونت
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنتی سپتیک</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تجهیزات</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ماسک</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرپوآر</a>
            <button class="dropdown-btn">لباس و پوشش محافظتی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پیشبند</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کلاه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گان</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش آستین</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاور کفش</a>
            </div>
            <button class="dropdown-btn">دست
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم و ابزار جانبی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضدعفونی کننده دست</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کرم و لوسیون دست</a>
            </div>
            <button class="dropdown-btn">سطوح
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم و ابزار جانبی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضدعفونی کننده سطوح</a>
            </div>
            <button class="dropdown-btn">مدیریت پسماند
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سیفتی باکس</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کیسه زباله</a>
            </div>
            <button class="dropdown-btn">عینک و شیلد
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>عینک</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شیلد</a>
            </div>

        </div>
        <button class="dropdown-btn ex">لابراتواری دندانسازی
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد لابراتواری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ابزار لابراتواری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد عمومی پروتزی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دندان مصنوعی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>رزین و لاینر</a>
            <button class="dropdown-btn">تجهیزات پروتزی و لابراتواری
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آرتیکلاتور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکنر دیجیتال</a>
            </div>

        </div>
        <button class="dropdown-btn ex">لباس فرم مطب
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <button class="dropdown-btn">زنانه
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکراب زنانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روپوش زنانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شلوار زنانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کلاه زنانه</a>
            </div>
            <button class="dropdown-btn">مردانه
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>اسکراب مردانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روپوش مردانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>شلوار مردانه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کلاه مردانه</a>
            </div>
        </div>
        <button class="dropdown-btn ex">لوازم و مواد بی حسی
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مواد بی حسی موضعی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرسوزن</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه تزریق</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرنگ تزریق</a>
        </div>
        <button class="dropdown-btn ex">لوازم و مواد قالبگیری
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آلژینات</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>استنس قالبگیری</a>
            <button class="dropdown-btn">مواد سیلیکونی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>افزایشی (A-Silicon)</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تراکمی (C-Silicon)</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تری قالبگیری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ثبت بایت</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پین قالبگیری</a>
            <button class="dropdown-btn">لوازم میکسینگ
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاسه و همزن</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیسپنسر و گان قالبگیری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>میکسینگ تیپ قالبگیری</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>میکسینگ پد و اسلب</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرنگ قالبگیری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>Zoe 7 Non-Zoe</a>
        </div>
        <button class="dropdown-btn ex">لوازم یکبار مصرف
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سرنگ شستشو</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سینی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>گاز و رول پنبه</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>رترکتور دهان</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاغذ اتوکلاو</a>
            <button class="dropdown-btn">پوشش های محافظتی
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پیشبند</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کلاه</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاور کفش</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش آستین</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>پکیج بیمار</a>
            </div>
            <button class="dropdown-btn">روکش ابزار و تجهیزات
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش لایت کیور</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش یونیت</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش دسته چراغ</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش دوربین داخل دهانی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>بریر فیلم</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیسپنسر</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش رادیوگرافی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاور سینی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش هندپیس و توربین</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>روکش ساکشن و پوآر</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیگر ابزار عمومی</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دسته و نگهدارنده ها</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لیوان و جالیوانی</a>
        </div>
        <button class="dropdown-btn ex">مدیریت مطب و تدارکات
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مبلمان اداری</a>
            <button class="dropdown-btn">تمیزکاری و نظافت
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3">
                <a href="#"><i class="bi bi-chevron-left " id="arrows"></i>تجهیزات نظافت</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم التحریر</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم اداری</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاغذ</a>
            <button class="dropdown-btn">بهداشت محیط
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container">
                <button class="dropdown-btn">دستگاه ضدعفونی کننده
                    <i class="bi bi-chevron-down pr-3" id="arrows-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مه پاش</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه ضدعفونی کننده چندکاره</a>
                    <button class="dropdown-btn">دستگاه ضدعفونی کننده اتوماتیک و پدالی
                        <i class="bi bi-chevron-down" id="arrows-down"></i>
                    </button>
                    <div class="dropdown-container pr-3">
                        <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضدعفونی کننده دست غیر لمسی</a>
                        <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ضدعفونی کننده دست پدالی</a>
                    </div>
                </div>
                <button class="dropdown-btn">سطل زباله
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سطل زباله اتوماتیک</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سطل زباله بیمارستانی</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سطل لیوان یکبار مصرف</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>سطل زباله فلزی</a>
                </div>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه روکش توالت فرنگی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دست خشک کن خودکار</a>
                <button class="dropdown-btn">تجهیزات کاور کفش
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کاور کفش</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه کاور کفش مکانیکی</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دستگاه کاور کفش حرارتی</a>
                </div>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>مخزن رول دستمال کاغذی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>تصفیه کننده هوا</a>
                <button class="dropdown-btn">دیسپنسر
                    <i class="bi bi-chevron-down" id="arrows-down"></i>
                </button>
                <div class="dropdown-container pr-3">
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دیسپنسر اتوماتیک ضدعفونی دست</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>استند ایستاده ضدعفونی دست</a>
                    <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>دسپنسر دیواری ضدعفونی دست</a>
                </div>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آب سرد کن</a>
            </div>
        </div>
        <button class="dropdown-btn ex">هندپیس ها
            <i class="bi bi-chevron-down" id="arrows-down"></i>
        </button>
        <div class="dropdown-container">
            <button class="dropdown-btn">آنگل
                <i class="bi bi-chevron-down" id="arrows-down"></i>
            </button>
            <div class="dropdown-container pr-3 ">
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنگل جراحی</a>
                <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>آنگل اندو</a>
            </div>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>ایرموتور</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>توربین</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>کوپلینگ</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوازم جانبی تجهیزات تراش و برش</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>لوبریکنت و تمیز کننده هندپیس</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>میکروموتور</a>
            <a href="#"><i class="bi bi-chevron-left" id="arrows"></i>هندپیس مستقیم</a>
        </div>
    </div>

    <div class="category category-open">
        <i class="bi bi-stack"></i>
    </div>