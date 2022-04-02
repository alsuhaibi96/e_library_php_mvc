<?php


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mediaQuery.css">
    <title>Dhamar Library</title>
</head>

<body>

    <!--
        The Header of the category Page
    -->
   <?php require_once "layouts/header.php"?>;


    <!-- Main Content-->
    <main>
  
        <section>
            <div class="slideshow-outer-container">

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="../assets/images/category.jpg" style="width:100%">
                        <div class="numbertext">1 / 3</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../assets/images/category.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../assets/images/category.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </section>


        <!-- Category   -->

        <!-- <section>
            <header class="header">
                <h1 class="header__title">تصفح حسب القسم</h1>
            </header>
            <div class="category">
                <div class="category__prev">
                    <a><img src="../assets/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="category__item">
                    <img src="../assets/images/icon/debt.svg" class="category__img" alt="دين">
                    <a href="category.html" class="category__title category__title--brown">دين</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/history.svg" class="category__img" alt="تاريخ">
                    <a href="category.html" class="category__title category__title--orange">تاريخ</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/novels.svg" class="category__img" alt="روايات">
                    <a href="category.html" class="category__title category__title--purple">روايات</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/policy.svg" class="category__img" alt="سياسة">
                    <a href="category.html" class="category__title category__title--fuchsia">سياسة</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/economie.svg" class="category__img" alt="اقتصاد">
                    <a href="category.html" class="category__title category__title--blue">اقتصاد</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/cooking.svg" class="category__img" alt="طبخ">
                    <a href="category.html" class="category__title category__title--green">طبخ</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/education.svg" class="category__img" alt="تربية">
                    <a href="category.html" class="category__title category__title--pink">تربية</a>
                </article>
                <div class="category__next">
                    <a><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section> -->






        <!-- Category   -->

         <section>
            <header class="header">
                <h1 class="header__title">تصفح حسب القسم</h1>
            </header>
            <div class="category">
            <?php foreach($params as $category){
                if($category['is_active']==1){
                ?>
        <article class="category__item">

                    <img src="images/<?=$category['image'];?>" class="category__img" alt="<?=$category['image'];?>">
                    <a href="" class="category__title category__title--brown"><?=$category['name'];?></a>
                </article>
                <?php }}?>
          
                <div class="category__next">
                    <a><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section> 





    <!-- Advertisement  -->
    <section>
        <div class="advertisement">
            <article class="advertisement__item">
                <a href="#"><img src="../assets/images/advertisement/1.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../assets/images/advertisement/2.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../assets/images/advertisement/3.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item">
                <a href="#"><img src="../assets/images/advertisement/4.jpg" class="advertisement__img" alt=""></a>
            </article>
            <article class="advertisement__item advertisement__item--main">
                <a href="#"><img src="../assets/images/advertisement/5.jpg" class="advertisement__img" alt=""></a>
            </article>
        </div>
    </section>

<br>
<br>

       <!-- Offers  -->
       <section>
        <header class="header">
            <h1 class="header__title">العروض الحالية</h1>
            <a href="category.html" class="header__link">عرض الكل</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../assets/images/icon/arrow.svg" alt="السابق"></a>
            </div>
            <article class="card">
                <img src="../assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="counter" id="product-1">
                        <p class="expired"></p>
                      
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
                        <a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="counter" id="product-2">
                        <p class="expired"></p>
                   
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book4.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                        <h1>كتاب إلكتروني</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">صيغ أخرى:</span>
                        <a href="" class="book-link--cyan">كتاب مطبوع</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
            </div>
        </div>
    </section>


        <!-- Religious Books-->
        <section>
            <header class="header">
                <h1 class="header__title">الكتب الدينية</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../assets/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <img src="../assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book4.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="المفضلة" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>
        
            
        </main>

    <!--
                Sign in and Login modals
            -->
            <div class="login-modal-container" id="login-modal-container">

<div class="login-modal-content">
    <button class="close-login-modal" onclick="hideloginModal()">x</button>
    <h3 class="login-caption">تسجيل الدخول</h3>
    <hr class="form-hr">
    <form id="login" action="#">
        <div class="login-input-container">
            <input class="login-email" type="email" placeholder="البريد الإلكتروني أو رقم الجوال">
        </div>
        <div class="login-input-container">
            <input type="password" class="login-pass" placeholder="كلمة السر"><button
                class="forgot-pass">نسيت ؟</button>
        </div>
        <div class="login-input-container">
            <button class="login-btn">تسجيل الدخول</button>
        </div>
        <div class="dont-have-account-container">
            <span class="dont-have-account">ليس لديك حساب؟</span>
            <a href="#" class="create-new-account" onclick="showSigninModal()">إنشاء حساب جديد</a>
        </div>
    </form>


</div>
</div>

            <div class="signin-modal-container" id="signin-modal-container">
            <div class="signin-content-container">
                <button class="close-signin-modal" onclick="hidesigninModal()">x</button>
               <h3 class="register-caption">إنشاء حساب</h3>
               <br>
               <hr class="form-hr">

                <div class="signin-form-container">
                    <form class="signin-form" id="signin-form">

                        <div class="signin-row-container">
                            <input  type="number" class="signin-phonenumber" type="number" placeholder="رقم الجوال">
                            <!-- <select class="signin-countrycode">
                                <option value="">
                                   
                                رمز البلد

                                </option>

                                <option>
                                    +967
                                </option>

                            </select> -->
                        </div>
                         
                            <!-- <span style="margin-right: 5px;">سوف نرسل لك <span style="font-weight: 600;">رمز التحقق عن طريق رسالة نصية</span></span> -->
                        
                            <div class="signin-input-container" style="margin-top: 8px;">
                                
                            <!-- <input id="#signin-register-code" style="  text-align: center;
                            background-color: #e5e8ee;padding: 15px;" type="number" placeholder="إرسال رمز التحقق" class="">
                            <br> -->

                            <input id="#signin-first-name" type="text" placeholder="الاسم الاول" class="">
                            <br>

                            <input id="#signin-last-name" type="text" placeholder="اسم العائلة" class="">
                            <br>

                            <input id="#signin-email" type="email" placeholder="البريد الإلكتروني" class="">
                            <br>

                            <input id="#signin-pass" type="password" placeholder="كلمة السر" class="">
                            <br>
                            <input id="#signin-retype-pass" type="password" placeholder="تأكيد كلمة السر" class="">
                            
                           </div>
                          
                                <label class="signin-checkbox-container">
                                    <span class="signin-agree">أوافق على  </span><a href="" style="text-decoration: none;font-size: 15px;">الشروط والأحكام</a>
                                    <input type="checkbox">
                              
                                    <br>
                                    <span class="signin-checkmark"></span>
                                  </label>

                                  <label class="signin-checkbox-container">
                                    <span class="signin-register-news">التسجيل للانظمام للنشرة البريدية</span>
                                    <input type="checkbox">
                                  
                                    <span class="signin-checkmark"></span>
                                  </label>
                            
                          
                    
                            <button type="submit" class="signin-create-account">إنشاء حساب</button>
<div class="signin-have-account">
<span>لديك حساب؟</span><a href="#" style="text-decoration: none; color: blue;" onclick="showloginModalAgain()"> تسجيل الدخول </a>
</div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!--
            Footer
        -->
        <footer>
            <section>
                <!--
            Top Footer
        -->
        <?php require_once "layouts/footer.php";?>
              
            </section>
          
        </footer>
        <script src="../assets/js/local_js/app.js">

        </script>
</body>

</html>