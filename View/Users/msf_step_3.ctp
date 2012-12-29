<?php
echo $this->Form->create('User');
echo $this->Form->input('city');
echo $this->Form->input('zip');
echo $this->Html->link('Previous step', 
	array('action' => 'msf_step', $params['currentStep'] -1), 
	array('class' => 'button')
);
echo $this->Form->end('Next step');
?>