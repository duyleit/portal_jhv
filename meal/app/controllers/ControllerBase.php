<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {

    }
    public function auth()
    {
        if (!$this->session->has('user')){
            return $this->response->redirect('../user/auth/login');
        }
    }
}
