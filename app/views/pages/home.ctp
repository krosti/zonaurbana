<?php
	echo $this->Html->css(array('home','slider_home'));
	echo $javascript->link(array('jquery.nivo.slider.pack'));/*<!--'cufon-yui','Gill_Sans_MT_400.font',-->*/
?>
<script type="text/javascript">
$(document).ready(function() {
	$('.seleccion').css('margin-left','0px');
	$('.item_menu').mouseleave(function () {
	      $('.seleccion').stop().animate({
		    marginLeft: "0px",
		  },250);
	});
	$('#mempresa a').css('color','#fff');
	$('#mempresa').css('font-weight','bold');
});
</script>
<div id="home">
	<div id="wrapper">
			        <div class="slider-wrapper theme-default">
			            <div id="slider" class="nivoSlider">
						    <?php foreach ($psliders as $pslider): ?>
					    		<?php echo $html->image('slider/'.$pslider['PSlider']['imagen'],array('border'=>'none','width'=>'1000px','height'=>'290px'));?> 
					   		<?php endforeach; ?>
			            </div>
			        </div>
			    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
			    </script>
	</div>
	<div id="about">
		<div class="tittle">Sobre la empresa</div>
		<div class="text"><p><b>Zona Urbana S.A.</b> es una empresa compuesta por diferentes <b>Unidades de Negocios</b> que pueden trabajar en forma integral o independiente, adapt&aacute;ndose a las necesidades de cada emprendimiento.</p>
						  <p>Como empresa integral llevamos adelante cada Desarrollo desde su <b>gestaci&oacute;n, proyecto, construcci&oacute;n, gerenciamiento y coordinaci&oacute;n de la comercializaci&oacute;n,</b> abarcando todos los aspectos que requiere cada etapa.</p>
						  <p>Como empresa modular, prestamos nuestros servicios en las diversas &aacute;reas en forma independiente, como <b>Desarrolladora Inmobiliaria,</b> o como estudio de Arquitectura y Constructora. Esta organizaci&oacute;n nos permite trabajar en forma din&aacute;mica y flexible para atender en forma r&aacute;pida y eficiente cada emprendimiento que llevamos adelante.</p>
		</div>
	</div>
	<div id="verticalblock"></div>
	<div id="history">
		<p><b>Zona Urbana S.A.</b> nace como un grupo interdisciplinario de jóvenes profesionales que desarrolla y asesora proyectos inmobiliarios destinados a satisfacer las necesidades de inversi&oacute;n de clientes que buscan alternativas seguras y rentables.</p>
		<p>Trabajamos aplicando un acercamiento din&aacute;mico, profesional, &eacute;tico e innovador desde un punto de vista humano a todo tipo de desafio, manteniendo un di&aacute;logo constante con el cliente y colaborando con los agentes profesionales necesarios para asegurar el &eacute;xito de todo proyecto.</p>
	</div>
	<div id="littleguys">
		<div id="guystittle">Buscamos sobre todo agregar valor a los intereses de nuestros clientes.</div>
	</div>
	<div id="horizontalblock"><div class="tittle">Misi&oacute;n y Visi&oacute;n</div></div>
	<div id="myvdescription">
		<p>Nuestra misi&oacute; es simple y directa. Comienza por un an&aacute;lisis cr&iacute;tico y constructivo que nos permita ayudar a nuestros clientes a determinar las oportunidades de innovaci&oacute;n y crecimiento. Buscamos siempre descubrir nuevas <b>necesidades y tendencias.</b></p>
		<p>En <b>Zona Urbana</b> pensamos que todo es posible. Trabajamos convencidos de que no hay nada mejor que la oportunidad de dejar legado de buenos proyectos. Nuestra misi&oacute;n es <b>usar nuestra experiencia para implementar conceptos innovadores en el mercado.</b></p>
		<p>Buscando <b>la mejor y mayor rentabilidad.</b> Esto significa para nosotros el poder lograr con &eacute;xito la puesta en valor de una inversi&oacute;n inteligente a travez de un proyecto realizado con seriedad, profesionalismo y responsabilidad.</p>
		<div id="greenbar"></div>
		<div id="greenbar2"></div>
		<div id="greenbar3"></div>
	</div>
	<div id="grafics">
		<div id="grafictext">
			<div class="greentittle">Oportunidad</div>
			<p id="sub">gesti&oacute;n inmobiliaria.</p><p>-RETORNO SOBRE INVERSI&OACUTE;N<br>-USO INTELIGENTE DE LA PROPIEDAD</p>
		</div>
		<div id="grafictext2">
			<div class="greentittle">Proceso</div>
			<p>realidad + factibilidad + oportunidad</p>
		</div>
		<div id="grafictext3">
			<div class="greentittle">Experiencia</div>
		</div>
		<div id="grafictext4">
			<div class="greentittle">Innovaci&oacute;n</div>
			<p>Agregar valor econ&oacute;mico + una arquitectura &uacute;nica</p>
		</div>
	</div>
	<div id="foot">
	</div>
</div>
