@extends('layouts.header')
<html>
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
			<li><a href="/maintenance"><img src="images/icon3.gif" alt="" /></a></li>
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
								<h3></h3>
								<p>В данном разделе вы можете найти инфомацию о фильмах</p>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Фильмы </span></h3>
					<ul class="list">
						<li><a href="/film1"><img src="images/1page-img2.png" alt="" /><a href="/film1">Бладшот</a><br />
					Настоящее имя – Рэй Гаррисон.Морской пехотинец, погибший вместе с женой,а затем вернувшийся к жизни благодаря технологиям компании «Возрождение души».<br />
					</li>
						<li><a href="/film2"><img src="images/1page-img3.png" alt="" /><a href="/film2">Соник в кино</a><br />
					Соник — внеземной синий ёж, способный бегать со сверхзвуковой скоростью.<br />
						</li>
						<li><a href="/film3"><img src="images/1page-img4.png" alt="" /><a href="/film3">Хищные птицы: Потрясающая история Харли Квинн</a><br />
				Героями фильма «Хищные птицы» стали несколько юных особ, чьей отважности и смелости можно только позавидовать. Четыре девушки нашли в себе ресурсы выступить против главы преступного мира и оказать ему сопротивление.<br />
						</li>
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
