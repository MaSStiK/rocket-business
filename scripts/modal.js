const modalWrapper = document.querySelector(".modal__wrapper")
const modal = document.querySelector(".modal")
const buttonSignup = document.querySelector(".modal__button-signup")
const buttonCancel = document.querySelector(".modal__button-cancel")

modal.addEventListener("click", (event) => event.stopPropagation()) // pc prevent close modal
modal.addEventListener("tap", (event) => event.stopPropagation()) // phone prevent close modal

function openSignup() {
    modalWrapper.classList.remove("hide-block")
}

function hideSignup() {
    modalWrapper.classList.add("hide-block")
}

document.querySelectorAll(".button-signup").forEach(element => { // pc open modal
    element.addEventListener("click", openSignup)
})

document.querySelectorAll(".button-signup").forEach(element => { // phone open modal
    element.addEventListener("tap", openSignup)
})

modalWrapper.addEventListener("click", hideSignup) // pc click outside modal
modalWrapper.addEventListener("tap", hideSignup) // phone click outside modal
buttonCancel.addEventListener("click", hideSignup) // pc click cancel
buttonCancel.addEventListener("tap", hideSignup) // phone click cancel