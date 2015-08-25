<?php 
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;
class HelloController extends Controller {
	public function actionIndex() {

		$request = \YII::$app->request;
		//$id = $request->get('id',20);
		echo "Hello World";
		//echo $id;
	}
	public function actionEntry() {
		$model = new EntryForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			return $this->render('entry-confirm',['model'=>$model]);
		} else {
			return $this->render('entry',['model'=>$model]);
		}
	}
}
