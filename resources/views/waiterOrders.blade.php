<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Список заказов</p>
    <div class="description">
        <p class="element bold">Номер строки</p>
        <p class="element bold">Номер стола</p>
        <p class="element bold">Количество гостей</p>
        <p class="element bold">Список заказа:</p>
    </div>
    @foreach($orders as $order)
        <div class="container">
            <div class="element">
                <p>{{$order->id}}</p>
            </div>
            <div class="element">
                <p>{{$order->num_table}}</p>
            </div>
            <div class="element">
                <p>{{$order->count_guests}}</p>
            </div>
            <div class="element">
                <p>{{$order->order}}</p>
            </div>
            <div>
                <button type="submit" class="prepare">Принят</button>
                <button type="submit" class="paid">Оплачен</button>
            </div>
        </div>
    @endforeach
    <div class="buttons">
        <div class="addShift">
            <a href="{{route("addOrders")}}" class="link">
                <button type="submit" class="btnAdd">Добавить заказ</button>
            </a>
        </div>
        <div class="exit">
            <a href="{{route("logout")}}" class="link">
                <button type="submit" class="btnExit">Выход</button>
            </a>
        </div>
    </div>

</div>
</body>
</html>

