<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/mediaQuery.css">
    <title>Cart</title>
</head>
<body>
 <!--
        The Header of the category Page
    -->
  
    <?php require_once "layouts/header.php";?>


                <header class="header header--cart">
                    <h1 class="header__title--blue"><img src="../assets/images/icon/cart-1.svg" alt=""> السلّة <span>(3منتجات)</span></h1>
                </header>
                <div class="grid grid--2-column">
                    <section>
                        <article class="card card--shadow card--90w">
                            <div class="header flex">
                                <img src="../assets/images/product/related1.jpg" alt="" style="width: 6%; margin-left: 10px;">
                                <div class="flex__right">
                                    <h1 class="header__title--blue" style="margin-bottom: 10px;">البداية والنهاية الجزء الأول (كتاب إلكتروني)</h1>
                                    <p><i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i></p>
                                </div>
                                <div class="book-price flex__left">
                                    <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                                    <p class="book-price__tax">شامل الضرائب</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="note flex__right" style="  margin-right: 6%;width: 67%;margin-top: 12px;">
                                    <p><b>ملاحظة:</b>سيتم إضافة هذا الكتبا الإلكتروني إلى مكتبتك في قارئ جرير</p>
                                    <a href="#">اقرأ المزيد</a>
                                </div>
                               
                            </div>
                            <div class="card__footer">
                                <span>احذف</span>
                            </div>
                        </article>
                        <article class="card card--shadow card--90w">
                            <div class="header flex">
                                <img src="../assets/images/product/related1.jpg" alt="" style="width: 6%; margin-left: 10px;">
                                <div class="flex__right">
                                    <h1 class="header__title--blue" style="margin-bottom: 10px;">البداية والنهاية الجزء الأول (كتاب إلكتروني)</h1>
                                    <p><i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i></p>
                                </div>
                                <div class="book-price flex__left">
                                    <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                                    <p class="book-price__tax">شامل الضرائب</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="note flex__right" style="  margin-right: 6%;width: 67%;margin-top: 12px;">
                                    <p><b>ملاحظة:</b>سيتم إضافة هذا الكتبا الإلكتروني إلى مكتبتك في قارئ جرير</p>
                                    <a href="#">اقرأ المزيد</a>
                                </div>
                             
                            </div>
                            <div class="card__footer">
                                <span>احذف</span>
                            </div>
                        </article>
                    </section>
                    <section>
                        <div class="card card--shadow card--90w">
                            <div class="flex"> 
                                <div class="book-price--blue">
                                    <h4>المجموع</h4>
                                </div>
                                <div class="book-price--blue">
                                    <h4 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h4>
                                </div>
                            </div>
                            <div class="flex"> 
                                <div class="book-price--blue">
                                    <h4>تكاليف الشحن</span></h3>
                                </div>
                                <div class="book-price__price--free">
                                    <h4>مجاني</h4>
                                </div>
                            </div>
                            <div class="flex"> 
                                <div class="book-price">
                                    <h2> المجموع الكلي <span class="book-price--blue">شامل الضريبة</span></h2>
                                </div>
                                <div class="book-price">
                                    <h4 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h4>
                                </div>
                            </div>
                            <div class="card--bottom">
                                <p>بالضغط على "انهاء التسوق" فانت توافق على <a href="#"> الشروط والأحكام </a>و<a href="#"> سياسةالخصوصية </a></p>
                              <br>
                                <a class="paybtn btn--red" href="payment.html">انهاء  التسوق</a>
                            </div>
                        </div>
                    </section>
                </div>


                
        <!--
            Footer
        -->
        <?php require_once "layouts/footer.php";?>

         
</body>
</html>