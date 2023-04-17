const buttonNext = document.querySelector(".check-up__control-next")
const buttonPrevious = document.querySelector(".check-up__control-previous")
const checkUpNumber = document.querySelector(".check-up__control-number")
let checkUpActive = 1

document.querySelector("#check-up-" + checkUpActive).classList.remove("hide-block") // По умолчанию показываем первый

function hideAll() { // Прячем все и рендерим нужный
    for (let i = 1; i < 5; i++) {
        document.querySelector("#check-up-" + i).classList.add("hide-block")
    }
}

function showNext() {
    hideAll()
    checkUpActive++
    if (checkUpActive === 5) {
        checkUpActive = 1
    }
    document.querySelector("#check-up-" + checkUpActive).classList.remove("hide-block")
    checkUpNumber.innerHTML = checkUpActive + "<span>/4</span>"
}

function showPrevious() {
    hideAll()
    checkUpActive--
    if (checkUpActive === 0) {
        checkUpActive = 4
    }
    document.querySelector("#check-up-" + checkUpActive).classList.remove("hide-block")
    checkUpNumber.innerHTML = checkUpActive + "<span>/4</span>"
}

buttonNext.addEventListener("click", showNext) // pc show next check-up
buttonNext.addEventListener("tap", showNext) // phone show previous check-up
buttonPrevious.addEventListener("click", showPrevious) // pc show next check-up
buttonPrevious.addEventListener("tap", showPrevious) // phone show previous check-up