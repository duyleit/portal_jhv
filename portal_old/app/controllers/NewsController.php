<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class NewsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
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

        $parameters["conditions"] = 'type=1';
        $parameters["order"] = "id DESC";

        $portal_news = PortalNews::find($parameters);
        if (count($portal_news) == 0) {
            $this->flash->notice("Did not find any news");

            return;
        }

        $paginator = new Paginator([
            'data' => $portal_news,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    public function detailAction($id = 1)
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

        $this->view->portal_new = $portal_new;
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

