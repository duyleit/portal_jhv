<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class UserController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
       // $this->persistent->parameters = null;
    }

    /**
     * Searches for user
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'User', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $user = User::find($parameters);
        if (count($user) == 0) {
            $this->flash->notice("The search did not find any user");

            $this->dispatcher->forward([
                "controller" => "user",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $user,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a user
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $user = User::findFirstByid($id);
            if (!$user) {
                $this->flash->error("user was not found");

                $this->dispatcher->forward([
                    'controller' => "user",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $user->id;

            $this->tag->setDefault("id", $user->id);
            $this->tag->setDefault("user", $user->user);
            $this->tag->setDefault("pass", $user->pass);
            $this->tag->setDefault("fullname", $user->fullname);
            $this->tag->setDefault("com_code", $user->com_code);
            $this->tag->setDefault("role_code", $user->role_code);
            $this->tag->setDefault("dept_code", $user->dept_code);
            $this->tag->setDefault("posi_code", $user->posi_code);
            $this->tag->setDefault("email", $user->email);
            $this->tag->setDefault("phone_extend", $user->phone_extend);
            $this->tag->setDefault("about", $user->about);
            $this->tag->setDefault("common_disease", $user->common_disease);
            $this->tag->setDefault("occupational_disease", $user->occupational_disease);
            $this->tag->setDefault("labor_accident", $user->labor_accident);
            $this->tag->setDefault("poison_area", $user->poison_area);
            $this->tag->setDefault("health_class_code", $user->health_class_code);
            $this->tag->setDefault("expiry_health_check", $user->expiry_health_check);
            $this->tag->setDefault("status", $user->status);
            
        }
    }

    /**
     * Creates a new user
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'index'
            ]);

            return;
        }

        $user = new User();
        $user->user = $this->request->getPost("user");
        $user->pass = $this->request->getPost("pass");
        $user->fullname = $this->request->getPost("fullname");
        $user->comCode = $this->request->getPost("com_code");
        $user->roleCode = $this->request->getPost("role_code");
        $user->deptCode = $this->request->getPost("dept_code");
        $user->posiCode = $this->request->getPost("posi_code");
        $user->email = $this->request->getPost("email", "email");
        $user->phoneExtend = $this->request->getPost("phone_extend");
        $user->about = $this->request->getPost("about");
        $user->commonDisease = $this->request->getPost("common_disease");
        $user->occupationalDisease = $this->request->getPost("occupational_disease");
        $user->laborAccident = $this->request->getPost("labor_accident");
        $user->poisonArea = $this->request->getPost("poison_area");
        $user->healthClassCode = $this->request->getPost("health_class_code");
        $user->expiryHealthCheck = $this->request->getPost("expiry_health_check");
        $user->status = $this->request->getPost("status");
        

        if (!$user->save()) {
            foreach ($user->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("user was created successfully");

        $this->dispatcher->forward([
            'controller' => "user",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a user edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $user = User::findFirstByid($id);

        if (!$user) {
            $this->flash->error("user does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'index'
            ]);

            return;
        }

        $user->user = $this->request->getPost("user");
        $user->pass = $this->request->getPost("pass");
        $user->fullname = $this->request->getPost("fullname");
        $user->comCode = $this->request->getPost("com_code");
        $user->roleCode = $this->request->getPost("role_code");
        $user->deptCode = $this->request->getPost("dept_code");
        $user->posiCode = $this->request->getPost("posi_code");
        $user->email = $this->request->getPost("email", "email");
        $user->phoneExtend = $this->request->getPost("phone_extend");
        $user->about = $this->request->getPost("about");
        $user->commonDisease = $this->request->getPost("common_disease");
        $user->occupationalDisease = $this->request->getPost("occupational_disease");
        $user->laborAccident = $this->request->getPost("labor_accident");
        $user->poisonArea = $this->request->getPost("poison_area");
        $user->healthClassCode = $this->request->getPost("health_class_code");
        $user->expiryHealthCheck = $this->request->getPost("expiry_health_check");
        $user->status = $this->request->getPost("status");
        

        if (!$user->save()) {

            foreach ($user->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'edit',
                'params' => [$user->id]
            ]);

            return;
        }

        $this->flash->success("user was updated successfully");

        $this->dispatcher->forward([
            'controller' => "user",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a user
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $user = User::findFirstByid($id);
        if (!$user) {
            $this->flash->error("user was not found");

            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'index'
            ]);

            return;
        }

        if (!$user->delete()) {

            foreach ($user->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "user",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("user was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "user",
            'action' => "index"
        ]);
    }

}
