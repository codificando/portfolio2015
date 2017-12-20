<?php

class ProjetosController extends AppController {

    public $name = 'Projetos';

    public function admin_add() {
        if ($this->request->is('post')) {
            if (!empty($this->request->data['Projeto']['imagem'])):
                $nome_img = $this->request->data['Projeto']['imagem']['name'];
                $caminho_img = $this->request->data['Projeto']['imagem']['tmp_name'];
                $this->request->data['Projeto']['imagem'] = $nome_img;

            endif;
            if ($this->Projeto->save($this->request->data)) {
                $id = $this->Projeto->id;
                if ($nome_img):
                    $arquivo = WWW_ROOT . DS . 'img' . DS . 'projeto' . DS . $id . '-' . $nome_img;
                    /* Onde estou, para onde vou */
                    move_uploaded_file($caminho_img, $arquivo);
                endif;

                $this->Session->setFlash('Imagem adicionada!', 'sucesso');
                $this->redirect(array('admin' => true, 'controller' => 'projetos', 'action' => 'index'));
            }
        }
    }

    public function admin_index() {
        $this->layout = 'default';
        $options = array(
            'fields' => array('Projeto.id', 'Projeto.imagem', 'Projeto.descricao'),
            'order' => array('Projeto.id' => 'DESC'),
            'limit' => 10
        );

        $this->paginate = $options;
        $projetos = $this->paginate('Projeto');
        $this->set('projetos', $projetos);
    }

    public function admin_edit($id = null) {
        $this->Projeto->id = $id;
        $leitura = $this->Projeto->read();
        $this->set('leitura', $leitura);
        $alterou_img = false;
        if ($this->request->is('get')) {
            $this->request->data = $this->Projeto->read();
        } else {
            if ($this->request->data['Projeto']['imagem']['error'] == 0):
                $nome_img = $this->request->data['Projeto']['imagem']['name'];
                $caminho_img = $this->request->data['Projeto']['imagem']['tmp_name'];
                $this->request->data['Projeto']['imagem'] = $nome_img;
                $alterou_img = true;
            else:
                $this->request->data['Projeto']['imagem'] = $leitura['Projeto']['imagem'];
            endif;
            //debug($this->request->data);die;
            if ($this->Projeto->save($this->request->data)) {
                if ($alterou_img === true):
                    $arquivo = WWW_ROOT . DS . 'img' . DS . 'projeto' . DS . $id . '-' . $nome_img;
                    move_uploaded_file($caminho_img, $arquivo);
                endif;

                $this->Session->setFlash('Post Editado!');
                $this->redirect(array('admin' => true, 'controller' => 'projetos', 'action' => 'index'));
            }else {
                $this->Session->setFlash('Erro!');
            }
        }
    }

    public function admin_delete($id) {

        $projeto = $this->Projeto->find('first', array('conditions' => array('Projeto.id' => $id)));

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Projeto->delete($id)) {
            $nome_img = $projeto['Projeto']['imagem'];
            $arquivo = WWW_ROOT . 'img' . DS . 'projeto' . DS . $id . '-' . $nome_img;

            unlink($arquivo);
            $this->Session->setFlash('O projeto ' . $id . ' foi deletado.', 'alerta');
            $this->redirect(array('admin' => true, 'controller' => 'projetos', 'action' => 'index'));
        }
    }

   /* public function download() {
        $this->viewClass = 'Media';
        // Render app/webroot/files/example.docx
        $params = array(
            'id' => 'Curriculo_IngridMedeiros.docx',
            'name' => 'Curriculo_IngridMedeiros',
            'extension' => 'docx',
            'mimeType' => array(
                'docx' => 'application/vnd.openxmlformats-officedocument' .
                '.wordprocessingml.document'
            ),
            'path' => 'files' . DS
        );
        $this->set($params);
    }*/

}
