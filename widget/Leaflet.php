<?php
namespace app\widget;

use yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;
use yii\helpers\Url;


class Leaflet extends InputWidget
{
    
    public $randomkey;

    public $options;
    
    public $width;
    
    public function run() {
       
        
        $html_tag = '';
        
        if ($this->randomkey) {
            if ($this->width) {
                $html_tag.= '<div id="map' .$this->randomkey . '" style="width:100%;height:' . $this->width . 'px;"></div>';
            } 
            else {
                $html_tag.= '<div id="map' . $this->randomkey . '" style="width:100%;height:500px;"></div>';
            }
            $html_tag.= '<div id="sidebar"></div>';
        } 
        else {
            if ($this->width) {
                $html_tag.= '<div id="map" style="width:100%;height:' . $this->width . 'px;"></div>';
            } 
            else {
                $html_tag.='<div id="map" style="width:100%;height:500px;"></div>';
            }
            $html_tag.= '<div id="sidebar"></div>';
        }
        
        return $html_tag;
    }
    
    public function init() {
        
        $this->registerAssets();
    }
    
    public function registerAssets() {
        $view = $this->getView();

        /* if ($this->options == 'view') {
        }*/

        if ($this->randomkey) {
            
            LeafletAssetsRandom::register($view);
            
            $random = $this->randomkey;
            
            $scriptJS = '

               

                var osmMap' . $random . ' = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {  
                    attribution: "OpenStreetMap",
                    minZoom: 0,
                    maxZoom: 20,



                var hereMap' . $random . ' = L.tileLayer("https://{s}.{base}.maps.cit.api.here.com/maptile/2.1/maptile/{mapID}/satellite.day/{z}/{x}/{y}/256/png8?app_id={app_id}&app_code={app_code}", {
                    attribution: "Here",
                    subdomains: "1234",
                    mapID: "newest",
                    app_id: "DemoAppId01082013GAL",
                    app_code: "AJKnXv84fjrb0KIHawS0Tg",
                    base: "aerial",
                    minZoom: 0,
                    maxZoom: 20,
                });

                var baseMaps' . $random . ' = {
                    "Esri": esriMap' . $random . ',
                    "Osm": osmMap' . $random . ',
                    "Here": hereMap' . $random . ',
                };

                var map' . $random . ' = L.map("map' . $random . '", {fullscreenControl: true,  layers: [hereMap' . $random . ']}).setView([-2, 125], 4);


                layercontrol' . $random . ' = L.control.layers(baseMaps' . $random . ').addTo(map' . $random . ');
                
                L.control.scale().addTo(map' . $random . ');

                
            ';
            $view->registerJs($scriptJS);
            $view->registerJsFile('https://cdn.jsdelivr.net/leaflet.esri/1.0.0/esri-leaflet.js', ['depends' => [LeafletAssetsRandom::className() ]]);
        } 
        else {
            LeafletAssets::register($view);
            $view->registerJsFile('https://cdn.jsdelivr.net/leaflet.esri/1.0.0/esri-leaflet.js', ['depends' => [LeafletAssets::className() ]]);
        }
    }

 
}
