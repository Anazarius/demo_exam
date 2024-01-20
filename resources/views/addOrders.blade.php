<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Добавить заказ</p>
    <form action="" method="post">
        @csrf
        <div class="order">
            <input class="form_el" placeholder="Номер столика" name="num_table" type="text" value="{{old('name_table')}}"/>
            <input class="form_el" placeholder="Количество гостей" max="8" name="count_guests" type="number"/>
            <input class="form_el" placeholder="Заказ: " name="order" type="text" value="{{old('order')}}"/>
            <button type="submit" class="btnAccept">Подтвердить</button>
        </div>
    </form>
    <div class="button">
        <div class="exit">
            <a href="{{route("waiterOrders")}}" class="link">
                <button type="submit" class="btnBack">Назад</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>


