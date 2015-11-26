 <script type="text/javascript">
var bandera = 0;
var map;
function initMap() 
		{
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 19.000376, lng: -98.200945},
    zoom: 15
  });
	
	var marker = new google.maps.Marker({
    	position: {lat: 19.000376, lng: -98.200945},
    	map: map,
    	title: 'Hello World!'
		//animation: google.maps.Animation.BOUNCE
		//animation: google.maps.Animation.DROP
	});	
			/*
			//Add listener
google.maps.event.addListener(map, "click", function (event) {
                    alert(this.position);
}); //end addListener*/
			/*
			google.maps.event.addListener(marker, "click", function (event) 
										  {
				var latitude = this.position.lat();
				var longitude = this.position.lng();
				//event.latLng;
				alert(this.position);
			}); //end addListener
			*/
			
			google.maps.event.addListener(map, "click", function (e) {
				
				if(bandera==1)
					{
						//lat and lng is available in e object
				var latLng = e.latLng;
						
					 document.getElementById("Lat").value= e.latLng.lat();
					document.getElementById("Long").value= e.latLng.lng();
						
				//alert(e.latLng.lat() + ' '+ e.latLng.lng());
				var marcador = new google.maps.Marker({
					position: {lat: e.latLng.lat(), lng: e.latLng.lng()},
					map: map,
					title: 'Ha funcionado!!!'
				});
						bandera=0;
					}

				});
			
		}
		
		function abanderado()
		{
			if(bandera==0)
				{
					bandera=1;
				}
			else
				{
					bandera=0;
				}
			console.log(bandera);
		}
		
		
		
	  </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2JY_QTfKQ0qltjcw4kGs8V-XmwZjXxJU&callback=initMap">
    </script>
