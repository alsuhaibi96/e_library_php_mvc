/*Java script tha runs in the whole project*/

//Toggle nav
function toggleMenu(){
const menuNav=document.getElementById('menu_nav');
if(menuNav.style.display==='none'){
  menuNav.style.display='block';
}
else{
  menuNav.style.display='none';

}
}

/*Displaying and navigating between slides in the category page*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

/*Displaying and hiding modals "Sign in Modal" and " Sign up modal"*/
const showloginModal=modal=>{
  document.getElementById("login-modal-container").style.display="block";
}

const hideloginModal=hide=>
{
  document.getElementById("login-modal-container").style.display="none";

}
const showSigninModal=modal=>{
  document.getElementById("login-modal-container").style.display="none";
  document.getElementById("signin-modal-container").style.display="block";
}
const hidesigninModal=hide=>
{
  document.getElementById("signin-modal-container").style.display="none";
  document.getElementById("login-modal-container").style.display="none";

}
const showloginModalAgain=showLogin=>{
  document.getElementById("signin-modal-container").style.display="none";
  document.getElementById("login-modal-container").style.display="block";
}


//Cart Counting
const cartCounter   = document.getElementById('cart');
const carts         = document.querySelectorAll('.js-cart');

let storeCart = localStorage.getItem('cart_counter');
let counter   = 0;

const addToCart = () =>
{
    storeCart = storeCart === null ? 0 : storeCart;
    counter   = storeCart;

    counter !== 0 ? cartCounter.style.display = "block" : cartCounter.style.display = "none";

    cartCounter.innerText = counter > 9 ? "9+" : counter;

    carts.forEach (element => 
        {
            element.addEventListener('click' , (e) => 
            {
                counter !== 0 ? cartCounter.style.display = "block" : cartCounter.style.display = "none";
                counter++;
                cartCounter.innerText = counter > 9 ? "9+" : counter;
                localStorage.setItem('cart_counter', counter)
            })
    });
};

window.addEventListener("load", addToCart);
//Change language


const changeLang  = document.querySelectorAll('.js-language');
const htmlElement = document.querySelector('html');
const headElement = document.querySelector('head');
const enLink      = document.createElement('link');

let storeLang     = localStorage.getItem('lang');



changeLang.forEach( element =>
    {
        element.addEventListener('click', ()=>
        {

            if ( htmlElement.dir === 'rtl' )
            {
                htmlElement.dir = 'ltr';
                element.querySelector('span').innerHTML = "Arabic";
                headElement.append(enLink);
            }
            else
            {
                htmlElement.dir = 'rtl';
                element.querySelector('span').innerHTML = "English";
                headElement.removeChild(enLink)
            }
        });
    });
