@extends('layouts.header')
<html  xml:lang="en" lang="en">
<head>
<title>Фильмы. Хищные птицы: Потрясающая история Харли Квинн</title>
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
			<li><a href="/films">Фильмы</a></li>
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
								<h3>Хищные птицы: Потрясающая история Харли Квинн</h3>
								<div class="img-box1 alt"><img src="images/1page-img4.png" alt="" </div>
								<p class="p1"> Харли Квинн рассталась с Джокером и через некоторое время сообщила об этом всему Готэму, взорвав тот самый химзавод. Девушка больше не тоскует по несостоявшимся отношениям — ей некогда, так как она также потеряла неприкосновенность, и теперь за ней охотятся разной степени криминализованности граждане, желающие отомстить. А в это время ставший крёстным отцом Готема Роман Сайонис очень жаждет вернуть пропавший бриллиант, который стащила у его подручного малолетняя карманница.</p>
								<iframe   width="850" height="550" src="https://www.youtube.com/embed/Zb54LZerPQA " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
