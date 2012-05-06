$(document).ready(function() {
	$('#mproyectos').hover(function () {
		  $('.seleccion').stop();
	      $('.seleccion').animate({
		    marginLeft: "127px",
		  },250);
	});
	$('#mempresa').hover(function () {
		  $('.seleccion').stop();
	      $('.seleccion').animate({
		    marginLeft: "0px",
		  },250);
	});
	$('#mservicios').hover(function () {
		  $('.seleccion').stop();
	      $('.seleccion').animate({
		    marginLeft: "254px",
		  },250);
	});
	$('#mcontacto').hover(function () {
		  $('.seleccion').stop();
	      $('.seleccion').animate({
		    marginLeft: "511px",
		  },250);
	});

	/**
	*	para servicios
	*/
	$('#mservicios').hover(function () {
		  $('.seleccion2').stop();
	      $('.seleccion2').animate({
		    marginLeft: "7px",
		  },250);
	});
	$('#mdesarrolladora').hover(function () {
		  $('.seleccion2').stop();
	      $('.seleccion2').animate({
		    marginLeft: "134px",
		  },250);
	});
	$('#mconstructora').hover(function () {
		  $('.seleccion2').stop();
	      $('.seleccion2').animate({
		    marginLeft: "261px",
		  },250);
	});
	$('#mareap').hover(function () {
		  $('.seleccion2').stop();
	      $('.seleccion2').animate({
		    marginLeft: "387px",
		  },250);
	});
	/*$('.item_menu').mouseleave(function () {
		  $('.seleccion').stop();
	      $('.seleccion').animate({
		    marginLeft: "0px",
		  },250);
	});*/

	/*
    $('#mempresa').bind({
	  mouseenter: function() {
	      fuente_hover('0px', $(this));
	  },
	  mouseleave: function() {
	    fuente_normal($(this));
	  }
	});

    $('#mproyectos').bind({
	  mouseenter: function() {
	      fuente_hover('127px', $(this));
	  },
	  mouseleave: function() {
	    fuente_normal($(this));
	  }
	});

	$('#mservicios').bind({
	  mouseenter: function() {
	      fuente_hover('254px', $(this));
	  },
	  mouseleave: function() {
	    fuente_normal($(this));
	  }
	});
	*/
	function fuente_hover (item) /*(margen, item)*/
	{
		/*if ($('.seleccion').css('margin-left') != margen)
		{
			$('.seleccion').animate({opacity: 0}, 250);
			$('.seleccion').animate({ marginLeft: margen }, 0);
			$('.seleccion').animate({opacity: 1}, 250);
		}*/
		$(item).css('color','#fff');
		$(item).css('font-weight','bold');
	}
	function fuente_normal (item)
	{
		$(item).css('color','#b3b38c');
		$(item).css('font-weight','500');
	}
});