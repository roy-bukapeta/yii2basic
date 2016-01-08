<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */

$this->title = $model->id_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_inventaris], [
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
            //'id_inventaris',
            'user.nama',
            'nama_barang',
            'kode_barang',
            'jenis_barang',
            'tahun_pembelian',
        ],
    ]) ?>

</div>
