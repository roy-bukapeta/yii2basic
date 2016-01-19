<?php
namespace app\widget;

use yii\base\Widget;
use yii\helpers\Html;


class Test extends Widget
{


    public $image;

    public function init()
    {

        if ($this->image) {

            $this->image = 'ada';
        }else{
            $this->image = 'kosong';
        }
    }

    public function run()
    {
        return Html::encode($this->image);
    }
}