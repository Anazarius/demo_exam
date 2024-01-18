<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список заказов</p>
    {{--        foreach orders as order--}}
    <div class="container">
        <div class="element">
            <p>№ строки</p>
        </div>
        <div class="element">
            <p>№ столика</p>
        </div>
        <div class="element">
            <p>Кол-во гостей</p>
        </div>
        <div class="element">
            <div>
                <p>Здесь будет список блюд</p>
            </div>
        </div>
        <div>
            <button type="submit" class="prepare">Принят</button>
        </div>
        <div>
            <button type="submit" class="ready">Оплачен</button>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>№ строки</p>
        </div>
        <div class="element">
            <p>№ столика</p>
        </div>
        <div class="element">
            <p>Кол-во гостей</p>
        </div>
        <div class="element">
            <div>
                <p>Здесь будет список блюд</p>
            </div>
        </div>
        <div>
            <button type="submit" class="prepare">Принят</button>
        </div>
        <div>
            <button type="submit" class="ready">Оплачен</button>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>№ строки</p>
        </div>
        <div class="element">
            <p>№ столика</p>
        </div>
        <div class="element">
            <p>Кол-во гостей</p>
        </div>
        <div class="element">
            <div>
                <p>Здесь будет список блюд</p>
            </div>
        </div>
        <div>
            <button type="submit" class="prepare">Принят</button>
        </div>
        <div>
            <button type="submit" class="ready">Оплачен</button>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>№ строки</p>
        </div>
        <div class="element">
            <p>№ столика</p>
        </div>
        <div class="element">
            <p>Кол-во гостей</p>
        </div>
        <div class="element">
            <div>
                <p>Здесь будет список блюд</p>
            </div>
        </div>
        <div>
            <button type="submit" class="prepare">Принят</button>
        </div>
        <div>
            <button type="submit" class="ready">Оплачен</button>
        </div>
    </div>
    <div class="buttons">
        <div class="addShift">
            <a href="{{route("addOrders")}}" class="link">
                <button type="submit" class="btnAdd">Добавить заказ</button>
            </a>
        </div>
        <div class="exit">
            <a href="{{route("main")}}" class="link">
                <button type="submit" class="btnExit">Выход</button>
            </a>
        </div>
    </div>

</div>
</body>
</html>

