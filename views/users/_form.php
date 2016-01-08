<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">
    <div class="col-lg-4">
		<div class="users-form">

	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'nama')->textInput() ?>

	    <?= $form->field($model, 'email')->textInput() ?>

	    <?= $form->field($model, 'no_tlp')->textInput() ?>

	    <?= $form->field($model, 'alamat')->textInput() ?>

	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

		</div>
	</div>
</div>
