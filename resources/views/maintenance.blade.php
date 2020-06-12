@extends('layouts.header')
<html>
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page6">
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
      <li><a href="/films">Фильмы</a></li>
      <li><a href="/contacts">Контакты</a></li>
      <li class="last"><a href="/maintenance" class="active">Содержание</a></li>
    </ul>
  </div>
</div>
			@endsection
<!-- основа -->
@section('content')
			<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
				<div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3>Содержание</h3>
								<p>Все страницы сайта</p>
								 <ul class="sitemap-list">
									<li><a href="index.html">Главная</a></li>
									<li><a href="about.html">О сайте</a></li>
									<li><a href="articles.html">Фильмы</a>
										<ul>
											<li><a href="article1.html">Фильм 1</a></li>
											<li><a href="article2.html">Фильм 2</a></li>
											<li><a href="article3.html">Фильм 3</a></li>
										</ul>
									</li>
									<li><a href="contacts.html">Контакты</a></li>
									<li><a href="maintenance.html">Содержание</a></li>
								 </ul>
								 <p></p>
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
