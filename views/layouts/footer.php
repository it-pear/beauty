
	<footer>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer-content pb-1">
						<p class="footer__text">
							Подпишитесь на нашу рассылку и получайте<br>
							самые выгодные предложения первыми!
						</p>
						<form class="search search-3 pb-3">
						  <div class="form-group">
						    <input type="email" class="form-control" placeholder="Ваш E-mail">  
						  </div>
						  <button class="form__search-button">
								Подписаться
							</button>
						 </form>
						 <p class="footer__text mt-4 mb-1">Контактный телефон</p>
						 <a href="tel:80981949392" class="footer__text pt-1">8 (098) 194 93 92</a>
						 <p class="footer__text mt-4 mb-2">Время работы</p>
						 <p class="footer__text">
						 	пн-пт 10:00 - 19:00<br>
							сб 10:00 - 15:00<br>
							вс - выходной
						 </p>
						 <p class="footer__text mt-4 footer__mail mb-2">Email</p>
						 <a href="mailto:Beautyshopsua@gmail.com" class="footer__text">Beautyshopsua@gmail.com</a>
						 <p class="footer__text mt-4">Мы в соц. сетях</p>
						 <ul>
						 	<li>
						 		<a href=""><img src="img/social/instagram.svg" alt=""></a>
						 	</li>
						 	<li>
						 		<a href=""><img src="img/social/whatsapp.svg" alt=""></a>
						 	</li>
						 	<li>
						 		<a href=""><img src="img/social/viber.svg" alt=""></a>
						 	</li>
						 	<li>
						 		<a href=""><img src="img/social/teltegram.svg" alt=""></a>
						 	</li>
						 </ul>
					</div>
				</div>
			</div>
		</div>
		<p class="footer__copy mb-0">
			© 2019 BEAUTY_BOUTIQE. Все права защищены.
		</p>
	</footer>

	<script src="/template/js/jquery-3.2.1.min.js"></script>
	<script src="/template/js/less.min.js"></script>
	<script src="/template/js/bootstrap.min.js"></script>
	<script src="/template/js/main.js"></script>
		
	<script>
		$(document).ready(function(){
			// ассинхронная корзина
		  $(".menu-item__basket, .plus").click(function () {
		  	var id = $(this).attr("data-id");
		  	$.post("/cart/addAjax/"+id, {}, function (data) {
		  		$(".basket a").html(data);
		  		$(".itog .p2").load(location.href + " .itog .p2");
		  	});
		  	return false;
		  });

		  $(".minus").click(function () {
		  	var id = $(this).attr("data-id");
		  	$.post("/cart/removeAjax/"+id, {}, function (data) {
		  		$(".basket a").html(data);
		  		$(".itog .p2").load(location.href + " .itog .p2");
		  	});
		  	return false;
		  	
		  });

		});
	</script>

</body>
</html>
