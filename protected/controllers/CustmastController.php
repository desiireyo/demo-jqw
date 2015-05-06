<?php

class CustmastController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('create', 'update', 'delete', 'save', 'DataCustmast', 'DataBooklocat', 'Addbookcode', 'Delbookcode', 'Editbookcode', 'Getcustaddr', 'Getcustaddr2', 'Validbooklocat', 'Validatedata', 'TestSec','loadModelbooklocat'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('admin'),
                'users' => array('admin'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex($menucod) {
        unset(Yii::app()->session['datacustaddr']);
		unset(Yii::app()->session['datacustaddr_chk']);
        $this->renderPartial('index', array('menucod'=>$menucod));
    }

    public function actionCreate($menucod) {
        $this->renderPartial('index_search', array('menucod'=>$menucod));
    }

    public function actionView($menucod,$custcode) {
        //$custcode = $_POST['custcode'];
        if (isset($custcode)) {
            $this->renderPartial('view', array('custmast' => $this->loadModel($custcode),'menucod'=>$menucod));
        }
    }

	public function actionUpdate($menucod,$custcode) {

		//$custcode = $_POST['custcode'];
        if (isset($custcode)) {
            $this->renderPartial('update', array('custmast' => $this->loadModel($custcode),'menucod'=>$menucod));
        }
    }

    public function actionDelete() {
		$custcode = $_POST['custcode'];
        $menucod = $_POST['menucod'];
        if (!empty($custcode)) {//ตรวจสอบว่าได้ส่งค่ามาให้ลบหรือไม่
            //Custmast::model()->deleteByPk($custcode);
            //echo $custcode;
			Custmast::model()->deleteAllByAttributes(array('custcode'=>$custcode));
			//$this->renderPartial('index', array('menucod'=>$menucod));
		}
    }

    public function actionDataCustmast() {
        $custmast = Custmast::model()->findAll();
        echo CJSON::encode($custmast);
    }

    public function actionDataBooklocat($custcode){
        // $criteria = new CDbCriteria();
		// $criteria->select = "bookcode";
        // $criteria->condition = "custcode =:custcode";
        // $criteria->params = array(':custcode' => $custcode);
        // $booklocat = Booklocat::model()->findAll($criteria);
		//$booklocat = Booklocat::model()->findAllbySql("select bookcode from booklocat where custcode='$custcode'");
		$sql = "select bookcode,bookdesc,balance,datebalance,'view' as status,bookcode as bookcode_chk from booklocat where custcode='$custcode' order by custcode";
        $command = Yii::app()->db->createCommand($sql);
        $booklocat = $command->queryAll();
		if(!empty($booklocat)){
			Yii::app()->session['datacustaddr'] = $booklocat;
			Yii::app()->session['datacustaddr_chk'] = $booklocat;
		}
        echo CJSON::encode($booklocat);
		//print_r($booklocat);
    }

	public function actionValidatedata(){
		$data1 = $_POST["data1"];
		$data2 = $_POST["data2"];
		$frmTable = $_POST["frmTable"];
		$frmField = $_POST["frmField"];
		$status = $_POST["status"];
        $rowindex = $_POST["rowindex"];

        if($frmTable=='booklocat'){
            $data1 = $this ->loadModelbooklocat($data2);
            //$data1 = $idno_booklocat ->idno;
        }
        //$booklocat->custcode = $_POST['custcode'];
		if((isset($_POST['data1'])) && (isset($_POST['data2']))){
            $z = 0;
            $y = 0;
            if (Yii::app()->session['datacustaddr'] == null) {
                $datacustaddr = array();
            } else {
                $datacustaddr = Yii::app()->session['datacustaddr'];
            }
            // foreach ($datacustaddr as $row) {
            //     if ($data2 == $row['bookcode'] && $data1 != $rowindex) {
            //        $z++;
            //     }
            // }
            $size = count($datacustaddr);
            for ($i=0; $i<$size; $i++) {
                if (isset($datacustaddr[$i])) {
                    //print_r($data2." / ".$datacustaddr[$i]["bookcode"]." :::: ".$i." / ".$rowindex);
                    //echo "<br/>";
                    if ($data2 == $datacustaddr[$i]["bookcode"] && $i != $rowindex) {
                        $z++;
                        //echo "z : ".$z;
                    }
                }
            }
            // $size_chk = count($datacustaddr_chk);
            // for ($j=0; $j < $size_chk; $j++) {
            //     if (isset($datacustaddr_chk[$j])) {
            //         if ($data2 == $datacustaddr_chk[$j]["bookcode_chk"] && $j != $rowindex) {
            //             $y++;
            //         }
            //     }
            // }
            // echo $j;
            if($z==0){
    			$sql = "select * from $frmTable where idno<>$data1 and $frmField='$data2'";
                //print_r($sql);
                //echo "<br/>";
    			$command = Yii::app()->db->createCommand($sql);
    			$booklocat = $command->queryAll();

    			if(empty($booklocat)){
                    echo "true";
    			}else{
    				echo "false3";
    			}
            }else{
                echo "false2";
            }
		}else{
			echo "false1";
		}
        //echo $rowindex;
	}

    public function actionTestSec(){
        $transaction = Yii::app()->db->beginTransaction();
        try{

            $sql = "delete from booklocat where bookcode ='T1-002'";
            $command = Yii::app()->db->createCommand($sql);
            $booklocat = $command->query();

            $sql = "INSERT INTO booklocat (custcode, bookcode, bookdesc) VALUES ('TEST1', 'T1-002', 'T1-0022')";
            $command = Yii::app()->db->createCommand($sql);
            $booklocat = $command->query();

            $transaction->commit();
        }
        catch (Exception $e) {
            $transaction->rollback();
            //Yii::log('Unable to save order: '.$e->getMessage(), \CLogger::LEVEL_ERROR, 'core.models.store.Order');
            echo $e;
        }

    }

    public function actionSave() {
		$chkstatus = $_POST['chkstatus'];
        $menucod = $_POST['menucod'];
		if($chkstatus == 'insert'){
			$custmast = new Custmast();
		}else if($chkstatus =='update'){
			$custmast = $this->loadModel($_POST['custcode_id']);
		}
		$custmast->custcode    = $_POST['custcode'];
		$custmast->locatnm    = $_POST['locatnm'];
		$custmast->locaddr1   = $_POST['locaddr1'];
		$custmast->locaddr2   = $_POST['locaddr2'];
		$custmast->telp       = $_POST['telp'];
		$custmast->shortl     = $_POST['shortl'];
		$custmast->aumpcod    = $_POST['aumpcod'];
		$custmast->provcod    = $_POST['provcod'];
		$custmast->postcod    = $_POST['postcod'];
		$custmast->accmstcod  = $_POST['accmstcod'];
		$custmast->accmstcod2 = $_POST['accmstcod2'];

        if (Yii::app()->session['datacustaddr'] == null) {
            $datacustaddr = array();
        } else {
            $datacustaddr = Yii::app()->session['datacustaddr'];
        }
		if (Yii::app()->session['datacustaddr_chk'] == null) {
			$datacustaddr_chk = array();
        } else {
			$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
        }

		//$arrdiff = array_udiff($datacustaddr_chk,$datacustaddr,create_function('$a,$b','if ($a===$b){ return 0; } return ($a>$b)?1:-1;'));
		//$newData = array_udiff($data,$attributeNames,create_function('$x,$y','return !is_string($x) || !is_string($y) ? -1 : strcmp($x,$y);'));
		//print_r($arrdiff);
		//echo "<br/>---------<br/>";

        $transaction = Yii::app()->db->beginTransaction();
        try {
            if ($custmast->save()) {
                foreach ($datacustaddr_chk as $row){
					$chk = Booklocat::model()->findByAttributes(array('bookcode' => $row['bookcode_chk']));

                    //print_r($chk." vs ".$row['bookcode_chk']);

					if((!empty($chk)) && ($row['status'] === 'delete')){
						$booklocat = Booklocat::model()->findByAttributes(array('bookcode' => $row['bookcode_chk']));
						$booklocat->delete();
					}else if((!empty($chk)) && ($row['status'] === 'update')){
						$booklocat = Booklocat::model()->findByAttributes(array('bookcode' => $row['bookcode_chk']));
						$booklocat->custcode = $_POST['custcode'];
						$booklocat->bookcode = $row['bookcode'];
						$booklocat->bookdesc = $row['bookdesc'];
						$booklocat->balance = $row['balance'];
						$booklocat->datebalance = Yii::app()->CMyClass->convertDate($row['datebalance']);
						$booklocat->save();
					}else if((empty($chk)) && ($row['status'] === 'insert' || $row['status'] === 'update')) {
						$booklocat = new Booklocat();
						$booklocat->custcode = $_POST['custcode'];
						$booklocat->bookcode = $row['bookcode'];
						$booklocat->bookdesc = $row['bookdesc'];
						$booklocat->balance = $row['balance'];
						$booklocat->datebalance = Yii::app()->CMyClass->convertDate($row['datebalance']);
						$booklocat->save();
					}
                }
                $transaction->commit();
                unset(Yii::app()->session['datacustaddr']);
				unset(Yii::app()->session['datacustaddr_chk']);
                //$this->renderPartial('view', array('custmast' => $custmast->custcode));
            }
        } catch (Exception $e) {
            $transaction->rollback();
        }
        $this->renderPartial('index', array('menucod'=>$menucod));
    }

    public function actionAddbookcode() {
        $z = 0;
        $bookcode = $_POST['bookcode'];
        $bookdesc = $_POST['bookdesc'];
        if ($_POST['balance'] == '') {
            $balance = 0;
        } else {
            $balance = $_POST['balance'];
        }
        $datebalance = $_POST['datebalance'];
		$status = $_POST['status'];
        $bookcode_chk = $_POST['bookcode'];
        // $balance = '';
        // $datebalance = '';
        // $status = '';
        // $bookcode_chk = '';

        if (!empty($bookcode)) {
            $chk = Booklocat::model()->findByAttributes(array('bookcode' => $bookcode));
            if (Yii::app()->session['datacustaddr'] == null) {
                $datacustaddr = array();
                $datacustaddr_chk = array();
            } else {
                $datacustaddr = Yii::app()->session['datacustaddr'];
                $datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
            }
            foreach ($datacustaddr as $row) {
                if ($bookcode == $row['bookcode']) {
                   $z++;
                }
            }
            // for session bookcode_chk
            // if (Yii::app()->session['datacustaddr_chk'] == null) {
            //     $datacustaddr_chk = array();
            // }else {
			// 	$datacustaddr = Yii::app()->session['datacustaddr_chk'];
            // }
            // foreach ($datacustaddr_chk as $row) {
            //     if ($bookcode == $row['bookcode']) {
            //        $z++;
            //     }
            // }


            if (empty($chk) && ($z == 0)){
                $session = array('bookcode' => $bookcode,
                    'bookdesc' => $bookdesc,
                    'balance' => $balance,
                    'datebalance' => $datebalance,
					'status' => $status,
					'bookcode_chk' => $bookcode_chk);

                $size = count($datacustaddr);
                $datacustaddr[$size] = $session;
                $size_chk = count($datacustaddr_chk);
                $datacustaddr_chk[$size_chk] = $session;
                Yii::app()->session['datacustaddr'] = $datacustaddr;
				Yii::app()->session['datacustaddr_chk'] = $datacustaddr_chk;
                echo 'true';
            } else {
                echo 'false';
            }
        }
    }

    public function actionDelbookcode() {
        $rowindex = $_POST['rowindex'];
		$status = $_POST['status'];
        $newdatacustaddr = array();
        if (Yii::app()->session['datacustaddr'] == null) {
            $datacustaddr = array();
        } else {
            $datacustaddr = Yii::app()->session['datacustaddr'];
        }

		if (Yii::app()->session['datacustaddr_chk'] == null) {
            $datacustaddr_chk = array();
        } else {
			$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];

			$datacustaddr_chk[$rowindex]['status'] = 'delete';
			Yii::app()->session['datacustaddr_chk'] = $datacustaddr_chk;
        }

        $size = count($datacustaddr);
        unset($datacustaddr[$rowindex]);
        $j = 0;
        for ($i=0; $i < $size; $i++) {
            if (isset($datacustaddr[$i])) {
                $newdatacustaddr[$j] = $datacustaddr[$i];
                $j++;
            }
        }
        Yii::app()->session['datacustaddr'] = $newdatacustaddr;
        echo 'true';
    }

    public function actionEditbookcode() {
        $rowindex = $_POST['rowindex'];
        $bookcode = $_POST['bookcode'];
        $bookdesc = $_POST['bookdesc'];
        if ($_POST['balance'] == '') {
            $balance = 0;
        } else {
            $balance = $_POST['balance'];
        }
        $datebalance = $_POST['datebalance'];
		$status = $_POST['status'];
		$bookcode_chk = $_POST['bookcode_chk'];

        if (Yii::app()->session['datacustaddr'] == null) {
            $datacustaddr = array();
        } else {
            $datacustaddr = Yii::app()->session['datacustaddr'];
			//$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
        }
        if (Yii::app()->session['datacustaddr_chk'] == null) {
            $datacustaddr_chk = array();
        } else {
			$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
        }
        $datacustaddr[$rowindex]['bookcode']    = $bookcode;
        $datacustaddr[$rowindex]['bookdesc']    = $bookdesc;
        $datacustaddr[$rowindex]['balance']     = $balance;
        $datacustaddr[$rowindex]['datebalance'] = $datebalance;
		$datacustaddr[$rowindex]['status'] = $status;
		$datacustaddr[$rowindex]['bookcode_chk'] = $bookcode_chk;
		Yii::app()->session['datacustaddr'] = $datacustaddr;

		$datacustaddr_chk[$rowindex]['bookcode']    = $bookcode;
        $datacustaddr_chk[$rowindex]['bookdesc']    = $bookdesc;
        $datacustaddr_chk[$rowindex]['balance']     = $balance;
        $datacustaddr_chk[$rowindex]['datebalance'] = $datebalance;
		$datacustaddr_chk[$rowindex]['status'] = $status;
		$datacustaddr_chk[$rowindex]['bookcode_chk'] = $bookcode_chk;
		Yii::app()->session['datacustaddr_chk'] = $datacustaddr_chk;

        echo 'true';
    }

    public function actionGetcustaddr() {
        if (Yii::app()->session['datacustaddr'] == null) {
            $datacustaddr = array();
        } else {
            $datacustaddr = Yii::app()->session['datacustaddr'];
        }
		if (Yii::app()->session['datacustaddr_chk'] == null) {
			$datacustaddr_chk = array();
        } else {
			$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
        }
        echo CJSON::encode($datacustaddr);
		//echo "<br/>";
		//print_r($datacustaddr_chk);
    }

	public function actionGetcustaddr2() {
		if (Yii::app()->session['datacustaddr'] == null) {
            $datacustaddr = array();
        } else {
            $datacustaddr = Yii::app()->session['datacustaddr'];
        }
		if (Yii::app()->session['datacustaddr_chk'] == null) {
			$datacustaddr_chk = array();
        } else {
			$datacustaddr_chk = Yii::app()->session['datacustaddr_chk'];
        }
		$arrdiff = array_udiff($datacustaddr_chk,$datacustaddr,create_function('$a,$b','if ($a===$b){ return 0; } return ($a>$b)?1:-1;'));

		echo CJSON::encode($datacustaddr);
		echo "<br/>--------------<br/>";
        echo CJSON::encode($datacustaddr_chk);
		echo "<br/>--------------<br/>";
        echo CJSON::encode($arrdiff);
		//echo "<br/>";
		//print_r($datacustaddr_chk);
    }

    // Uncomment the following methods and override them if needed

    public function filters() {
        // return the filter configuration for this controller, e.g.:
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    //โหลดข้อมูลสาขา
    public function loadModel($custcode) {
        $model = Custmast::model()->findByPk($custcode);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    //โหลดข้อมูล booklocat
    public function loadModelbooklocat($bookcode) {
        //$model = Booklocat::model()->findByAttributes(array('bookcode' => $bookcode));
        $sql = "select idno from booklocat where bookcode='$bookcode'";
        //print_r($sql);
        $command = Yii::app()->db->createCommand($sql);
        $booklocat = $command->query();
        $booklocat->bindColumn(1, $idno);
        if($idno==''){
            $idno=0;
        }
        return $idno;
    }

    //ฟังก์ชั่นตรวจสอบค่าที่ส่งมา
    function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] == 'custmast') {
            echo TbActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
