<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class PortalFileController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for portal_file
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'PortalFile', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $portal_file = PortalFile::find($parameters);
        if (count($portal_file) == 0) {
            $this->flash->notice("The search did not find any portal_file");

            $this->dispatcher->forward([
                "controller" => "portal_file",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_file,
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
     * Edits a portal_file
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $portal_file = PortalFile::findFirstByid($id);
            if (!$portal_file) {
                $this->flash->error("portal_file was not found");

                $this->dispatcher->forward([
                    'controller' => "portal_file",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $portal_file->id;

            $this->tag->setDefault("id", $portal_file->id);
//            $this->tag->setDefault("user_id", $portal_file->user_id);
//            $this->tag->setDefault("user_fullname", $portal_file->user_fullname);
            $this->tag->setDefault("type", $portal_file->type);
            $this->tag->setDefault("title", $portal_file->title);
            $this->tag->setDefault("file", $portal_file->file);
            $this->tag->setDefault("description", $portal_file->description);
//            $this->tag->setDefault("status", $portal_file->status);
//            $this->tag->setDefault("created", $portal_file->created);
//            $this->tag->setDefault("modified", $portal_file->modified);
            
        }
    }

    /**
     * Creates a new portal_file
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

        $portal_file = new PortalFile();
        $portal_file->user_id = $user->id;
        $portal_file->user_fullname = $user->fullname;
        $portal_file->type = $this->request->getPost("type");
        $portal_file->title = $this->request->getPost("title");
        $portal_file->file = $this->request->getPost("file");
        $portal_file->filename = basename($this->request->getPost("file"));
        $portal_file->description = $this->request->getPost("description");
//        $portal_file->status = $this->request->getPost("status");
//        $portal_file->created = $this->request->getPost("created");
//        $portal_file->modified = $this->request->getPost("modified");
        

        if (!$portal_file->save()) {
            foreach ($portal_file->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("portal_file was created successfully");

        $this->dispatcher->forward([
            'controller' => "portal_file",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a portal_file edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $portal_file = PortalFile::findFirstByid($id);

        if (!$portal_file) {
            $this->flash->error("portal_file does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'index'
            ]);

            return;
        }

//        $portal_file->userId = $this->request->getPost("user_id");
//        $portal_file->userFullname = $this->request->getPost("user_fullname");
        $portal_file->type = $this->request->getPost("type");
        $portal_file->title = $this->request->getPost("title");
        $portal_file->file = $this->request->getPost("file");
        $portal_file->filename = basename($this->request->getPost("file"));
        $portal_file->description = $this->request->getPost("description");
//        $portal_file->status = $this->request->getPost("status");
//        $portal_file->created = $this->request->getPost("created");
//        $portal_file->modified = $this->request->getPost("modified");
        

        if (!$portal_file->save()) {

            foreach ($portal_file->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'edit',
                'params' => [$portal_file->id]
            ]);

            return;
        }

        $this->flash->success("portal_file was updated successfully");

        $this->dispatcher->forward([
            'controller' => "portal_file",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a portal_file
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $portal_file = PortalFile::findFirstByid($id);
        if (!$portal_file) {
            $this->flash->error("portal_file was not found");

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'index'
            ]);

            return;
        }

        if (!$portal_file->delete()) {

            foreach ($portal_file->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("portal_file was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "portal_file",
            'action' => "index"
        ]);
    }

}
