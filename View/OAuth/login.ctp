<?php

	echo $this->Session->flash('auth');

	echo $this->Form->create('User');

	foreach ($OAuthParams as $key => $value) {
		echo $this->Form->hidden(h($key), array('value' => h($value)));
	}

?>

Please login

<?php
	echo $this->Form->input('email'); // if Users.login_id is Auth data, change to 'login_id'
	echo $this->Form->input('password'); // if Users.login_pw is Auth data, change to 'login_pw' (hased in database)

	echo $this->Form->end('submit');

?>
