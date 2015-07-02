<div class='container'>
   <div class='row' style='margin-bottom:50px;'>
	<div class="body">
	  <div >
		  <h1> <?php echo $post->title ?></h1>
	  </div>
		<?php echo $post->created ?>
		<p>
			<?php echo $post->body ?>
		</p>
		<?php echo $this->Form->postLink(
			'Delete',
			['action' => 'delete', $post->id],
			['confirm' => 'Are you sure?'])
		?>
		<?php echo $this->Html->link('Edit', ['action' => 'edit', $post->id]) ?>
		
	  </div>
   </div>
</div>