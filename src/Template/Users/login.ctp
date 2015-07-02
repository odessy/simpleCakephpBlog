<div class='container'>
<div class='row' style='margin-bottom:50px;'>
   <div class='span6 offset3'>
	  <div >
		  <h3 style='text-align:center'>Sign in to Your Account</h3>
	  </div>
		 
			<?php echo $this->Flash->render('auth'); ?>
			<?php 
				echo $this->Form->create('User', 
					[
						'class' => 'form-horizontal  framed',
					]
				);
			?>

			
			<?php 
				echo $this->Form->input('email'); 
			
				echo $this->Form->input('password');
			
			?>
			
			<div class='form-actions'>
			<?php
						echo $this->Form->submit('Login', array('type'=>'submit',
							'class' => 'btn-info btn-large',
							'div' => array('class' => 'form-actions'),
							'label' => false
					
						)); 
				?>
			</div>
			
			<p class='auth-option'>
			   <?php  echo $this->Html->link("Sign up", ['controller' => 'users', 'action' => 'register']) ?>
			</p>
			
			<?php echo $this->Form->end();?>
	  </div>
   </div>
</div>