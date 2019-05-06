<?php


use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;


class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $portal_urgent = PortalPost::findFirstByid(1);
        $this->view->portal_urgent = $portal_urgent;

        // NEWS =========================================================================
        $news = PortalPost::find([
            "limit" => 6,
            "conditions" => "news=1 AND status=1",
            "order" => "modified DESC"
        ]);

        $this->view->news = $news;


        // ACTIVITIES ===================================================================
        $activities = PortalPost::find([
            "limit" => 2,
            "conditions" => "post_group=1 AND status=1",
            "order" => "id DESC"
        ]);

        $this->view->activities = $activities;

        // HSE =========================================================================
        $ehss = PortalPost::find([
            "limit" => 10,
            "conditions" => "post_group=11 AND status=1",
            "order" => "id DESC"
        ]);

        $this->view->ehss = $ehss;

    }

}

