<div class="admins form">
<?php echo $this->Form->create('Admin');?>
	<fieldset>
		<legend><?php __('Edit Admin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Admin.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Admin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Admins', true), array('action' => 'index'));?></li>
	</ul>
</div>