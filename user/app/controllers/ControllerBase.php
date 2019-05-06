<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public $user;

    public function initialize()
    {
        // init functions
       $this->auth();
      $this->user = User::findFirstByUser($this->session->get('user'));

    }

    public function auth()
    {
        if (!$this->session->has('user')){
            return $this->response->redirect('auth/login');
        }
    }

}
