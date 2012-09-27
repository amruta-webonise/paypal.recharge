<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 27/9/12
 * Time: 3:35 PM
 * To change this template use File | Settings | File Templates.
 */
class UsersController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index()
    {
        $this->set('users', $this->User->find('all'));
        // $this->set('posts', $this->Post->find('all'));
    }

    public function view()
    {
        echo 'hi';

    }


    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->saveAssociated($this->request->data, array('deep' => true))) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }


    public function beforeFilter() {
        $this->Auth->allow('add');
    }


    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>