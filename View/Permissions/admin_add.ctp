<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="icon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('Perm'); ?>
	<fieldset>
		<legend><?php echo __('New Permission'); ?></legend>
		<?php
		echo $this->Form->input('Perm.access', array('options' => array('allow' => 'Allow', 'deny' => 'Deny')));
		echo $this->Form->input('Perm.aro_id', array('options' => $aros));
		echo $this->Form->input('Perm.aco_id', array('options' => $acos));
		echo $this->Form->input('Perm.action', array('options' => array('*' => 'All', 'create' => 'Create', 'read' => 'Read', 'update' => 'Update', 'delete' => 'Delete',)));
		?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>