<?php
namespace app\widget;

use yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;
use yii\helpers\Url;
use app\widget;


class Style extends InputWidget
{
    
    public $image;

    
    public function run() {
       
        if ($this->image == 1) {

           $a = '<div class="kondisi-satu">Belajar Kondisi Satu</div>';

           return $a;

        }else{
            $b = '<div class="kondisi-dua">Belajar Kondisi Dua</div>';
            return $b;
        }
       
    }
    
    public function init() {
        
        $this->registerAssets();
    }
    
    public function registerAssets() {

        $view = $this->getView();

       StyleAsset::register($view);

 
}
}
