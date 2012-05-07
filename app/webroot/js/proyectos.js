$(document).ready(function(){

  $('.seleccion').css('margin-left','127px');
  $('.item_menu').mouseleave(function () {
        $('.seleccion').animate({
        marginLeft: "127px",
      },250);
  });
  $('#mproyectos a').css('color','#fff');
  $('#mproyectos').css('font-weight','bold');

		

  	

    $("._jq-proy-btn").click(function(){
     var selected= $(this),
         navContent= selected.parents("div.#nav-project-description"),
         contFicha=$('div._jq-ficha','div.container'),
         contMap=$('div._jq-mapa','div.container'),
         contImg=$('div._jq-img','div.container');
         
        if ($(this).hasClass("selected")== false){
          $('li', navContent).removeClass('selected');
          contFicha.hide();
          contMap.hide();
          contImg.hide();
          selected.addClass("selected");
          switch (selected.attr("id")){
            
          case 'btn-ubicacion':
                      contMap.show();
                      break;
          case 'btn-ficha-tecnica':
                      contFicha.show();
                      break;
          case 'btn-imagenes':
                      contImg.show();
                      break;
          } 
        }
      
    })

})