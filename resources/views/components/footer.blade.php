
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    {{--<!-- Footer -->--}}
    <footer class="page-footer font-small dark mb-0" style="z-index: 10">
        <!-- Footer Links -->
        <div class="mask">
        <div class="container text-center text-md-left aos-div">

            <!-- Grid row -->
            <div class="row">

                <div class="col-md-4 mx-auto text-right">
                    <a class="navbar-brand text-right" href="https://vdentstore.ir/">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url('FvdentLogo.jpg') }}" alt="Logo" id="vdentLogo">

                    </a>

                    <!-- Content -->
                    <h5 class="font-weight-bolder mt-3 mb-4 text-right "> ارتباط با ویدنت</h5>
                    <p class="text-right dark"><i class="bi bi-map-fill"></i>
                        تهران - بلوار کشاورز خیابان کبکانیان بن بست احمد فرگاه پلاک 14 طبقه اول واحد 3</p>
                    <p class="text-right"><i class="bi bi-telephone-fill "></i> 021-4444778 </p>
                    <a href="https://vdentstore@gmail.com" ><p class="text-right"><i class="bi bi-envelope-fill" ></i> vdentstore@gmail.com</p></a>
                    <p class="text-right" data-toggle="modal"
                       data-target="#EvaluateModal" data-whatever="" style="cursor: pointer">
                        <i class="bi bi-chat-square-dots-fill" title="نظرات و پیشنهادات" data-toggle="modal"
                           data-target="#EvaluateModal" data-whatever="" style="cursor: pointer"></i> ارزیابی ویدنت
                    </p>
                    <br>
                    <span class="p-4" style="font-size: 16px;color: black">از آخرین اخبار ما با خبر شوید!</span>
                    <form action="#" class="f_subscribe_two mailchimp form-inline form-group" method="post" novalidate="true" _lpchecked="1">
                        @csrf
                        <input type="text" name="EMAIL" class="form-control" id="news-input" placeholder="ایمیل خود را وارد کنید.">
                        <button class="btn submit-news" type="submit">ثبت</button>

                    </form>

                </div>
                <hr class="clearfix w-100 d-md-none">

                <!-- Content -->


                <!-- Grid column -->
                <div class="col-md-2 mx-auto ">

                    <!-- Links -->
                    <h5 class="font-weight-bolder mt-3 mb-4 text-center">اطلاعات </h5>

                    <ul class="list-unstyled text-right">
                        <li>
                            <a href="/View/aboutUs.html">درباره ویدنت</a>
                        </li>
                        <li>
                            <a class="text-right" href="/View/guide.html" >راهنمای جامع </a>
                        </li>
                        <li>
                            <a href="/View/FAQ.html" >پاسخ به پرسش های متداول</a>
                        </li>
                        <li>
                            <a href="#!" >تعویض و گارانتی</a>
                        </li>

                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bolder mt-3 mb-4 text-center">ارسال کالا</h5>

                    <ul class="list-unstyled text-right">
                        <li>
                            <a href="#!"  >ارسال رایگان</a>
                        </li>
                        <li>
                            <a href="#!" >ارسال فوری</a>
                        </li>
                        <li>
                            <a href="/View/PrivacyPolicy.html" >حریم خصوصی</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bolder mt-3 mb-4 text-center">محصولات</h5>

                    <ul class="list-unstyled text-right">
                        <li>
                            <a href="#!">محصولات جدید</a>
                        </li>
                        <li>
                            <a href="#!">محصولات ویژه</a>
                        </li>
                        <li>
                            <a href="#!">فروش فوری</a>
                        </li>
                        <li>
                            <a href="#!">مقالات و خواندنیها</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->



        <hr>

        <!-- Call to action
    <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
    <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>اینجا واسه اون ایکون مجوزا
    </ul>
    Call to action -->

        <!-- <hr> -->
        <!-- Social buttons -->

        <ul class="list-unstyled list-inline text-center ">
            <li class="list-inline-item p-3" id="contact">
                <h5 class="mb-1"><span>با ما در ارتباط بمانید!</span></h5>
            </li>
            <li class="list-inline-item m-1 icons">
                <a class="btn-floating">
                    <i class="bi bi-telegram" id="socialMediaI"></i>
                </a>
            </li>
            <li class="list-inline-item m-1 icons">
                <a class="btn-floating">
                    <i class="bi bi-instagram" id="socialMediaI"></i>
                </a>
            </li>
            <li class="list-inline-item m-1 icons">
                <a class="btn-floating">
                    <i class="bi bi-whatsapp" id="socialMediaI"></i>
                </a>
            </li>

        </ul>
        <!-- Social buttons -->



        <!-- Copyright -->
        <div class="footer-copyright text-center pb-4">تمامی حقوق مادی و معنوی سایت متعلق به
            <a href="https://vdentstore.ir/" style="color: #171c24">vdentstore.ir</a>
            می باشد.1400 ©

        </div>
        <div class="custom-shape-divider-top-1630991392">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M649.97 0L599.91 54.12 550.03 0 0 0 0 120 1200 120 1200 0 649.97 0z" class="shape-fill"></path>
            </svg>
        </div>
        </div>
    </footer>
{{--Modal--}}
    <div class="modal fade" id="EvaluateModal" tabindex="-1" aria-labelledby="EvaluateModalLabel" aria-hidden="true" style="text-align: right;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeBt">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <h5>از اینکه ویدنت را انتخاب کرده اید متشکریم!</h5>
                    <p>لطفا نظر  خود را نسبت به عملکرد ویدنت به اطلاع ما برسانید.</p>
                    <form>
                        <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="perfect" >
                            <label class="form-check-label" for="radio1">عالی </label>

                        </div>
                        <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="good">
                            <label class="form-check-label" for="radio2">متوسط</label>

                        </div>
                        <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="not good">
                            <label class="form-check-label" for="radio3"> ضعیف</label>

                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">پیشنهادات یا انتقادات خود را برای ویدنت ارسال کنید.</label>
                            <textarea class="form-control" id="message-text" placeholder="پیشنهادات خود را اینجا بنویسید:"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="closeBtModal" data-dismiss="modal">بستن</button>
                    <button type="button" class="btn" id="sendBtModal">ارسال</button>
                </div>
            </div>
        </div>
    </div>
