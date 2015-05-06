<?php

class MyClass extends CApplicationComponent {
    public $myvar = array();
    public function convertDate($myvar) {
    	if ($myvar !== '') {
	        $date = DateTime::createFromFormat('d/m/Y', $myvar);
	        return $date->format('Y-m-d');
    	} else {
    		return null;
    	}

    }

    public function convertDatetime($myvar) {
        $date = DateTime::createFromFormat('d/m/Y', $myvar);
        return $date->format('Y-m-d H:i:s');
    } 

}
