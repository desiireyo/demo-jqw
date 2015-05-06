<?php

/**
 * Controller Invtran บันทึกหลักทรัพท์ค้ำประกัน
 */
class InvtranController extends CController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('create', 'update', 'delete', 'save'),
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
        $this->renderPartial('index', array('menucod'=>$menucod));
    }

    public function actionSave() {
        $menucod   = $_POST['menucod'];
        $assettype = $_POST['assettype'];
        $strno     = $_POST['strno'];
        $price     = $_POST['price'];
        $gcode     = $_POST['gcode'];
        $desc      = $_POST['desc'];
        $memo1     = $_POST['memo1'];
        $invtran   = Invtran::model()->findByAttributes(array('strno' => $strno));
        if (empty($invtran)) {
            $invtran = new Invtran();
        };
        $invtran->assettype = $assettype;
        $invtran->strno     = $strno;
        $invtran->price     = $price;
        $invtran->gcode     = $gcode;
        $invtran->desc      = $desc;
        $invtran->memo1     = $memo1;
        $transaction = Yii::app()->db->beginTransaction();
        try {
            if ($invtran->save()) {
                if ($assettype == 1) {
                    $strno         = $_POST['strno'];
                    $engno         = $_POST['engno'];
                    $regno         = $_POST['regno'];
                    $regprov       = $_POST['regprov'];
                    $regdate       = Yii::app()->CMyClass->convertDate($_POST['regdate']);
                    $regexp        = Yii::app()->CMyClass->convertDate($_POST['regexp']);
                    $typedesc      = $_POST['typedesc'];
                    $modeldesc     = $_POST['modeldesc'];
                    $colordesc     = $_POST['colordesc'];
                    $manuyr        = $_POST['manuyr'];
                    $milert        = $_POST['milert'];
                    $insurecode    = $_POST['insurecode'];
                    $insuredate    = Yii::app()->CMyClass->convertDate($_POST['insuredate']);
                    $insureexp     = Yii::app()->CMyClass->convertDate($_POST['insureexp']);
                    $insurecomcode = $_POST['insurecomcode'];
                    $prbcode       = $_POST['prbcode'];
                    $prbdate       = Yii::app()->CMyClass->convertDate($_POST['prbdate']);
                    $prbexp        = Yii::app()->CMyClass->convertDate($_POST['prbexp']);
                    $prbcomcode    = $_POST['prbcomcode'];
                    $assetdetail1  = Assetdetail1::model()->findByAttributes(array('strno' => $strno));
                    if (empty($assetdetail1)) {
                        $assetdetail1 = new Assetdetail1();
                    };
                    $assetdetail1->strno         = $strno;
                    $assetdetail1->engno         = $engno;
                    $assetdetail1->regno         = $regno;
                    $assetdetail1->regprov       = $regprov;
                    $assetdetail1->regdate       = $regdate;
                    $assetdetail1->regexp        = $regexp;
                    $assetdetail1->typedesc      = $typedesc;
                    $assetdetail1->modeldesc     = $modeldesc;
                    $assetdetail1->colordesc     = $colordesc;
                    $assetdetail1->manuyr        = $manuyr;
                    $assetdetail1->milert        = $milert;
                    $assetdetail1->insurecode    = $insurecode;
                    $assetdetail1->insuredate    = $insuredate;
                    $assetdetail1->insureexp     = $insureexp;
                    $assetdetail1->insurecomcode = $insurecomcode;
                    $assetdetail1->prbcode       = $prbcode;
                    $assetdetail1->prbdate       = $prbdate;
                    $assetdetail1->prbexp        = $prbexp;
                    $assetdetail1->prbcomcode    = $prbcomcode;
                    $assetdetail1->save();
                } else if ($assettype == 2) {
                    $strno    = $_POST['strno'];
                    $engno    = $_POST['engno'];
                    $pageno   = $_POST['pageno'];
                    $position = $_POST['position'];
                    $landno   = $_POST['landno'];
                    $survey   = $_POST['survey'];
                    $tumbcode = $_POST['tumbcode'];
                    $aumpcode = $_POST['aumpcode'];
                    $provcode = $_POST['provcode'];
                    $area1    = $_POST['area1'];
                    $area2    = $_POST['area2'];
                    $area3    = $_POST['area3'];
                    $landdate = Yii::app()->CMyClass->convertDate($_POST['landdate']);
                    $assetdetail2  = Assetdetail2::model()->findByAttributes(array('strno' => $strno));
                    if (empty($assetdetail2)) {
                        $assetdetail2 = new Assetdetail2();
                    };
                    $assetdetail2->strno    = $strno;
                    $assetdetail2->engno    = $engno;
                    $assetdetail2->pageno   = $pageno;
                    $assetdetail2->position = $position;
                    $assetdetail2->landno   = $landno;
                    $assetdetail2->survey   = $survey;
                    $assetdetail2->tumbcode = $tumbcode;
                    $assetdetail2->aumpcode = $aumpcode;
                    $assetdetail2->provcode = $provcode;
                    $assetdetail2->area1    = $area1;
                    $assetdetail2->area2    = $area2;
                    $assetdetail2->area3    = $area3;
                    $assetdetail2->landdate = $landdate;
                    $assetdetail2->save();
                } else if ($assettype == 3) {
                    $strno    = $_POST['strno'];
                    $engno    = $_POST['engno'];
                    $address  = $_POST['address'];
                    $location = $_POST['location'];
                    $nearby   = $_POST['nearby'];
                    $typehome = $_POST['typehome'];
                    $area1    = $_POST['area1'];
                    $area2    = $_POST['area2'];
                    $area3    = $_POST['area3'];
                    $area4    = $_POST['area4'];
                    $homeage  = $_POST['homeage'];
                    $assetdetail3  = Assetdetail3::model()->findByAttributes(array('strno' => $strno));
                    if (empty($assetdetail3)) {
                        $assetdetail3 = new Assetdetail3();
                    };
                    $assetdetail3->strno    = $strno;
                    $assetdetail3->engno    = $engno;
                    $assetdetail3->address  = $address;
                    $assetdetail3->location = $location;
                    $assetdetail3->nearby   = $nearby;
                    $assetdetail3->typehome = $typehome;
                    $assetdetail3->area1    = $area1;
                    $assetdetail3->area2    = $area2;
                    $assetdetail3->area3    = $area3;
                    $assetdetail3->area4    = $area4;
                    $assetdetail3->homeage  = $homeage;
                    $assetdetail3->save();
                }
                $transaction->commit();
            }
        } catch (Exception $e) {
            echo $e;
            $transaction->rollback();
        }
        $this->renderPartial('index', array('menucod'=>$menucod)); 
    }

    public function actionView($strno) {
        $invlocat = View_invtran::model()->findByAttributes(array('strno' => $strno));
        echo CJSON::encode($invlocat);
    }

    public function actionValidate($strno) {
        $invtran = Invtran::model()->findByAttributes(array('strno' => $strno));
        if (empty($invtran)) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
}