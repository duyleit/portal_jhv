 <?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Mvc\Model\Resultset\Simple;


class MealController extends ControllerBase
{
    /**
     * Index action
     */

    public  function  initialize()
    {
        $this->tag->setTitle('Portal | Jiahsin Company | Bookmeal');
   //     parent::initialize();
        $this->auth();
        $this->view->mealdept = BookmealDept::find   ([
            'columns' => 'bd_id,name',
            'order' => 'name '
        ]);
    }

    public function indexAction()
    {
        $this->persistent->parameters = null;
//      var_dump($this->view->mealdept);

    }

    /**
     * Searches for meal
     */
    public function searchAction()
    {
//        $numberPage = 1;
//        if ($this->request->isPost()) {
//            $query = Criteria::fromInput($this->di, 'Bookmeal', $_POST);
//            $this->persistent->parameters = $query->getParams();
//        } else {
//            $numberPage = $this->request->getQuery("page", "int");
//        }
//
//        $parameters = $this->persistent->parameters;
//        if (!is_array($parameters)) {
//            $parameters = [];
//        }
//        $parameters["order"] = "bm_id";
//
//        $meal = Bookmeal::find($parameters);
//        if (count($meal) == 0) {
//            $this->flash->notice("The search did not find any meal");
//
//            $this->dispatcher->forward([
//                "controller" => "meal",
//                "action" => "index"
//            ]);
//
//            return;
//        }
        date_default_timezone_set("Asia/bangkok");
        $numberPage = $this->request->getQuery("page", "int");
        $date = $this->request->getPost("date");
//        if($date == '')
//        {
//            $date=date(  'Y/m/d');
//        }

        $mealorderdeptId = $this->request->getPost("mealorderdeptId");
//        $nguoidat = $this->session->get('user-fullname');

        $sql = "SELECT bookmeal.bm_id,date,user_code,dept_code,bookmeal_dept.name,lunch,lunch_add,lunch_veg,lunch_soup,lunch_veg_add,dinner,dinner_add,dinner_veg_add,supper,supper_veg,separate_table,buffet,note FROM bookmeal_dept,bookmeal where bookmeal.dept_code= bookmeal_dept.bd_id and status != -1";
         if ($date != '') {
                $sql = $sql . " and date= '" . $date . "'";
            }
         if ($mealorderdeptId != '') {
                $sql = $sql . " and dept_code = " . $mealorderdeptId;
            }
        $meal_order = new Bookmeal();
        $result = new Simple(
            null,
            $meal_order,
            $meal_order->getReadConnection()->query($sql)
        );


        if (count($result) == 0) {
            $this->flash->notice("Không Tìm thấy suất đặt cơm nào !!!");

            $this->dispatcher->forward([
                "controller" => "meal",
                "action" => "index"
            ]);

            return;
        }
        $this->session->set('tblmeal', $result);
        $paginator = new Paginator([
            'data' => $result,
            'limit'=>5,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
        $this->view->xdate=date('Y-m-d');
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {
      //  $this->auth();
//        date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/bangkok");
        $this->view->datenow=date('Y-m-d');
        $this->view->timenow=date('H:i:s');
        $this->view->oldtime=$this->request->getPost('date');
//       $this->view->datenow=date("F d Y H:i:s T"); 'April 11 2019 08:37:19 +07'
//       var_dump( $this->view->datenow);
//       var_dump( $this->view->xdate);
//       var_dump($this->view->xtime);
        $this->tag->setDefault("user_code", $this->session->get('user'));

        $db = $this->db;
        $sql = "SELECT bd_id,name FROM user,bookmeal_dept where bookmeal_dept.bd_code = user.dept_code and user = '". $this->session->get('user')."'";
        $result = $db->fetchAll($sql);
//        $id= $result->bd_id;
//        var_dump($id);

        foreach ($result as $rs)
        {
            //var_dump($rs['bd_id']);
            $this->tag->setDefault("dept_code",  $rs['name']);
        }
//       $id = User::findFirstByUser('I13042');
//        var_dump($id->dept_code);
 //      $this->tag->setDefault("mealorderdeptId",  $result[0]);
    }

    /**
     * Edits a meal
     *
     * @param string $bm_id
     */
    public function editAction($bm_id)
    {
        if (!$this->request->isPost()) {

            $bookmeal = Bookmeal::findFirstBybm_id($bm_id);
            if (!$bookmeal) {
                $this->flash->error("meal was not found");

                $this->dispatcher->forward([
                    'controller' => "meal",
                    'action' => 'index'
                ]);

                return;
            }
            date_default_timezone_set("Asia/bangkok");
            $this->view->datenow=date('Y-m-d');
            $this->view->olddate= $bookmeal->date;
            //var_dump( $this->view->datenow);
            //var_dump( $this->view->olddate);
            $this->view->bm_id = $bookmeal->bm_id;

            $namedept=bookmealDept::findFirst($bookmeal->dept_code);

            $this->tag->setDefault("bm_id", $bookmeal->bm_id);
            $this->tag->setDefault("date", $bookmeal->date);
            $this->tag->setDefault("user_code", $bookmeal->user_code);
            $this->tag->setDefault("dept_code",$namedept->getBdCode());
            $this->tag->setDefault("lunch", $bookmeal->lunch);
            $this->tag->setDefault("lunch_add", $bookmeal->lunch_add);
            $this->tag->setDefault("lunch_veg", $bookmeal->lunch_veg);
            $this->tag->setDefault("lunch_soup", $bookmeal->lunch_soup);
            $this->tag->setDefault("lunch_veg_add", $bookmeal->lunch_veg_add);
            $this->tag->setDefault("dinner", $bookmeal->dinner);
            $this->tag->setDefault("dinner_add", $bookmeal->dinner_add);
            $this->tag->setDefault("dinner_veg_add", $bookmeal->dinner_veg_add);
            $this->tag->setDefault("supper", $bookmeal->supper);
            $this->tag->setDefault("supper_veg", $bookmeal->supper_veg);
            $this->tag->setDefault("separate_table", $bookmeal->separate_table);
            $this->tag->setDefault("buffet", $bookmeal->buffet);
            $this->tag->setDefault("note", $bookmeal->note);
//            $this->tag->setDefault("date_create", $meal->date_create);
 //          $this->tag->setDefault("date_modify", $meal->date_modify);
//            $this->tag->setDefault("user_code_modify", $meal->user_code_modify);
            
        }
    }

    /**
     * Creates a new meal
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'index'
            ]);

            return;
        }
        date_default_timezone_set("Asia/bangkok");
        $bdid=bookmealDept::findFirstByBd_code($this->request->getPost("dept_code"));
//       var_dump(Bookmeal::findFirstByDept_code($bdid->bd_id));
//       var_dump(Bookmeal::findFirstByDate($this->request->getPost("date")));
        $db = $this->db;
        $sql = "SELECT * FROM bookmeal where dept_code= '".$bdid->bd_id ."' and date= '".$this->request->getPost("date")."' and status !=-1";
        $result = $db->fetchAll($sql);
        $flag=0;
        if (  $result != null )
        {
            $this->flash->success("Bộ phận này đã tạo suất ăn rồi !!! ");

            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'index'
            ]);
        }
        else {
               $bookmeal = new Bookmeal();

                $bookmeal->setDate($this->request->getPost("date"));
                $bookmeal->setUserCode($this->request->getPost("user_code"));
                $bookmeal->setDeptCode($bdid->bd_id);

//                var_dump(date('Y-m-d'));
//                var_dump($this->request->getPost("date"));
//                var_dump(date('H:i:s'));
                if( ($this->request->getPost("date") == date('Y-m-d') && date('H:i:s') < '09:00:00') or $this->request->getPost("date") > date('Y-m-d') )
                {
                    $bookmeal->setLunch($this->request->getPost("lunch"));
                    $bookmeal->setLunchAdd($this->request->getPost("lunch_add"));
                    $bookmeal->setLunchVeg($this->request->getPost("lunch_veg"));
                    $bookmeal->setLunchSoup($this->request->getPost("lunch_soup"));
                    $bookmeal->setLunchVegAdd($this->request->getPost("lunch_veg_add"));
                    $flag=1;
                }

              if( ($this->request->getPost("date") >= date('Y-m-d') && date('H:i:s') <= '14:00:00') or $this->request->getPost("date") > date('Y-m-d') )
               {
                $bookmeal->setDinner($this->request->getPost("dinner"));
                $bookmeal->setDinnerAdd($this->request->getPost("dinner_add"));
                $bookmeal->setDinnerVegAdd($this->request->getPost("dinner_veg_add"));
                $bookmeal->setSupper($this->request->getPost("supper"));
                $bookmeal->setSupperVeg($this->request->getPost("supper_veg"));

                $bookmeal->setSeparateTable($this->request->getPost("separate_table"));
                $bookmeal->setBuffet($this->request->getPost("buffet"));
                $bookmeal->setNote($this->request->getPost("note"));
                $flag=1;
                 }


                if ($this->request->getPost("date") == null) {
                    $this->flash->warning('Bạn chưa chọn ngày !!! ');
                    $this->dispatcher->forward([
                        'controller' => "meal",
                        'action' => 'new'
                    ]);
                    return;
                }
                if ($flag==1)
                {
                    if (!$bookmeal->save()) {
                        foreach ($bookmeal->getMessages() as $message) {
                            $this->flash->error($message);
                        }

                        $this->dispatcher->forward([
                            'controller' => "meal",
                            'action' => 'new'
                        ]);

                        return;
                    }

                    $this->flash->success("Tạo suất ăn thành công !!! ");

                    $this->dispatcher->forward([
                        'controller' => "meal",
                        'action' => 'index'
                    ]);
                }
                else
                {
                    $this->dispatcher->forward([
                        'controller' => "meal",
                        'action' => 'new'
                    ]);
                }

            }
    }

    /**
     * Saves a meal edited
     *
     */
    public function saveAction()
    {
        date_default_timezone_set("Asia/bangkok");
//        $currentDateTime = date('Y-m-d H:i:s');
//        var_dump( $currentDateTime);
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'index'
            ]);

            return;
        }

        $bm_id = $this->request->getPost("bm_id");
        $bookmeal = Bookmeal::findFirstBybm_id($bm_id);

        if (!$bookmeal) {
            $this->flash->error("meal does not exist " . $bm_id);

            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'index'
            ]);

