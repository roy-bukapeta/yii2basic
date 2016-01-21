<?php
namespace app\widget;


use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helper\Url;


class Test extends Widget
{


    public $image;


    public function init()
    {

        
    }

    public function run()
    {
        if ($this->image == 1) {

           $a = 'ada';

           return $a;

        }else{
            $b = 'kosong';

           return $b;
        }
    }
}