<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaQuery.css">


    <title>Payment</title>
</head>

<body>

    <!--
        The Header of the category Page
    -->
    <header class="main-header ">
        <nav id="menu_nav" class=" ">
            <ol class="nav-ol">
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="15">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M4 22a8 8 0 1 1 16 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z" />
                    </svg>
                    <a href="signin.html" onclick="showloginModal()">ادخل لحسابك أو سجل الآن </a>
                </li>
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="15">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                    </svg>
                    <a href="index.html"> الرئيسية </a>
                </li>
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="18">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M8.965 18a3.5 3.5 0 0 1-6.93 0H1V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2h3l3 4.056V18h-2.035a3.5 3.5 0 0 1-6.93 0h-5.07zM15 7H3v8.05a3.5 3.5 0 0 1 5.663.95h5.674c.168-.353.393-.674.663-.95V7zm2 6h4v-.285L18.992 10H17v3zm.5 6a1.5 1.5 0 1 0 0-3.001 1.5 1.5 0 0 0 0 3.001zM7 17.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                    </svg>
                    <a href="#"> من نحن </a>
                </li>
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="18">
                        <path fill="none" d="M0 0H24V24H0z" />
                        <path
                            d="M12 1l8.217 1.826c.457.102.783.507.783.976v9.987c0 2.006-1.003 3.88-2.672 4.992L12 23l-6.328-4.219C4.002 17.668 3 15.795 3 13.79V3.802c0-.469.326-.874.783-.976L12 1zm4.452 7.222l-4.95 4.949-2.828-2.828-1.414 1.414L11.503 16l6.364-6.364-1.415-1.414z" />
                    </svg>
                    <a href="#"> اتصل بنا </a>
                </li>
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="18">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2h-2zm2-1.645A3.502 3.502 0 0 0 12 6.5a3.501 3.501 0 0 0-3.433 2.813l1.962.393A1.5 1.5 0 1 1 12 11.5a1 1 0 0 0-1 1V14h2v-.645z" />
                    </svg>
                    <a href="#"> المساعدة </a>
                </li>
                <li class="nav-li">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="18">
                        <path fill="none" d="M0 0L24 0 24 24 0 24z" />
                        <path
                            d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10c-1.702 0-3.305-.425-4.708-1.175L2 22l1.176-5.29C2.426 15.306 2 13.703 2 12 2 6.477 6.477 2 12 2zm0 5c-1.598 0-3 1.34-3 3v1H8v5h8v-5h-1v-1c0-1.657-1.343-3-3-3zm2 6v1h-4v-1h4zm-2-4c.476 0 1 .49 1 1v1h-2v-1c0-.51.487-1 1-1z" />
                    </svg>
                    <a href="#"> سياسة الخصوصية</a>
                </li>
                <li class="nav-li">
                    <img class="sauid-icon" src="assets/images/saudi-arabia.svg" height="15" width="24">

                    <a href="#"> اليمن YER </a>
                </li>
                <li class="nav-li">

                    <a href="#"> English <img class="translate-icon" src="assets/images/translation.png" height="15"
                            width="24">
                    </a>

                </li>

            </ol>

        </nav>
              <!-- Search and Cart-->
              <section>
                <div class="serach-cart-container">
                <i class="fa fa-bars " id="mobile_nav" onclick="toggleMenu()"></i>
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/home - Copy.png" alt="BookStore"></a>
                    </div>
                
                    <form action="">
                        <div class="search">
                            <input type="text" class="search__input" placeholder="البحث">
                            <button class="search__btn"><img src="assets/images/icon/search.svg" alt="بحث"></button>
                        </div>
                    </form>  
                    
                    <div class="cart">
                        <a href="cart.html"><img src="assets/images/icon/cart-1.svg" class="cart__icon" alt="السلّة"></a>
                        <span class="notfication" id="cart"></span>
                    </div>
                
                </div>
                        </section>
                
    </header>



    <section>
        <div class="progress-container" dir="rtl">
            <div class="progress-line">
                <button class="circle is-active">
                    1
                </button>
                <button class="circle">
                    2
                </button>
                <button class="circle">
                    3
                </button>

            </div>
            <!-- <div class="btns-container">
