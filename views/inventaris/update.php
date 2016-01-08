<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */

$this->title = 'Update Inventaris: ' . ' ' . $model->id_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_inventaris, 'url' => ['view', 'id' => $model->id_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
