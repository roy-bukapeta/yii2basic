<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <div class="col-lg-6">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'email:email',
            'no_tlp',
            'alamat',
            'geojson',
        ],
    ]) ?>

    </div>

    <div class="col-lg-6">
            <?= app\widget\Leaflet::widget(['options' => 'view']);?>
    </div>

    <?php 

        $json = "
            var Inigeojson = " . $model->geojson .";
            L.geoJson(Inigeojson).addTo(map);
        ";

        $this->registerJs($json);
    ?>

</div>
