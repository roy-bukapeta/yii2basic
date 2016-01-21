        var esriMap = L.tileLayer("https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}", {
                    attribution: "Esri",
                    minZoom: 0,
                    maxZoom: 20,
                });

        var osmMap = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {  
            attribution: "OpenStreetMap",
            minZoom: 0,
            maxZoom: 20,
        });

        var hereMap = L.tileLayer("https://{s}.{base}.maps.cit.api.here.com/maptile/2.1/maptile/{mapID}/satellite.day/{z}/{x}/{y}/256/png8?app_id={app_id}&app_code={app_code}", {
            attribution: "Here",
            subdomains: "1234",
            mapID: "newest",
            app_id: "DemoAppId01082013GAL",
            app_code: "AJKnXv84fjrb0KIHawS0Tg",
            base: "aerial",
            minZoom: 0,
            maxZoom: 20,
        });


        var baseMaps = {
            "Esri": esriMap,
            "Osm": osmMap,
            "Here": hereMap,
        };

        var map = L.map("map", {fullscreenControl: true,  layers: [hereMap]}).setView([-2, 125], 4);

        var options = {
           key: "873e91818a81770ead632470f0ba9325",
           limit: 10
        };

        layercontrol = L.control.layers(baseMaps).addTo(map);
        
        L.easyPrint().addTo(map)

        drawnItems = L.featureGroup().addTo(map);

            map.addControl(new L.Control.Draw({
                draw : {
                    polygon : true  ,
                    polyline : true,
                    rectangle : true,
                    circle : false

                },
                edit: { featureGroup: drawnItems }
                    }));

        function toWKT3(layer) {
            var lng, lat, coords = [];
            if (layer instanceof L.Polygon || layer instanceof L.Polyline) {
                var latlngs = layer.getLatLngs();
                for (var i = 0; i < latlngs.length; i++) {
                latlngs[i]
                coords.push(latlngs[i].lng + " " + latlngs[i].lat);
                  if (i === 0) {
                    lng = latlngs[i].lng;
                    lat = latlngs[i].lat;
                  }
          };
                if (layer instanceof L.Polygon) {
                    return "POLYGON((" + coords.join(",") + "," + lng + " " + lat + "))";
                } else if (layer instanceof L.Polyline) {
                    return "LINESTRING(" + coords.join(",") + ")";
                }
            } else if (layer instanceof L.Marker) {
                return "POINT(" + layer.getLatLng().lng + " " + layer.getLatLng().lat + ")";
            }
        }



            
       map.on('draw:created', function (e) {
            var type = e.layerType,
                layer = e.layer;


            // if (type === 'marker' || type ==='circle') {
            //     //layer.bindPopup('A popup!');
            //     //var textGeojson = '{"type": "Feature","properties": {},"geometry": {"type": "Point","coordinates": ['+layer._latlng.lat+','+layer._latlng.lng+']}';
                

            //     //var textGeojson = JSON.stringify(layer.toGeoJSON()
            //     //console.log(layer.toGeoJSON());
            //     //document.getElementById('users-geojson').value = textGeojson;

            //     var textGeojson = JSON.stringify(layer.toGeoJSON());
            //     console.log(textGeojson);

            //     document.getElementById('users-geojson').value = textGeojson;

            // }else if(type === 'polygon' || type === 'rectangle' || type === 'LineString'){
            //     var a = layer.getLatLngs();
            //     var geo = []
            //     for (i = 0; i < a.length; i++) {
            //         var geojson = [a[i]["lng"],a[i]["lat"]];
            //         geo.push(geojson);
            //     }

            //     console.log(layer.toGeoJSON());
                // var textGeojson = '{"type": "FeatureCollection","features": [{"type": "Feature","properties": {},"geometry": {"type": "Polygon","coordinates": ['+JSON.stringify(jj)+']}}]}';
                var textGeojson = JSON.stringify(layer.toGeoJSON());
                console.log(textGeojson);

                document.getElementById('users-geojson').value = toWKT3(e.layer);
                document.getElementById('users-type_geometry').value = type;

            //console.log(layer);
            
            
                  drawnItems.addLayer(layer);

        });

        map.on('draw:edited', function (e) {
            var layers = e.layers;
            layers.eachLayer(function (layer) {


                var textGeojson = JSON.stringify(layer.toGeoJSON());
                console.log(textGeojson);

                document.getElementById('users-geojson').value = textGeojson;
                document.getElementById('users-type_geometry').value = type;
            });
        });

        map.on('draw:deleted', function (e) {
            var layers = e.layers;
            layers.eachLayer(function (layer) {
                var textGeojson = JSON.stringify(layer.toGeoJSON());
                console.log(textGeojson);


                document.getElementById('users-geojson').value = '';
                document.getElementById('users-type_geometry').value = '';
            });
        });
        
        /*For Add Sidebar*/
        /*
        
        var sidebar = L.control.sidebar('sidebar', {
            position: 'right'
        });

        map.addControl(sidebar);*/

