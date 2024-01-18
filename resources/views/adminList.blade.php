<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-header></x-header>
    </head>
    <body class = "bg">
    <div class="adminList">
        <a href="{{route("adminShifts")}}" class="link">
            <button type="submit" class="btn">Список смен</button>
        </a>
        <a href="{{route("adminOrders")}}" class="link">
            <button type="submit" class="btn">Список заказов</button>
        </a>
        <a href="{{route("adminEmployes")}}" class="link">
            <button type="submit" class="btn">Список сотрудников</button>
        </a>
        <div class="exit">
            <a href="{{route("main")}}" class="link">
                <button type="submit" class="btnExit">Выход</button>
            </a>
        </div>
    </div>
    </body>
</html>
