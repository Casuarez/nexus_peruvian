 @extends('layouts.master')

@section('content')
<style >
  .text-center{
    font-family: 'Fredoka One', cursive;
  }
  #myModal{
    margin: 10% auto;
    width: 110%;
  }

</style>

    <!--Carousel-->
      <div id="carousel-container">
        <div id="productosCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#productosCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#productosCarousel" data-slide-to="1"></li>
            <li data-target="#productosCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <<div class="carousel-item active">
              <img src="CelularesPeru/imagenes/10.png" alt="Primer producto" width="80%" height="300px">
              <div class="carousel-caption">
                <h3>Bienvenido a Peruvian Nexus</h3>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="CelularesPeru/imagenes/6.jpg" alt="Segundo producto" width="80%" height="300px">
               <div class="carousel-caption">
                <h3> Compra ya! </h3>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="CelularesPeru/imagenes/11.jpg" alt="Tercer producto" width="80%" height="300px">
               <div class="carousel-caption">
                <h3>Vamos al catálogo! </h3>
                
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#productosCarousel" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Producto Anterior</span>
          </a>
          <a class="right carousel-control" href="#productosCarousel" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Producto Siguiente</span>
          </a>
        </div>
      </div>
    <!--/Carousel-->
      <div id="myModal" class="modal fade "   role="dialog">
<br><br>
     <div class=" col-md-6 col-md-offset-3 bg-info">   
        <h2 class=" text-uppercase text-center" style="color: #08088A"> SE EL PRIMERO EN RECIBIR OFERTAS Y NOVEDADES</h3>
          <h4 class=" text-center" style="color:#000">Tu primera compra con 10% de descuento</h4>
          <br>

          <div class="col-md-10 col-md-offset-1">
          <input class="form-control" type="text" name="" placeholder=  "Ingresa tu nombre">
          <br>
          <input class="form-control" type="text" name="" placeholder="Ingresa tu correo electrónico">
          </div>
          
          <div  class="text-center"><button style="margin-top: 30px" class="btn btn-danger btn-lg">Suscribirse</button></div>
          <br><br>
      </div>
  </div>

    <script>



  if(localStorage.num==undefined){

  $(document).ready(function(){
        
  $('#myModal').modal('show');
  localStorage.num=1;

});

  }
  </script>

 @stop