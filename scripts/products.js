var boxingGloves = document.querySelectorAll(".boxing-glove");
var boxingCheckbox = document.getElementById("boxing-gloves-checkbox");
boxingCheckbox.addEventListener("click",function(){

    for(let i = 0;i<boxingGloves.length;i++){
        boxingGloves[i].classList.add("active");
        boxingGloves[i].classList.remove("hide");
    }

    for(let i = 0;i<taekwondoGloves.length;i++){
        taekwondoGloves[i].classList.add("hide");
        taekwondoGloves[i].classList.remove("active");
    }

    for(let i = 0;i<mmaGloves.length;i++){
        mmaGloves[i].classList.add("hide");
        mmaGloves[i].classList.remove("active");
    }
});





var mmaCheckbox = document.getElementById("mma-gloves-checkbox");
var mmaGloves = document.querySelectorAll(".mma-glove");
mmaCheckbox.addEventListener("click",function(){

    for(let i = 0;i<boxingGloves.length;i++){
        boxingGloves[i].classList.add("hide");
        boxingGloves[i].classList.remove("active");
    }

    for(let i = 0;i<taekwondoGloves.length;i++){
        taekwondoGloves[i].classList.add("hide");
        taekwondoGloves[i].classList.remove("active");
    }

    for(let i = 0;i<mmaGloves.length;i++){
        mmaGloves[i].classList.add("active");
        mmaGloves[i].classList.remove("hide");
    }
});




var taekwondoGloves = document.querySelectorAll(".taekwondo-glove");
var taekwondoCheckbox = document.getElementById("taekwondo-gloves-checkbox");
taekwondoCheckbox.addEventListener("click",function(){

    for(let i = 0;i<boxingGloves.length;i++){
        boxingGloves[i].classList.add("hide");
        boxingGloves[i].classList.remove("active");
    }

    for(let i = 0;i<taekwondoGloves.length;i++){
        taekwondoGloves[i].classList.add("active");
        taekwondoGloves[i].classList.remove("hide");
    }

    for(let i = 0;i<mmaGloves.length;i++){
        mmaGloves[i].classList.add("hide");
        mmaGloves[i].classList.remove("active");
    }
});

