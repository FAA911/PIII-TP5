import './bootstrap';

var l = localStorage;

product.name.addEventListener("focusout", function() {
    l.setItem("fn", product.name.value);
})
product.description.addEventListener("focusout", function() {
    l.setItem("fn", product.description.value);
})
product.unit_price.addEventListener("focusout", function() {
    l.setItem("fn", product.unit_price.value);
})
product.stock.addEventListener("focusout", function() {
    l.setItem("fn", product.stock.value);
})

function recuperoValores() {
    product.name.value = l.getItem("fn");
    product.description.value = l.getItem("fn");
    product.unit_price.value = l.getItem("fn");
    product.stock.value = l.getItem("fn");
}

document.addEventListener("DOMContentLoaded", recuperoValores);