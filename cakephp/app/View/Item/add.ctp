<div  class="container well">
	<h1>Add Item</h1>
	<div class="col-md-12">
		<?php
		echo $this->Form->create('Item' , array(
			'type' => 'file'));
		?>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<?php echo $this->Form->input('name' , array('type' => 'text' , 'class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('price' , array('class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stock' , array('class' => 'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('category_id' , array(
						'type' => 'Select',
						'options' => array(1,2,3,4),
						'empty' => 'Categorie',
					)); ?>
				</div>
				<div class="form-group">
					<?php 
						echo $this->Form->file('Item.img');
					 ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo $this->Form->input('description', array('rows' => '8' , 'class' => 'form-control')); ?>
					<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
				</div>
				<div class="form-group col-md-offset-10">
					<?php echo $this->Form->button('Save Item' , array('class' => 'btn btn-lg btn-success')); ?>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>

	</div>
	<a href="/item" class='btn btn-block btn-info'>Back</a>
