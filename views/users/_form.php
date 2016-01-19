<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">

		<div class="users-form">

	    <?php $form = ActiveForm::begin(); ?>

	    <div class="row">
	    	<div class="col-lg-6">
			    <?= $form->field($model, 'nama')->textInput() ?>

			    <?= $form->field($model, 'email')->textInput() ?>

			    <?= $form->field($model, 'no_tlp')->textInput() ?>

			    <?= $form->field($model, 'alamat')->textInput() ?>

			    <?= $form->field($model, 'geojson')->textInput() ?>

			    <?= $form->field($model, 'type_geometry')->textInput() ?>

			    <div class="form-group">
			        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			    </div>

			</div>

			<div class="col-lg-6">
					<?= app\widget\Leaflet::widget(['options' => 'view']);?>
			</div>


			<script>
					var json =
							L.geoJson(json).addTo(map);
			</script>

			 <?php 

			        $json = "
			            var Inigeojson = " . $model->geojson .";
			            L.geoJson(Inigeojson).addTo(map);
			        ";

			        $this->registerJs($json, yii\web\View::POS_END);
    		?>

		</div>

	    <?php ActiveForm::end(); ?>

		</div>
	</div>
