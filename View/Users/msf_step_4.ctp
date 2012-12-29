<?php
echo $this->Form->create('User');
echo $this->Form->input('about');
echo $this->Form->input('interests');
echo $this->Form->input('job');
echo $this->Html->link('Previous step',
	array('action' => 'msf_step', $params['currentStep'] -1),
	array('class' => 'button')
);
echo $this->Form->end('Save');
?>