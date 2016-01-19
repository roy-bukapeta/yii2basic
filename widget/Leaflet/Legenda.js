function AddLengenda(Data){

        if(legend == null){
            legend = L.control({position: 'bottomleft'});
        } else {
            legend.removeFrom(map);
            legend = L.control({position: 'bottomleft'});
        }

        legend.onAdd = function (map) {

            var div = L.DomUtil.create('div', 'info legend');


            // loop through our density intervals and generate a label with a colored square for each interval
            for(i in Data){
                div.innerHTML +=
                    '<i style="background:' + Data[i] + '"></i> ' + i +'<br/>';
            }
            
            return div;
        };

        legend.addTo(map);


}