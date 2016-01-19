<?php

namespace app\controllers;

use Yii;
use app\models\Inventaris;
use app\models\InventarisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\web\CUploadedFile;

/**
 * InventarisController implements the CRUD actions for Inventaris model.
 */
class InventarisController extends Controller
{
    public function behaviors()
    {

        return[
            'return'=>[
                'class' => AccessControl::classname(),
                'only'=>['create','update'],
                'rules'=>[
                    [   
                        'allow'=>true,
                        'roles'=>['@']
                    ],
                ]
            ],      'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['post'],
                    ],
                ],
        ];
    }

    /**
     * Lists all Inventaris models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InventarisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inventaris model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Inventaris model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Inventaris();

        if ($model->load(Yii::$app->request->post())) {

            $imageName = $model->nama_barang;

            $model->file = UploadedFile::getInstance($model,'file');

            $model->file->saveAs( 'uploads/'.$imageName.'.'.$model->file->extension);
            
            $model->logo = $imageName.'.'.$model->file->extension;

            $tmpfile = UploadedFile::getInstance($model,'attachment');

            $tmpfile_contents = file_get_contents( $tmpfile->tempName );

            $model->attachment = base64_encode($tmpfile_contents);

            $model->save();

            return $this->redirect(['view', 'id' => $model->id_inventaris]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Inventaris model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post() &&  $model->save())) {

            return $this->redirect(['view', 'id' => $model->id_inventaris]);


        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Inventaris model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $hapus             = $this->findModel($id); 
        $namafile          = $hapus['logo']; 
    
        unlink(Yii::getAlias('@app').'/web/uploads/'. $namafile);

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Inventaris model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Inventaris the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Inventaris::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
