<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
    <?php echo $html->charset();?>
	<title>
		<?php __('Zona Urbana '); ?>&bull; <?php __(' Administrador'); ?>		
	</title>
	<?php
		header("Content-Type: text/html; charset=utf-8");
		header("Content-Type: text/html; charset=ISO-8859-1");		
		echo $this->Html->meta('icon');
		echo $this->Html->css('backend');
		echo $this->Html->script(array('jquery.1.6'));	
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="wrapper">			
			<?php if ($session->read('Admin')): ?>                
                   <div id="SessionDetails">
                   <p class="textSession"><strong>Usuario Conectado: </strong> <?php echo $session->read('Admin.username');?></p>
				   <?php
					echo $this->Html->link(
							$this->Html->image("admin/icono_warning.png",array("class"=>"closeImg")).' Cerrar Sesi&oacute;n',
							"/admin/admins/logout",
							array($session->read('Admin.username').'Desea cerrar la sesión y salir del administrador?',"escape"=>false)
							);
					?>
                    </div>
                <?php endif; ?>
		
		<div id="sitename">
        	<h1 class="title"><?php echo $this->Html->image("admin/Tools.png");?>Zona Urbana | Administrador</h1>
			<?php if ($session->read('Admin')){ echo '<h6>&nbsp;Acceso Restringido</h6>';} ?>			
		</div>
		
		<div id="header">			
			<div class="tagline"><?php echo $this->Session->flash(); ?></div>
		</div>
		
		<div id="body" class="clear" >
               	<div id="content" class="column-right" >
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
                </div>
         </div>
		
		<div class="clear" id="footer">
                    
		</div>
	</div>
	
	<script>
	$("img.imageHome").hover(function(){$(this).fadeOut(100);$(this).fadeIn(200);});
	</script>
</body>
</html>