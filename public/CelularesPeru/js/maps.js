;(function(){
	/*Obtencion la localizacion del cliente*/
	class UserLocation{
		/*Disponibilidad de navegador con geolocalizacion*/
		static get(callback){
			if(navigator.geolocation){
				navigator.geolocation.getCurrentPosition((location)=>{
					callback({
						lat:location.coords.latitude,
						lng:location.coords.longitude
					})
				})
			}else{
				alert("No pudimos detectar el lugar en el que te encuentras")
			}
			/*Disponibilidad de navegador con geolocalizacion*/
		}
	}
	/*Obtencion la localizacion del cliente*/

	/*Variables a usar */
	 const celularesperu = {
	 				lat: -12.079263,
					lng: -76.965991
	 }

	 var image = 'http://i.picasion.com/pic85/a98813478d06ab1d5b410c4f9243c582.gif'
	/*Variables a usar */
    
	/*Cargar el API y mostrar el mapa*/
	google.maps.event.addDomListener(window,"load",()=>{
		const map = new google.maps.Map(
			document.getElementById('map'),
			{
				center:celularesperu,
				zoom:15
			}
		)
		const marker = new google.maps.Marker({
			map: map,
			position:celularesperu,
			tittle:'CelularesPeru',
			icon: image,
			visible:true
		})
	/*Cargar el API y mostrar el mapa*/
	


	/*Recibe las coordenadas del cliente*/
		UserLocation.get((coords)=>{
			//Calcular distancia
			let origen = new google.maps.LatLng(coords.lat, coords.lng)
			let destino = new google.maps.LatLng(celularesperu.lat, celularesperu.lng)

			let service = new google.maps.DistanceMatrixService()
			service.getDistanceMatrix({
				origins:[origen],
				destinations:[destino],
				travelMode: google.maps.TravelMode.DRIVING
			},(response,status)=>{
				if(status === google.maps.DistanceMatrixStatus.OK){
					const duration_element = response.rows[0].elements[0]
					const duracion_viaje = duration_element.duration.text
					const distancia_viaje = duration_element.distance.text
					$('#mensaje').append('Te encuentras a ' + distancia_viaje + ' con un aprox de viaje en auto de ' + duracion_viaje)
					console.log(duration_element)
				}
			})

				/*Marcar camino*/
				var objConfigDR={
					map: map
				}

				var objConfigDS = {
					origin: origen,
					destination: celularesperu,
					travelMode:google.maps.TravelMode.DRIVING

				}
				var ds = new google.maps.DirectionsService();
				var dr = new google.maps.DirectionsRenderer(objConfigDR);

				ds.route(objConfigDS,fnRutear);

				function fnRutear(resultados,status){
					if (status == 'OK') {
						dr.setDirections(resultados);
					}
					else
					{
						alert('error');
					}
				}
				/*Fin_Marcar camino*/


		})
	/*Recibe las coordenadas del cliente*/
	

	})
		
})()