<?php 
echo $this->Session->Flash();
echo $this->Html->link('Add' , array('action' => 'add'));
?>
<table>
	<tr>
		<th>Name</th>
		<th>Actions</th>
	</tr>
	<?php
	foreach ($items as $item) {
		?>
		<tr>
			<td>
				<?php
				echo $this->Html->link($item['Item']['name'],
					array('controller' => 'item', 'action' => 'view', $item['Item']['id']));
					?>
				</td>
				<td>
					<?php
					echo $this->Html->link('Edit',
						array('controller' => 'item', 'action' => 'edit', $item['Item']['id']));
					 echo $this->Form->postLink(
						'Supprimer',
						array('action' => 'delete', $item['Item']['id']),
						array('confirm' => 'Etes-vous sûr ?'));
						

						?>
					</td>
				</tr>
				<?php
			} 
			?>
		</table>