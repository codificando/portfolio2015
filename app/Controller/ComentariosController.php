<?php

class ComentariosController extends AppController {

    public $name = 'Comentarios';

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Comentario->save($this->request->data)) {
                $this->Session->setFlash('Comentário Salvo!');
                $this->redirect(array(
                    'controller' => 'posts',
                    'action' => 'view',
                    $this->request->data['Comentario']['post_id']
                ));
            }
        }
    }

    public function admin_delete($id,$v) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Comentario->delete($id)) {
            $this->Session->setFlash('Comentário deletado!','sucesso');
            $this->redirect(array('admin' => true, 'controller' => 'posts', 'action' => 'view',$v));
        }
    }

}
