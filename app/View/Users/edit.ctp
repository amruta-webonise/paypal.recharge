<?php
echo $this->Form->create('User', array('action' => 'edit'));

echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->input('Profile.name');
echo $this->Form->input('Profile.email');
echo $this->Form->end('Save');
?>