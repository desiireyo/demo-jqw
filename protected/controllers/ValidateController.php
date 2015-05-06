<?php

class ValidateController extends CController {

	public function actionFindexit($table,$field,$code) {
        $model = Yii::app()->db->createCommand()->select()->from($table)->where($field.'=:id', array(':id'=>$code))->queryAll();
        if (empty($model)) { echo 'false'; } else { echo 'true'; }
    }

    public function actionFindexit2($table,$field1,$field2,$code1,$code2) {
        $model = Yii::app()->db->createCommand()->select()->from($table)->where($field1.'=:id1 and '.$field2.'=:id2', array(':id1'=>$code1, ':id2'=>$code2))->queryAll();
        if (empty($model)) { echo 'false'; } else { echo 'true'; }
    }

	public function actionFindvalue($table,$field,$code,$fieldv) {
        $model = Yii::app()->db->createCommand()->select($fieldv)->from($table)->where($field.'=:id', array(':id'=>$code))->query();
        $model->bindColumn(1, $value);
        $model->read();
        echo $value;
    }

    public function actionFindvalue2($table,$field1,$field2,$code1,$code2,$fieldv) {
        $model = Yii::app()->db->createCommand()->select($fieldv)->from($table)->where($field1.'=:id1 and '.$field2.'=:id2', array(':id1'=>$code1, ':id2'=>$code2))->query();
        $model->bindColumn(1, $value);
        $model->read();
        echo $value;
    }


    public function actionCheckRight() {
        $systemcod = 'LOAN';
        $menucode  = $_POST['menucode'];
        $userid    = $_POST['userid'];
        $insert_Right = true;
        $edit_Right   = true;
        $del_Right    = true;
        $sql = "select m_insert, m_edit, m_delete from menutrn where systemcod = '".$systemcod."' and menutrncod = '".$menucode."' and userid = '".$userid."' ";
        $command = Yii::app()->db->createCommand($sql);
        $model = $command->query();
        $model->bindColumn(1, $m_insert);
        $model->bindColumn(2, $m_edit);
        $model->bindColumn(3, $m_delete);
        $model->read();
        if ($m_insert == 'T') { $insert_Right = false; };
        if ($m_edit == 'T')   { $edit_Right   = false; };
        if ($m_delete == 'T') { $del_Right    = false; };
        $array = array(
            "m_insert" => $insert_Right,
            "m_edit" => $edit_Right,
            "m_delete" => $del_Right ,
        );
        echo CJSON::encode($array);
    }

}