            return;
        }

      //  $dayold= $meal->date_create;
        $bd_id=bookmealDept::findFirstByBd_code($this->request->getPost("dept_code"));
        $bookmeal->date = $this->request->getPost("date");
        $bookmeal->user_code = $this->request->getPost("user_code");
        $bookmeal->dept_code = $bd_id->bd_id;
        $bookmeal->lunch = $this->request->getPost("lunch");
        $bookmeal->lunch_add = $this->request->getPost("lunch_add");
        $bookmeal->lunch_veg = $this->request->getPost("lunch_veg");
        $bookmeal->lunch_soup = $this->request->getPost("lunch_soup");
        $bookmeal->lunch_veg_add = $this->request->getPost("lunch_veg_add");
        $bookmeal->dinner = $this->request->getPost("dinner");
        $bookmeal->dinner_add = $this->request->getPost("dinner_add");
        $bookmeal->dinner_veg_add = $this->request->getPost("dinner_veg_add");
        $bookmeal->supper = $this->request->getPost("supper");
        $bookmeal->supper_veg = $this->request->getPost("supper_veg");
        $bookmeal->separate_table = $this->request->getPost("separate_table");
        $bookmeal->buffet = $this->request->getPost("buffet");
        $bookmeal->note = $this->request->getPost("note");
