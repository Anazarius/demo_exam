<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список смен</p>
    {{--        foreach employes as employ--}}
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет Имя</p>
        </div>
        <div class="element">
            <p>Здесь будет Фамилия</p>
        </div>
        <div class="element">
            <p>Здесь будут Отчество</p>
        </div>
        <form action="" method="post">
            @csrf
            <button class="removeEmploy">Уволить</button>
        </form>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет Имя</p>
        </div>
        <div class="element">
            <p>Здесь будет Фамилия</p>
        </div>
        <div class="element">
            <p>Здесь будут Отчество</p>
        </div>
        <form action="" method="post">
            @csrf
            <button class="removeEmploy">Уволить</button>
        </form>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет Имя</p>
        </div>
        <div class="element">
            <p>Здесь будет Фамилия</p>
        </div>
        <div class="element">
            <p>Здесь будут Отчество</p>
        </div>
        <form action="" method="post">
            @csrf
            <button class="removeEmploy">Уволить</button>
        </form>
    </div>
    <div class="container">
        <div class="element">
            <p>Здесь будет номер строки</p>
        </div>
        <div class="element">
            <p>Здесь будет Имя</p>
        </div>
        <div class="element">
            <p>Здесь будет Фамилия</p>
        </div>
        <div class="element">
            <p>Здесь будут Отчество</p>
        </div>
        <form action="" method="post">
            @csrf
            <button class="removeEmploy">Уволить</button>
        </form>
    </div>
    <div class="buttons">
        <div class="addShift">
            <a href="{{route("addEmployes")}}" class="link">
                <button type="submit" class="btnAdd">Добавить сотрудника</button>
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

