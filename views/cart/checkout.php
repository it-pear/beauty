<?php include ROOT.'/views/layouts/header.php'; ?>

	<div class="cart">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="h2__title">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
					<hr class="hr_subtitle mt-1">
					<div class="cart-form">
						<form>
						  <div class="form-group">
						    <label><span>*</span>Имя</label>
						    <input type="text" class="form-control" placeholder="">
						  </div>
						  <div class="form-group">
						    <label><span>*</span>Фамилия</label>
						    <input type="text" class="form-control" placeholder="">
						  </div>
						  <div class="form-group">
						    <label><span>*</span>Email</label>
						    <input type="email" class="form-control" placeholder="">
						  </div>
						  <div class="form-group">
						    <label><span>*</span>Телефон</label>
						    <input type="tel" class="form-control" placeholder="">
						  </div>
						  <div class="form-group">
						    <label>Комментарий</label>
						    <textarea class="form-control" rows="3"></textarea>
						  </div>
						  <div class="text-center">
						  	<button type="submit" class="beauty-btn cart__submit mt-4">Оформить заказ</button>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
