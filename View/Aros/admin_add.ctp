<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('ManagedAro'); ?>
	<fieldset>
		<legend><?php echo __d('acl', 'Add Aro'); ?></legend>
		<div class="col-md-3">
			<?php
			echo $this->Form->input('parent_id', array('empty' => __('Select One'), 'options' => $aros));
			echo $this->Form->input('model');
			echo $this->Form->input('foreign_key');
			echo $this->Form->input('alias');
			?>
		</div>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>