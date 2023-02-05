var input = document.getElementById("search-input-gloves");

var productsName = document.querySelectorAll(".product-name-gloves");

input.addEventListener("input", e => {
    const value = e.target.value.toLowerCase();
    productsName.forEach(productName =>{
        const isVisible = productName.textContent.toLowerCase().includes(value);
        productName.parentElement.classList.toggle("visible-glove", !isVisible);
    });
});