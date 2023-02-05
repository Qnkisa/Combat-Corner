var input = document.getElementById("search-input-other-products");

var productsName = document.querySelectorAll(".product-name-other-products");

input.addEventListener("input", e => {
    const value = e.target.value.toLowerCase();
    productsName.forEach(productName =>{
        const isVisible = productName.textContent.toLowerCase().includes(value);
        productName.parentElement.classList.toggle("visible-other-products", !isVisible);
    });
});