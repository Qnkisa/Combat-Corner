var handwraps = document.querySelectorAll(".handwrap");
var handwrapCheckbox = document.getElementById("handwraps-checkbox");

var shinguards = document.querySelectorAll(".shinguard");
var shinguardCheckbox = document.getElementById("shinguards-checkbox");

var gumshields = document.querySelectorAll(".gum-shield");
var gumshieldCheckbox = document.getElementById("gumshields-checkbox");

var headguards = document.querySelectorAll(".head-guard");
var headguardCheckbox = document.getElementById("headguards-checkbox");

handwrapCheckbox.addEventListener("click",function(){
    for(let i = 0;i<handwraps.length;i++){
        handwraps[i].classList.add("active");
        handwraps[i].classList.remove("hide");
    }

    for(let i = 0;i<shinguards.length;i++){
        shinguards[i].classList.add("hide");
        shinguards[i].classList.remove("active");
    }

    for(let i = 0;i<gumshields.length;i++){
        gumshields[i].classList.add("hide");
        gumshields[i].classList.remove("active");
    }

    for(let i = 0;i<headguards.length;i++){
        headguards[i].classList.add("hide");
        headguards[i].classList.remove("active");
    }
});

shinguardCheckbox.addEventListener("click",function(){
    for(let i = 0;i<handwraps.length;i++){
        handwraps[i].classList.add("hide");
        handwraps[i].classList.remove("active");
    }

    for(let i = 0;i<shinguards.length;i++){
        shinguards[i].classList.add("active");
        shinguards[i].classList.remove("hide");
    }

    for(let i = 0;i<gumshields.length;i++){
        gumshields[i].classList.add("hide");
        gumshields[i].classList.remove("active");
    }

    for(let i = 0;i<headguards.length;i++){
        headguards[i].classList.add("hide");
        headguards[i].classList.remove("active");
    }
});

gumshieldCheckbox.addEventListener("click",function(){
    for(let i = 0;i<handwraps.length;i++){
        handwraps[i].classList.add("hide");
        handwraps[i].classList.remove("active");
    }

    for(let i = 0;i<shinguards.length;i++){
        shinguards[i].classList.add("hide");
        shinguards[i].classList.remove("active");
    }

    for(let i = 0;i<gumshields.length;i++){
        gumshields[i].classList.add("active");
        gumshields[i].classList.remove("hide");
    }

    for(let i = 0;i<headguards.length;i++){
        headguards[i].classList.add("hide");
        headguards[i].classList.remove("active");
    }
});

headguardCheckbox.addEventListener("click",function(){
    for(let i = 0;i<handwraps.length;i++){
        handwraps[i].classList.add("hide");
        handwraps[i].classList.remove("active");
    }

    for(let i = 0;i<shinguards.length;i++){
        shinguards[i].classList.add("hide");
        shinguards[i].classList.remove("active");
    }

    for(let i = 0;i<gumshields.length;i++){
        gumshields[i].classList.add("hide");
        gumshields[i].classList.remove("active");
    }

    for(let i = 0;i<headguards.length;i++){
        headguards[i].classList.add("active");
        headguards[i].classList.remove("hide");
    }
});