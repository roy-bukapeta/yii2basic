<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
?>

<div class="jumbotron">
        <h1><?= $this->title; ?></h1>

        <p class="lead">Terimkasih Sudah Atas kesempatan yang telah diberikan kepada saya</p>

        <p><a class="btn btn-lg btn-success glyphicon glyphicon-leaf" href="https://www.facebook.com/hendrikus.richardo"> Hendrikus richardo</a></p>
    </div>

<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'email:email',
            'no_tlp',
            'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
