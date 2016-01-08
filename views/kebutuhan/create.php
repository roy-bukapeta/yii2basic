<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KebutuhanBarang */

$this->title = 'Create Kebutuhan Barang';
$this->params['breadcrumbs'][] = ['label' => 'Kebutuhan Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kebutuhan-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
