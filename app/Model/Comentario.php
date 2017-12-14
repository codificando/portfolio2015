<?php

class Comentario extends AppModel {
    
    public $name = 'Comentario';
    public $belongsTo = 'Post';
   
}