var input = document.getElementById("search-input-protectors");

var productsName = document.querySelectorAll(".product-name-protector");

input.addEventListener("input", e => {
    const value = e.target.value.toLowerCase();
    productsName.forEach(productName =>{
        const isVisible = productName.textContent.toLowerCase().includes(value);
        productName.parentElement.classList.toggle("visible-protectors", !isVisible);
    });
});