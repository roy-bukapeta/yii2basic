<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helper\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InventarisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventaris';
?>

<div class="jumbotron">
        <h1><?= $this->title; ?></h1>

        <p class="lead">Terimkasih Sudah Atas kesempatan yang telah diberikan kepada saya</p>

        <p><a class="btn btn-lg btn-success glyphicon glyphicon-leaf" href="https://www.facebook.com/hendrikus.richardo"> Hendrikus richardo</a></p>
    </div>
<div class="inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_inventaris',
            'user.nama',
            'nama_barang',
            'kode_barang',
            'jenis_barang',
            'tahun_pembelian',
             [
                'attribute'   => 'image',
                'format'      => 'html',    
                'value'       => function ($data) {
                        return Html::img(Yii::getAlias('@web').'/uploads/'. $data['logo'],
                            ['width'  => '80px'],
                            ['height' => '80px']);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
