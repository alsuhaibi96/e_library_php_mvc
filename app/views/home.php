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
                <h1 class="header__title">???????? ?????? ??????????</h1>
            </header>
            <div class="category">
                <div class="category__prev">
                    <a><img src="../assets/images/icon/arrow.svg" alt="????????????"></a>
                </div>
                <article class="category__item">
                    <img src="../assets/images/icon/debt.svg" class="category__img" alt="??????">
                    <a href="category.html" class="category__title category__title--brown">??????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/history.svg" class="category__img" alt="??????????">
                    <a href="category.html" class="category__title category__title--orange">??????????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/novels.svg" class="category__img" alt="????????????">
                    <a href="category.html" class="category__title category__title--purple">????????????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/policy.svg" class="category__img" alt="??????????">
                    <a href="category.html" class="category__title category__title--fuchsia">??????????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/economie.svg" class="category__img" alt="????????????">
                    <a href="category.html" class="category__title category__title--blue">????????????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/cooking.svg" class="category__img" alt="??????">
                    <a href="category.html" class="category__title category__title--green">??????</a>
                </article>
                <article class="category__item">
                    <img src="../assets/images/icon/education.svg" class="category__img" alt="??????????">
                    <a href="category.html" class="category__title category__title--pink">??????????</a>
                </article>
                <div class="category__next">
                    <a><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="????????????"></a>
                </div>
            </div>
        </section> -->






        <!-- Category   -->

         <section>
            <header class="header">
                <h1 class="header__title">???????? ?????? ??????????</h1>
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
                    <a><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="????????????"></a>
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
            <h1 class="header__title">???????????? ??????????????</h1>
            <a href="category.html" class="header__link">?????? ????????</a>
        </header>
        <div class="category category--gap">
            <div class="category__prev">
                <a href="#"><img src="../assets/images/icon/arrow.svg" alt="????????????"></a>
            </div>
            <article class="card">
                <img src="../assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                        <h1>???????? ????????????????</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                        <p class="book-price__tax">???????? ??????????????</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">?????? ????????:</span>
                        <a href="" class="book-link--cyan">???????? ??????????</a>
                    </div>
                    <div class="counter" id="product-1">
                        <p class="expired"></p>
                      
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
                        <a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book2.jpg" class="card__img" alt="???????? ????????????">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                        <h1>???????? ????????????????</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                        <p class="book-price__tax">???????? ??????????????</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">?????? ????????:</span>
                        <a href="" class="book-link--cyan">???????? ??????????</a>
                    </div>
                    <div class="counter" id="product-2">
                        <p class="expired"></p>
                   
                        <span class="day"></span>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book3.jpg" class="card__img" alt="???????? ????????????">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                        <h1>???????? ????????????????</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                        <p class="book-price__tax">???????? ??????????????</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">?????? ????????:</span>
                        <a href="" class="book-link--cyan">???????? ??????????</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book4.jpg" class="card__img" alt="???????? ????????????">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                        <h1>???????? ????????????????</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                        <p class="book-price__tax">???????? ??????????????</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">?????? ????????:</span>
                        <a href="" class="book-link--cyan">???????? ??????????</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                    </div>
                </div>
            </article>
            <article class="card">
                <img src="../assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                <div class="card__info">
                    <div class="book-type">
                        <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                        <h1>???????? ????????????????</h1>
                    </div>
                    <div class="rating">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                    </div>
                    <div class="book-title">
                        <h1><a href="details.html" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                    </div>
                    <div class="book-price">
                        <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                        <p class="book-price__tax">???????? ??????????????</p>
                    </div>
                    <div class="book-link">
                        <span class="book-link--blue">?????? ????????:</span>
                        <a href="" class="book-link--cyan">???????? ??????????</a>
                    </div>
                    <div class="action">
                        <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                        <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                    </div>
                </div>
            </article>
            <div class="category__next">
                <a href="#"><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="????????????"></a>
            </div>
        </div>
    </section>


        <!-- Religious Books-->
        <section>
            <header class="header">
                <h1 class="header__title">?????????? ??????????????</h1>
                <a href="#" class="header__link">?????? ????????</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../assets/images/icon/arrow.svg" alt="????????????"></a>
                </div>
                <article class="card">
                    <img src="../assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                            <h1>???????? ????????????????</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                            <p class="book-price__tax">???????? ??????????????</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">?????? ????????:</span>
                            <a href="" class="book-link--cyan">???????? ??????????</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book2.jpg" class="card__img" alt="???????? ????????????">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                            <h1>???????? ????????????????</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                            <p class="book-price__tax">???????? ??????????????</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">?????? ????????:</span>
                            <a href="" class="book-link--cyan">???????? ??????????</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book3.jpg" class="card__img" alt="???????? ????????????">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                            <h1>???????? ????????????????</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                            <p class="book-price__tax">???????? ??????????????</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">?????? ????????:</span>
                            <a href="" class="book-link--cyan">???????? ??????????</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book4.jpg" class="card__img" alt="???????? ????????????">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                            <h1>???????? ????????????????</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                            <p class="book-price__tax">???????? ??????????????</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">?????? ????????:</span>
                            <a href="" class="book-link--cyan">???????? ??????????</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                            <h1>???????? ????????????????</h1>
                        </div>
                        <div class="rating">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../assets/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">???????? (???????? ????????????????)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">??.??</span></h3>
                            <p class="book-price__tax">???????? ??????????????</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">?????? ????????:</span>
                            <a href="" class="book-link--cyan">???????? ??????????</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../assets/images/icon/star.svg" alt="??????????????" ></a>
