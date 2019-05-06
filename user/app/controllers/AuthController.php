<?php

use Phalcon\Mvc\Controller;

class AuthController extends Controller
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    public function loginAction()
    {
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                // The token is OK
               $user_code    = strtoupper($this->request->getPost('user'));
               $pass = $this->request->getPost('pass');

                $user = User::findFirstByUser($user_code);
               if ($user) {

   //                   if ($pass == $user->pass && $user->status) {
                   if ($this->security->checkHash($pass, $user->pass) && $user->status) {
//                        // The password is valid
                        $this->session->set('user-id',$user->id);
                        $this->session->set('user',$user->user);
                        $this->session->set('user-fullname',$user->fullname);
                        $this->session->set('user-com_code',$user->com_code);
                        $this->session->set('user-role_code',$user->role_code);
                        $this->session->set('user-dept_code',$user->dept_code); // add Duy 6/04/2019
                    }
                    else{
                        $this->flash->error("Wrong user or password!");
                    }
                } else {
                    $this->security->hash(rand());
                    $this->flash->error("Please enter user and password!");
                }

                // The validation has failed
            }
        }

        if ($this->session->has('user')){
            $this->flash->success( 'Logged In Successfully!' );
            return $this->response->redirect('auth/logged');
//            $this->dispatcher->forward([
//                'controller' => "auth",
//                "action" => "logged"
//            ]);
//            header("Refresh:3; url=/");
        }

   }

    public function loggedAction()
    {
        $this->auth();
        $this->view->userFullname = $this->session->get('user-fullname');
    }

    public function logoutAction()
    {
//        $this->session->remove('user');
//        $this->session->remove('user-com_code');
//        $this->session->remove('user-role_code');
        $this->session->destroy();

        return $this->response->redirect('auth/login');
    }


    public function auth()
    {
        if (!$this->session->has('user')){
            return $this->response->redirect('auth/login');
        }
    }

}
