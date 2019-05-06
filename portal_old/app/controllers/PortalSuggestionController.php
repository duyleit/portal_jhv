<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class PortalSuggestionController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for portal_suggestion
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'PortalSuggestion', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $portal_suggestion = PortalSuggestion::find($parameters);
        if (count($portal_suggestion) == 0) {
            $this->flash->notice("The search did not find any portal_suggestion");

            $this->dispatcher->forward([
                "controller" => "portal_suggestion",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_suggestion,
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
     * Edits a portal_suggestion
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $portal_suggestion = PortalSuggestion::findFirstByid($id);
            if (!$portal_suggestion) {
                $this->flash->error("portal_suggestion was not found");

                $this->dispatcher->forward([
                    'controller' => "portal_suggestion",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $portal_suggestion->id;

            $this->tag->setDefault("id", $portal_suggestion->id);
            $this->tag->setDefault("user_id", $portal_suggestion->user_id);
            $this->tag->setDefault("email", $portal_suggestion->email);
            $this->tag->setDefault("fullname", $portal_suggestion->fullname);
            $this->tag->setDefault("department", $portal_suggestion->department);
            $this->tag->setDefault("title", $portal_suggestion->title);
            $this->tag->setDefault("message", $portal_suggestion->message);
            $this->tag->setDefault("status", $portal_suggestion->status);
            $this->tag->setDefault("created", $portal_suggestion->created);
            $this->tag->setDefault("modified", $portal_suggestion->modified);
            
        }
    }

    /**
     * Creates a new portal_suggestion
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'index'
            ]);

            return;
        }

        $portal_suggestion = new PortalSuggestion();
        $portal_suggestion->userId = $this->request->getPost("user_id");
        $portal_suggestion->email = $this->request->getPost("email", "email");
        $portal_suggestion->fullname = $this->request->getPost("fullname");
        $portal_suggestion->department = $this->request->getPost("department");
        $portal_suggestion->title = $this->request->getPost("title");
        $portal_suggestion->message = $this->request->getPost("message");
        $portal_suggestion->status = $this->request->getPost("status");
        $portal_suggestion->created = $this->request->getPost("created");
        $portal_suggestion->modified = $this->request->getPost("modified");
        

        if (!$portal_suggestion->save()) {
            foreach ($portal_suggestion->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("portal_suggestion was created successfully");

        $this->dispatcher->forward([
            'controller' => "portal_suggestion",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a portal_suggestion edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $portal_suggestion = PortalSuggestion::findFirstByid($id);

        if (!$portal_suggestion) {
            $this->flash->error("portal_suggestion does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'index'
            ]);

            return;
        }

        $portal_suggestion->userId = $this->request->getPost("user_id");
        $portal_suggestion->email = $this->request->getPost("email", "email");
        $portal_suggestion->fullname = $this->request->getPost("fullname");
        $portal_suggestion->department = $this->request->getPost("department");
        $portal_suggestion->title = $this->request->getPost("title");
        $portal_suggestion->message = $this->request->getPost("message");
        $portal_suggestion->status = $this->request->getPost("status");
        $portal_suggestion->created = $this->request->getPost("created");
        $portal_suggestion->modified = $this->request->getPost("modified");
        

        if (!$portal_suggestion->save()) {

            foreach ($portal_suggestion->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'edit',
                'params' => [$portal_suggestion->id]
            ]);

            return;
        }

        $this->flash->success("portal_suggestion was updated successfully");

        $this->dispatcher->forward([
            'controller' => "portal_suggestion",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a portal_suggestion
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $portal_suggestion = PortalSuggestion::findFirstByid($id);
        if (!$portal_suggestion) {
            $this->flash->error("portal_suggestion was not found");

            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'index'
            ]);

            return;
        }

        if (!$portal_suggestion->delete()) {

            foreach ($portal_suggestion->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_suggestion",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("portal_suggestion was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "portal_suggestion",
            'action' => "index"
        ]);
    }

}
