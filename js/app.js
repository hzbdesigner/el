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
	

	
	$("#foo2").carouFredSel({
		items   :3,
	    circular: false,
	    infinite: false,
	    auto    : false,
	    prev    : {
	        button  : "#foo2_prev",
	        key     : "left"
	    },
	    next    : {
	        button  : "#foo2_next",
	        key     : "right"
	    },
	    pagination  : "#foo2_pag"
	});

});
