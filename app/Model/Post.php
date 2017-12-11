<?php

class Post extends AppModel {

    public $name = 'Post';
    public $hasAndBelongsToMany = 'Tag';
    public $hasMany='Comentario';
    public $belongsTo = 'Categoria';
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
//        'imagem'=>array(
//            'rule'=>'notEmpty'
//        ),
//          'Tag' => array(
//            'multiple' => array(
//                'rule' => array('multiple', array('min' => 1)),
//                'message' => 'Você tem quem selecionar pelo menos uma Tag',
//                'required' => true,
//            )
//        )
    );

    public function beforeSave($options = array())
    {
        foreach (array_keys($this->hasAndBelongsToMany) as $model) {
            if (isset($this->data[$this->name][$model])) {
                $this->data[$model][$model] = $this->data[$this->name][$model];
                unset($this->data[$this->name][$model]);
            }
        }
        return true;
    }

   

}
