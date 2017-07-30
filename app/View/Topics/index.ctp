<h1>Topics</h1>

<?php echo $this->HTML->link('Create a new topic', array('controller' => 'topics', 
	'action' => 'add')); ?>

<table>
	<tr>
		<th>Title</th>
		<th>UserID </th>
		<th>Published</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($topics as $topic): ?>
		<tr>
			<td><?php echo $this->HTML->link($topic['Topic']['title'],array('controller' => 'topics', 
			'action' => 'view', $topic['Topic']['id'])); ?></td>
			<td><?php echo $topic['Topic']['user_id']; ?></td>
			<td><?php echo $topic['Topic']['visible']; ?></td>
			<td><?php echo $topic['Topic']['created']; ?></td>
			<td><?php echo $topic['Topic']['modified']; ?></td>
			<td><?php echo $this->HTML->link('Edit',array('controller' => 'topics', 
			'action' => 'edit', $topic['Topic']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('Delete',array('controller' => 'topics', 
			'action' => 'delete', $topic['Topic']['id']), array('confirm' => 'Are you sure you want to delete this topic?')); ?></td>
		</tr>

	<?php endforeach ?>	
	<?php unset($topic); ?>
</table>