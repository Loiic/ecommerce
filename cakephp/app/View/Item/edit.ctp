<h1>Edit Item</h1>
<?php
echo $this->Form->create('Item');
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->input('stock');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>