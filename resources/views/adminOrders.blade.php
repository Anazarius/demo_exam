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
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер столика</p>
        </div>
        <div class="element">
            <p>Здесь будет количество гостей</p>
        </div>
        <div class="element">
            <p>Здесь будет список блюд</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер столика</p>
        </div>
        <div class="element">
            <p>Здесь будет количество гостей</p>
        </div>
        <div class="element">
            <p>Здесь будет список блюд</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер столика</p>
        </div>
        <div class="element">
            <p>Здесь будет количество гостей</p>
        </div>
        <div class="element">
            <p>Здесь будет список блюд</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер столика</p>
        </div>
        <div class="element">
            <p>Здесь будет количество гостей</p>
        </div>
        <div class="element">
            <p>Здесь будет список блюд</p>
        </div>
    </div>
    <div class="button">
        <div class="exit">
            <a href="{{route("adminList")}}" class="link">
                <button type="submit" class="btnBack">Назад</button>
            </a>
        </div>
    </div>

</div>
</body>
</html>

