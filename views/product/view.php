<?php include ROOT.'/views/layouts/header.php'; ?>

  <div class="cart">
    <div class="container">
      <div class="row">
      	<div class="col-12 pb-4">
      		<a href="/">Главная</a>
      		<a> > </a>
      		<a><?php echo $product['name'] ?></a>
      	</div>
        <div class="col-12">
          <h3 class="h2__title text-left"><?php echo $product['name'] ?></h3>
          <hr class="hr_subtitle mt-1">

            <div class="cart-item">
              <div class="menu">
                <div class="menu-item">
               		<img src="<?php echo Product::getImage($product['id']); ?>" class="mr-4" alt="">
               		<p class="mt-2">
               			<?php echo $product['description']; ?>
               		</p>
               		<p class="menu-item__brand mb-2"><?php echo $product['brand']; ?></p>
               		<h4 class="menu-item__name"><b>Цена товара: </b><?php echo $product['price']; ?></h4>
									
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>