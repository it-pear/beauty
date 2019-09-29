<?php include ROOT.'/views/layouts/header.php'; ?>
	
	<?php if ($result): ?>
		<script type="text/javascript">
			window.location.href = "cart/thanks";
		</script>

		<?php else: ?>
		<div class="container pt-5">
			<div class="row">
				<div class="col">
					<p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?> грн.</p><br>
				</div>
			</div>
		</div>

		<?php if (isset($errors) && is_array($errors)): ?>
			<ul>
				<?php foreach ($errors as $error): ?>
					<li><?php echo $error; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		
		<div class="cart">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="h2__title">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
						<hr class="hr_subtitle mt-1">
						<div class="cart-form">
							<form method="POST">
							  <div class="form-group">
							    <label><span>*</span>Имя</label>
							    <input type="text" class="form-control" required name="names" value="<?php echo $userName; ?>" placeholder="">
							  </div>
							  <div class="form-group">
							    <label><span>*</span>Email</label>
							    <input type="email" class="form-control" required name="emails" value="<?php echo $userEmail; ?>" placeholder="">
							  </div>
							  <div class="form-group">
							    <label><span>*</span>Телефон</label>
							    <input type="tel" class="form-control" required name="phone" value="<?php echo $userPhone; ?>" placeholder="">
							  </div>
							  <div class="form-group">
							    <label><span>*</span>Город</label>
							    <input type="text" class="form-control" required name="city" value="<?php echo $userCity; ?>" placeholder="">
							  </div>
							  <div class="form-group">
							    <label><span>*</span>Отделение почты</label>
							    <input type="text" class="form-control" required name="mail_office" value="<?php echo $userOffice; ?>" placeholder="">
							  </div>
							  <div class="form-group">
							    <label>Комментарий</label>
							    <textarea class="form-control" required name="messege" value="<?php echo $userMessege; ?>" rows="3"></textarea>
							  </div>
							  <div class="text-center">
							  	<input class="beauty-btn cart__submit mt-4" type="submit" name="submit" value="Оформить заказ">
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>