<a class="action__item js-cart"><img src="../assets/images/icon/cart.svg" alt="??????????" ></a>
                            <a href="#" class="action__item"><img src="../assets/images/icon/share.svg" alt="????????????" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../assets/images/icon/arrow.svg" class="category__arrow--next" alt="????????????"></a>
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
    <h3 class="login-caption">?????????? ????????????</h3>
    <hr class="form-hr">
    <form id="login" action="#">
        <div class="login-input-container">
            <input class="login-email" type="email" placeholder="???????????? ???????????????????? ???? ?????? ????????????">
        </div>
        <div class="login-input-container">
            <input type="password" class="login-pass" placeholder="???????? ????????"><button
                class="forgot-pass">???????? ??</button>
        </div>
        <div class="login-input-container">
            <button class="login-btn">?????????? ????????????</button>
        </div>
        <div class="dont-have-account-container">
            <span class="dont-have-account">?????? ???????? ??????????</span>
            <a href="#" class="create-new-account" onclick="showSigninModal()">?????????? ???????? ????????</a>
        </div>
    </form>


</div>
</div>

            <div class="signin-modal-container" id="signin-modal-container">
            <div class="signin-content-container">
                <button class="close-signin-modal" onclick="hidesigninModal()">x</button>
               <h3 class="register-caption">?????????? ????????</h3>
               <br>
               <hr class="form-hr">

                <div class="signin-form-container">
                    <form class="signin-form" id="signin-form">

                        <div class="signin-row-container">
                            <input  type="number" class="signin-phonenumber" type="number" placeholder="?????? ????????????">
                            <!-- <select class="signin-countrycode">
                                <option value="">
                                   
                                ?????? ??????????

                                </option>

                                <option>
                                    +967
                                </option>

                            </select> -->
                        </div>
                         
                            <!-- <span style="margin-right: 5px;">?????? ???????? ???? <span style="font-weight: 600;">?????? ???????????? ???? ???????? ?????????? ????????</span></span> -->
                        
                            <div class="signin-input-container" style="margin-top: 8px;">
                                
                            <!-- <input id="#signin-register-code" style="  text-align: center;
                            background-color: #e5e8ee;padding: 15px;" type="number" placeholder="?????????? ?????? ????????????" class="">
                            <br> -->

                            <input id="#signin-first-name" type="text" placeholder="?????????? ??????????" class="">
                            <br>

                            <input id="#signin-last-name" type="text" placeholder="?????? ??????????????" class="">
                            <br>

                            <input id="#signin-email" type="email" placeholder="???????????? ????????????????????" class="">
                            <br>

                            <input id="#signin-pass" type="password" placeholder="???????? ????????" class="">
                            <br>
                            <input id="#signin-retype-pass" type="password" placeholder="?????????? ???????? ????????" class="">
                            
                           </div>
                          
                                <label class="signin-checkbox-container">
                                    <span class="signin-agree">?????????? ??????  </span><a href="" style="text-decoration: none;font-size: 15px;">???????????? ????????????????</a>
                                    <input type="checkbox">
                              
                                    <br>
                                    <span class="signin-checkmark"></span>
                                  </label>

                                  <label class="signin-checkbox-container">
                                    <span class="signin-register-news">?????????????? ???????????????? ???????????? ????????????????</span>
                                    <input type="checkbox">
                                  
                                    <span class="signin-checkmark"></span>
                                  </label>
                            
                          
                    
                            <button type="submit" class="signin-create-account">?????????? ????????</button>
<div class="signin-have-account">
<span>???????? ??????????</span><a href="#" style="text-decoration: none; color: blue;" onclick="showloginModalAgain()"> ?????????? ???????????? </a>
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