<button class="next-btn">التالي</button>
<button class="previous-btn">السابق</button>

    </div> -->
            <div class="payment-personal-info-container">
                <div class="personal-info-form-container">
                    <h2 class="psersonal-info-caption">بياناتك وعنوانك</h2>
                    <form class="personal-info-form" id="personal-info-from" action="#">

                        <label>المنطقة / الدولة</label><br>


                        <select class="buyer-countrycode">
                            <option value="">

                                اليمن
                            </option>

                            <option>
                                مصر
                            </option>

                        </select>

                        <div class="buyer-input-container" style="margin-top: 8px;">

                            <label>الاسم الكامل (الاول واللقب)</label><br>
                            <input id="#buyer-full-name" type="text" class="">
                            <br>


                            <label>رقم الهاتف</label><br>

                            <input id="#buyer-phonenumber" type="number" class="">
                            <br>
                            <label> العنوان</label><br>

                            <input id="#buyer-address" placeholder="عنوان الشارع" type="text" class="">
                            <br>

                            <input id="#buyer-apt-no" type="number" class="" placeholder="رقم الطابق , الشقة">
                            <br>
                            <div class="buyer-row-container">
                                <div>
                                    <label>المدينة</label>
                                    <input id="#buyer-city" type="text" class="">
                                </div>
                                <div>
                                    <label>المنطقة</label>
                                    <input id="#buyer-distinct" type="text" class="">
                                </div>

                                <div>
                                    <label>كود ZIP</label> <input id="#buyer-zip-code" type="number" class="">
                                </div>
                            </div>


                        </div>

                        <label class="payment-checkbox-container">
                            <span class="payment-agree">اجعل هذا عنواني الرئيسي</span>
                            <input type="checkbox">

                            <br>
                            <span class="payment-checkmark"></span>
                        </label>


                    </form>

                    <div class="payment-savebtn-container">
                        <button onclick="checkstep()" class="payment-save-address">حفظ</button>
                    </div>
                </div>

            </div>
            <div class="payment-method-container hidePaymentclass">
                <div class="payment-form-container">
                    <h2 class="payment-method-caption">
                        طريقة الدفع
                    </h2>
                    <form id="payment_method" class="payment-method" action="#">

                        <label>اسم البطاقة</label><br>
                        <input id="#payment-name" type="text" class="">
                        <br>
                        <label>رقم البطاقة</label><br>
                        <input id="#payment-number" type="number" class="" placeholder="8557 *** ***">
                        <br>

                        <div class="payment-row-container">
                            <div>
                        <label>الانتهاء</label>

                        <input id="#payment-end-date" type="date" class="">
                    </div>
                    <div>
                        <label>الرقم السري</label>
                        <input id="#payment-secretkey" type="number" class="">
                    </div>
                    <div>    
                        <label>كود ZIP</label>

                    <input id="#payment-zipcode" type="number" class="">
                </div>
                        </div>

                    </form>
                    <div class="payment-method-savebtn-container">
                        <button onclick="checkstep()" class="payment-save-method-info">حفظ</button>
                    </div>
                </div>
            </div>
<div class="payment-done-container hidePaymentclass">
    <div class="payment-done-inner-container"  >
        <div class="sign-check-container" >
        <div class="sign-check"></div>
        </div>
        <br>
        <h2 class="done-payment-caption">تم الدفع</h2>
        <div class="done-payment-paragraph-container">
            <p class="done-payment-paragraph">
                شكراً لك , عملية الدفع اكتملت بنجاح.
                <br>
                تم إرسال رسالة تأكيد الى 
                
            </p>
            <a class="payment-done-email" href="mailto:example@gmail.com" >
                example@gmail.com
                            </a>
        </div>
        
        <h3 class="payment-details-caption">تفاصيل الطلب</h3>
  
        <hr class="payment-done-line">
        <div class="payment-details-container">
        <div class="payment-details-row">
            <label>تكلفة الطلب</label><span>800$</span>
        </div>
            <div class="payment-details-row">
            <label>تاريخ الطلب</label><span>2022-01-22</span>
        </div>
        <div class="payment-details-row">
            <label>نوع البطاقة</label><span>فيزا كارد</span>
      </div>
      <div class="payment-details-row">
            <label>صاحب البطاقة</label><span>عبدالرحمن الصهيبي</span>
      </div>
    </div>
    <div class="payment-btn-container">
        <button class="payment-done-btn" onclick="location.reload();" >تم</button>
    </div>
        </div>
       
    </div>
  
