var jumpropeCheckbox = document.getElementById("jump-rope-checkbox");
var jumpropes = document.querySelectorAll(".jump-rope");

var punchingbagCheckbox = document.getElementById("punching-bags-checkbox");
var punchingbags = document.querySelectorAll(".punching-bag");

var otherproductCheckbox = document.getElementById("other-checkbox");
var otherproducts = document.querySelectorAll(".other-product");

jumpropeCheckbox.addEventListener("click",function(){
    for(let i = 0;i<jumpropes.length;i++){
        jumpropes[i].classList.add("active");
        jumpropes[i].classList.remove("hide");
    }

    for(let i = 0;i<punchingbags.length;i++){
        punchingbags[i].classList.add("hide");
        punchingbags[i].classList.remove("active");
    }

    for(let i = 0;i<otherproducts.length;i++){
        otherproducts[i].classList.add("hide");
        otherproducts[i].classList.remove("active");
    }
});

punchingbagCheckbox.addEventListener("click",function(){
    for(let i = 0;i<jumpropes.length;i++){
        jumpropes[i].classList.add("hide");
        jumpropes[i].classList.remove("active");
    }

    for(let i = 0;i<punchingbags.length;i++){
        punchingbags[i].classList.add("active");
        punchingbags[i].classList.remove("hide");
    }

    for(let i = 0;i<otherproducts.length;i++){
        otherproducts[i].classList.add("hide");
        otherproducts[i].classList.remove("active");
    }
});

otherproductCheckbox.addEventListener("click",function(){
    for(let i = 0;i<jumpropes.length;i++){
        jumpropes[i].classList.add("hide");
        jumpropes[i].classList.remove("active");
    }

    for(let i = 0;i<punchingbags.length;i++){
        punchingbags[i].classList.add("hide");
        punchingbags[i].classList.remove("active");
    }

    for(let i = 0;i<otherproducts.length;i++){
        otherproducts[i].classList.add("active");
        otherproducts[i].classList.remove("hide");
    }
});