<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG 1</title>
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
    <center>
        <img src="img/utc_logo.png" alt="">
        <div class="row">
            <div class="col-12">
                <h1> <b> Sistemas de informacion geografica <br>
                        GOOGLE API Y JS </b></h1>
            </div>
        </div>
    </center>
    <div class="row">
        <div class="col-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Jhontan Ayala Leon</td>
                        <td>0550371983</td>
                        <td><img src="img/jh.jpg" alt=""></td>
                    </tr>


                </tbody>
            </table>

        </div>
        <div class="col-8">
            <div id="mapaDireccion" style="width:100%; height:300px;">

            </div>
        </div>
    </div>
    <!-- modal de boostrap -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCasa1">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="modalCasa1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <b> Casa de Jhonatan Alexander</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/casa.png" alt="" width="450px">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function initMap() {
            //creacion del mapa 
            var cordenadaCentral = new google.maps.LatLng(-0.959023, -78.702141);
            // creandoo el mapD
            var mapa1 = new google.maps.Map(document.getElementById('mapaDireccion'),

                {
                    center: cordenadaCentral,
                    zoom: 15,
                    // satellite  terrain HYBRID
                    mapTypeId: google.maps.MapTypeId.ROADMAP

                }
            );
            var marcador1 = new google.maps.Marker({
                    position: cordenadaCentral,
                    map: mapa1,
                    title: "calle niño de isinche",
                    icon: "img/icono1.png"

                }

            );
            google.maps.event.addDomListener(marcador1, 'click',
                function() {
                    // alert('Diste clic en la casa de Jhonatan');
                    $("#modalCasa1").modal("show"); // es JQuer
                }
            );
        }
    </script>

</body>

</html>