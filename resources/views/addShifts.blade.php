<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Добавить смену</p>
    <form action="" method="post">
        @csrf
        <div class="date">
            <p class="dateText">
                Выберите дату для смены:
            </p>
            <input class="inputDate" name="date" type="date" value="{{old('date')}}"/>
            <select name="role" class="employesList">
                <option name="waiter_1">Михалыч</option>
                <option name="waiter_2">Виктор</option>
                <option name="waiter_3">Кузьма</option>
                <option name="waiter_4">Саид тупой</option>
            </select>
            <button type="submit" class="btnAccept">Подтвердить</button>
        </div>

    </form>
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

