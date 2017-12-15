<?php

class CategoriasController extends AppController {
    public $name = 'Categorias';
    
  public function admin_add() {
        if ($this->request->is('post')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash('Categoria Add!');
                $this->redirect(array('controller'=>'posts','action' => 'index'));
            }
        }
    }
    
}