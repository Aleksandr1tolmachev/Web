@extends('layouts.header')
<html xml:lang="en" lang="en">
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- шапка -->
@section('header')
<div id="header">
  <div class="row-1">
    <div class="fleft"><a href="/">Фильмы</a></div>
    <ul>
      <li><a href="/"><img src="images/icon1-act.gif" alt="" /></a></li>
      <li><a href="/contacts"><img src="images/icon2.gif" alt="" /></a></li>
        <li><a href="/register"><img src="images/icon3.gif" alt="" /></a></li>
    </ul>
  </div>
  <div class="row-2">
    <ul>
      <li><a href="/" class="active">Главная</a></li>
      <li><a href="/about">О сайте</a></li>
      <li><a href="/films">Фильмы</a></li>
      <li><a href="/contacts">Контакты</a></li>
      <li class="last"><a href="/maintenance">Содержание</a></li>
    </ul>
  </div>
</div>
@endsection
@section('content')
<!-- основа -->
			<div id="content"><div class="ic"></div>
			<div id="slogan">
				<div class="image png"></div>
				<div class="inside">
					<h2>Добро пожаловать на сайт </h2>
					<p>Здесь вы сможете узнать информацию о новых фильмах, а также о старых.</p>
					</div>
				</div>
				<div class="content">
					<h3>Свежие<span> Фильмы</span></h3>
					<ul class="movies">
						@foreach ($films as $film)
						<li>
							<h4>{{$film->title}}</h4><img src="{{$film->URL_img}}" alt="Картинка не найдена" />
							<p>{{$film->description_short}}</p>
							<div class="wrapper"><a href="{{$film->link}}" class="link2"><span><span>Читать больше</span></span></a></div>
						</li>
							@endforeach
						<li class="clear">&nbsp;</li>
					</ul>
				</div>
			</div>
<!-- данные и автор -->
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
