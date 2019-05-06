<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class PortalNewsController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for portal_news
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'PortalNews', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $portal_news = PortalNews::find($parameters);
        if (count($portal_news) == 0) {
            $this->flash->notice("The search did not find any portal_news");

            $this->dispatcher->forward([
                "controller" => "portal_news",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_news,
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
     * Edits a portal_new
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $portal_new = PortalNews::findFirstByid($id);
            if (!$portal_new) {
                $this->flash->error("portal_new was not found");

                $this->dispatcher->forward([
                    'controller' => "portal_news",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $portal_new->id;
//
            $this->tag->setDefault("id", $portal_new->id);
//            $this->tag->setDefault("user_id", $portal_new->user_id);
//            $this->tag->setDefault("user_fullname", $portal_new->user_fullname);
            $this->tag->setDefault("type", $portal_new->type);
            $this->tag->setDefault("title", $portal_new->title);
            $this->tag->setDefault("description", $portal_new->description);
            $this->tag->setDefault("picture", $portal_new->picture);
            $this->tag->setDefault("content", $portal_new->content);
//            $this->tag->setDefault("status", $portal_new->status);
//            $this->tag->setDefault("created", $portal_new->created);
//            $this->tag->setDefault("modified", $portal_new->modified);
            
        }
    }

    /**
     * Creates a new portal_new
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

        $portal_new = new PortalNews();
        $portal_new->user_id = $user->id;
        $portal_new->user_fullname = $user->fullname;
        $portal_new->type = $this->request->getPost("type");
        $portal_new->title = $this->request->getPost("title");
        $portal_new->description = $this->request->getPost("description");
        $portal_new->picture = $this->request->getPost("picture");
        $portal_new->content = $this->request->getPost("content");
        

        if (!$portal_new->save()) {
            foreach ($portal_new->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("portal_new was created successfully");

        $this->dispatcher->forward([
            'controller' => "portal_news",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a portal_new edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $portal_new = PortalNews::findFirstByid($id);

        if (!$portal_new) {
            $this->flash->error("portal_new does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'index'
            ]);

            return;
        }

//        $portal_new->userId = $this->request->getPost("user_id");
//        $portal_new->userFullname = $this->request->getPost("user_fullname");
        $portal_new->type = $this->request->getPost("type");
        $portal_new->title = $this->request->getPost("title");
        $portal_new->description = $this->request->getPost("description");
        $portal_new->picture = $this->request->getPost("picture");
        $portal_new->content = $this->request->getPost("content");
//        $portal_new->status = $this->request->getPost("status");
//        $portal_new->created = $this->request->getPost("created");
//        $portal_new->modified = $this->request->getPost("modified");
        

        if (!$portal_new->save()) {

            foreach ($portal_new->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'edit',
                'params' => [$portal_new->id]
            ]);

            return;
        }

        $this->flash->success("portal_new was updated successfully");

        $this->dispatcher->forward([
            'controller' => "portal_news",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a portal_new
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $portal_new = PortalNews::findFirstByid($id);
        if (!$portal_new) {
            $this->flash->error("portal_new was not found");

            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'index'
            ]);

            return;
        }

        if (!$portal_new->delete()) {

            foreach ($portal_new->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_news",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("portal_new was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "portal_news",
            'action' => "index"
        ]);
    }

}
