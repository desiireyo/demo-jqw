<?php

class SearchController extends Controller {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('searchtext'),
                'users' => array('@'),
            ),
            array('deny',
                'users'=>array('*'),
            ),            
        );
    }
    
    public function actionIndex() {
        $model    = array();
        $param1   = '';
        $menucod  = '';
        foreach ( $_POST as $key => $value ) {
            if ($key == 'show') {
                $show = $value;
            }
            if ($key == 'returnid') {
                $returnid = $value;
            }
            if ($key == 'param1') {
                $param1 = $value;
            }
            if ($key == 'menucod') {
                $menucod = $value;
            }
        }
        $this->renderPartial('index', array(
            'model' => $model,
            'show' => $show,
            'returnid' => $returnid,
            'param1' => $param1,
            'menucod' => $menucod,
        ));
    }
    
    public function actionSearchtext() {
        $sqltxt = $_POST['sqltxt'];
        $param1 = "%".strtoupper($_POST['param1'])."%";
        $param2 = $_POST['param2'];
        $oDbConnection = Yii::app()->db;
        $oCommand = $oDbConnection->createCommand($sqltxt);
        $oCommand->bindParam(':param1', $param1, PDO::PARAM_STR);
        if ($param2 !== "") {
            $oCommand->bindParam(':param2', $param2, PDO::PARAM_STR);
        }
        $oCDbDataReader = $oCommand->queryAll();
        echo CJSON::encode($oCDbDataReader);
    }

}
