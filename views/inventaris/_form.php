<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */
/* @var $form yii\widgets\ActiveForm */
$item = ArrayHelper::map(Users::find()->all(), 'id','nama');

?>
<div clas="container">
    <div class="col-lg-4">
        <div class="inventaris-form">

            <?php $form = ActiveForm::begin(); ?>

            
            <?= $form->field($model, 'id')->dropDownList($item,['prompt'=>'Select Your Name']); ?>

            <?= $form->field($model, 'nama_barang')->textInput() ?>

            <?= $form->field($model, 'kode_barang')->textInput() ?>

            <?= $form->field($model, 'jenis_barang')->textInput() ?>

            <?= $form->field($model, 'tahun_pembelian')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter birth date ...'],
            'pluginOptions' => [
                'autoclose'=>true,
                'autoclose'=>true,
                'format'   => 'mm/dd/yyyy'
                    ]
                ]    
            ); ?>



            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>