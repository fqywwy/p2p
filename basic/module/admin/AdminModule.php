<?php

namespace app\module\admin;

class AdminModule extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\admin\controllers';

    public function init(){
        parent::init();
        $this->layout = false;
        // custom initialization code goes here
    }
}
