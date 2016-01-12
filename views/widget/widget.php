<?php

/* @var $this yii\web\View */

$this->title = 'How To Make Widget';
?>
<?php
use yii\widgets\HelloWidget;
?>
<b><?= HelloWidget::widget(['hendri' => 'Hello Hendrikus']) ?></b>