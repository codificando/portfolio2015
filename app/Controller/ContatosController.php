<?php

class ContatosController extends AppController {

    public $name = 'Contatos';

    public function enviar() {
        if ($this->request->is('post')) {
         //   $captcha = $this->request->session()->read("captcha");
            //if ($captcha != $this->resquest->data['captch']) {
              //  $this->Flash->error("Captch incorreto!");
            //} else {
                if ($this->Contato->save($this->request->data)) {
                    $this->Session->setFlash('');
                    $this->redirect(array('controller' => 'pages', 'action' => 'home'));
                //}
            }
        }
    }

    public function captcha() {
        $this->render(false);

        $string = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVXYZ", 5)), 0, 5);
        //$this->request->session()->write("captcha", $string);
        $font = WWW_ROOT .'fonts'.DS. 'FreeSerif.ttf';

        $img = imagecreate(120, 30);

        $white = imagecolorallocate($img, 255, 255, 255);
        $background = imagecolorallocate($img, 233, 31, 49);
       

        imagefilledrectangle($img, 0, 0, 120, 30, $background);

        imagettftext($img, 20, 0, 10, 23, $white, $font, $string);

        imageline($img, 0, 0, 90, 25, $white);
        imageline($img, 0, 30, 60, 0, $white);

        imagepng($img);
        $this->response->type("image/png");
        imagedestroy($img);
    }

    public function admin_index() {
        $options = array(
            'fields' => array('Contato.id', 'Contato.email', 'Contato.nome', 'Contato.assunto_email', 'Contato.menssagem'),
            'order' => array('Contato.id' => 'DESC'),
            'limit' => 10
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $contatos = $this->paginate('Contato');
        // Envia os dados pra view
        $this->set('contatos', $contatos);
    }

    public function admin_view($id = null) {
        $this->layout = 'admin';
        $this->Contato->id = $id;
        $this->set('contato', $this->Contato->read());
    }

    
    
}
