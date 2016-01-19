<?php


/**
 * @link http://dokumentasi.local-server.link/
 * @copyright Copyright (c) 2015 PT. Buka Media Teknologi
 * @license http://www.bukapeta.co.id/license/
 */


namespace app\widget;


use yii\web\AssetBundle;


class LeafletAssets extends AssetBundle
{

    public $sourcePath = '@app/widget/assets/js/Leaflet/';
    public $js = [
        'src/leaflet.js',
        'plugin/leaflet-fullscreen/Leaflet.fullscreen.min.js',
        'plugin/leaflet-sidebar/L.Control.Sidebar.js',
        'plugin/leafet-utfgrid/leaflet.utfgrid.js',
        'plugin/leaflet-print/jQuery.print.js',
        'plugin/leaflet-print/leaflet.easyPrint.js',
        'plugin/Leaflet-Proj4/lib/proj4-compressed.js',
        'plugin/Leaflet-Proj4/src/proj4leaflet.js',

        // 'esri.js',
        //leaflet draw js
        //'draw/libs/leaflet-src.js',
       /* 'draw/src/Leaflet.draw.js',
        'draw/src/Toolbar.js',
        'draw/src/Tooltip.js',
        //'draw/src/Toolbar.js',
        'draw/src/ext/GeometryUtil.js',
        'draw/src/ext/LatLngUtil.js',
        'draw/src/ext/LineUtil.Intersect.js',
        'draw/src/ext/Polygon.Intersect.js',
        'draw/src/ext/Polyline.Intersect.js',
        'draw/src/draw/DrawToolbar.js',
        'draw/src/draw/handler/Draw.Feature.js',
        'draw/src/draw/handler/Draw.SimpleShape.js',
        'draw/src/draw/handler/Draw.Polyline.js',
        'draw/src/draw/handler/Draw.Circle.js',
        'draw/src/draw/handler/Draw.Marker.js',
        'draw/src/draw/handler/Draw.Polygon.js',
        'draw/src/draw/handler/Draw.Rectangle.js',
        'draw/src/edit/EditToolbar.js',
        'draw/src/edit/handler/EditToolbar.Edit.js',
        'draw/src/edit/handler/EditToolbar.Delete.js',
        'draw/src/Control.Draw.js',

        'draw/src/edit/handler/Edit.Poly.js',
        'draw/src/edit/handler/Edit.SimpleShape.js',
        'draw/src/edit/handler/Edit.Circle.js',
        'draw/src/edit/handler/Edit.Rectangle.js',
        'draw/src/edit/handler/Edit.Marker.js',*/
        'install.js',
        'Legenda.js'
    ];

	public $css = [
	    'src/leaflet.css',
        'plugin/leaflet-fullscreen/leaflet.fullscreen.css',
        'plugin/leaflet-sidebar/L.Control.Sidebar.css',
        'plugin/leaflet-print/easyPrint.css',
        //leaflet draw
        //'draw/dist/leaflet.draw.css'

    ];

    public $depends = [
        'yii\web\YiiAsset',
        '\yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}