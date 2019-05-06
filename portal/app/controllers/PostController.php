    <?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Forms\Element\Select;

class PostController extends \Phalcon\Mvc\Controller
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

    // NEWS PAGE
    public function indexAction()
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

        $parameters["conditions"] = 'news=1 AND status=1';
        $parameters["order"] = "modified DESC";

        $portal_posts = PortalPost::find($parameters);
        if (count($portal_posts) == 0) {
            $this->flash->notice("Did not find any post");

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_posts,
            'limit'=> 12,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    // ACTIVITIES PAGE
    public function activitiesAction()
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

        $parameters["conditions"] = 'post_group=1 AND status=1';
        $parameters["order"] = "modified DESC";

        $portal_posts = PortalPost::find($parameters);
        if (count($portal_posts) == 0) {
            $this->flash->notice("Did not find any post");

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_posts,
            'limit'=> 12,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    // HSE PAGE
    public function hseAction()
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

        $parameters["conditions"] = 'post_group=11 AND status=1';
        $parameters["order"] = "modified DESC";

        $portal_posts = PortalPost::find($parameters);
        if (count($portal_posts) == 0) {
            $this->flash->notice("Did not find any post");

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_posts,
            'limit'=> 12,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    // SEARCH PAGE
    public function searchAction($check='')
    {
        if($check=='item') return;

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
        if(!isset($parameters["conditions"])) $parameters["conditions"] = "status=1 AND id>2 AND post_group<>8";
        else $parameters["conditions"] .= " AND status=1 AND id>2 AND post_group<>8";
        $parameters["order"] = "modified DESC";

        $portal_post = PortalPost::find($parameters);
        if (count($portal_post) == 0) {
            $this->flash->notice("Không tìm thấy 未找到!");
//            $this->dispatcher->forward([
//                "controller" => "portal_post",
//                "action" => "index"
//            ]);
            return;
        }

        $files = [];
        foreach ($portal_post as $post)
        {
            $files[$post->id] = '';
            $fs = PortalFile::find([
                "conditions" => "post_id=".$post->id,
                "order" => "id DESC"
            ]);
            if($fs){
                foreach ($fs as $f){
                    $files[$post->id] .= $this->createdownloadlink($f->file, $f->filename);
                }
            }
        }
        $this->view->files = $files;

        $paginator = new Paginator([
            'data' => $portal_post,
            'limit'=> 12,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    // GROUP PAGE
    public function groupAction($id=0)
    {
        $this->view->portal_post_group = PortalPostGroup::findFirstByid($id);
        if($id==0) return;
        $numberPage = $this->request->getQuery("page", "int");

        $parameters = [];
        $parameters["conditions"] = "post_group=" . (int)$id . " AND status=1 AND id>2";
        $parameters["order"] = "modified DESC";

        $portal_post = PortalPost::find($parameters);
        if (count($portal_post) == 0) {
            $this->flash->notice("Không tìm thấy 未找到!");
            return;
        }

        $files = [];
        foreach ($portal_post as $post)
        {
            $files[$post->id] = '';
            $fs = PortalFile::find([
                "conditions" => "post_id=".$post->id,
                "order" => "id DESC"
            ]);
            if($fs){
                foreach ($fs as $f){
                    $files[$post->id] .= $this->createdownloadlink($f->file, $f->filename);
                }
            }
        }
        $this->view->files = $files;

        $paginator = new Paginator([
            'data' => $portal_post,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    // DETAIL PAGE
    public function detailAction($id = 1)
    {

        $portal_post = PortalPost::findFirstByid($id);
        if (!$portal_post) {
            $this->flash->error("Không tìm thấy bài viết");

            $this->dispatcher->forward([
                'controller' => "index",
                'action' => 'index'
            ]);

            return;
        }

        if(!file_exists(BASE_PATH . str_replace('/portal/','/',$portal_post->picture))) $portal_post->picture = '';

        $this->view->portal_post = $portal_post;


        $parameters = [];
        $parameters["conditions"] = 'post_id=' . $id . ' AND status=1';
        $parameters["order"] = "id DESC";
        $portal_files = PortalFile::find($parameters);

        $this->view->portal_file_number = count($portal_files);
        $this->view->portal_files = $portal_files;

        $user_post = User::findFirstByid($portal_post->user_id);
        $this->view->department = $user_post->dept_code;

    }

    private function createdownloadlink($file,$filename)
    {

        $fileServer = BASE_PATH . str_replace('/portal/','/',$file);
        if(!file_exists($fileServer)) return '';
        return '<a href="'.str_replace('/public/','/',$file).'" class="btn btn-outline-secondary btn-sm" download="'.$filename.'">'.$filename.' <i class="fa fa-download" aria-hidden="true"></i></a> ';
    }

//    public function checkAction()
//    {
//
//        //echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        //exec("wmic /node:$_SERVER[REMOTE_ADDR] COMPUTERSYSTEM Get UserName", $user);
//        //var_dump($user);
//
////        echo gethostname();
//
//        echo getHostByName(getHostName());
//
//    }

}

