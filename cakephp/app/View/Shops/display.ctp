<?php
echo $this->Form->Create('add_Shops'); 
echo $this->Form->input('Nom du Magasin', array('name' => 'name'));
echo $this->Form->input('Description', array('name' => 'description'));
echo "<br />";
echo $this->Form->End('Ajouter');
echo $this->Session->flash();
?>