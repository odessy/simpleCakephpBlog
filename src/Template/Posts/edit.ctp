<div class='container'>
   <div class='row' style='margin-bottom:50px;'>
	<div class='body'>
	  <div >
		  <h1 style='text-align:center' >Edit Article</h1>
	  </div>

		<?php
			echo $this->Form->create($post);
			echo $this->Form->input('title');
			echo $this->Form->input('body', ['rows' => '4']);
			echo $this->Form->submit('Save Post', array('type'=>'submit',
				'class' => 'btn-info btn-large',
				'div' => array('class' => 'form-actions'),
				'label' => false
			)); 
			echo $this->Form->end();
		?>

	  </div>
   </div>
</div>