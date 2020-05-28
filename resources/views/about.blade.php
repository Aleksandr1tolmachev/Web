@extends('layouts.header')
<head>
<title>Фильмы</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page2">
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
      <li><a href="/about" class="active">О сайте</a></li>
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
								<h3>О <span>сайте<span></h3>
								<p class="p1">На этом сайте вы сможете ознакомиться с различными фильмами, а также найти краткое описание про них.<p>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="content">

<!--низ-->
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
