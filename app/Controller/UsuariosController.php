<?php
class UsuariosController extends AppController {

    public $name = 'Usuarios';

    public function login() {

        if (!empty($this->data)):
            $conditions = array('Usuario.nome' => $this->data['Usuario']['nome']);
            $fields = array(
                'Usuario.id',
                'Usuario.nome',
                'Usuario.senha'
            );

            $someone = $this->Usuario->find('first',array($conditions, $fields));
            if (!empty($this->data['Usuario']['senha']) && ($someone['Usuario']['senha'] == $this->data['Usuario']['senha'])) {
                $this->Session->write('nome', $someone['Usuario']);
                $this->Session->setFlash('Usuario logado com sucesso!','sucesso');
                $this->redirect(array('admin'=>true,'controller' => 'posts', 'action' => 'index'));
                exit;
            } else {
                $this->Session->setFlash('Usuario ou Senha invalido!','alerta');
            }
        endif;
    }
    
    function admin_logout(){
        $this->Session->delete('nome');
        $this->Session->setFlash('Volte Sempre!','secundario');
        $this->redirect(array('admin'=>false,'controller' => 'usuarios', 'action' => 'login'));
    }
}
    ?>