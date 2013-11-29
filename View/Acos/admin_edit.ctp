<div class="span3 well">
	<ul class="nav nav-list">
		<li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link('<i class="icon-plus-sign"></i> '.__('List Acos'), array('action' => 'index'), array('escape' => FALSE, 'class' => '')); ?></li>
	</ul>
</div>
<div class="span9">
<?php echo $this->Form->create('ManagedAco');?>
	<fieldset>
		<legend><?php echo __('Edit Aco'); ?></legend>
	<?php
		echo $this->Form->input('ManagedAco.id', array('type' => 'hidden'));
		echo $this->Form->input('ManagedAco.parent_id', array('empty'=>__('(NULL)'), 'options' => $acos));
		echo $this->Form->input('ManagedAco.model');
		echo $this->Form->input('ManagedAco.foreing_key');
		echo $this->Form->input('ManagedAco.alias');
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label'=>__('Edit'), 'class'=>'btn btn-primary'));?>
</div>