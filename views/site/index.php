<?php include ROOT.'/views/layouts/header.php'; ?>

	<div class="bcg"></div>
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3">
					<aside>
						<ul>
							<?php foreach ($categories as $categoryItem): ?>
								<li>
									<p class="aside__title"><?php echo $categoryItem['name'];?></p>
									<div class="aside__plus">
										<span></span><span></span>
									</div>
									<ul>
										<li><a href="">Вариант</a></li>
										<li><a href="">Вариант</a></li>
										<li><a href="">Вариант</a></li>
									</ul>
								</li>
							<?php endforeach; ?>
						</ul>
					</aside>
				</div>
				<div class="col-12 col-lg-9">
					<div class="row">
						<?php foreach ($latestProducts as $product): ?>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="menu-item">
									<a href="/product/<?php echo $product['id'] ?>">
										<img src="/template/img/product.jpg" alt="">
									</a>
									<p class="menu-item__brand mb-2">Charlotte Tilbury ID<?php echo $product['id'] ?></p>
									<h5 class="menu-item__name"><?php echo $product['name'] ?></h5>
									<p class="menu-item__price mb-2"><?php echo $product['price'] ?> грн.</p>
									<button class="beauty-btn menu-item__basket">
										Добавить в корзину <img src="/template/img/basket.svg" alt="">
									</button>
								</div>
							</div>
						<?php endforeach; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>