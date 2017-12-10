<?php
class Contato extends AppModel {
    public $name = 'Contato';
    
    public  $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'notEmpty'
        ),
        'assunto_email' => array(
            'rule' => 'notEmpty'
        ),
        'menssagem'=> array(
            'rule' => 'notEmpty'
        )
    );
}