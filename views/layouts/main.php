<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

     
    

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Hendrikus Richardo',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Users', 'url' => ['/users']],
/*            ['label' => 'Profil', 'url' => ['/user/settings/profile']],  */
            ['label' => 'Inventaris', 'url' => ['/inventaris']],
            ['label' => 'Kebutuhan Barang', 'url' => ['/kebutuhan']],
            ['label' => 'Map', 'url' => ['/map']],
            ['label' => 'Widget', 'url' => ['/widget']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/user/security/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/user/security/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-right">
                <a href="<?php echo Yii::getAlias('@web'); ?>/index.php/users" style="margin-right:35px; font-weight:bold;">Users</a>
                <a href="<?php echo Yii::getAlias('@web'); ?>/index.php/inventaris" style="margin-right:35px; font-weight:bold;">Inventaris</a>
                <a href="<?php echo Yii::getAlias('@web'); ?>/index.php/kebutuhan" style="margin-right:35px; font-weight:bold;">Kebutuhan</a>
        </p>
    </div>
</footer>
<footer class="footer" style="background:#000   ;">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
