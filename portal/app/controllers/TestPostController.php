<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
class TestPostController extends ControllerBase
{

    public function indexAction()
    {

    }
    public function detailAction($id)
    {

        $portal_post= PortalPost::findFirstById($id);
        if($portal_post == null)
        {
            $this->alert->error('ko tim thay ');
            $this->dispacher->foward([
                'controller' =>'index',
                'action'     =>'index'
            ]);
            return;
        }

        $parameters=[];
        $parameters['conditions']= 'post_id = '. $id . ' And status=1';
        $parameters['order']='id DESC';
        $portal_files=PortalFile::find($parameters);

        $this->view->portal_files=$portal_files;
        $this->view->portal_file_number=count($portal_files);

        $this->view->portal_post=$portal_post;

        $user_post = User::findFirstById($portal_post->user_id);

        $this->view->department= $user_post->dept_code;


    }
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'PortalPost', $_POST);
            $this->persistent->parameters = $query->getParams();
        }
        else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id DESC";

        $portal_post = PortalPost::find($parameters);
        if (count($portal_post) == 0) {
            $this->flash->notice("The search did not find any user");

            $this->dispatcher->forward([
                "controller" => "posts",
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
    public function newAction()
    {

    }
    public function editAction($id)
    {

    }

}

