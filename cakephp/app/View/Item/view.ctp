<table>
	<tr>
		<th>ID</th>
		<th>Id_category</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price :</th>
		<th>Stock</th>
	</tr>
	<tr>
		<h1><td><?php echo h($items['Item']['id']); ?></h1></td>

		<td><p><?php echo $items['Item']['id_category']; ?></p></td>

		<td><p><?php echo h($items['Item']['name']); ?></p></td>

		<td><p><?php echo h($items['Item']['description']); ?></p></td>

		<td><p><?php echo h($items['Item']['price']); ?></p></td>

		<td><p><?php echo h($items['Item']['stock']); ?></p></td>
	</tr>
</table>