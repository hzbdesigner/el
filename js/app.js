$(function(){

	//navbar
	$(".nav-cell").hover(
	function(){	
		$(this).find(".dropdowns").slideDown(500);
	},
	function(){	
		$(this).find(".dropdowns").slideUp(500);
	}
	);

	//index slider
	 $(".rslides").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed:1200,
        namespace: "",
      });
	
	//product slider
	Slider.init();

	//products js
	$('#da-thumbs > li').hoverdir();
	
	$('#slides').slides({
		preload: true,
		generateNextPrev: true
	});
	
	
});
