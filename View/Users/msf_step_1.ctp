<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->end('Next step');
?>