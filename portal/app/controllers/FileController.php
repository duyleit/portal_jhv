<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class FileController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {

    }

    public function indexAction()
    {

    }

    public function searchAction($check='')
    {
        if($check=='item') return;

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
        if(!isset($parameters["conditions"])) $parameters["conditions"] = "status=1";
        else $parameters["conditions"] .= " AND status=1";
        $parameters["order"] = "created DESC";

        $portal_file = PortalFile::find($parameters);
        if (count($portal_file) == 0) {
            $this->flash->notice("Không tìm thấy 未找到!");
            return;
        }

        $paginator = new Paginator([
            'data' => $portal_file,
            'limit'=> 24,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

}

