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
                @foreach($users as $user)
                <option name="user_id">{{$user->name}}</option>
                @endforeach
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

