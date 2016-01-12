<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KebutuhanBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kebutuhan Barang';
?>

<div class="jumbotron">
        <h1><?= $this->title; ?></h1>

        <p class="lead">Terimkasih Sudah Atas kesempatan yang telah diberikan kepada saya</p>

        <p><a class="btn btn-lg btn-success glyphicon glyphicon-leaf" href="https://www.facebook.com/hendrikus.richardo"> Hendrikus richardo</a></p>
    </div>


<div class="kebutuhan-barang-index">


     

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Kebutuhan Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_barang',
            'nama_barang',
            'jenis_barang',
            'spesifikasi_barang',
            'tanggal_permintaan_barang',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
