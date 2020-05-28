@extends('layouts.header')
<html  xml:lang="en" lang="en">
<head>
<title>Фильмы. Соник в кино</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page4">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- шапка -->
@section('header')
<div id="header">
	<div class="row-1">
		<div class="fleft"><a href="index.html">Фильмы</a></div>
		<ul>
			<li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
			<li><a href="contact-us.html"><img src="images/icon2.gif" alt="" /></a></li>
			<li><a href="sitemap.html"><img src="images/icon3.gif" alt="" /></a></li>
		</ul>
	</div>
	<div class="row-2">
		<ul>
			<li><a href="index.html" class="active">Главная</a></li>
			<li><a href="about.html">О сайте</a></li>
			<li><a href="films.html">Фильмы</a></li>
			<li><a href="contacts.html">Контакты</a></li>
			<li class="last"><a href="maintenance.html">Содержание</a></li>
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
					<h3>Соник в кино</h3>
					<div class="img-box1 alt"><img src="images/1page-img3.png" alt="" </div>
					<p class="p1"> Отвязный ярко-синий ежик Соник вместе с новообретенным — человеческим — лучшим другом Томом Вачовски он знакомится со сложностями жизни на Земле и противостоит злодейскому доктору Роботнику, который хочет пленить Соника и использовать его безграничные суперсилы для завоевания мирового господства.</p>
					<iframe   width="850" height="450" src="https://www.youtube.com/embed/QXcXTcGMz7g " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
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