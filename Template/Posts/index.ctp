<div class='container'>
   <div class='row' style='margin-bottom:50px;'>
	<div class="body">
	  <div >
		  <h1>Blog posts</h1>
	  </div>
		 
		
		<p><?= $this->Html->link("Add Post", ['action' => 'create']) ?></p>
		<table>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Action</th>
			</tr>

		<!-- Here's where we iterate through our $posts query object, printing out post info -->

		<?php foreach ($posts as $post): ?>
			<tr>
				<td><?php echo $post->id ?></td>
				<td>
					<?php echo $this->Html->link($post->title, ['action' => 'view', $post->id]) ?>
				</td>
				<td>
					<?php echo $this->Form->postLink(
						'Delete',
						['action' => 'delete', $post->id],
						['confirm' => 'Are you sure?'])
					?>
					<?php echo $this->Html->link('Edit', ['action' => 'edit', $post->id]) ?>
				</td>
			</tr>
		<?php endforeach; ?>

		</table>
		
	  </div>
   </div>
</div>