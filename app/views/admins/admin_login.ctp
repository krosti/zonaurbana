<div class="login">
	<?php $session->flash('auth');
	echo $form->create('Admin',array('action'=>'login'));?>
	<fieldset>
 		<legend>Ingrese su nombre de Usuario y Contraseña</legend>
		<?php
		echo $form->input('username',array('label'=>'Usuario'));
		echo $form->input('password',array('label'=>'Contraseña'));
		?>
		<div class="input_buttons_login">
			<button type="submit" name="data[Admin][login]" value="login">Login</button>
		</div>
	</fieldset>
<?php echo $form->end();?>
</div>