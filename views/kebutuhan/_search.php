<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KebutuhanBarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kebutuhan-barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'jenis_barang') ?>

    <?= $form->field($model, 'spesifikasi_barang') ?>

    <?= $form->field($model, 'tanggal_permintaan_barang') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