//       $meal->dateCreate = $dayold;

       $bookmeal->dateModify = date('Y-m-d H:i:s');
//        $meal->userCodeModify = $this->request->getPost("user_code_modify");
        

        if (!$bookmeal->save()) {

            foreach ($bookmeal->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'edit',
                'params' => [$bookmeal->bm_id]
            ]);

            return;
        }

        $this->flash->success("Cập nhật suất ăn thành công !!!");

        $this->dispatcher->forward([
            'controller' => "meal",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a meal
     *
     * @param string $bm_id
     */
    public function deleteAction($bm_id)
    {
        date_default_timezone_set("Asia/bangkok");
        $bookmeal = Bookmeal::findFirstBybm_id($bm_id);
        if (!$bookmeal) {
            $this->flash->error("meal was not found");

            $this->dispatcher->forward([
                'controller' => "meal",
                'action' => 'index'
            ]);

            return;
        }
        $bookmeal->dateModify = date('Y-m-d H:i:s');
        $bookmeal->status=-1;
//        if (!$meal->delete()) {
//
//            foreach ($meal->getMessages() as $message) {
//                $this->flash->error($message);
//            }
//
//            $this->dispatcher->forward([
//                'controller' => "meal",
//                'action' => 'search'
//            ]);
//
//            return;
//        }
        if (!$bookmeal->save()) {

            foreach ($bookmeal->getMessages() as $message) {
                $this->flash->error($message);
            }

            return;
        }

        $this->flash->success("Xóa thành công !!!");

        $this->dispatcher->forward([
            'controller' => "meal",
            'action' => "index"
        ]);
    }
    public function printAction()
    {

    }

    public function exportexcelAction()
    {
        $excel = new PHPExcel();
        $styleTitle = array(
            'font'  => array(
                'bold'  => true,
//                'color' => array('rgb' => 'FF0000'),
                'size'  => 20,
                'name'  => 'Times New Roman'
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
            )
        );

        $styleVer = array(
            'font'  => array(
//                'bold'  => true,
//                'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                'name'  => 'Times New Roman'
            ),
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
            )
        );

        $styleHor = array(
            'font'  => array(
//                'bold'  => true,
//                'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                'name'  => 'Times New Roman'
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
            )
        );

        $styleBor = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        date_default_timezone_set("Asia/bangkok");
        $date = $this->request->getPost("date_print");
        if ($date == '') {
            $date = date('Y-m-d');
        }

        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->setTitle('Meal Order');

        $excel->getActiveSheet()->setCellValue('A1', 'SỐ LƯỢNG SUẤT ĂN NGÀY '.$date);
        $excel->getActiveSheet()->mergeCells('A1:Q1');
        $excel->getActiveSheet()->getStyle('A1:Q1')->applyFromArray($styleTitle);

        $excel->getActiveSheet()->setCellValue('A2', 'STT');
        $excel->getActiveSheet()->mergeCells('A2:A3');
        $excel->getActiveSheet()->getStyle('A2:A3')->applyFromArray($styleVer);
        $excel->getActiveSheet()->setCellValue('B2', 'Bộ Phận');
        $excel->getActiveSheet()->mergeCells('B2:B3');
        $excel->getActiveSheet()->getStyle('B2:B3')->applyFromArray($styleVer);
        $excel->getActiveSheet()->setCellValue('C2', 'Trợ Lý Báo Cơm');
        $excel->getActiveSheet()->mergeCells('C2:C3');
        $excel->getActiveSheet()->getStyle('C2:C3')->applyFromArray($styleVer);

        $excel->getActiveSheet()->setCellValue('D2', 'Trưa');
        $excel->getActiveSheet()->mergeCells('D2:I2');
        $excel->getActiveSheet()->getStyle('D2:I2')->applyFromArray($styleHor);
        $excel->getActiveSheet()->setCellValue('D3', 'Cơm Mặn');
        $excel->getActiveSheet()->setCellValue('E3', 'Phụ Mặn');
        $excel->getActiveSheet()->setCellValue('F3', 'Cơm Chay');
        $excel->getActiveSheet()->setCellValue('G3', 'Cháo');
        $excel->getActiveSheet()->setCellValue('H3', 'Phụ Chay');
        $excel->getActiveSheet()->setCellValue('I3', 'Tổng Cộng');

        $excel->getActiveSheet()->setCellValue('J2', 'Chiều');
        $excel->getActiveSheet()->mergeCells('J2:L2');
        $excel->getActiveSheet()->getStyle('J2:L2')->applyFromArray($styleHor);
        $excel->getActiveSheet()->setCellValue('J3', 'Cơm Mặn');
        $excel->getActiveSheet()->setCellValue('K3', 'Phụ Mặn');
        $excel->getActiveSheet()->setCellValue('L3', 'Phụ Chay');

        $excel->getActiveSheet()->setCellValue('M2', 'Đêm');
        $excel->getActiveSheet()->mergeCells('M2:N2');
        $excel->getActiveSheet()->getStyle('M2:N2')->applyFromArray($styleHor);
        $excel->getActiveSheet()->setCellValue('M3', ' Mặn');
        $excel->getActiveSheet()->setCellValue('N3', ' Chay');
        $excel->getActiveSheet()->setCellValue('O2', 'Cơm Khách');
        $excel->getActiveSheet()->mergeCells('O2:P2');
        $excel->getActiveSheet()->getStyle('O2:P2')->applyFromArray($styleHor);
        $excel->getActiveSheet()->setCellValue('O3', 'Dọn Bàn Riêng');
        $excel->getActiveSheet()->setCellValue('P3', 'Buffet');
        $excel->getActiveSheet()->setCellValue('Q2', 'Ghi chú');
        $excel->getActiveSheet()->mergeCells('Q2:Q3');
        $excel->getActiveSheet()->getStyle('Q2:Q2')->applyFromArray($styleVer);

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(18);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);

        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);


        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(10);

        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(6);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(6);

        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(14);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(7);

        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);

        $x=4;
        $i=1;
