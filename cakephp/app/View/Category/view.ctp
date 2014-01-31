<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Category</th>
	</tr>
	<tr>
		<?php foreach($category as $categorys) {
			echo '<td>' . h($category['Category']['Item']['id']) . '</td>' ;
			echo '<td>' . h($category)['Category']['Item']['name'] . '</td>';
		} ?>
	</tr>
</table>