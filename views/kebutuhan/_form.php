<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\KebutuhanBarang */
/* @var $form yii\widgets\ActiveForm */
$item = ArrayHelper::map(Users::find()->all(), 'id','nama');
?>
<div class="container">
    <div class="col-lg-4">
        <div class="kebutuhan-barang-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenis_barang')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'spesifikasi_barang')->textArea(['maxlength' => true]) ?>

        <?= $form->field($model, 'tanggal_permintaan_barang')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'tanggal Permintaan Barang ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'autoclose'=>true,
            'format'   => 'mm/dd/yyyy'
                ]
            ]    
        ); ?>

        <?= $form->field($model, 'id')->dropDownList($item, ['prompt'=>'Select Your Name']); ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>  
