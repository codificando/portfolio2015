<?php

class Tag extends AppModel {
    public $name = 'Tag';

    public $hasAndBelongsToMany = 'Post';

    public $validate = array(
    'nome' => array(
    'rule' => 'notEmpty'
    ));
}
