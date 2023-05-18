<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabajo en clase</title>

    <!-- importacion de jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- importacion de componentes de boostrap -->
    <!-- importacion de boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- importacion de la API -->

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChicO2yf2uMNSGJDx7jFRDfD6i5K0oYoQ&libraries=places&callback=initMap">
    </script>
</head>

<body>
    <div class="row">
        <center>
            <h1>
                trabajo en clase de SIG sobre los mapas y marcadores 
            </h1>
        </center>
    </div>
    <div class="row">
        <div class="col-6">Mapa 1 <br>
        <h5>direccion de la casa de Erick</h5>    
    </div>
        <div class="col-6">Mapa 2 <br>
            <h5>Direccion de la casa de Jhonatan</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div id="mapa1" style="width:100%; height:300px;"></div>
        </div>
        <div class="col-6">
            <div id="mapa2" style="width:100%; height:300px;"></div>

        </div>
    </div>
    <br><br><br><br>
    <div class="row">
        <div class="col-6">Mapa 3 <br>
        <h5>Direccion del abuelo de Erick</h5>
    </div>
        <div class="col-6">Mapa 4 <br>
        <h5>Direccion del colegio donde Estudiamos los 2</h5>

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div id="mapa3" style="width:100%; height:300px;"></div>
        </div>
        <div class="col-6">
            <div id="mapa4" style="width:100%; height:300px;"></div>
        </div>
    </div>
    <script type="text/javascript">
        function initMap() {
            //creacion del mapa 
            var cordenadamapa1 = new google.maps.LatLng(-0.936307, -78.610408);
            var cordenadamapa2 = new google.maps.LatLng(-0.940855, -78.689833);
            var cordenadamapa3 = new google.maps.LatLng(-1.042925, -78.594551);
            var cordenadamapa4 = new google.maps.LatLng(-0.9222570445471665, -78.61033313951954);
            var cordenada1 = new google.maps.LatLng(-0.9214453405158151, -78.61408682677164);
            var cordenada2 = new google.maps.LatLng(-0.9197504032603373, -78.61097546456402);
            // creandoo el mapD
            var mapa1 = new google.maps.Map(document.getElementById('mapa1'),


                {
                    center: cordenadamapa1,
                    zoom: 15,
                    // satellite  terrain HYBRID
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }
            );
            var mapa2 = new google.maps.Map(document.getElementById('mapa2'),


                {
                    center: cordenadamapa2,
                    zoom: 15,
                    // satellite  terrain HYBRID
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }
            );
            var mapa3 = new google.maps.Map(document.getElementById('mapa3'),


                {
                    center: cordenadamapa3,
                    zoom: 15,
                    // satellite  terrain HYBRID
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }
            );
            var mapa4 = new google.maps.Map(document.getElementById('mapa4'),


                {
                    center: cordenadamapa4,
                    zoom: 15,
                    // satellite  terrain HYBRID
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }
            );
            // marcadores
            var marcador1 = new google.maps.Marker({
                    position: cordenada1,
                    map: mapa4,
                    title: "Casa de Erick",
                    icon: "img/icono1.png"

                }

            );
            var marcador1 = new google.maps.Marker({
                    position: cordenada2,
                    map: mapa4,
                    title: "Casa de Erick",
                    icon: "img/icono1.png"

                }

            );

        }
    </script>
</body>

</html>