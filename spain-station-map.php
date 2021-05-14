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
              zoom: 11.5,
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

          addMarker({coords:{lat:40.4215847,lng:-3.7101687},
          content:'<h1>National Police district Madrid-Centro</h1><b></i><p>+34915487985</p><p>Calle de Leganitos, 19, 28004 Madrid, Spain</p></b>'
          });
          addMarker({coords:{lat:40.4128367,lng:-3.6970107},
          content:'<h1>District Police Station Madrid Retiro</h1><b></i><p>+34913221021</p><p>Calle de las Huertas, 76-78, 28014 Madrid, Spain</p></b>'}); 
          addMarker({coords:{lat:40.4522581,lng:-3.7146811},
          content:'<h1>National Police Headquarters</h1><b></i><p>+34913223400</p><p>Av. del Dr. Federico Rubio y Galí, 55, 28040 Madrid, Spain</p></b>'}); 
          addMarker({coords:{lat:40.4341108,lng:-3.6940007},
          content:'<h1>Comisaría de Policía Nacional Distrito de Chamberí</h1><b></i><p>+34913223268</p><p>C. de Rafael Calvo, 33, 28010 Madrid, Spain</p></b>'}); 
         
          function addMarker(props){
            var marker = new google.maps.Marker({
              position:props.coords,
              map:map,
              icon:'https://img.icons8.com/dusk/64/000000/police-badge.png'
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