<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php if(isset($authuser['Group']['name']) && $authuser['Group']['name'] == 'superadmin'): ?>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i>&nbsp;<?php echo __('ACL') ?><b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Acos'), array('controller' => 'Acos', 'action' => 'index', 'admin' => true, 'plugin' => 'acl')); ?></li>
		<li><?php echo $this->Html->link(__('Aros'), array('controller' => 'Aros', 'action' => 'index', 'admin' => true, 'plugin' => 'acl')); ?></li>
		<li><?php echo $this->Html->link(__('Permissions'), array('controller' => 'Permissions', 'action' => 'index', 'admin' => true, 'plugin' => 'acl')); ?></li>
	</ul>
</li>
<?php endif; ?>