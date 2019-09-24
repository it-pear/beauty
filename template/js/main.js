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

	

	// плюс минус товар
	$('.minus').click(function () {
      var $input = $(this).parent().find('input');
      var count = parseInt($input.val()) - 1;
      count = count < 1 ? 1 : count;
      $input.val(count);
      $input.change();

      var $price = $(this).parent().parent().find(".singleInfo__price");
      var $price1 = $(this).parent().parent().find(".single__price");
			
			if(parseInt($price.val()) <= parseInt($price1.val()) ){
				return false;
			}else{
				return $price.val(parseInt($price.val()) - parseInt($price1.val()) );
			}
      $price.change();

      return false;
  });
  $('.plus').click(function () {
      var $input = $(this).parent().find('input');
      $input.val(parseInt($input.val()) + 1);
      $input.change();

      var $price = $(this).parent().parent().find(".singleInfo__price");
      var $price1 = $(this).parent().parent().find(".single__price");
			$price.val(parseInt($price.val()) + parseInt($price1.val()) );
      $price.change();

      return false;
  });


  


});
