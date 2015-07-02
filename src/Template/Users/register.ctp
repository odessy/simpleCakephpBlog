<div class='container'>

<div class='row' style='margin-bottom:50px;'>
   <div class='span6 offset3'>
	<div>
	   <h3 style='text-align:center'>
		  Create an Account
	   </h3>
	</div>

		<?php echo $this->Form->create('User', ['class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'id'=>'update_user',]) ?>
						
						
		<?php  
			
			$template = ['templates' => [
														'formGroup' => '{{label}}<span class="required-marker">*</span>{{input}}',
														'error' => '<div class="error">{{content}}</div>'
													]];
			
			echo $this->Form->input('first_name',$template
			); 
			
			echo $this->Form->input('last_name',$template
			); 
			
			echo $this->Form->input('email',$template
			); 
			
			echo $this->Form->input('password',$template
			); 

			echo $this->Form->input('confirm_password', ['type' => 'password', 
													'templates' => [
														'formGroup' => '{{label}}<span class="required-marker">*</span>{{input}}',
														'error' => '<div class="error">{{content}}</div>'
													]]
			); 			
			
		?>
		
		 <div class='form-actions'>
			<button class="btn btn-info"><i class="icon-white icon-ok"></i> Register</button>
		 </div>
		 <p class='auth-option'>
			Already have an account?
			<a href="/users/login" id="login-instead">Log in here.</a>
		 </p>
	  </form>
   </div>
</div>
</div>
