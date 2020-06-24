@extends('layouts.header')
<html>
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body id="page3">
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
			<li><a href="/contacts"><img src="images/icon2.gif" alt="" /></a></li>
		  <li><a href="/register"><img src="images/icon3.gif" alt="" /></a></li>
		</ul>
	</div>
	<div class="row-2">
		<ul>
			<li><a href="/" >Главная</a></li>
			<li><a href="/about">О сайте</a></li>
			<li><a href="/films" class="active">Фильмы</a></li>
			<li><a href="/contacts">Контакты</a></li>
			<li class="last"><a href="/maintenance">Содержание</a></li>
		</ul>
	</div>
</div>
			@endsection
<!-- основа -->
@section('content')
			<div id="content"><div class="ic"></div>
				<div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3><p>В данном разделе вы можете найти инфомацию о фильмах</p></h3>
									<div class="form">
								<form method="get" action="/search" id="search_form">
									<input type="search" name="search_field" placeholder="Введите название фильма"/>
								  <button>Искать</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Фильмы </span></h3>
					<ul class="list">
						@foreach ($films as $film)
						<li><a href="{{$film->link}}"><img src="{{$film->URL_img}}" alt="" /><a href="/film1">{{$film->title}}</a><br />
					{{$film->description}}<br />
					</li>
						@endforeach
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
					</div>
				</div>
			</div>
			</body>
			</html>
@endsection
