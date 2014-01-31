<?php 
echo $this->Session->flash();
?>
<table>
	<tr>ID</tr>
	<tr>Name</tr>
	<tr>Description</tr>
	<tr></tr>
	<?php 
	foreach($category as $categorys){

		?>
		<tr>
			<?php
			
			echo '<td>' .  h($categorys['Category']['id']) . '</td>';
			echo '<td>' . $this->Html->link($categorys['Category']['name'],
					array('controller' => 'category', 'action' => 'view', $categorys['Category']['id'])) . '</td>';
			echo '<td>' . h($categorys['Category']['description']) . '</td>';
			?>
		</tr>
		<?  } 
		?>
</table>