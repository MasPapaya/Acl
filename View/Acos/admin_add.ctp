<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="icon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('ManagedAco'); ?>
	<fieldset>
		<legend><?php echo __d('acl','Add Aco'); ?></legend>
		<?php
		echo $this->Form->input('ManagedAco.parent_id', array('empty' => __('(NULL)'), 'options' => $acos));
		echo $this->Form->input('ManagedAco.model');
		echo $this->Form->input('ManagedAco.foreing_key');
		echo $this->Form->input('ManagedAco.alias');
		?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>