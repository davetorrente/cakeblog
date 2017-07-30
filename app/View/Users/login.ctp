<h1>Log in</h1>
<?php echo $this->Flash->render('auth'); ?>
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Login');


?>