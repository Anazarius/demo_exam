<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-header></x-header>
    </head>
    <body class = "bg">
            <form action="{{route("admin")}}" method="post" class="auth">
                @csrf
                <div class="hello">
                    <p>Добро пожаловать!</p>
                </div>
                <input placeholder="Логин" name="login" type="text" value="{{old('login')}}" autocomplete="off"/>
                <input placeholder="Пароль" name="password" type="password" value="{{old('password')}}" autocomplete="off"/>
                <button type="submit" class="btn">Войти</button>
            </form>
    </body>
</html>
