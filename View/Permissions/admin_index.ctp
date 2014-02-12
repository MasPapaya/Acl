<div class="allowedR_Types">
	<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus-sign icon-white"></i>&nbsp;' . __d('acl','New Permission'), array('action' => 'add', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>
	<div>
		<h2><?php echo __d('acl','Permissions'); ?></h2>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('aro_id'); ?></th>
				<th><?php echo $this->Paginator->sort('aco_id'); ?></th>
				<th><?php echo __('C / R / U / D'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($perms as $perm): ?>
				<tr>
					<td><?php echo h($perm['Perm']['id']); ?>&nbsp;</td>
					<td><?php echo h($perm['Perm']['aro_id']); ?>&nbsp;</td>
					<td><?php echo h($perm['Perm']['aco_id']); ?>&nbsp;</td>
					<td><?php echo h($perm['Perm']['_create']); ?> / <?php echo h($perm['Perm']['_read']); ?> / <?php echo h($perm['Perm']['_update']); ?> / <?php echo h($perm['Perm']['_delete']); ?>&nbsp;</td>
					<td class="actions">
						<div class="btn-group">
							<?php echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', array('action' => 'edit', $perm['Perm']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>
							<?php echo $this->Form->postLink('<i class="glyphicon glyphicon-trash icon-white"></i>', array('action' => 'delete', $perm['Perm']['id']), array('class' => 'btn btn-danger', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $perm['Perm']['id'])); ?>
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
