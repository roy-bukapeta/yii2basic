<?php

namespace app\controllers;

use Yii;
//use app\models\KebutuhanBarang;
//use app\models\KebutuhanBarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KebutuhanController implements the CRUD actions for KebutuhanBarang model.
 */
class WidgetController extends Controller{


	public function actionIndex(){

        //$searchModel = new KebutuhanBarangSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('widget'/*, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]*/);
    }
}