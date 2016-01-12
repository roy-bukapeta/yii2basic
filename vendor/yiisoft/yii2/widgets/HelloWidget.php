<?php
namespace yii\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    public $hendri;

    public function init()
    {
        parent::init();
        if ($this->hendri === null) {
            $this->hendri = 'hello';
        }
    }

    public function run()
    {
        return Html::encode($this->hendri);
    }
}