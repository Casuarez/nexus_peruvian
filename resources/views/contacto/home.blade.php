@extends('layouts.master')

@section('content')


    <!--Contacto-->
        <div id="contacto-container">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-4">
                
                <h2><strong>Peruvian Nexus</strong></h2>
                 <p> Av Javier Prado 5227 dentro del local Sonax frente a club ACENESPAR al lado de plaza Camacho.</br> 
                  A 5 cuadras del óvalo de la Universidad de Lima.</p>
                <p><strong>Telefono:</strong> 326-6506</p>
                <p><strong>Celular:</strong> 987501482</p>
              </div>

              <div class="col-xs-12 col-md-8">
                <h2><strong>Ubicanos</strong></h2>
                <!--div id="gmap"-->
                
                <div id="location">
                  <div id="map"></div>
                  <div id="mensaje" class="mensaje_estilos"></div>

                </div>
              </div>
              </div>
            </div>
            
          </div>
          
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXwj0xZGAU1X7Q2usZb0g8mggpuPIYU5A"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <script src="{{url('/CelularesPeru/dist/maps.js')}}"></script>
    <script src="{{url('/CelularesPeru/js/app.js')}}"></script>    
    <!--/Contacto-->


@stop
