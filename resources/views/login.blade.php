<html xml:lang="en" lang="en">
<head>
<title>Авторизация</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<div class="login-page">
<form method="get" action="/auth" id="login">
  @if (!Auth::check())
  <div class="form">
  <input type="text" name="login" placeholder="Логин"/>
  <input type="password" name="password" placeholder="Пароль"/>
  <button>Войти</button>
</form>
  <p class="message">Не зарегистрированы? <a href="/register">Создайте аккаунт</a></p>
  <p class="message"><a href="/">На главную страницу</a></p>
  @else
  <a href="/logout">Выход из аккаунта</a>
  @endif
</div>
</div>
<html>
