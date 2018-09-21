$(function() {

	$(".nav ul li a:last").css("border","none");
	$('nav#mmenu').mmenu({
		extensions	: [ 'effect-slide-menu', 'pageshadow' ],
		counters	: false,
		navbar 		: {
			title		: '菜单',
		},
		navbars		: [
			 {
				position	: 'top',
				content		: [
					'prev',
					'title',
					'close'
				]
			}, {
				position	: 'bottom',
				content		: [
					''
				]
			} 
		]
	});
	/*index*/
	
    $('.banner').slick({
		dots: true,
        autoplay:true,
        arrows:false, 
        autoplaySpeed:3000
    });

	$(".links").hover(function(){
		$(".links ul").slideDown(500)
			
	},
	function(){
			$(".links ul").slideUp(500)
	})
			
});

  