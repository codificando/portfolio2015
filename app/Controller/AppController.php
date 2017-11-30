<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $uses = array('Categoria', 'Post', 'Tag','Projeto','Contato');

    
    public function checkSession() {
        if (!$this->Session->check('nome')) {
            $this->Session->write('url_r', $this->params['url']['url']);
            $this->redirect('/usuarios/login');
            exit;
        }
    }

    public function beforeFilter() {
        header("pragma: no-cache");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

        //Security::setHash('sha1');
        if (isset($this->params['admin'])) {
            $this->checkSession();
        }
        if ($this->Session->check('nome')) {
            $this->set('logado', 1);
        } else {
            $this->set('logado', 0);
        }
    }

    public function beforeRender() {
        if (isset($this->params['prefix'])) {
            switch ($this->params['prefix']) {
                case 'admin' :
                    $this->layout = 'admin';
                    break;

                case '' :
                    $this->layout = 'default';
                    break;
            }
        }
        parent::beforeRender();
    }

}
