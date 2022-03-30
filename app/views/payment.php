<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mediaQuery.css">


    <title>Payment</title>
</head>

<body>

    <!--
        The Header of the category Page
    -->
    <?php require_once "layouts/header.php"?>;




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

    <?php require_once "layouts/footer.php"?>;


    <script src="../assets/js/local_js/payment-file.js"></script>
    <script src="../assets/js/local_js/app.js"></script>

</body>

</html>