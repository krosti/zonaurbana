<div class="admins view">
<h2><?php  __('Admin');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $admin['Admin']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $admin['Admin']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $admin['Admin']['password']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admin', true), array('action' => 'edit', $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Admin', true), array('action' => 'delete', $admin['Admin']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $admin['Admin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admins', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admin', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
