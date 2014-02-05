<?php
class Recette extends AppModel {
	public $validate = array(
        'nom' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        ),
        'ingredients' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>