const data = [
    {
        id: 1,
        title: "Для Мужчин",
        price: "2800",
        oldPrice: "3500"
    },
    {
        id: 2,
        title: "Для Женщин",
        price: "2600",
        oldPrice: "3500"
    },
    {
        id: 3,
        title: "Для Детей",
        price: "2000",
        oldPrice: "2800"
    },
    {
        id: 4,
        title: "Для Пожилых",
        price: "1900",
        oldPrice: "2800"
    }
]

const checkUp = document.querySelector(".check-up")

for (let i in data) {
    checkUp.innerHTML = `<div class="container hide-block" id="check-up-${data[i].id}">
        <h1 class="check-up__title">Check-UP</h1>
        <h2 class="check-up__sub-title">${data[i].title}</h2>
        <ul>
            <li>Гормональный скрининг</li>
            <li>Тестостерон</li>
            <li>Свободный тестостерон</li>
            <li>Глобулин, связывающий половые гормоны</li>
        </ul>
        <div class="check-up__prices">
            <p class="check-up__price">Всего ${data[i].price}₽</p>
            <p class="check-up__old-price">${data[i].oldPrice}₽</p>
        </div>
        <div class="check-up__buttons">
            <button class="button_green check-up__button-signup button-signup">Записаться</button>
            <button class="button_alternative check-up__button-more">Подробнее</button>
        </div>
        </div>` + checkUp.innerHTML
}
