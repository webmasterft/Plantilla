$(function() {
	var navbar = $('.navbar'),
		body = $('body');
		windowWidth = $(window).width();
	$('#volver').on('click', function(){
		body.animate({scrollTop:0}, '500');
	});


	var pares = $('.nav li a:odd'),
	impares = $('.nav li a:even'),
	botones = $('.nav li'),
	navBarCollapse = $('.navbar-collapse');

	pares.each(function(){
		$(this).addClass('pares');
	});

	impares.each(function(){
		$(this).addClass('impares');
	});


	pares.hover(function(){
		$(this).addClass('bckPares');
	}, function(){
		pares.removeClass(' bckImpares');
	});

	impares.hover(function(){
		$(this).addClass('bckPares');
	}, function(){
		impares.removeClass(' bckImpares');
	});
	var pathname = window.location.pathname;
	pathname = pathname.split('/').pop();
	botones.find('a[href^="'+pathname+'"]').addClass('btnActivo');


	$('#space').parents('#contSlider').addClass('sinFoto');


});
