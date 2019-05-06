    <?php

class GmController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $policies = PortalNews::find([
            "order" => "id DESC"
        ]);
        $this->view->policies = $policies;
    }

}

