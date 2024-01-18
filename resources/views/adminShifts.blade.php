<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список смен</p>
    {{--        foreach shifts as shift--}}
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер смены</p>
        </div>
        <div class="element">
            <p>Здесь будет дата смены</p>
        </div>
        <div class="element">
            <p>Здесь будут назначенные люди на смену</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер смены</p>
        </div>
        <div class="element">
            <p>Здесь будет дата смены</p>
        </div>
        <div class="element">
            <p>Здесь будут назначенные люди на смену</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер смены</p>
        </div>
        <div class="element">
            <p>Здесь будет дата смены</p>
        </div>
        <div class="element">
            <p>Здесь будут назначенные люди на смену</p>
        </div>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет номер смены</p>
        </div>
        <div class="element">
            <p>Здесь будет дата смены</p>
        </div>
        <div class="element">
            <p>Здесь будут назначенные люди на смену</p>
        </div>
    </div>
    <div class="buttons">
        <div class="addShift">
            <a href="{{route("addShifts")}}" class="link">
                <button type="submit" class="btnAdd">Добавить смену</button>
            </a>
        </div>
        <div class="exit">
            <a href="{{route("adminList")}}" class="link">
                <button type="submit" class="btnBack">Назад</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>

