<?php include ROOT.'/views/layouts/header.php'; ?>

  <div class="cart">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="h2__title">Корзина</h2>
          <hr class="hr_subtitle mt-1">
          <?php if ($productsInCart): ?>

            <div class="cart-item">
              <div class="menu">
                <?php foreach ($products as $product): ?>
                  <div class="menu-item">
                    <a href="/cart/delete/<?php echo $product['id'] ?>" class="menu-item__close">
                      <img src="/template/img/cancel.svg" alt="">
                    </a>
                    <div class="media">
                      <img src="/template/img/product.jpg" class="mr-4" alt="">
                      <div class="media-body">
                        <p class="menu-item__brand mb-2">Charlotte Tilbury</p>
                        <h5 class="menu-item__name">Помада</h5>
                        
                        <div class="menu-item-price">
                          <div class="media d-block d-md-flex">
                            <input type="hidden" class="single__price" value="<?php echo $product['price']; ?>" > 
                            <div class="number singleInfo__number">
                              <a href="/cart/minus/<?php echo $product['id'] ?>" class="minus" data-id="<?php echo $product['id'] ?>">-</a>
                              <input class="kolvo_tovar" type="text" value="<?php echo $productsInCart[$product['id']]; ?>" size="5" disabled id="kolvo_tovar">
                              <a href="/cart/add/<?php echo $product['id'] ?>" class="plus" data-id="<?php echo $product['id'] ?>">+</a>
                            </div>
                            <div class="media-body ml-md-5">
                              <p class="menu-item__price mb-0">
                                <input class="singleInfo__price" value="<?php echo $product['price']; ?>" disabled> грн.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>
            
            <div class="itog">
              <div class="media">
                <p class="p1">Итого:</p>
                <div class="media-body">
                  <p class="p2"><?php echo $totalPrice; ?> <span>грн.</span></p>
                </div>
              </div>
            </div>
              

            <h3 class="title_h3 mt-4">У вас есть промокод?</h3>
            <div class="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Промо-код">
              </div>
              <button class="form__search-button pl-5 pr-5">
                <img src="/template/img/search-2.svg" alt="">
              </button>
            </div>
            <h3 class="title_h3 mt-4">Оплата</h3>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Наложенным платежем
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Предоплата
              </label>
            </div>
            <div class="w-100 text-center">
              <a href="#" class="beauty-btn cart__submit mt-4">Оформить заказ</a><br>
              <a href="/catalog" class="cart__home">продолжить покупки</a>
            </div>
          <?php else: ?>
            <p>Корзина пуста</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>