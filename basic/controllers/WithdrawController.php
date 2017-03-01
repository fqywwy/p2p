<?php
	namespace app\controllers;
	use Yii;
	use yii\filters\AccessControl;
	use yii\web\Controller;
	use yii\filters\VerbFilter;
	use app\models\LoginForm;
	use app\models\ContactForm;
	use app\models\Withdraw;
	class WithdrawController extends Controller{
		public $layout = 'left';
	    public function actionIndex(){
	        return $this->render("index");
	    }
	}
?>