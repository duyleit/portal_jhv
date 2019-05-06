<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class EditController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    public function passwordAction()
    {
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                // The token is OK
                $oldPass    = $this->request->getPost('oldPass');
                $newPass = $this->request->getPost('newPass');

                $user = User::findFirstByUser($this->session->get('user'));
                if ($user) {
                    if ($this->security->checkHash($oldPass, $user->pass) && $user->status) {

                        // The password is valid
                        $user->pass = $this->security->hash($this->request->getPost("newPass"));
                        if (!$user->save()) {

                            foreach ($user->getMessages() as $message) {
                                $this->flash->error($message);
                            }

                            $this->dispatcher->forward([
                                'action' => 'password'
                            ]);

                            return;
                        }
                        $this->flash->success( 'Change Pass Successfully!' );
                        return $this->response->redirect('auth/logged');
                    }
                    else{
                        $this->flash->error("Wrong old password!");
                        return;
                    }
                } else {
                    $this->security->hash(rand());
                    $this->flash->error("Please enter true password!");
                    return;
                }

                // The validation has failed
            }
        }

    }


}
