    <?php


use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // NEWS =========================================================================
        $news = PortalNews::find([
            "limit" => 7,
            "conditions" => "type=3",
            "order" => "id DESC"
        ]);

        $this->view->news = $news;


        // ACTIVITIES ===================================================================
        $activities = PortalNews::find([
            "limit" => 5,
            "conditions" => "type=2",
            "order" => "id DESC"
        ]);

        $this->view->activities = $activities;

        // EHS =========================================================================
        $ehss = PortalFile::find([
            "limit" => 4,
            "conditions" => "type=3",
            "order" => "id DESC"
        ]);

        $this->view->ehss = $ehss;

    }

}

