<?php
/**
 * Created by PhpStorm.
 * User: Duy.Le
 * Date: 23/04/2019
 * Time: 1:46 PM
 */
class TestController extends ControllerBase
{
    public function indexAction()
    {
         $policies= PortalPost::find([
             "order" => "modified DESC",
             "conditions" => "post_group=2 AND status=1",
             'limit'      => '6'
         ]);
         var_dump($policies);
         $this->view->policies=$policies;
    }
    public function searchAction()
    {

    }
}




