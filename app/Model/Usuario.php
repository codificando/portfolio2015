<?php

class Usuario extends AppModel {

    public $name = 'Usuario';
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        ),
        'senha' => array(
            'rule' => 'notEmpty'
    ));

}

?>