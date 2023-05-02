$(function(){ // jQuery 준비

  $('div.container > div > div').click(function(){
		$('#imge > p > img').attr('src',
		$(this).find('img').attr('src')).attr('alt',$(this).find('img').attr('alt'));
	 });

	 var show = false;
	 $('div.container > div > div').click(function(){
			$('div.container > div > div').css({opacity:'.5',cursor:'pointer'});
			$(this).css({opacity:'1',cursor:'default'});
	 });

}); //jQuery 종료