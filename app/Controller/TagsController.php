<?php

class TagsController extends AppController {

    public $name = 'Tags';

    public function admin_add() {
        if ($this->request->is('post')) {
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Tag criada!');
                $this->redirect(array('controller'=>'posts','action' => 'admin_index'));
            }
        }
    }
    
   

}
