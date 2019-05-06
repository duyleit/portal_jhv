<?php

class GmController extends \Phalcon\Mvc\Controller
{
//    public function initialize()
//    {
////        $this->assets->addCss("vendor/bootstrap-calendar/css/calendar.min.css");
//
////        $this->assets->addJs("vendor/bootstrap-calendar/components/underscore/underscore-min.js");
////        $this->assets->addJs("vendor/bootstrap-calendar/js/calendar.min.js");
////        $this->assets->addJs("vendor/bootstrap-calendar/js/app.js");
//    }
    public  function  initialize()
    {
//        $this->tag->setTitle('Portal | Jiahsin Company | Bookmeal');
//        parent::initialize();
//        $this->auth();
//        $this->view->mealdept = bookmealDept::find   ([
//            'columns' => 'bd_id,name',
//            'order' => 'name '
//        ]);

    }
    public function indexAction()
    {
//        // POLICY =========================================================================
//        $policies = PortalPost::find([
//            "limit" => 6,
//            "conditions" => "post_group=2 AND status=1",
//            "order" => "modified DESC"
//        ]);
//
//        $this->view->policies = $policies;
        $this->persistent->parameters = null;
    }

    public function calendareventAction()
    {
        // CALENDAR EVENT =================================================================
        $ces = PortalPost::find([
//            "limit" => 6,
            "conditions" => "post_group=8 AND status=1",
            "order" => "modified DESC"
        ]);

        $jsonCes = [];
        foreach ($ces as $ce)
        {
            if ($ce->title && $ce->date_start) {
                $tmp = [];
                $tmp['title'] = $ce->title;
//                $tmp['url'] = '/portal_old/post/detail/' . $ce->id;
                $tmp['url'] = '#';
                $tmp['start'] = $ce->date_start;
                if($ce->date_end) $tmp['end'] = $ce->date_end;
//                if($ce->description) $tmp['description'] = $ce->description;

                $jsonCes[] = $tmp;
            }
        }

        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($jsonCes));

        return $this->response->send();
    }

}

