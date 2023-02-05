let cartContainer = document.querySelector('.cart-products');
let fullPriceElement = document.querySelector('.full-price');
let finalizeElement = document.querySelector('.finalize-purchase');
let noProductsMessage = document.getElementById("no-products-message");

if (cartContainer.childElementCount === 0) {
    if (fullPriceElement) fullPriceElement.style.display = 'none';
    if (finalizeElement) finalizeElement.style.display = 'none';
    if (noProductsMessage) noProductsMessage.style.display = 'block';
}

var navCartMain = document.getElementById("nav-cart-main");
var navCartSubmain = document.getElementById("nav-cart-submain");
var navCartClose = document.getElementById("nav-cart-close");
var navCartBackToWebsite = document.getElementById("back-to-website-button");
var navCartHelper = document.getElementById("nav-cart-helper");

navCartMain.addEventListener("click",function(){
    navCartSubmain.classList.toggle("active");
    navCartHelper.classList.toggle("active");
    document.body.classList.toggle("active");
});

navCartClose.addEventListener("click",function(){
    navCartSubmain.classList.toggle("active");
    navCartHelper.classList.toggle("active");
    document.body.classList.toggle("active");
});

navCartBackToWebsite.addEventListener("click",function(){
    navCartSubmain.classList.toggle("active");
    navCartHelper.classList.toggle("active");
    document.body.classList.toggle("active");
});



var menuMain = document.getElementById("menu");
var hamburger = document.getElementById("hamburger");
var navSearch = document.getElementById("nav-search");

hamburger.addEventListener("click",function(){
    menuMain.classList.toggle("active");
    navSearch.classList.toggle("active");
    hamburger.classList.toggle("active");
});

//intersection observer start

var brags = document.querySelectorAll(".brag");
var newsletter = document.querySelectorAll(".newsletter");

var observer = new IntersectionObserver(entries =>{
    entries.forEach(entry=>{
        if(entry.isIntersecting){
            entry.target.classList.add("active");
        }
        else{
            entry.target.classList.remove("active");
        }
    });
},{
    rootMargin:"-150px"
});

newsletter.forEach(news=>{
    observer.observe(news);
});

brags.forEach(brag=>{
    observer.observe(brag);
});
