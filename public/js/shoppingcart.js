console.log("test")
let menu = document.getElementById("menu")
let shoppingCart = document.getElementById("shoppingCart")
let close = document.getElementById("close")

menu.addEventListener("click", function() {
    shoppingCart.setAttribute("class", "active")
})

close.addEventListener("click", function() {
    shoppingCart.setAttribute("class", "hidden")
})