//        for ($i=4; $i<10; $i++)
//        {
//            $excel->getActiveSheet()->setCellValue('A'.$i,$x);
//            $x++;
//        }
    //  $foodquantity = FoodQuantity::find();s
    //    $foodquantity = $this->session->get('tblmeal');



        $numberPage = $this->request->getQuery("page", "int");

        $sql = "SELECT bookmeal.bm_id,date,user_code,dept_code,bookmeal_dept.name,lunch,lunch_add,lunch_veg,lunch_soup,lunch_veg_add,dinner,dinner_add,dinner_veg_add,supper,supper_veg,separate_table,buffet,note FROM bookmeal_dept,bookmeal where bookmeal.dept_code= bookmeal_dept.bd_id and status != -1";

        $sql = $sql . " and date= '" . $date . "'";

        $meal_order = new Bookmeal();
        $result = new Simple(
            null,
            $meal_order,
            $meal_order->getReadConnection()->query($sql)
        );

        if (count($result) == 0) {
            $this->flash->notice("Không Tìm thấy suất đặt cơm nào !!!");

            $this->dispatcher->forward([
                "controller" => "meal",
                "action" => "index"
            ]);
            return;
        }
        $this->session->set('tblmeal', $result);
        $foodquantity = $this->session->get('tblmeal');

        foreach (  $foodquantity as $f)
        {
            $excel->getActiveSheet()->setCellValue('A'.$x,$i);
            $excel->getActiveSheet()->setCellValue('B'.$x,$f->name);
            $excel->getActiveSheet()->setCellValue('C'.$x,$f->getUserCode());

            $excel->getActiveSheet()->setCellValue('D'.$x,$f->getLunch());
            $excel->getActiveSheet()->setCellValue('E'.$x,$f->getLunchAdd());
            $excel->getActiveSheet()->setCellValue('F'.$x,$f->getLunchVeg());
            $excel->getActiveSheet()->setCellValue('G'.$x,$f->getLunchSoup());
            $excel->getActiveSheet()->setCellValue('H'.$x,$f->getLunchVegAdd());
            $sum_trua=$f->getLunch()+ $f->getLunchAdd() + $f->getLunchVeg() +$f->getLunchSoup() +$f->getLunchVegAdd() ;
            $excel->getActiveSheet()->setCellValue('I'.$x,$sum_trua);

            $excel->getActiveSheet()->setCellValue('J'.$x,$f->getDinner());
            $excel->getActiveSheet()->setCellValue('K'.$x,$f->getDinnerAdd());
            $excel->getActiveSheet()->setCellValue('L'.$x,$f->getDinnerVegAdd());

            $excel->getActiveSheet()->setCellValue('M'.$x,$f->getSupper());
            $excel->getActiveSheet()->setCellValue('N'.$x,$f->getSupperVeg());

            $excel->getActiveSheet()->setCellValue('O'.$x,$f->getSeparateTable());
            $excel->getActiveSheet()->setCellValue('P'.$x,$f->getBuffet());

            $excel->getActiveSheet()->setCellValue('Q'.$x,$f->getNote());

            $x++;
            $i++;
        }

        $excel->getActiveSheet()->setCellValue('A'.$x, 'Tổng Cột:');
        $excel->getActiveSheet()->mergeCells('A'.$x.':C'.$x);
        $excel->getActiveSheet()->setCellValue('D'.$x,'=SUM(D4:D'.($x-1).')');
        $excel->getActiveSheet()->getStyle('D'.$x,'=SUM(D4:D'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('E'.$x,'=SUM(E4:E'.($x-1).')');
        $excel->getActiveSheet()->getStyle('E'.$x,'=SUM(E4:E'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('F'.$x,'=SUM(F4:F'.($x-1).')');
        $excel->getActiveSheet()->getStyle('F'.$x,'=SUM(F4:F'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('G'.$x,'=SUM(G4:G'.($x-1).')');
        $excel->getActiveSheet()->getStyle('G'.$x,'=SUM(G4:G'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('H'.$x,'=SUM(H4:H'.($x-1).')');
        $excel->getActiveSheet()->getStyle('H'.$x,'=SUM(H4:H'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );

        $excel->getActiveSheet()->setCellValue('J'.$x,'=SUM(J4:J'.($x-1).')');
        $excel->getActiveSheet()->getStyle('J'.$x,'=SUM(J4:J'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('K'.$x,'=SUM(K4:K'.($x-1).')');
        $excel->getActiveSheet()->getStyle('K'.$x,'=SUM(K4:K'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('L'.$x,'=SUM(L4:L'.($x-1).')');
        $excel->getActiveSheet()->getStyle('L'.$x,'=SUM(L4:L'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );

        $excel->getActiveSheet()->setCellValue('M'.$x,'=SUM(M4:M'.($x-1).')');
        $excel->getActiveSheet()->getStyle('M'.$x,'=SUM(M4:M'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->setCellValue('N'.$x,'=SUM(N4:N'.($x-1).')');
        $excel->getActiveSheet()->getStyle('N'.$x,'=SUM(N4:N'.($x-1).')')->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );

        $excel->getActiveSheet()->getStyle('A'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $x++;

        $excel->getActiveSheet()->setCellValue('A'.$x, 'Tổng Chung:');
        $excel->getActiveSheet()->mergeCells('A'.$x.':C'.$x);

        $excel->getActiveSheet()->mergeCells('D'.$x.':H'.$x);
        $excel->getActiveSheet()->getStyle('D'.$x.':H'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            ]
        );
        $excel->getActiveSheet()->mergeCells('J'.$x.':L'.$x);
        $excel->getActiveSheet()->getStyle('J'.$x.':L'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            ]
        );
        $excel->getActiveSheet()->mergeCells('M'.$x.':N'.$x);
        $excel->getActiveSheet()->getStyle('M'.$x.':N'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            ]

        );

        $excel->getActiveSheet()->setCellValue('D'.($x),'=SUM(D'.($x-1).':H'.($x-1).')');
        $excel->getActiveSheet()->setCellValue('J'.($x),'=SUM(J'.($x-1).':L'.($x-1).')');
        $excel->getActiveSheet()->setCellValue('M'.($x),'=SUM(M'.($x-1).':N'.($x-1).')');

        $excel->getActiveSheet()->getStyle('I4:I'.($x-1))->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $excel->getActiveSheet()->getStyle('A'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
            ]
        );
        $x++;

        //       $excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setRGB('F28A8C');
        $excel->getActiveSheet()->getStyle('A1')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => '83C75D')
                )
            )
        );


        $excel->getActiveSheet()->getStyle('D2:I3')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'F9F400')
                )
            )
        );

        $excel->getActiveSheet()->getStyle('J2:L3')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => '007F54')
                )
            )
        );


        $excel->getActiveSheet()->getStyle('M2:N3')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'FF9933')
                )
            )
        );

        $excel->getActiveSheet()->getStyle('Q2:Q3')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'D7D7D7')
                )
            )
        );

        $excel->getActiveSheet()->getStyle('O2:P3')->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'AF4A92')
                )
            )
        );

