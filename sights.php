<!DOCTYPE html>
<html>
<head>
    <style>
        #map{
            height: 400px;
            width:100%;
        }

        </style>
</head>


<body>
    <div id="map"></div>


<script>
    function initMap(){
          var options = {
              zoom: 13,
              center:{lat:40.416775,lng: -3.703790}
          }

          var map = new google.maps.Map(document.getElementById('map'),options);
          /*
          var marker = new google.maps.Marker({
              position:{lat:40.4422884,lng:-3.9318794},
              map:map,
              icon:'https://img.icons8.com/dusk/64/000000/hospital-2.png'
          });

          var infoWindow = new google.maps.InfoWindow({
              content:'<h1>HM Hospital Universitario Madrid</h1>'
          });

          marker.addListener('click',function(){
              infoWindow.open(map,marker);
          }); */

          addMarker({coords:{lat:40.415511,lng:-3.7095896},
          content:'<h1>Plaza Mayor square</h1><b></i><p>Plaza Mayor, 28012 Madrid,Spain</p></b>'});
          addMarker({coords:{lat:40.4179591,lng:-3.7165007},
          content:'<h1>Royal Palace</h1><b></i><p>+34914548700</p><p>Calle de Bailén, s/n, 28071 Madrid, Spain</p></b>'}); 
          addMarker({coords:{lat:40.4152647,lng:-3.6866882},
          content:'<h1>Buen Retiro Park</h1><b></i><p>+34914008740</p><p>Plaza de la Independencia, 7, 28001 Madrid, Spain</p></b>'});
          addMarker({coords:{lat:40.4150338,lng:3.7127955},
          content:'<h1>Casa de la Villa City Hall and Casa de Cisneros House</h1><b></i><p>Plaza de la Villa, 5, 28005 Madrid, Spain</p></b>'}); 
          addMarker({coords:{lat:40.4137859,lng:-3.6943158},
          content:'<h1>Prado Museum</h1><b></i><p>+34913302800</p><p>Calle de Ruiz de Alarcón, 23, 28014 Madrid, Spain</p></b>'});

          function addMarker(props){
            var marker = new google.maps.Marker({
              position:props.coords,
              map:map
              
          });

          if(props.content){
            var infoWindow = new google.maps.InfoWindow({
              content:props.content
          });

          marker.addListener('click',function(){
              infoWindow.open(map,marker);
          });
          }
          }


    }

    
    
</script> 

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm79hgWHZ1mb2enI6Sw45agoOLd60dsvY&callback=initMap&libraries=&v=weekly"
      async
    ></script>

</body>
</html>