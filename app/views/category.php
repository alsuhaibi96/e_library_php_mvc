<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mediaQuery.css">
    
    <title>Category</title>
</head>
<body>
 <!--
        The Header of the category Page
    -->
    <?php require_once "layouts/header.php";?>
  


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

        <div class="grid grid-category">
            <section>
                <div class="filter">
                    <h1 class="filter__title">
                        <span><img src="assets/images/icon/book.svg" alt="book"></span>
                        ?????? ??????????????????
                    </h1>
                    <div class="filter__box">
                        <p class="filter__box-title">?????????? ??????????????</p>
                        <a href="#" class="filter__item">
                            ?????????? ????????????
                            <span>-</span>
                        </a>
                        <a href="#" class="filter__item">
                            ??????????
                            <span>-</span>
                        </a>
                        <div class="filter__collap">
                            <div class="prograssDetails">
                                <button></button>
                                <div></div>
                                <button></button>
                            </div>
                            <div class="priceDetaile">
                                <p>??.??.0</p>
                                <p>??.??.150</p>
                            </div>
                        </div>
                        <a href="#" class="filter__item">
                            ???????? ????????????
                            <span>-</span>
                        </a>
                    </div>

                </div>
            </section>
            <section>
                <div class="select">
                    <!-- Search block -->
                    <form action="">
                        <div class="search">
                            <input id="search" onkeyup="searchBook()" type="text" class="search__input" placeholder="??????????">
                            <button class="search__btn"><img src="assets/images/icon/search.svg" alt="??????"></button>
                        </div>
                    </form> 
                    <div>
                        <label for="categoriesSorting">?????????????? ???????? : </label>
                        <select name="categoriesSorting">
                            <option value="*">???????????? ????????????????</option>
                            <option value="name">??????????</option>
                            <option value="date">??????????????</option>
                            <option value="price">??????????</option>
                        </select>
                    </div>
                </div>
                <div class="category category--gap" style="flex-wrap: wrap;" id="books">
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">???? ??????</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book2.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">????????????</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book3.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">?????? ??????????????</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book4.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">???????? ????????</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book2.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book3.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book4.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
                                <h1>???????? ????????????????</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="../assets/images/product/book1.jpg" class="card__img" alt="???????? ????????????">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="?????? ????????????">
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="??????????????" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="??????????" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="????????????" ></a>
                            </div>
                        </div>
                    </article>
                </div>
                <footer style="display: flex;flex-direction: column;align-items: center;">
                    <button class="btn btn--blue btn--100w">?????? ????????????</button>
                    <a href="" class="link--green">???????? ???? ?????? ?????????????????? ?????? ???????? ???????? ????????????????????</a>
                </footer>
            </section>
    
        </div>
    </main>
         <!--
            Footer
        -->
        <?php require_once "layouts/footer.php";?>

    <script src="assets/js/local_js/app.js">

    </script>
</body>
</html>