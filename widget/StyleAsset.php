<?php


/**
 * @link http://dokumentasi.local-server.link/
 * @copyright Copyright (c) 2015 PT. Buka Media Teknologi
 * @license http://www.bukapeta.co.id/license/
 */


namespace app\widget;


use yii\web\AssetBundle;


class StyleAsset extends AssetBundle
{

    public $sourcePath = '@app/widget/assets/js/Leaflet/';



	public $css =[
				  'css/style.css'];

	public $depends = [
		          'yii\web\YiiAsset',
		          '\yii\web\JqueryAsset',
		          // 'yii\bootstrap\BootstrapAsset',
    ];
}