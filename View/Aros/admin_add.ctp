<div class="span3 well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i> '.__('List Aros'), array('action' => 'index'), array('escape' => FALSE, 'class' => '')); ?></li>
	</ul>
</div>
<div class="span9">
<?php echo $this->Form->create('ManagedAro');?>
	<fieldset>
		<legend><?php echo __('Add Aro'); ?></legend>
	<?php
		echo $this->Form->input('parent_id', array('empty'=>__('Select One'), 'options' => $aros));
		echo $this->Form->input('model');
		echo $this->Form->input('foreign_key');
		echo $this->Form->input('alias');
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label'=>__('Save'), 'class'=>'btn btn-primary'));?>
</div>