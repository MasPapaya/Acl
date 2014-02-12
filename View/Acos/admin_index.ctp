<div class="acos cru">
	<div class="btn-group">
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign icon-white"></i> ' . __d('acl', 'New Aco'), array('action' => 'add'), array('escape' => FALSE, 'class' => 'btn btn-primary')); ?>
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-refresh icon-white"></i> ' . __d('acl', 'Repair Aco Tree'), array('action' => 'repair'), array('escape' => FALSE, 'class' => 'btn btn-primary')); ?>	
	</div>
	<div>
		<h2><?php echo __d('acl', 'Acos'); ?></h2>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
				<th><?php echo $this->Paginator->sort('model'); ?></th>
				<th><?php echo $this->Paginator->sort('alias'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($acos as $aco): ?>
				<tr>
					<td><?php echo h($aco['ManagedAco']['id']); ?>&nbsp;</td>
					<td><?php echo h($aco['ManagedAco']['parent_id']); ?>&nbsp;</td>
					<td><?php echo h($aco['ManagedAco']['model']); ?>&nbsp;</td>
					<td><?php echo h($aco['ManagedAco']['alias']); ?>&nbsp;</td>
					<td class="actions">
						<div class="btn-group">
							<?php echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('action' => 'edit', $aco['ManagedAco']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>
							<?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i>', array('action' => 'remove', $aco['ManagedAco']['id']), array('class' => 'btn btn-danger', 'escape' => FALSE), __('Are you sure you want to remove # %s from tree?', $aco['ManagedAco']['id'])); ?>							
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<div class="pagination-centered">
			<ul class="pagination">
				<?php echo $this->Paginator->prev('<', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
				<?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
				<?php echo $this->Paginator->next('>', array('tag' => 'li',), NULL, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'disabled')); ?>
			</ul>
		</div>
	</div>
</div>
