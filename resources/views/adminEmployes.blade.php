<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список Сотрудников</p>
    <div class="description">
        <p class="element bold">Номер строки</p>
        <p class="element bold">Имя сотрудника</p>
        <p class="element bold">Фамилия сотрудника</p>
        <p class="element bold">Роль</p>
    </div>
    @foreach($users as $user)
        <div class="container">
            <div class="element">
                <p>{{$user->id}}</p>
            </div>
            <div class="element">
                <p>{{$user->name}}</p>
            </div>
            <div class="element">
                <p>{{$user->last_name}}</p>
            </div>
            <div class="element">
                <p>{{$user->role->title}}</p>
            </div>
            <form action="" method="post">
                @csrf
                <button class="removeEmploy">Уволить</button>
            </form>
        </div>
    @endforeach
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

