<?php
echo $this->Form->create('User');
echo $this->Form->input('birthdate');
echo $this->Form->input('sex');
echo $this->Form->input('mobile');
echo $this->Html->link('Previous step', 
	array('action' => 'msf_step', $params['currentStep'] -1), 
	array('class' => 'button')
);
echo $this->Form->end('Next step');
?>