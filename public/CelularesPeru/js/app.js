const $filtrosToggle = $('#filtrosToggle')
$filtrosToggle.click(function (ev) {
	ev.preventDefault()

	const $i = $filtrosToggle.find('i.fa')
	const isDown = $i.hasClass('fa-chevron-down')
	if (isDown){
		$i.removeClass('fa-chevron-down').addClass('fa-chevron-up')
	}
	else {
		$i.removeClass('fa-chevron-up').addClass('fa-chevron-down')
	}

})

var TiendaVirtual = angular.module('Tienda', [])

TiendaVirtual.controller('Tiendita', function ($scope,$http) {




$scope.estado="";
$scope.inShoppingCart = _inShoppingCart;


$scope.totalsuma=_total; 
$scope.total=$scope.totalsuma.total;

 $scope.CalcularSubTotal=function(){
 
 	$scope.total=0;
	for(i=0;i<$scope.inShoppingCart.length;i++){

	$scope.inShoppingCart[i].subTotal=$scope.inShoppingCart[i].cant*$scope.inShoppingCart[i].precio;
	$scope.total=$scope.inShoppingCart[i].subTotal+$scope.total;
	}

	}

//Enviar datos  a actualizar

	$("#Actualizar_carrito").click(function(e){


     var form=$(".form-actualizar");

   
     
      var data=form.serialize();
     //		 alert(data.length);
      datas=data.split("&_method");
    
      for(i=0;i<datas.length;i++){
      	    
      	datas[i+1]="_method"+datas[i+1];

      	var url=form.attr('action').replace(':id_shoping_cart',$scope.inShoppingCart[i].id);
      	$.post(url,datas[i],function(response){});

      
     }

       

    });
     
   




$scope.Cancelar2=function(idx){

$scope.inShoppingCart.splice(idx,1);
}

  $(document).ready(function(){

     $(".delete").click(function(e){
     e.preventDefault();
  
 
   
     var row=$(this).parents('tr');
     var id=row.data('id');
   var form=$("#form-delete");
     var url=form.attr('action').replace(':id_shoping_cart',id);
     
     var data=form.serialize();
     $.post(url,data,function(response){
        if(response){
		alert("OK");	          
          row.fadeOut();
        }else{
          alert("Error");
        }



    });
   


});



});


 }).controller('CatalogoController',function($scope){



$scope.VerDetalles=function(texto,precio,id,titulo){



$('#Detalles').modal('show');
$scope.Descripcion=texto;
$scope.Precio=precio;
$scope.idProducto=id;
$scope.Titulo=titulo;

}


 });


