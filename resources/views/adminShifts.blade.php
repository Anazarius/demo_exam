<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список смен</p>
    <div class="description">
        <p class="element bold">Номер строки</p>
        <p class="element bold">Дата</p>
        <p class="element bold">Сотрудник</p>
    </div>
    @foreach($shifts as $shift)
        <div class="container">
            <div class="element">
                <p>{{$shift->id}}</p>
            </div>
            <div class="element">
                <p>{{$shift->date}}</p>
            </div>
            <div class="element">
                <p>{{$shift->user_id}}</p>
            </div>
        </div>
    @endforeach
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

