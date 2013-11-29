<div class="span3 well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i> '.__('List Permissions'), array('action' => 'index'), array('escape' => FALSE, 'class' => '')); ?></li>
	</ul>
</div>
<div class="span9">
<?php echo $this->Form->create('Perm');?>
	<fieldset>
		<legend><?php echo __('Edit Permission'); ?></legend>
	<?php
		echo $this->Form->input('Perm.access', array('options' => array('allow'=>'Allow', 'deny'=>'Deny')));
		echo $this->Form->input('Perm.aro_id', array('options' => $aros));
		echo $this->Form->input('Perm.aco_id', array('options' => $acos));
		echo $this->Form->input('Perm.action', array('options' => array('*'=>'All', 'create'=>'Create', 'read'=>'Read', 'update'=>'Update', 'delete'=>'Delete', )));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label'=>__('Edit'), 'class'=>'btn btn-primary'));?>
</div>