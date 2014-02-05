<h1>Editer le post</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('nom');
	echo $this->Form->input('description', array('rows' => '3'));
	echo $this->Form->input('ingredients');
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save Post');
?>