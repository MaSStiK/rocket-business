<?php
    $hostname = "localhost";
    $username = "id20599914_admin";
    $password = "alobama-Bro123";
    $dbname = "id20599914_data";

    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM `check_ups`;";
    $result = $conn->query($query);
    $data = $result->fetch_all();
    $result->free_result();
    $conn->close();

    foreach ($data as $element) {
        echo '
        <div class="container hide-block" id="check-up-'.$element[0].'">
            <h1 class="check-up__title">Check-UP</h1>
            <h2 class="check-up__sub-title">'.$element[1].'</h2>
            <ul>
                <li>Гормональный скрининг</li>
                <li>Тестостерон</li>
                <li>Свободный тестостерон</li>
                <li>Глобулин, связывающий половые гормоны</li>
            </ul>
            <div class="check-up__prices">
                <p class="check-up__price">Всего '.$element[2].'₽</p>
                <p class="check-up__old-price">'.$element[3].'₽</p>
            </div>
            <div class="check-up__buttons">
                <button class="button_green check-up__button-signup button-signup">Записаться</button>
                <button class="button_alternative check-up__button-more">Подробнее</button>
            </div>
        </div>';
    }
?>