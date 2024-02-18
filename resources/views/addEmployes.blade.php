<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-header></x-header>
</head>
<body class = "bg">
<div class="list">
    <p class="shiftsText">Добавить сотрудника</p>
    <form action="" method="post">
        @csrf
        <div class="employ">
            <input class="form_el" placeholder="Имя" name="name" type="text" value="{{old('name')}}"/>
            <input class="form_el" placeholder="Фамилия" name="last_name" type="text" value="{{old('last_name')}}"/>
            <input class="form_el" placeholder="Логин" name="login" type="text" value="{{old('login')}}"/>
            <input class="form_el" placeholder="Пароль" name="password" type="text" value="{{old('password')}}"/>
            <p class="employText">Выберите роль:</p>
            <select name="role" class="form_el">
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->title}}</option>
                @endforeach
            </select>
            <button type="submit" class="btnAccept">Подтвердить</button>
        </div>

    </form>
    <div class="button">
        <div class="exit">
            <a href="{{route("adminEmployes")}}" class="link">
                <button type="submit" class="btnBack">Назад</button>
            </a>
        </div>
    </div>
</div>
</body>
</html>

