const buttonBurger = document.querySelector(".header__burger")
const buttonClose = document.querySelector(".header__close")
const navigation = document.querySelector("nav")
const body = document.querySelector("body")

function openMenu() {
    buttonClose.classList.add("show-on-phone")
    buttonBurger.classList.remove("show-on-phone")
    navigation.classList.remove("hide-on-phone")
    body.classList.add("blocked-scroll")
}

function closeMenu() {
    buttonBurger.classList.add("show-on-phone")
    buttonClose.classList.remove("show-on-phone")
    navigation.classList.add("hide-on-phone")
    body.classList.remove("blocked-scroll")
}

buttonBurger.addEventListener("click", openMenu) // pc open nav
buttonBurger.addEventListener("tap", openMenu) // phone open nav
buttonClose.addEventListener("click", closeMenu) // pc close nav
buttonClose.addEventListener("tap", closeMenu) // phone close nav