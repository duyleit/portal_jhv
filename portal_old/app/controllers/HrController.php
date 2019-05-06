<?php

class HrController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
      //  $this->auth();
    }

    public function indexAction()
    {
        // VNHR =========================================================================
        $vnhrs = PortalFile::find([
            "conditions" => "type=1",
            "order" => "id DESC"
        ]);

        $this->view->vnhrs = $vnhrs;

        // INHR =========================================================================
        $inhrs = PortalFile::find([
            "conditions" => "type=2",
            "order" => "id DESC"
        ]);

        $this->view->inhrs = $inhrs;

        // EHS =========================================================================
        $ehss = PortalFile::find([
            "conditions" => "type=3",
            "order" => "id DESC"
        ]);

        $this->view->ehss = $ehss;

        // FORM =========================================================================
        $forms = PortalFile::find([
            "conditions" => "type=4",
            "order" => "id DESC"
        ]);

        $this->view->forms = $forms;

        // MAGAZINE =========================================================================
        $magazines = PortalFile::find([
            "conditions" => "type=5",
            "order" => "id DESC"
        ]);

        $this->view->magazines = $magazines;

    }

}

