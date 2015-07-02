<!DOCTYPE html>
<html>
<head>
	<!--<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>-->
	<?php echo $this->Html->charset(); ?>
	<title> </title>
	<?php
		echo $this->Html->meta('icon');
	?>
	<?php
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('default');
		echo $this->Html->script('jquery-1.7.1');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('bootstrap');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>
		<!--<header class="header">
			<span class="header-logo"></span>
			<div class="header-actions">
				<?php 
					if(!$Auth->user()){
						echo $this->Html->link('Register', array('controller'=>'users', 'action'=>'register'), array('class'=>'user-link auth'));
						echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login'), array('class'=>'user-link'));
					}
					else
					{
						echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'), array('class'=>'user-link'));
					}
				?>
			</div>
		</header>-->
		
		
      <div class='navbar'>
         <div class='navbar-inner-vaya'>
            <div class='container'>
				<div class='logo'>
				   BLOG
				</div>
               <div class='main-nav'>
				  <div class="pull-left">

				  </div>
                  <ul class='nav pull-right'>
                     <li><a href="/" class="user-link">Home</a></li>
                     <li class='divider-vertical'></li>
                     <li><?php echo $this->Html->link('Post', array('controller'=>'posts', 'action'=>'index'), array('class'=>'user-link')); ?></li>
                     <li class='divider-vertical'></li>
				  <?php if(!$Auth->user()) { ?>					 
                     <li><?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login'), array('class'=>'user-link auth')); ?></li>
                     <li class='divider-vertical'></li>
                     <li><?php echo $this->Html->link('Register', array('controller'=>'users', 'action'=>'register'), array('class'=>'user-link auth')); ?></li>
					 <li class='divider-vertical'></li>
				  <?php } else { ?>
                     <li><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'), array('class'=>'user-link')); ?></li>
				  <?php } ?>
                  </ul>
               </div>
            </div>
         </div>
		 <div id='flash-notices'>
			<?php echo $this->Flash->render(); ?>
		 </div>
      </div>  
    <div class='container container-content'>
		  <div id='content'>
				
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php //echo $this->Html->link(
					// $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					// 'http://www.cakephp.org/',
					// array('target' => '_blank', 'escape' => false)
				// );
			?>
		</div>
	</div>
	
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