</div>
        </div>
    </section>
    <footer>
        <section>
            <!--
        Top Footer
    -->
            <div class="footer-container">
                <div class="footer-first-block-container">

                    <div class="footer-form-container">
                        <h4>انظم الى نشرتنا البريدية</h4>
                        <hr class="form-hr">
                        <form class="form" name="post-form" action="#">

                            <div class="input-container">

                                <input class="email" type="email" placeholder="ادخل بريدك الالكتروني">
                                <svg class="email-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zm-7 7.732V18h2v-2.268a2 2 0 1 0-2 0zM16 8V7a4 4 0 1 0-8 0v1h8z" />
                                </svg>
                            </div>
                            <div class="button-container">
                                <button class="subscribe-btn" type="submit">اشتراك</button>
                            </div>
                        </form>


                    </div>
                    <div class="contact-us-container">
                        <h4>تواصل معنا</h4>
                        <hr>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-instagram"></a>

                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-snapchat-ghost"></a>
                        <!-- <img class="tiktok" src="assets/images/tiktok-brands.svg" height="15" width="15"> -->

                    </div>
                </div>

                <div class="footer-second-block-container">
                    <h4>خدمة العملاء</h4>
                    <hr>
                    <ul>
                        <li>
                            <a href="#">مبيعات الشركات</a>
                        </li>
                        <li>
                            <a href="#">الاسئلة المتكررة</a>
                        </li>
                        <li>
                            <a href="#">دليل التسوق والمطبوعات</a>
                        </li>
                        <li>
                            <a href="#">مواقع المعارض</a>
                        </li>
                        <li>
                            <a href="#">سياسة الضمان</a>
                        </li>
                        <li>
                            <a href="#">سياسة الاسترجاع والاستبدال</a>
                        </li>
                        <li>
                            <a href="#">اتصل بنا ></a>
                        </li>
                        <li>
                            <a href="#">9200000089</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-third-block-container">
                    <h4>خدمات جرير</h4>
                    <hr>
                    <ul>
                        <li>
                            <a href="#">خدمة تقسيط المشتريات</a>
                        </li>
                        <li>
                            <a href="#">خدمات مابعد البيع</a>
                        </li>
                        <li>
                            <a href="#">خدمات الحمابة الشاملة</a>
                        </li>
                        <li>
                            <a href="#">خدمات أجهزة آبل</a>
                        </li>
                        <li>
                            <a href="#">بطاقة خصم جرير</a>
                        </li>
                        <li>
                            <a href="#">بطاقة جرير للهدايا</a>
                        </li>



                    </ul>

                </div>
                <div class="footer-fourth-block-container">
                    <h4>روابط سريعة</h4>
                    <hr>
                    <ul>
                        <li>
                            <a href="#">إصدارات جرير</a>
                        </li>
                        <li>
                            <a href="#"> قارئ جرير</a>
                        </li>
                        <li>
                            <a href="#">شرطاء برامج المكافئات</a>
                        </li>
                        <li>
                            <a href="#">خدمات شركات الاتصالات</a>
                        </li>


                    </ul>
                </div>
                <div class="footer-fifth-block-container">
                    <h4>عن جرير</h4>
                    <hr>
                    <ul>
                        <li>
                            <a href="#">من نحن</a>
                        </li>
                        <li>
                            <a href="#">الحوكمة</a>
                        </li>
                        <li>
                            <a href="#">علاقات المستخدمين والقارير</a>
                        </li>
                        <li>
                            <a href="#">الاستدامة</a>
                        </li>
                        <li>
                            <a href="#">الأخبار</a>
                        </li>
                        <li>
                            <a href="#">فرص العمل</a>
                            <hr>

                        </li>

                </div>
            </div>
        </section>
      
    </footer>
    <script src="js/payment-file.js"></script>
    <script src="js/app.js"></script>

</body>

</html>