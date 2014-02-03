<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Category</th>
	</tr>
	
		<?php foreach($category as $categorys) {
			?><tr><pre><?php
			//var_dump($categorys);
			echo $categorys['Item']['name'];
			// echo '<td>' . h($categorys['Category']['id']) . '</td>' ;
			// echo '<td>' . h($categorys['Item']['name']) . '</td>' ;
			// echo '<td>' . h($categorys['Item']['price']) . '</td>' ;
			// echo '<td>' . h($categorys)['Category']['name'] . '</td>';
		?></pre></tr><?php
		} ?>
	
</table>