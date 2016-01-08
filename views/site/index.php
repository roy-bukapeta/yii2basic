<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang Didalam Aplikasi Inventaris</h1>

        <p class="lead">Terimkasih Sudah Atas kesempatan yang telah diberikan kepada saya</p>

        <p><a class="btn btn-lg btn-success glyphicon glyphicon-leaf" href="https://www.facebook.com/hendrikus.richardo"> Hendrikus richardo</a></p>
    </div>

    <div class="body-content">


        <!--<img src="<?php echo Yii::getAlias('@web'); ?>/images/8073-k.jpg">-->

 <div class="container">
            <div class="row">
                <h2 class="text-center">Bukapeta</h2>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="box">
                                <div class="box-content">
                                    <h1 class="tag-title">User</h1>
                                    <hr />
                                    <p><a href="<?php echo Yii::getAlias('@web'); ?>/index.php/users"><i class="fa fa-users fa-4x"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="box">
                                <div class="box-content">
                                    <h1 class="tag-title">Inventaris</h1>
                                    <hr />
                                   <p><a href="<?php echo Yii::getAlias('@web'); ?>/index.php/inventaris"><i class="fa fa-university fa-4x"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="box">
                                <div class="box-content">
                                    <h1 class="tag-title">Kebutuhan</h1>
                                    <hr />
                                    <p><a href="<?php echo Yii::getAlias('@web'); ?>/index.php/inventaris"><i class="fa fa-shopping-cart fa-4x"></i></a></p>

                                </div>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
</div>
