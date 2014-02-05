<h1>Ajouter un post</h1>
<?php
echo $this->Form->create('Recette', array('action' => 'add'));
echo $this->Form->input('nom');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('ingredients');
echo $this->Form->end('Sauvegarder le post');
?>