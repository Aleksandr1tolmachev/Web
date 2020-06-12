@extends('layouts.header')
<html  xml:lang="en" lang="en">
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- шапка -->
@section('header')
<div id="header">
  <div class="row-1">
    <div class="fleft"><a href="/">Фильмы</a></div>
    <ul>
      <li><a href="/"><img src="images/icon1.gif" alt="" /></a></li>
      <li><a href="/contacts"><img src="images/icon2-act.gif" alt="" /></a></li>
        <li><a href="/register"><img src="images/icon3.gif" alt="" /></a></li>
    </ul>
  </div>
  <div class="row-2">
    <ul>
      <li><a href="/" >Главная</a></li>
      <li><a href="/about">О сайте</a></li>
      <li><a href="/films">Фильмы</a></li>
      <li><a href="/contacts" class="active">Контакты</a></li>
      <li class="last"><a href="/maintenance">Содержание</a></li>
    </ul>
  </div>
</div>
@endsection
<!--основа -->
@section('content')
			<div id="content"><div class="ic"></div>
				<div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3>Мои <span>Контакты</span></h3>
								<div class="address">
									<div class="fleft">
								<span>Страна:</span>Россия<br />
								<span>Телефон:</span>88005553535<br />
								<span>E-mail:</span>sanyo.ghost@mail.ru<br />

								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Отправьте ваще сообщение</h3>
					<form id="contacts-form" action="">
						<fieldset>
						<div class="field"><label>Ваше имя:     </label><input type="text" value=""/></div>
						<div class="field"><label>Ваш E-mail:</label><input type="text" value=""/></div>
						<div class="field"><label>Ваше сообщение:</label><textarea cols="100" rows="15" ></textarea></div>
						<div class="wrapper">
							<a href="#" class="link2">
								<span>
									<span>Отправить сообщение</span>
								</span>
							</a>
						</div>
					  </fieldset>
					</form>
				</div>
<!-- низ -->
<div id="footer">
  <div class="left">
    <div class="right">
      <div class="inside">Толмачев Александр© 2020 год<br />
        <a rel="nofollow" href="https://vk.com/id385657281" class="new_window">ВК</a> <br />
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection
