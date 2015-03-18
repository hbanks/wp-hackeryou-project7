$(function(){
	//your jQuery here
	
	$('a.navIcon').on('click', function (e){
		e.preventDefault();
		$('ul.menu').toggleClass('open');
	});



});

$(window).load(function() {
	var h1 = $('.postContent').eq(1).height();
	var h2 = $('.postContent').eq(2).height();
	var h3 = $('.postContent').eq(3).height();

	$('#masonry').height(h1+h2+h3 + 300);

});