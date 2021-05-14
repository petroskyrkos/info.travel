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

          addMarker({coords:{lat:40.4422884,lng:-3.9318794},
          content:'<h1>HM Hospital Universitario Madrid</h1><b></i><p>+34901088212</p><p>Pl. del Conde del Valle de Súchil, 16, 28015 Madrid, Spain</p></b>'
          });//HM Hospital Universitario Madrid
          addMarker({coords:{lat:40.4339832,lng:-3.6779151},
          content:'<h1>Hospital de La Princesa</h1><b></i><p>+34915202200</p><p>Calle de Diego de León, 62, 28006 Madrid, Spain</p></b>'}); //Hospital de La Princesa
          addMarker({coords:{lat:40.4195247,lng:-3.6735325},
          content:'<h1>Gregorio Marañón Hospital</h1><b></i><p>+34915868000</p><p>Calle del Dr. Esquerdo, 46, 28007 Madrid, Spain</p></b>'}); //Gregorio Marañón Hospital
          addMarker({coords:{lat:40.4750338,lng:-3.6980672},
          content:'<h1>Hospital Carlos III</h1><b></i><p>+34914532500</p><p>Calle Sinesio Delgado, 10, 28029 Madrid, Spain</p></b>'}); //Hospital Carlos III
          addMarker({coords:{lat:40.4475415,lng:-3.7102507},
          content:'<h1>Central Hospital of the Red Cross San José and Santa Adela</h1><b></i><p>+34914538300</p><p>Av. de la Reina Victoria, 22-24, 28003 Madrid, Spain</p></b>'});//Central Hospital of the Red Cross San José and Santa Adela

          function addMarker(props){
            var marker = new google.maps.Marker({
              position:props.coords,
              map:map,
              icon:'https://img.icons8.com/dusk/64/000000/hospital-2.png'
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