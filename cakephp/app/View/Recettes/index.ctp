<h1>Blog recettes</h1>
<p><?php echo $this->Html->link(
    'Ajouter un recette',
    array('action' => 'add')
); ?></p>
<table>
    <tr>
        <th>Nom</th>
        <th>Préparation</th>
        <th>Ingredients</th>
        <th>Options</th>
    </tr>
<?php foreach ($recettes as $recette): ?>
    <tr>
        <td>
            <?php echo $this->Html->link(
                $recette['Recette']['nom'],
                array('action' => 'view', $recette['Recette']['id'])
            ); ?></td>
        <td>
            <?php echo $recette['Recette']['description']; ?>
        </td>
        <td><?php echo $recette['Recette']['ingredients']; ?></td>
        <td><?php echo $this->Html->link(
                'Editer',
                array('action' => 'edit', $recette['Recette']['id'])
            ); ?>
            <?php echo $this->Form->postLink(
                'Supprimer',
                array('action' => 'delete', $recette['Recette']['id']),
                array('confirm' => 'Etes-vous sûr ?'));
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>