//      $excel->getActiveSheet()->getStyle('A2:Q9')->applyFromArray($styleBor);
        $excel->getActiveSheet()->getStyle(
            'A2:' .
            $excel->getActiveSheet()->getHighestColumn() .
            $excel->getActiveSheet()->getHighestRow()
        )->applyFromArray($styleBor);
        unset($styleBor);

        $x=$x+2;

        $excel->getActiveSheet()->setCellValue('A'.$x, 'Những Bộ Phận Chưa Đặt Cơm:');
        $excel->getActiveSheet()->mergeCells('A'.$x.':C'.$x);
        $excel->getActiveSheet()->getStyle('A'.$x.':C'.$x)->applyFromArray(
            [
                'font'  => array(
                    'bold'  => true,
                    'color' => array('rgb' => 'FF0000'),
//                'size'  => 20,
                    'name'  => 'Times New Roman'
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            ]
        );

        $count=bookmealDept::count();
        $date=$f->getDate();
        //     $date= $foodquantity->getDate();
        if($i<=$count) {
            if ($date == '') {
                $date = date('Y-m-d');
            }
            $missdept = "select name from bookmeal_dept where bd_id not in(select distinct bookmeal_dept.bd_id  from bookmeal_dept,bookmeal where bookmeal_dept.bd_id = bookmeal.dept_code and date = '" . $date . "')";
            $arrDept = $this->db->query($missdept)->fetchAll();
            $x = $x + 1;
            $stt = 1;
            foreach ($arrDept as $dept) {
                $excel->getActiveSheet()->setCellValue('B' . $x, $stt . ' ' . $dept[0]);
                $x = $x + 1;
                $stt++;
            }
        }
        $naziv = date("Ymd_his")  . ".xlsx";

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $naziv . '"');
        header('Cache-Control: max-age=0');

  // $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
     $objWriter = new PHPExcel_Writer_Excel2007($excel);
     ob_end_clean();
     $objWriter->save('php://output'); // quan trong de mo len xem dc
   //   $objWriter->save('./upload/'.$naziv);
       exit; // quan trong de mo len xem dc
        $this->session->remove('tblmeal');

    }

}
