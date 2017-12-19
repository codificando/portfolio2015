<?php

class PostsController extends AppController {

    public $name = 'Posts';

    public function index() {
        $this->layout = 'default';
        $options = array(
            'fields' => array('Post.id', 'Post.title', 'Post.created'),
            'order' => array('Post.id' => 'DESC'),
            'limit' => 10
        );

        $this->paginate = $options;
        $posts = $this->paginate('Post');
        $this->set('posts', $posts);
    }

    public function admin_index() {
       
        $options = array(
            'fields' => array('Post.id', 'Post.title', 'Post.created'),
            'order' => array('Post.id' => 'DESC'),
            'limit' => 10
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $posts = $this->paginate('Post');
        // Envia os dados pra view
        $this->set('posts', $posts);
    }

    public function admin_search() {
        $options = array(
            'fields' => array('Post.id', 'Post.title', 'Post.created'),
            'order' => array('Post.id' => 'DESC'),
            'conditions' => array('title like "%' . $this->request->data['Post']['buscar'] . '%"'),
            'limit' => 15
        );
        $this->paginate = $options;
        $result = $this->paginate('Post');
        $this->set('result', $result);

        /* $result = $this->Post->Find('all', array('conditions'=>array('title like "%'.$this->request->data['Post']['buscar'].'%"')));
          $this->set('result',$result); */
    }

    public function admin_view($id = null) {
        $this->layout = 'admin';
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    public function view($id = null) {
        $this->layout = 'default';
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    public function admin_add() {

        if ($this->request->is('post')) {
            /* Se estiver vazio */
            if (!empty($this->request->data['Post']['imagem'])):
                /* Pega o nome e o caminho da imagem */
                $nome_img = $this->request->data['Post']['imagem']['name'];
                $caminho_img = $this->request->data['Post']['imagem']['tmp_name'];
                $this->request->data['Post']['imagem'] = $nome_img;

            endif;
            $this->Post->validator()->remove('Tag');
//                debug($this->request->data);die;
            if ($this->Post->save($this->request->data)) {
                $id = $this->Post->id;
                if ($nome_img):
                    $arquivo = WWW_ROOT . DS . 'img' . DS . 'blog' . DS . $id . '-' . $nome_img;
                    /* Onde estou, para onde vou */
                    move_uploaded_file($caminho_img, $arquivo);
                endif;

                $this->Session->setFlash('Seu post foi salvo!', 'sucesso');
                $this->redirect(array('admin' => true, 'controller' => 'posts', 'action' => 'index'));
            }
        }

        $this->set('tags', $this->Tag->find('list', array('fields' => array('id', 'nome'))));
        $this->set('categorias', $this->Categoria->find('list', array('fields' => array('id', 'categoria'))));
    }

    public function admin_edit($id = null) {
        $this->Post->id = $id;
        $post = $this->Post->read();
        $this->set('post', $post);
        $alterou_img = false;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->request->data['Post']['imagem']['error'] == 0):
                $nome_img = $this->request->data['Post']['imagem']['name'];
                $caminho_img = $this->request->data['Post']['imagem']['tmp_name'];
                $this->request->data['Post']['imagem'] = $nome_img;
                $alterou_img = true;
            else:
                $this->request->data['Post']['imagem'] = $post['Post']['imagem'];
            endif;
            // debug($this->request->data);die;
            if ($this->Post->save($this->request->data)) {
                if ($alterou_img === true):
                    $arquivo = WWW_ROOT . DS . 'img' . DS . 'blog' . DS . $id . '-' . $nome_img;
                    move_uploaded_file($caminho_img, $arquivo);
                endif;

                $this->Session->setFlash('Post Editado!', 'sucesso');
                $this->redirect(array('admin' => true, 'controller' => 'posts', 'action' => 'index'));
            }else {
                $this->Session->setFlash('Erro!');
            }
        }
         $this->set('tags', $this->Tag->find('list', array('fields' => array('id', 'nome'))));
         $this->set('categorias', $this->Categoria->find('list', array('fields' => array('id', 'categoria'))));

    }

    public function admin_delete($id) {

        $post = $this->Post->find('first', array('conditions' => array('Post.id' => $id)));

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $nome_img = $post['Post']['imagem'];
            $arquivo = WWW_ROOT . 'img' . DS . 'blog' . DS . $id . '-' . $nome_img;

            unlink($arquivo);
            $this->Session->setFlash('O post ' . $id . ' foi deletado.', 'alerta');
            $this->redirect(array('admin' => true, 'controller' => 'posts', 'action' => 'index'));
        }
    }

}
