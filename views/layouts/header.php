<!doctype html>
<html>
<head>
	<title>Интернет магазин</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/template/css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap&subset=cyrillic,cyrillic-ext,latin-ext">
	<link rel="stylesheet/less" href="/template/style.less">

</head>

<body>
	
	<nav>
		<div>
			<span class="nav__close"></span>
		</div>
		<img src="/template/img/nav-bcg.jpg" alt="">
		<ul class="header_ul">
			<li><a href="/catalog/">Каталог</a></li>
			<li><a href="/contacts/">Контакты</a></li>
			<li>
				<a href="#" class="header__call_back">Обратная связь:</a>
				<div>
					<a href="" class="header__call">WATSAPP</a>
					<a href="" class="header__call">TELEGRAM</a>
				</div>
			</li>
		</ul>
	</nav>
	<header>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="d-flex align-items-center">
						<div class="burger d-block d-lg-none mr-3">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="search search-2 mr-2 d-block d-lg-none">
							<button class="search-button">
								<img src="/template/img/search.svg" alt="">
							</button>
							<form>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Поиск">
							  </div>
							  <button class="form__search-button">
									<img src="/template/img/search-2.svg" alt="">
								</button>
							</form>
						</div>
						<a href="/" class="logo">
							<img src="/template/img/logo.png" alt="">
						</a>
						<div class="search ml-4 d-none d-lg-block">
							<form>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Поиск">
							  </div>
							  <button class="form__search-button">
									<img src="/template/img/search-2.svg" alt="">
								</button>
							</form>
						</div>
						<ul class="header_ul d-none d-lg-block">
							<li><a href="/catalog/">Каталог</a></li>
							<li><a href="/contacts/">Контакты</a></li>
							<li>
								<a href="#">Обратная связь:</a>
								<a href="" class="header__call">WATSAPP</a>
								<a href="" class="header__call">TELEGRAM</a>
							</li>
						</ul>
						<div class="basket ml-auto">
							<a href="/cart" class="link-all"><?php echo Cart::countItems(); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>