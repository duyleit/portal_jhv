<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class PortalPostController extends ControllerBase
{
    public function initialize()
    {
//        parent::initialize();

        $this->view->post_group = PortalPostGroup::find([
            'conditions' => 'id>0',
            'columns' => 'id,name',
            'order' => 'id'
        ]);

    }

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for portal_post
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'PortalPost', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }

        if(!isset($parameters["conditions"])) $parameters["conditions"] = "id>2 AND status>=0";
        else $parameters["conditions"] .= " AND id>2 AND status>=0";
        $parameters["order"] = "id DESC";

        $portal_post = PortalPost::find($parameters);
        if (count($portal_post) == 0) {
            $this->flash->notice("The search did not find any portal_post");

            $this->dispatcher->forward([
                "controller" => "portal_post",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_post,
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
     * Edits a portal_post
     *
     * @param string $id
     */
    public function editAction($id=0)
    {
        if (!$this->request->isPost())
        {
            $portal_post = PortalPost::findFirstByid($id);
            if (!$portal_post) {
                $this->flash->error("portal_post was not found");

                $this->dispatcher->forward([
                    'controller' => "portal_post",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $portal_post->id;

            $this->tag->setDefault("id", $portal_post->id);
            $this->tag->setDefault("post_group", $portal_post->post_group);
            $this->tag->setDefault("title", $portal_post->title);
            $this->tag->setDefault("description", $portal_post->description);
            $this->tag->setDefault("picture", $portal_post->picture);
            $this->tag->setDefault("content", $portal_post->content);
            $this->tag->setDefault("news", $portal_post->news);
            $this->tag->setDefault("date_start", $portal_post->date_start);
            $this->tag->setDefault("date_end", $portal_post->date_end);

            $this->view->news = $portal_post->news;
            $this->view->status = $portal_post->status;

            $parameters = [];
            $parameters["conditions"] = 'post_id=' . $id . ' AND status>0';
            $parameters["order"] = "id DESC";
            $portal_files = PortalFile::find($parameters);
//
            $this->view->post_id = $id;
            $this->view->post_group = PortalPostGroup::findFirstByid($portal_post->post_group);
            $this->view->portal_files = $portal_files;
        }

    }

    public function upfileAction($id=0)
    {
        if ($this->request->isPost()) {
            // xu ly upload file
            $user = User::findFirstByUser($this->session->get('user'));

            $portal_file = new PortalFile();
            $portal_file->post_id = (int)$this->request->getPost("post_id");
            $portal_file->user_id = $user->id;
            $portal_file->user_fullname = $user->fullname;
            $portal_file->file = urldecode($this->request->getPost("file"));
            $portal_file->filename = str_replace(['___','__','_'],' ',urldecode(basename($this->request->getPost("file"))));
            $portal_file->status = 1;

//            $portal_file->save();

            if($portal_file->filename!="") {
                if (!$portal_file->save()) {
                    foreach ($portal_file->getMessages() as $message) {
                        $this->flash->error($message);
                    }

                    $this->dispatcher->forward([
                        'controller' => "portal_post",
                        'action' => 'edit',
                        'params' => $this->dispatcher->getParams()
                    ]);

                    return;
                }
                $this->flash->success("Gửi tập tin thành công 文件上傳成功");
            }

        }

        return $this->response->redirect('portal_post/edit/' . $id . "#upload");

        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_ACTION_VIEW);

        $parameters = [];
        $parameters["conditions"] = 'post_id=' . $id;
        $parameters["order"] = "id DESC";
        $portal_files = PortalFile::find($parameters);

        $this->view->post_id = $id;
        $this->view->portal_files = $portal_files;

    }

    public function delfileAction($id=0,$fid=0)
    {
        $portal_file = PortalFile::findFirstByid($fid);
        if (!$portal_file) {
            $this->flash->error("portal_file was not found");

            $this->dispatcher->forward([
                'controller' => "portal_file",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

        $portal_file->status = -1;
        $portal_file->edited_user_id = $user->id;
        $portal_file->edited_user_fullname = $user->fullname;
        $portal_file->modified = gmdate('Y-m-d H:i:s',time() + 3600*7);

        if (!$portal_file->save()) {

            foreach ($portal_file->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index',
                'params' => ['id'=>$portal_file->id]
            ]);

            return;
        }

//        if (!$portal_file->delete()) {
//
//            foreach ($portal_file->getMessages() as $message) {
//                $this->flash->error($message);
//            }
//
//            $this->dispatcher->forward([
//                'controller' => "portal_file",
//                'action' => 'search'
//            ]);
//
//            return;
//        }

        return $this->response->redirect('portal_post/edit/' . $id . "#upload");

    }

    /**
     * Creates a new portal_post
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

        $portal_post = new PortalPost();
        $portal_post->user_id = $user->id;
        $portal_post->user_fullname = $user->fullname;
        $portal_post->news = (int)$this->request->getPost("news");
        $portal_post->post_group = $this->request->getPost("post_group");
        $portal_post->title = $this->request->getPost("title");
        $portal_post->picture = urldecode($this->request->getPost("picture"));
        $portal_post->content = $this->request->getPost("content");
        $portal_post->description = $this->request->getPost("description");
        $portal_post->status = (int)$this->request->getPost("status");
//        $portal_post->date_start = $this->request->getPost("date_start");
//        $portal_post->date_end = $this->request->getPost("date_end");

        if($this->request->getPost("date_start") != '') $portal_post->date_start = gmdate('Y-m-d H:i:s', strtotime($this->request->getPost("date_start")) + 3600*7);
        else $portal_post->date_start = null;
        if($this->request->getPost("date_end") != '') $portal_post->date_end = gmdate('Y-m-d H:i:s', strtotime($this->request->getPost("date_end")) + 3600*7);
        else $portal_post->date_end = null;
        $portal_post->edited_user_id = $user->id;
        $portal_post->edited_user_fullname = $user->fullname;
        

        if (!$portal_post->save()) {
            foreach ($portal_post->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("portal_post was created successfully");

        return $this->response->redirect('portal_post/edit/' . $portal_post->id);

//        $this->dispatcher->forward([
//            'controller' => "portal_post",
//            'action' => 'index'
//        ]);
    }

    /**
     * Saves a portal_post edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $portal_post = PortalPost::findFirstByid($id);

        if (!$portal_post) {
            $this->flash->error("portal_post does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

//        $portal_post->userId = $this->request->getPost("user_id");
//        $portal_post->userFullname = $this->request->getPost("user_fullname");
        $portal_post->news = (int)$this->request->getPost("news");
//        $portal_post->postGroup = $this->request->getPost("post_group");
        $portal_post->title = $this->request->getPost("title");
        $portal_post->picture = urldecode($this->request->getPost("picture"));
        $portal_post->content = $this->request->getPost("content");
        $portal_post->description = $this->request->getPost("description");
        $portal_post->status = (int)$this->request->getPost("status");
        if($this->request->getPost("date_start") != '') $portal_post->date_start = gmdate('Y-m-d H:i:s', strtotime($this->request->getPost("date_start")) + 3600*7);
            else $portal_post->date_start = null;
        if($this->request->getPost("date_end") != '') $portal_post->date_end = gmdate('Y-m-d H:i:s', strtotime($this->request->getPost("date_end")) + 3600*7);
            else $portal_post->date_end = null;
        $portal_post->modified = gmdate('Y-m-d H:i:s',time() + 3600*7);
        $portal_post->edited_user_id = $user->id;
        $portal_post->edited_user_fullname = $user->fullname;
        

        if (!$portal_post->save()) {

            foreach ($portal_post->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'edit',
                'params' => ['id'=>$portal_post->id]
            ]);

            return;
        }

        $this->flash->success("portal_post was updated successfully");

//        $this->dispatcher->forward([
//            'controller' => "portal_post",
//            'action' => 'edit',
//            'params' => ['id'=>$portal_post->id]
//        ]);
        return $this->response->redirect('portal_post/edit/' . $portal_post->id);
    }

    /**
     * Deletes a portal_post
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $portal_post = PortalPost::findFirstByid($id);
        if (!$portal_post) {
            $this->flash->error("portal_post was not found");

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index'
            ]);

            return;
        }

        $user = User::findFirstByUser($this->session->get('user'));

        $portal_post->status = -1;
        $portal_post->deleted = gmdate('Y-m-d H:i:s',time() + 3600*7);
        $portal_post->deleted_user_id = $user->id;

        if (!$portal_post->save()) {

            foreach ($portal_post->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "portal_post",
                'action' => 'index',
                'params' => ['id'=>$portal_post->id]
            ]);

            return;
        }

        $this->flash->success("portal_post was deleted successfully");
        return $this->response->redirect('portal_post/search');

//
//        if (!$portal_post->delete()) {
//
//            foreach ($portal_post->getMessages() as $message) {
//                $this->flash->error($message);
//            }
//
//            $this->dispatcher->forward([
//                'controller' => "portal_post",
//                'action' => 'search'
//            ]);
//
//            return;
//        }
//
//        $this->flash->success("portal_post was deleted successfully");
//
//        $this->dispatcher->forward([
//            'controller' => "portal_post",
//            'action' => "index"
//        ]);
    }

}
