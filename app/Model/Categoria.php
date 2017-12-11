<?php

class Categoria extends AppModel {

    public $name = 'Categoria';
    public $hasMany = 'Post';
    
    public $validate = array(
        'categoria' => array(
            'rule' => 'notEmpty'
    ));

}
