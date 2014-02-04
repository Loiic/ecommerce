<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Category</th>
	</tr>
	
	<?php foreach($category as $categorys) { ?>

		<?php foreach ($categorys['Item'] as $item): ?>
		<tr>
		<td><?php echo $item['id'] ?></td>
		<td><?php echo $item['name'] ?></td>
		<td><?php echo $item['price'] ?></td>
		<td><?php echo $categorys['Category']['name'] ?></td>
		</tr>
	<?php endforeach ?>

<?php
} 
?>

</table>