jQuery(document).ready(function(){
	jQuery('.search-button').click(function(){
		jQuery('.search-2 form').slideToggle(250);
	});
	jQuery('.burger').click(function(){
		jQuery('nav').slideToggle(250);
	});
	jQuery('.nav__close').click(function(){
		jQuery('nav').slideToggle(250);
	});

	jQuery('.aside__title').click(function(){
		jQuery(this).next('.aside__plus').toggleClass('aside__minus');
		jQuery(this).parent().find('ul').slideToggle(250);
	});



	// подсчет всех товаров на странцие
	$('.menu-item-price').each(function() {
    var $quantity = $(this).find(".kolvo_tovar").val();
		var $price = $(this).find(".single__price").val();
	  var $result = $quantity * $price;
	  $(this).find('.singleInfo__price').val($result);
	});

	// плюс минус товар
	$('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
  });


  


});
